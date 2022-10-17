<?php

namespace App\Http\Controllers;

use App\Mehsullar;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search-field');
    
        // Search in the title and body columns from the posts table
        $mehsullars = Mehsullar::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('front.pages.shop_single', compact('mehsullars'));
    }
}
