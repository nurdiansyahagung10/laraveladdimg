<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
class ProdukController extends Controller
{
    public function index()
    {   
        $produk = produk::all();
        return view('index',['product' => $produk]);
    }

    public function formimg()
    {
        return view('form');
    }

    public function addimg(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nameproduk' => 'required',
            'password' => 'required'
        ]);

        $imageName = date('YmdHi') . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $save = [
            'image' => $imageName,
            'name_produk' => $request->post('nameproduk'),
            'password' => $request->post('password'),
        ];

        $produk = produk::create($save);
        $produk->save();
        return back()->with('success', 'You have successfully uploaded an image.');
    }
}
