<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use DB;

class GalleryController extends Controller
{
    //
    public function index()
    {

       $album = Gallery::all();
        $ph = DB :: table('photographers')
        ->select('photographers.name','photographers.phone','photographers.email','photographers.bio','photographers.profile_picture')
        ->where('photographers.id','=',1)
        ->first();
        $result = ['name' => $ph->name, 'phone'=>$ph->phone, 'email'=>$ph->email,
        'bio'=>$ph->bio, 'profile_picture'=>$ph->profile_picture, 'album'=>$album];


        return $result;
    }


}
