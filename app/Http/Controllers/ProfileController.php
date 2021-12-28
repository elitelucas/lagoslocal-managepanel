<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BusinessType;
use App\Models\Favorite;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->avatar_path='/avatars';
    }
    public function index()
    {
        $business_types = BusinessType::get()->take(8);
        $reviews = Review::where('user_id', Auth::user()->id)->get();
        $favorites = Favorite::where('user_id', Auth::user()->id)->get();


        return view('lagos-user.user-profile', [
            'business_types' => $business_types,
            'reviews' => $reviews,
            'favorites' => $favorites,
        ]);
    }

    public function edit(Request $request)
    {
        User::whereId(Auth::id())->update([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
        ]);
        
        Session::flash('message','User is updated successfully!');
        return back();
    }
    public function uploadAvatar(Request $request)
    {
        $file=$request->avatar;
        if($file){
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
            $destinationPath = public_path($this->avatar_path);
            $fileName=time().$file->getClientOriginalName();
            $file->move($destinationPath,$fileName);

           

            //delete old file from public
            File::delete($destinationPath.Auth::user()->avatar);

            //update datablase to new filename
            User::whereId(Auth::id())->update(['avatar'=>$this->avatar_path.'/'.$fileName]);
        }
        
        Session::flash('message','User`s avatar is updated successfully!');
        return back();
    }
}
