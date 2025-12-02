<?php

use App\Category;
use App\Image;
use App\Order;
use App\OrderProduct;
use App\Product;
use App\SubCategory;
use App\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('create-data', function () {
    set_time_limit(1000);

    Category::factory(100)->create()->each(function ($category) {
        $category->subCategories()->saveMany(SubCategory::factory(rand(2, 10))->make())->each(function ($subCategory) {
            $subCategory->products()->saveMany(Product::factory(rand(2, 10))->make())->each(function ($product) {
                $product->images()->saveMany(Image::factory(rand(2, 10))->make());
            });
        });
    });

    User::factory(100)->create()->each(function ($user) {
        $user->orders()->saveMany(Order::factory(rand(2, 10))->make())->each(function ($order) {
            $order->orderDetails()->saveMany(OrderProduct::factory(rand(2, 10))->make());
        });
    });
});
