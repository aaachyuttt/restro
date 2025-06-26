<?php

namespace App\Helpers;

use App\Models\Product;
use Illuminate\Support\Facades\Cookie;

class CartManagement
{
    static public function addItemToCart($product_id, $qty = 1)
    {
        $cart_items = self::getCartItemsFromCookie();
        $existing_item = null;
        foreach ($cart_items as $key => $item) {
            if ($item['product_id'] == $product_id) {
                $existing_item = $key;
                break;
            }
        }
        if ($existing_item !== null) {
            $cart_items[$existing_item]['quantity'] = $qty;
            $cart_items[$existing_item]['total_amount'] = $cart_items[$existing_item]['quantity'] * $cart_items[$existing_item]['price'];
        } else {
            $product = Product::find($product_id);
            if ($product) {
                $cart_items[] = [
                    'product_id' => $product_id,
                    'name' => $product->name,
                    'image' => $product->images[0],
                    'quantity' => $qty,
                    'price' => $product->price,
                    'total_amount' => $product->price,
                ];
            }
        }
        self::addCartItemsToCookie($cart_items);
        return count($cart_items);
    }

    static public function removeItemFromCart($product_id)
    {
        $cart_items = self::getCartItemsFromCookie();
        foreach ($cart_items as $key => $item) {
            if ($item['product_id'] == $product_id) {
                unset($cart_items[$key]);
            }
        }
        self::addCartItemsToCookie($cart_items);
        return $cart_items;
    }
    static public function addCartItemsToCookie($cartItems)
    {
        Cookie::queue('cart_items', json_encode($cartItems), 60 * 24 * 30);
    }

    static public function clearCartItemsFromCookie()
    {
        Cookie::queue(Cookie::forget('cart_items'));
    }
    static public function getCartItemsFromCookie()
    {
        $cartItems = json_decode(Cookie::get('cart_items'), true);
        if (!$cartItems) {
            return $cartItems = [];
        }
        return $cartItems;
    }
    static public function incrementItemQuantityInCart($product_id)
    {
        $cart_items = self::getCartItemsFromCookie();
        foreach ($cart_items as $key => $item) {
            if ($item['product_id'] == $product_id) {
                $cart_items[$key]['quantity']++;
                $cart_items[$key]['total_amount'] = $cart_items[$key]['quantity'] * $cart_items[$key]['price'];
            }
        }
        self::addCartItemsToCookie($cart_items);
        return $cart_items;
    }
    static public function decrementItemQuantityInCart($product_id)
    {
        $cart_items = self::getCartItemsFromCookie();
        foreach ($cart_items as $key => $item) {
            if ($item['product_id'] == $product_id) {
                if ($cart_items[$key]['quantity'] > 1) {
                    $cart_items[$key]['quantity']--;
                    $cart_items[$key]['total_amount'] = $cart_items[$key]['quantity'] * $cart_items[$key]['price'];
                } else {
                    unset($cart_items[$key]);
                }
            }
        }
        self::addCartItemsToCookie($cart_items);
        return $cart_items;
    }
    static public function calculateGrandTotal($items)
    {
        return array_sum(array_column($items, 'total_amount'));
    }
}
