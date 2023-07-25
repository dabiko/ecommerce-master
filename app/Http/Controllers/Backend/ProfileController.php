<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePasswordRequest;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function index(): View
    {
        return view('admin.profile.index');
    }

    public function profileSetting(): View
    {
        return view('admin.profile.profile-setting');
    }

    public function profileEdit(): View
    {
        return view('admin.profile.profile-edit');
    }
    public function profileUpdate( UpdateProfileRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if($request->hasFile('image')){

            $user = DB::table('users')
                ->where('id', '=', Auth::id())->first();

            if(File::exists(public_path($user->image))){
                File::delete(public_path($user->image));
            }
            $image = $validated['image'];
            $imgName = rand().'_'.$image->getClientOriginalName();
            $image->move(public_path('uploads'), $imgName);


            $path = "/uploads/".$imgName;
            $user->image = $path;
        }

        DB::table('users')
            ->where('id', Auth::id())
            ->update([
                'name' => $validated['name'],
                'username' => $validated['username'],
                'image' => $path
            ]);


        return redirect()->back();
    }


    public function passwordUpdate(UpdatePasswordRequest $request): RedirectResponse
    {
        $validatePassword = $request->validated();

        DB::table('users')
            ->where('id', Auth::id())
            ->update([
                'password' => bcrypt($validatePassword['password']),
            ]);

        return redirect()->back();
    }


}
