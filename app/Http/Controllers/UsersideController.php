<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Business;
use App\Models\BusinessType;
use App\Models\Favorite;
use App\Models\Review;
use Illuminate\Support\Facades\Session;

use Auth;

class UsersideController extends Controller
{
    public function __construct()
    {
        $this->img_file_path = '/reviews';
        $this->favorite_img_file_path = '/favorites';
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


        return view('lagos-user.home', [
            'popular_business_types' => $popular_business_types,
            'popular_businesses' => $popular_businesses,
            'business_types' => $business_types,
            'newlisting_businesses' => $newlisting_businesses,
        ]);
    }

    public function pageList(Request $request)
    {
        $business_types = BusinessType::get();
        $businesses = Business::orderBy('created_at', 'DESC')->get();
        $businesses = $this->favorite($businesses);

        return view('lagos-user.list', [
            'business_types' => $business_types,
            'businesses' => $businesses,
        ]);
    }

    public function pageDetail($id)
    {
        $business = Business::find($id);
        if (Auth::id()) {
            $favorites =  Favorite::where('business_id', $business->id)
                ->where('user_id', Auth::id())->get();
            $business->favorites = $favorites;
        }
        $business_types = BusinessType::get();
        $business->increment('popularity'); // business popularity +1 when visit
        $business->businesstype->increment('popularity'); // business type popularity +1 when visit

        $reviews = Review::where('business_id', $id)->get()->take(8);
        return view('lagos-user.detail', [
            'business_types' => $business_types,
            'business' => $business,
            'reviews' => $reviews,
        ]);
    }

    public function pageReview(Request $request)
    {
        $business = Business::find($request->id);

        return view('lagos-user.review', [
            'business' => $business,
        ]);
    }
    public function addReview(Request $request)
    {
        $business_id = $request->business_id;
        $title = $request->title;
        $content = $request->content;
        $rating = $request->rating;
        $price_rating = $request->price_rating;
        $file = $request->picture;

        $review = Review::create([
            'user_id' => Auth::id(),
            'business_id' => $business_id,
            'title' => $title,
            'content' => $content,
            'rating' => $rating,
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

            //update datablase to new filename
            Review::whereId($review->id)->update(['picture' => $this->img_file_path . '/' . $fileName]);
        }

        Session::flash('message', 'New review is created successfully!');
        return back();
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
    public function readFavorites(Request $request){
        $favorites=Favorite::where('user_id',Auth::id())->groupBy('name')->get();
        return view('lagos-user.favorites',[
            'favorites'=>$favorites
        ]);
    }
    public function favoriteDetails(Request $request,$param){
        $favorites=Favorite::where('name',$param)->groupBy('business_id')
        ->where('user_id',Auth::id())
        ->get();
        return view('lagos-user.favorite-detail',[
            'favorites'=>$favorites
        ]);
    }
}
