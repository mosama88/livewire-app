<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index() {
        $data = Setting::select("*")->orderBy('id','DESC')->first();
        return view('dashboard.settings.index',compact('data'));
    }
}