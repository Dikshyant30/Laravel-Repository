<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function countryList()
    {
        return response()->download(public_path('gitCat.png'),'User Image');
    }
    public function countrySave(Request $request)
    {
        $fileName="gitu.jpg";
        $path=$request->file('photo')->move(public_path("/"),$fileName);
        $photoURL=url('/'.$fileName);
        return response()->json(['url'=>$photoURL],200);
    }

}
