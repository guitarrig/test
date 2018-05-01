<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use Illuminate\Support\Facades\URL;

class ImagesController extends Controller
{
    public function add(Request $request){

      if ($request->hasFile('image')) {
        $image = $request->file('image');
        $image->move(public_path('images'), $image->getClientOriginalName());
        Image::create(['name' => URL::to('/') . '/images/' . $image->getClientOriginalName(), 'worker_id' => $request->id]);
      }

      return redirect("/workers/$request->id");
    }


    public function change(Request $request){

      $image = $request->file('image');
      $image->move(public_path('images'), $image->getClientOriginalName());
      
      Image::where('worker_id', $request->id)->update([
        'name' => URL::to('/') . '/images/' . $image->getClientOriginalName(),
      ]);

      return redirect("/workers/$request->id");
    }
}
