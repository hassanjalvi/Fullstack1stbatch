<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function add(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('user.login.form')->with('message', 'You need to be logged in to add items to the wishlist.');
        }

        $request->validate([
            'ad_id' => 'required|exists:ads,id',
        ]);
        
        $adId = $request->input('ad_id');
        $userId = Auth::id(); 
        // Check if the item is already in the wishlist
        if (Wishlist::where('user_id', $userId)->where('ad_id', $adId)->exists()) {
            return redirect()->back()->with('message', 'Already in wishlist.');
        }
        
        // Add to wishlist
        Wishlist::create([
            'user_id' => $userId,
            'ad_id' => $adId,
        ]);

        return redirect()->back()->with('message', 'Added to wishlist!');
    }
    public function index()
    {
        $userId = Auth::id();
     
        $wishlists = Wishlist::where('user_id', $userId)
                             ->with('ad')
                             ->get();    
         $companies = Company::with('user')->get();
        $data=compact('wishlists','companies');
        return view('Frontend.wishlist')->with($data);
    }
    public function remove(Request $request)
{
    $request->validate([
        'ad_id' => 'required|exists:ads,id',
    ]);

    $adId = $request->input('ad_id');
    $userId = Auth::id();

    // Remove the item from the wishlist
    Wishlist::where('user_id', $userId)->where('ad_id', $adId)->delete();

    return redirect()->route('user.wishlist.index')->with('message', 'Removed from wishlist!');
}
public function count()
{
    $userId = Auth::id();
    $count = Wishlist::where('user_id', $userId)->count();

    return $count;
}
}
