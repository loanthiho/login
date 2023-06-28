<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlists extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function getWishlistData()
    {
        $wishlist = [];
        $sumwishlist = 0;
        $totalwishlist = 0;

        if (session('user')) {
            $user = session('user');
            $wishlist = Wishlists::where('user_id', $user->id)->get();
            $sumwishlist = $wishlist->count();
            $totalwishlist = $wishlist->sum('price');
        }

        return compact('wishlist', 'sumwishlist', 'totalwishlist');
    }
}