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
        $check_table = Settings::count();
        $settings = new Settings();

        if ($request->hasFile('image')) {
            $request->validate(['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
            $imageName = time() . '.' . $request->image->extension();

            $request->image->storeAs('public/portfolio/images',$imageName);
            $settings->logo = asset('storage/portfolio/images/'.$imageName);
            $request->image = asset('storage/portfolio/images/'.$imageName);
        }

        {
            $request->image = $request->current_image;
        }
        if ($check_table)
        {
            $get_id = Settings::first();

            Settings::where(['id'=>$get_id->id])->update([
                'menu_1' => $request->menu_1,
                'menu_2' => $request->menu_2,
                'menu_3' => $request->menu_3,
                'location_title' => $request->location_title,
                'location_content' => $request->location_content,
                'social_icons_title' => $request->social_icons_title,
                'fb_url' => $request->fb_url,
                'tw_url' => $request->fb_url,
                'in_url' => $request->in_url,
                'db_url' => $request->db_url,
                'footer_about_title' => $request->footer_about_title,
                'footer_about_content' => $request->footer_about_content,
                'footer_content' => $request->footer_about_content,
                'logo' => $request->image,
            ]);
        }
            else
            {
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
            }
        return redirect()->back()->with('flash_message_success','Data has successfully been inserted');
    }
}
