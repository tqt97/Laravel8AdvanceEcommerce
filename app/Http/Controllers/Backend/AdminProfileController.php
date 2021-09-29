<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function index(){
        $admin = Admin::find(1);
        return view('backend.profile.index',compact('admin'));
    }
}
