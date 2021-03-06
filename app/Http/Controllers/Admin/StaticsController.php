<?php

namespace App\Http\Controllers\Admin;

use App\Gif;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaticsController extends Controller
{
    public function returnGif(){

        $key = 'QpGn13Icg1MPCe53B4TLyopF5KWqWz5I';

        $url = 'http://api.giphy.com/v1/gifs/random?api_key=' . $key;

        $json = json_decode(file_get_contents($url));
        $u = $json->data->image_url;

//        $gif = $json->data->images->original->url;


        Gif::create([
            "img_url" => $u,
            'created_at' => now()
        ]);

        $allGif = Gif::orderBy('id', 'desc')->Paginate(15);

        $count = Gif::all()->count();

        return view('admin.entities.gif')->with([
            'unique' => $u,
            'allGif' => $allGif,
            'count'  => $count
        ]);
    }
}
