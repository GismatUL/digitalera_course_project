<?php

namespace App\Http\Controllers;

use App\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return view('admin.settings');
    }

    public function store(Request $request)
    {
        $settings = new Settings();
        $settings->menu_1 = $request->menu_1;
        $settings->menu_2 = $request->menu_2;
        $settings->menu_3 = $request->menu_3;
        $settings->location_title = $request->location_title;
        $settings->location_content = $request->location_content;
        $settings->social_icons_title = $request->social_icons_title;
        $settings->fb_url = $request->fb_url;
        $settings->tw_url = $request->fb_url;
        $settings->in_url = $request->in_url;
        $settings->db_url = $request->db_url;
        $settings->footer_about_title = $request->footer_about_title;
        $settings->footer_about_content = $request->footer_about_content;
        $settings->footer_content = $request->footer_about_content;
        $settings->save();

        return redirect()->back()->with('flash_message_success','Data has successfully been inserted');
    }
}
