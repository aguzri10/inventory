<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index() 
    {
        return view('setting');
    }

    public function edit($id)
    {
        $setting = Setting::find($id);
        return $setting;
    }

    public function update(Request $request, $id)
    {
        $setting = Setting::find($id);
        $setting->nama = $request['nama'];
        $setting->alamat = $request['alamat'];
        $setting->telepon = $request['telepon'];

        if ($request->hashFile('logo')) {
            $file = $request->file('logo');
            $nama_gambar = "logo.".$file->getClientOriginalExtension();
            $lokasi = public path('images');
            $file->move($lokasi, $nama_gambar);
            $setting->logo = $nama_gambar;
        }
        $setting->update();
    }
}
