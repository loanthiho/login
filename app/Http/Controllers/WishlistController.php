<?php

// namespace App\Http\Controllers;

// use App\Models\Product;
// use App\Models\Wishlists;
// use Illuminate\Support\Facades\Auth;

// use Illuminate\Http\Request;

// class WishlistController extends Controller
// {
//     public function index()
//     {
//         $wishlist = Wishlists::where('user_id', Auth::id())->get();
//         $wishlistCount = $wishlist->count();

//         return view('wishlist.index', compact('wishlist', 'wishlistCount'));
//     }

//     public function addToWishlist($id)
//     {
//         $product = Product::find($id);
//         if (!$product) {
//             return redirect()->back()->with('error', 'Sản phẩm không tồn tại.');
//         }

//         $wishlist = Wishlists::where('user_id', Auth::id())->where('product_id', $id)->first();
//         if ($wishlist) {
//             return redirect()->back()->with('error', 'Sản phẩm đã tồn tại trong danh sách yêu thích.');
//         }

//         $newWishlist = new Wishlists();
//         $newWishlist->user_id = Auth::id();
//         $newWishlist->product_id = $id;
//         $newWishlist->save();

//         return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào danh sách yêu thích.');
//     }

//     public function removeFromWishlist($id)
//     {
//         $wishlist = Wishlists::where('user_id', Auth::id())->where('product_id', $id)->first();
//         if (!$wishlist) {
//             return redirect()->back()->with('error', 'Sản phẩm không tồn tại trong danh sách yêu thích.');
//         }

//         $wishlist->delete();

//         return redirect()->back()->with('success', 'Sản phẩm đã được xóa khỏi danh sách yêu thích.');
//     }

//     public function checkoutFromWishlist()
//     {
       

//         return redirect()->route('checkout')->with('success', 'Đặt hàng thành công từ danh sách yêu thích.');
//     }
// }
