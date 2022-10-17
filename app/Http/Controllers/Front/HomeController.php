<?php

namespace App\Http\Controllers\Front;


use App\Models\Dish;
use App\Models\About;
use App\Models\Menus;
use App\Models\Rooms;
use App\Models\About_Room;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
 public function index($lang,$id = null){
  $dish1=Dish::where('menuses_id',$id)->get();
  $menu=Menus::all();
    $room=Rooms::get();
    $room1=About_Room::all();
     return view('front.index',compact('lang','room','room1','dish1','menu'));
 }
 public function about($lang,$id = null){
  $dish1=Dish::where('menuses_id',$id)->get();
  $menu=Menus::all();
    $about=About::orderBy('id', 'desc')->get();
    $room1=About_Room::all();
     return view('front.about',compact('lang','about','room1','dish1','menu'));
 }
 public function room($lang,$id = null){
  $menu=Menus::all();
  $dish1=Dish::where('menuses_id',$id)->get();
   $room=Rooms::all();
   $room1=About_Room::all();
     return view('front.room',compact('lang','room','room1','dish1','menu'));
 }

 public function menu($lang, $id = null ){
  $dish1=Dish::all();
  $room=Dish::where('menuses_id',$id)->get();
  $room1=About_Room::all();
  $menu=Menus::all();
    return view('front.menu',compact('lang','room','room1','dish1','menu'));
}


 public function about_room($lang,$id = null){
   $menu=Menus::all();
   $dish1=Dish::where('menuses_id',$id)->get();
    $room1=About_Room::all();
    $rooms=About_Room::where('id',$id)->first();
    return view('front.about_room',compact('rooms','lang','room1','dish1','menu'));
    // model binding i oyren
    // burani duzelt
}

public function dishes($lang,$id = null){
  $menu=Menus::all();
  $dish1=Dish::where('menuses_id',$id)->get();
  $room1=About_Room::all();
  $dish=Dish::where('menuses_id',$id)->get();
  return view('front.dish',compact('lang','room1','dish','dish1','menu'));
  // model binding i oyren
  // burani duzelt
}

  
   
 

   


 
}
