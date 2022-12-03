<?php
// wishlists function start

use App\Models\Product;
use App\Models\Rating;
use App\Models\User;

function allwishlists(){
    return App\Models\Wishlist::where('user_id', auth()->id())->get();
}

function wishlistcheck($product_id){
    return App\Models\Wishlist::where('user_id', auth()->id())->where('product_id', $product_id)->exists();
}

function wishlist_id($product_id){
    return App\Models\Wishlist::where('user_id', auth()->id())->where('product_id', $product_id)->first()->id;
}

// wishlists function end

// carts function start
function allcartts()
{
    return App\Models\Cart::where('user_id', auth()->id())->get();
}

function totalcart()
{
    return App\Models\Cart::where('user_id', auth()->id())->count();
}

function getvendor($product_id)
{
    return User::find(Product::find($product_id)->user_id)->name;
}

function available_quantity($product_id)
{
    return Product::find($product_id)->product_quantity;
}

function how_many_review($product_id)
{
    if (Rating::where('product_id', $product_id)->count()>=2) {
        return Rating::where('product_id', $product_id)->count(). " Reviews";
    }
    else {
        return Rating::where('product_id', $product_id)->count(). " Review";
    }
}

function rating_percentage($product_id)
{
    return Rating::where('product_id', $product_id)->avg('rate') * 20;
}


// carts function end

