<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Business;
use App\Models\BusinessType;
use App\Models\Cuisine;
use App\Models\Favorite;
use App\Models\Feature;
use App\Models\Rating;
use App\Models\Review;
use App\Models\SearchResult;
use App\Models\Visit;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;



use Auth;

class UsersideController extends Controller
{
    public function __construct()
    {
        $this->img_file_path = '/reviews';
        $this->favorite_img_file_path = '/favorites';
        $this->visit_per_page = 6;
        $this->items_per_list=2;
    }
    public function pageHome(Request $request)
    {
        //Get 8 popular business categories
        $popular_business_types = BusinessType::orderBy('popularity', 'DESC')->get()->take(5);
        $business_types = BusinessType::get()->take(8);

        $popular_businesses = Business::orderBy('popularity', 'DESC')->get()->take(8);
        $newlisting_businesses = Business::orderBy('created_at', 'DESC')->get()->take(8);

        $popular_businesses = $this->favorite($popular_businesses);
        $newlisting_businesses = $this->favorite($newlisting_businesses);

        $recently_visited=Visit::groupBy('business_id')->orderBy('created_at','DESC')->get()->take(3);
        $trending_searches=SearchResult::groupBy('business_type_id')->orderBy('created_at','DESC')->get()->take(3);


        return view('lagos-user.home', [
            'popular_business_types' => $popular_business_types,
            'popular_businesses' => $popular_businesses,
            'business_types' => $business_types,
            'newlisting_businesses' => $newlisting_businesses,
            'recently_visited' => $recently_visited,
            'trending_searches' => $trending_searches,
        ]);
    }
    public function searchBusiness(Request $request){
        $business_types=BusinessType::where('name','like','%'.$request->val.'%')->orderBy('popularity','desc')
        ->get()->take(3);
        return response()->json(array('success' => true, 'business_types' => $business_types));
    }
    public function moreCategories(){
        $business_types = BusinessType::all();
        $returnHTML = view('components.business-categories')->with('business_types', $business_types)->render();
        return response()->json(array('success' => true, 'html' => $returnHTML));
    }

    public function pageList(Request $request)
    {
        $page=$request->page;
        $validate = Validator::make($request->all(), [
            'business_type_id'=>['required'],
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors());
        }

        $business_types = BusinessType::where('id','<>',$request->business_type_id)->get()->toArray();
        $c_type=BusinessType::where('id',$request->business_type_id)->first()->toArray();
        array_unshift($business_types,$c_type); 
        


        if($request->address)
        $total_businesses = Business::where('business_type_id',$request->business_type_id)
        ->where('address', $request->address)
        ->orderBy('created_at', 'DESC')->get();
        else
        $total_businesses = Business::where('business_type_id',$request->business_type_id)
        ->orderBy('created_at', 'DESC')->get();

        $businesses=$total_businesses->skip((intval($page)-1)*$this->items_per_list)->take($this->items_per_list);

        if (count($businesses) == 0) {
            Session::flash('error', 'There is no businesses in such location.');
            return back();
        }
        $total_page_cnt=intval(ceil(count($total_businesses)/$this->items_per_list));

        $pp=(ceil($page/5)-1)*5;
        $arr=[];
        for($i=1;$i<=5;$i++){
            if($pp+$i>$total_page_cnt)
            break;
            array_push($arr,intval($pp+$i));
        }

        $businesses = $this->favorite($businesses);

        $payload = $businesses;
        $map_data = null;
        if ($payload && count($payload) > 0) {
            $i=0;
            foreach ($payload as $key => $item) {
                $map_data[$i]['type_point'] = $item->businesstype->name;
                $map_data[$i]['name'] = $item->name;
                $map_data[$i]['name_point'] = $item->name;
                $map_data[$i]['location_latitude'] = $item->lat;
                $map_data[$i]['location_longitude'] = $item->lng;
                $map_data[$i]['map_image_url'] = $item->picture;
                $map_data[$i]['rate'] = $item->review_rating;
                $map_data[$i]['phone'] = $item->call;
                $map_data[$i]['url_point'] = $item->website;
                $i++;
            }
        }


        if ($map_data && count($map_data) > 0) {
            $map_data = json_encode($map_data);
            $map_data = preg_replace("_\\\_", "\\\\\\", $map_data);
            $map_data = preg_replace("/\"/", "\\\"", $map_data);
        }


        $features = Feature::all();
        $cuisines = Cuisine::all();
        return view('lagos-user.list', [
            'business_types' => json_decode(json_encode($business_types)) ,
            'businesses' => $businesses,
            'map_data' => $map_data,
            'address' => $request->address?$request->address:null,
            'features' => $features,
            'cuisines' => $cuisines,
            'total_page_cnt' => $total_page_cnt,
            'page'=>$page,
            'arr'=>$arr,
            'business_type_id'=>$request->business_type_id,
        ]);
    }

    public function pageDetail($id)
    {
        $business = Business::find($id);
        if (Auth::id()) {
            $favorites =  Favorite::where('business_id', $business->id)
                ->where('user_id', Auth::id())->get();
            $business->favorites = $favorites;
            if (Visit::where('user_id', Auth::id())->where('business_id', $id)->exists()) {
                Visit::where('user_id', Auth::id())->where('business_id', $id)->increment('frequency', 1);
            } else {
                Visit::create([
                    'user_id' => Auth::id(),
                    'business_id' => $id,
                    'frequency' => 1
                ]);
            }
        }
        $business_types = BusinessType::where('id','<>',$business->business_type_id)->get()->toArray();
        $c_type=BusinessType::where('id',$business->business_type_id)->first()->toArray();
        array_unshift($business_types,$c_type); 
        $business->increment('popularity'); // business popularity +1 when visit
        $business->businesstype->increment('popularity'); // business type popularity +1 when visit

        $map_data = null;

        $map_data['type_point'] = $business->businesstype->name;
        $map_data['name'] = $business->name;
        $map_data['name_point'] = $business->name;
        $map_data['location_latitude'] = $business->lat;
        $map_data['location_longitude'] = $business->lng;
        $map_data['map_image_url'] = $business->picture;
        $map_data['rate'] = $business->review_rating;
        $map_data['phone'] = $business->call;
        $map_data['url_point'] = $business->website;

        $map_data = preg_replace("_\\\_", "\\\\\\", $map_data);
        $map_data = preg_replace("/\"/", "\\\"", $map_data);


       

        $reviews = Review::where('business_id', $id)->get()->take(8);
        return view('lagos-user.detail', [
            'business_types' =>json_decode(json_encode($business_types)) ,
            'business' => $business,
            'map_data' =>json_encode($map_data) ,
            'reviews' => $reviews,
            'address'=>$business->address
        ]);
    }

    public function visited(Request $request)
    {
        $business = Business::find($request->id);
        $visited = Visit::where('user_id', Auth::id())->orderBy('updated_at', 'DESC')->get()->take($this->visit_per_page);
        foreach ($visited as $obj) {
            if (Review::where('user_id', $obj->user_id)->where('business_id', $obj->business_id)->exists())
                $obj->rating = Review::where('user_id', $obj->user_id)->where('business_id', $obj->business_id)->first()->rating;
            else
                $obj->rating = 0;
        }

        return view('lagos-user.visited', [
            'visited' => $visited,
            'page' => 1
        ]);
    }
    public function visitedPage(Request $request)
    {
        $visited = Visit::where('user_id', Auth::id())->orderBy('updated_at', 'DESC')->get()
            ->skip($this->visit_per_page * (intval($request->page) - 1))
            ->take($this->visit_per_page);
        foreach ($visited as $obj) {
            if (Review::where('user_id', $obj->user_id)->where('business_id', $obj->business_id)->exists())
                $obj->rating = Review::where('user_id', $obj->user_id)->where('business_id', $obj->business_id)->first()->rating;
            else
                $obj->rating = 0;
        }
        $returnHTML = view('components.visited-list')->with('visited', $visited)->render();
        return response()->json(array('success' => true, 'html' => $returnHTML));
    }
    public function changeRating(Request $request)
    {
        if (Review::where('user_id', Auth::id())->where('business_id', $request->business_id)->exists()) {
            Review::where('user_id', Auth::id())->where('business_id', $request->business_id)->update([
                'rating' => $request->rating
            ]);
            Session::flash('message', 'Review rating is changed successcully.');
        } else {
            Review::create([
                'user_id' => Auth::id(),
                'business_id' => $request->business_id,
                'rating' => $request->rating,
            ]);
            Session::flash('message', 'Review rating is created successcully.');
        }
        return back();
    }
    public function pageReview(Request $request)
    {
        $business = Business::find($request->id);
        if (Review::where('user_id', Auth::id())->where('business_id', $request->id)->exists()) {
            $review = Review::where('user_id', Auth::id())->where('business_id', $request->id)->first();
            return view('lagos-user.review', [
                'business' => $business,
                'review' => $review,
            ]);
        } else {
            Session::flash('message', 'Select rating first.');
            return back();
        }
    }
    public function addReview(Request $request)
    {
        $business_id = $request->business_id;
        $review_id = $request->review_id;
        $title = $request->title;
        $content = $request->content;
        $food_rating = $request->food_rating;
        $service_rating = $request->service_rating;
        $atmosphere_rating = $request->atmosphere_rating;
        $price_rating = $request->price_rating;
        $file = $request->picture;

        $review = Review::whereId($review_id)->first();
        Review::whereId($review_id)->update([
            'user_id' => Auth::id(),
            'business_id' => $business_id,
            'title' => $title,
            'content' => $content,
            'price_rating' => $price_rating,
        ]);
        if ($file) {
            //File Name
            $file->getClientOriginalName();

            //Display File Extension
            $file->getClientOriginalExtension();

            //Display File Real Path
            $file->getRealPath();

            //Display File Size
            $file->getSize();

            //Display File Mime Type
            $file->getMimeType();
            //Move Uploaded File
            $destinationPath = public_path($this->img_file_path);
            $fileName = time() . $file->getClientOriginalName();
            $file->move($destinationPath, $fileName);

            File::delete($destinationPath . "/" . $review->picture);
            //update datablase to new filename
            Review::whereId($review->id)->update(['picture' => $this->img_file_path . '/' . $fileName]);
        }

        //create or update rating table
        if (Rating::where('user_id', Auth::id())->where('business_id', $business_id)->exists()) {
            Rating::where('user_id', Auth::id())->where('business_id', $business_id)
                ->update([
                    'food_rating' => $food_rating,
                    'service_rating' => $service_rating,
                    'atmosphere_rating' => $atmosphere_rating,
                ]);
        } else {
            Rating::create([
                'user_id' => Auth::id(),
                'business_id' => $business_id,
                'review_id' => $review_id,
                'food_rating' => $food_rating,
                'service_rating' => $service_rating,
                'atmosphere_rating' => $atmosphere_rating,
            ]);
        }

        Session::flash('message', 'New review is created successfully!');
        return redirect()->route('user-visited');
    }
    public function addFavorite(Request $request)
    {
        $business_id = $request->business_id;
        $name = $request->name;
        $business_picture = $request->business_picture;
        if (Auth::check()) {
            Favorite::create([
                'user_id' => Auth::id(),
                'business_id' => $business_id,
                'name' => $name,
                'picture' => $business_picture,
            ]);
            Session::flash('message', 'New favorite is created successfully!');
        } else {
            Session::flash('error', 'Login first!');
        }

        return back();
    }
    public function favorite($businesses)
    {
        foreach ($businesses as $business) {
            if (Auth::id()) {
                $favorites =  Favorite::where('business_id', $business->id)
                    ->where('user_id', Auth::id())->get();
                $business->favorites = $favorites;
            }
        }
        return $businesses;
    }
    public function readFavorites(Request $request)
    {
        $favorites = Favorite::where('user_id', Auth::id())->groupBy('name')->get();
        $all_favorites = Favorite::where('user_id', Auth::id())->groupBy('business_id')->get();
        return view('lagos-user.favorites', [
            'favorites' => $favorites,
            'all_favorites' => $all_favorites,
        ]);
    }
    public function favoriteDetails(Request $request, $param)
    {
        $favorites = Favorite::where('name', $param)->groupBy('business_id')
            ->where('user_id', Auth::id())
            ->get();
        return view('lagos-user.favorite-detail', [
            'favorites' => $favorites
        ]);
    }
    public function filterList(Request $request)
    {
        $business_types = BusinessType::get();

        //filter by business type
        if ($request->business_type && count($request->business_type) > 0) {
            $businesses = Business::with('businesstype')->whereIn('business_type_id', $request->business_type)
                ->where('address', $request->address)
                ->get()->toArray();
        } else {
            $businesses = Business::with('businesstype')->where('address', $request->address)
                ->orderBy('created_at', 'DESC')->get()->toArray();
        }


        //filter by price_rating
        if ($request->price_rating && count($request->price_rating) > 0) {
            foreach ($request->price_rating as $item) {
                if (count($businesses) > 0) {
                    foreach ($businesses as $key => $obj) {
                        if ($item == intval($obj['price_rating'])) {
                            $result[] = $obj;
                            array_splice($businesses, $key, 1);
                        }
                    }
                }
            }
        }


        // filter by feature
        // if ($request->feature && count($request->feature) > 0) {            
        //     $arr = $result && count($result) > 0 ? $result : $businesses;
        //     foreach ($request->feature as $item) {
        //         foreach ($arr as $key => $obj) {
        //             $feature_ids = json_decode($obj->feature_ids);
        //             if ($feature_ids && count($feature_ids) > 0) {
        //                 foreach ($feature_ids as $id) {
        //                     if ($item == $id) {
        //                         $result[] = $obj;
        //                     }
        //                 }
        //             }
        //         }
        //     }
        // }

        //filter by cuisine
        //     if ($request->cuisine && count($request->cuisine) > 0) {            
        //         $arr = $result && count($result) > 0 ? $result : $businesses;
        //         foreach ($request->cuisine as $item) {
        //             foreach ($arr as $key => $obj) {
        //                 $cuisine_ids = json_decode($obj->cuisine_ids);
        //                 if ($cuisine_ids && count($cuisine_ids) > 0) {
        //                     foreach ($cuisine_ids as $id) {
        //                         if ($item == $id) {
        //                             $result[] = $obj;
        //                         }
        //                     }
        //                 }
        //             }
        //         }
        //     }




        //business_type, feature, cuisine

        $businesses = $this->favorite($businesses);
        $payload = $result && count($result) > 0 ? $result : $businesses;
        // dd($payload[0]['businesstype']);
        foreach ($payload as $key => $item) {
            $map_data[$key]['type_point'] = $item['businesstype']['name'];
            $map_data[$key]['name'] = $item['name'];
            $map_data[$key]['name_point'] = $item['name'];
            $map_data[$key]['location_latitude'] = $item['lat'];
            $map_data[$key]['location_longitude'] = $item['lng'];
            $map_data[$key]['map_image_url'] = $item['picture'];
            $map_data[$key]['rate'] = $item['review_rating'];
            $map_data[$key]['phone'] = $item['call'];
            $map_data[$key]['url_point'] = $item['website'];
        }

        $map_data = json_encode($map_data);
        $map_data = preg_replace("_\\\_", "\\\\\\", $map_data);
        $map_data = preg_replace("/\"/", "\\\"", $map_data);

        $features = Feature::all();
        $cuisines = Cuisine::all();
        return view('lagos-user.list', [
            'business_types' => $business_types,
            'businesses' => $businesses,
            'map_data' => $map_data,
            'address' => $request->address,
            'features' => $features,
            'cuisines' => $cuisines,
        ]);
    }
}
