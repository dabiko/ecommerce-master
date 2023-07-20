<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function profile(): View
    {
        $user = DB::table('users')->where('id', '=', Auth::user()->id)->get();
        return view('admin.profile.index', ['user' => $user] );
    }
    public function setting(): View
    {
        return view('admin.profile.profile-setting');
    }
    public function update(): View
    {
        return view('admin.profile.profile-update');
    }
}
