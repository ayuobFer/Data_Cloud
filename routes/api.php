<?php

use App\SubCategory;
use App\Category;
use App\Image;
use App\OrderProduct;
use App\Product;
use App\Order;
use App\ProductInformation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('laravel-9', function () {
    // $data = Product::min('price');
    // $data = Product::max('price');
    // $data = Product::count();
    // $data = Product::avg('price');

    // $data = Model::all() -> Collection -> take(), skip() on collection
    // $data = Product::all()->take(10);
    // $data = Product::all()->skip(10);
    // $data = Product::all()->skip(10)->take(10);
    // $data = Product::all()->take(10)->skip(10); // Empty [] what has been taken was skipped.

    // $data = Product::take(10)->get();
    // $data = Product::take(10)->skip(10)->get();
    // $data = Product::skip(10)->take(10)->get();
    // $data = Product::skip(10)->get(); //Can't be used without take

    // $data = Product::limit(10)->get();
    // $data = Product::offset(10)->limit(10)->get();
    // $data = Product::limit(10)->offset(10)->get();
    // $data = Product::offset(10)->get(); //Can't be used without take

    //SELECT * FROM categories as C
    //LEFT JOIN sub_categories as sc
    //on c.id == sc.category_id

    //RELATIONS
    // $data = Category::with('subCategories')->get();
    // $data = Category::withCount('subCategories')->get();

    // $data = Category::with('subCategories')->take(2)->get();
    // $data = Category::with(['subCategories' => function ($query) {
    //     $query->where('title', 'like', 'a%');
    // }])->get();

    // $data = Category::withCount(['subCategories' => function ($query) {
    //     $query->where('title', 'like', 'a%');
    // }])->get();

    // $data = Category::has('subCategories', '>=', 3)->get();
    // $data = User::withCount('orders')->has('orders', '>=', 7)->get();

    // $data = User::with('orders')->whereHas('orders', function ($query) {
    //     $query->where('total', '>=', 400)->where('payment_status', 'Paid');
    // }, '>=', 4)->get();

    // $data = User::with(['orders' => function ($query) {
    //     $query->where('total', '>=', 400)->where('payment_status', 'Paid');
    // }])->whereHas('orders', function ($query) {
    //     $query->where('total', '>=', 400)->where('payment_status', 'Paid');
    // }, '>=', 4)->get();

    // $data = User::doesntHave('orders', 'and', function ($query) {
    //     $query->where('payment_status', 'Waiting');
    // })->with('orders')->get();

    // $data = User::whereDoesntHave('orders', function ($query) {
    //     $query->where('payment_type', 'Cash');
    // })->get();

    // $data = Order::with(['orderDetails.product'])->first();
    // $data = Order::with(['products'])->first();
    // $data = Product::withCount(['orders'])->first();

    // $data = Category::with('subCategories.products')->first();
    // $data = Category::with('products')->first();
    // $data = Category::first()->products; //COLLECTION
    // $data = Category::findOrFail(1)->products;

    // $data = Category::first()->products()->where('price','>',200)->get();

    return response()->json(['data' => $data]);
});

Route::get('laravel-8', function () {

    // $data = Product::all();
    // $data = Product::max('price');
    // $data = Product::min('price');
    // $data = Product::avg('price');
    // $data = Product::count();
    // $data = Product::where('name', 'like', 'a%')->count();

    // $data = Product::all()->take(10); // Collection
    // $data = Product::all()->skip(10); // Collection
    // $data = Product::take(10)->get(); // SQL
    // $data = Product::skip(10)->get(); // SQL
    // $data = Product::all()->skip(10)->take(10); //Collection
    // $data = Product::all()->take(10)->skip(10); // []
    // $data = Product::take(10)->skip(10)->get(); // SQL

    //take => limit
    //skip => offset
    // $data = Product::limit(10)->get();
    // $data = Product::offset(10)->get();
    // $data = Product::limit(20)->offset(20)->get();
    // $data = Product::offset(10)->limit(10)->get();
    // $data = Product::all()->limit(10);

    // $data = Category::with(['subCategories'])->findOrFail(1);
    // $data = Category::withCount(['subCategories'])->findOrFail(1);

    // $data = Category::with(['subCategories' => function ($query) {
    //     $query->where('title', 'like', 's%');
    // }])->findOrFail(1);

    // $data = Category::with(['subCategories'])->get();
    // $data = Category::withCount(['subCategories'])->get();
    // $data = Category::withCount(['subCategories' => function ($query) {
    //     $query->where('title', 'like', '%o%');
    // }])->get();

    // $data = User::all();
    // $data = User::has('orders', '>', 5)->get();
    // $data = User::withCount('orders')->has('orders', '>', 5)->get();
    // $data = User::whereHas('orders', function ($query) {
    //     $query->where('total', '>', 800);
    // }, '>=', 5)->get();

    // $data = User::with('orders')->get();
    // $data = User::with('orders')->findOrFail(61);

    // $data = User::whereHas('orders', function ($query) {
    //     $query->where('total', '>=', 700);
    // })->with(['orders' => function ($query) {
    //     $query->where('total', '>=', 700);
    // }])->get();

    // $data = User::doesntHave('orders')->get();
    // $data = SubCategory::doesntHave('products')->get();
    // $data = SubCategory::has('products', '<', 1)->get();

    // $data = User::whereDoesntHave('orders', function ($query) {
    //     $query->where('total', '>', 400);
    // })->get();

    // $data = User::with('orders')->findOrFail(79);

    // $data = Category::with('subCategories.products')->findOrFail(2);

    // $data = Order::with('orderDetails.product')->findOrFail(5);
    // $data = Order::findOrFail(5)->orderDetails()->with('product')->get();

    // $data = Order::findOrFail(5)->products;
    // $data = Product::findOrFail(10)->orders;
    // $data = Product::with('orders')->findOrFail(10);

    // $data = Product::where('price', '>', 200)->exists();
    // $data = Product::where('price', '>', 200)->count() > 0;

    // $data = Product::where('price', '>', 500)->doesntExist();
    // $data = Product::where('price', '>', 500)->count() == 0;

    // $data = Product::with('information')->findOrFail(10);

    // $data = Category::with('subCategories.products')->findOrFail(10);
    // $data = Category::findOrFail(10)->subCategories()->with('products')->get();

    // $data = Category::findOrFail(10)->products;

    // $data = Product::with('image')->findOrFail(10);
    $data = User::with('images')->findOrFail(10);

    return response()->json(['data' => $data]);
});

Route::get('laravel-1', function () {
    // return response()->json(['status' => true, 'message' => 'Welcome in Data-App From API']);

    // $data = Product::min('price');
    // $data = Product::max('price');
    // $data = Product::avg('price');
    // $data = Product::sum('price');
    // $data = Product::count();

    // $data = Product::where('price', '>=', 100)->where('name', 'like', 'a%')->get();
    // $data = Product::where('price', '>=', 100)->where('name', 'like', 'a%')->count();
    // $data = Product::where('price', '>=', 100)->where('name', 'like', 'a%')->sum('price');

    // $data = Product::get()->take(10);
    // $data = Product::take(10)->get();

    // $data = Product::get()->skip(10);
    // $data = Product::take(10)->skip(10)->get();
    // $data = Product::get()->take(10)->skip(10);

    // $data = Product::limit(10)->get();
    // $data = Product::offset(10)->limit(10)->get();


    // $data = Category::with('subCategories.products')->findOrFail(1);
    // $data = Category::with(['subCategories.products'])->findOrFail(1);
    // $data = Category::withCount('subCategories')->get();

    // $data = Category::with(['subCategories' => function ($query) {
    //     $query->where('title', 'like', 'a%');
    // }])->get();

    // $data = Category::withCount(['subCategories' => function ($query) {
    //     $query->where('title', 'like', 'a%');
    // }])->get();

    // $data = Category::withCount('subCategories')->has('subCategories', '>', 9)->get();
    // $data = Category::withCount(['subCategories' => function ($query) {
    //     $query->where('title', 'like', '%a%');
    // }])->whereHas('subCategories', function ($query) {
    //     $query->where('title', 'like', '%a%');
    // }, '>', 4)->get();

    $data = User::withCount('orders')->doesntHave('orders')->get();
    return response()->json(['data' => $data]);
});

Route::get('laravel-2', function () {
    // $data = Product::max('price');
    // $data = Product::min('price');
    // $data = Product::avg('price');
    // $data = Product::sum('price');
    // $data = Product::count();

    // $data = Product::where('price', '>=', 100)->where('name', 'like', 'a%')->get(['name', 'price']);
    // $data = Product::where('price', '>=', 100)->where('name', 'like', 'a%')->count();
    // $data = Product::where('price', '>=', 100)->where('name', 'like', 'a%')->sum('price');

    // $data = Product::take(10)->get();
    // $data = Product::skip(10)->take(10)->get();
    // $data = Product::take(10)->skip(10)->get();
    // $data = Product::skip(10)->get();

    // $data = Product::get()->take(10);
    // $data = Product::get()->skip(10)->take(10);
    // $data = Product::get()->take(10)->skip(10);  Empty Array: []

    // $data = Product::limit(10)->get();
    // $data = Product::offset(10)->get();
    // $data = Product::limit(10)->offset(10)->get();
    // $data = Product::get()->limit(10);

    // $data = Category::with(['subCategories'])->get();
    // $data = Category::withCount(['subCategories'])->get();

    // $data = Category::with(['subCategories' => function ($query) {
    //     $query->where('title', 'like', '%i%')->where('status', 'Visible');
    // }])->get();

    // $data = Category::withCount(['subCategories' => function ($query) {
    //     $query->where('title', 'like', '%i%')->where('status', 'Visible');
    // }])->get();

    // $data = Category::with('subCategories')->findOrFail(1);
    // $data = Category::withCount('subCategories')->findOrFail(1);

    // $data = Category::with('subCategories.products')->findOrFail(2);

    // $data = User::with('orders')->get();
    // $data = User::with('orders')->first();

    // $data = User::with(['orders' => function ($query) {
    //     $query->where('total', '>', 800);
    // }])->get();

    // $data = User::has('orders')->get();
    // $data = User::withCount('orders')->has('orders', '>=', 7)->get();
    // $data = User::with(['orders' => function ($query) {
    //     $query->where('total', '>=', 700);
    // }])->whereHas('orders', function ($query) {
    //     $query->where('total', '>=', 700);
    // }, '>=', 5)->get();

    // $data = User::whereHas('orders', function ($query) {
    //     $query->where('total', '>=', 700);
    // }, '>=', '2')->get();

    // $data = User::whereHas('orders', function ($query) {
    //     $query->where('total', '>=', 900);
    // }, '>=', '2')
    //     ->with(['orders' => function ($query) {
    //         $query->where('total', '>=', 900);
    //     }])
    //     ->get();

    // $user = new User();
    // $user->name = "Ahmed";
    // $user->email = "email@app.com";
    // $user->password = Hash::make("123");
    // $data = $user->save();

    // 
    // $data = User::doesntHave('orders')->get();
    // $data = User::has('orders', '<', 1)->get();
    // $data = User::whereDoesntHave('orders', function ($query) {
    //     $query->where('total', '>=', 500);
    // })->get();

    // $data = User::with('orders')->findOrFail(58);

    // $data = Category::whereDoesntHave('subCategories', function ($query) {
    //     $query->where('title', 'like', 'a%');
    // })->get();

    // $data = Category::with('subCategories')->findOrFail(2);

    // $data = Product::with('orders')->findOrFail(1);
    // $data = Product::withCount('orders')->get();
    // $data = Product::withCount('orders')->has('orders', '<3', 30)->get();
    // $data = Product::withCount('orders')->doesntHave('orders')->get();
    // $data = Product::withCount('orders')->has('orders', '<', 1)->get();

    // $data = User::where('name', 'like', '%a')->exists();
    // $data = Product::where('price', '>', '250')->exists();
    // $data = Product::where('price', '>', '300')->doesntExist();

    // $data = Category::with('products')->get();
    // $data = Product::with('information')->has('information')->get();

    // $data = Product::with('images')->get();
    // $data = Product::doesntHave('images')->get();
    // $data = User::has('images')->with('images')->get();

    // $data = Category::findOrFail(1)->subCategories;
    // $data = Category::findOrFail(1)->subCategories()->where('title', 'like', 'w%')->get();


    // $data = Category::with('subCategories')->get();
    // $data = Category::withCount('subCategories')->has('subCategories', '>=', 4)->get();
    // $data = Category::whereHas('subCategories', function ($query) {
    //     $query->where('title', 'like', 'a%');
    // }, '>=', 2)->get();

    // $data = Category::with('subCategories')->whereHas('subCategories', function ($query) {
    //     $query->where('title', 'like', 'a%');
    // }, '>=', 2)->get();

    // $data = Category::withCount(['subCategories' => function ($query) {
    //     $query->where('title', 'like', 'a%');
    // }])->whereHas('subCategories', function ($query) {
    //     $query->where('title', 'like', 'a%');
    // }, '>=', 2)->get();

    // $data = User::has('products', '<', 1)->get();
    // $data = User::withCount('orders')->doesntHave('orders')->get();

    // $data = SubCategory::with('products')->whereDoesntHave('products', function ($query) {
    //     $query->where('price', '<', 250);
    // })->get();

    // $data = Product::where('price', '>', 250)->exists();
    // $data = Product::where('price', '>', 300)->exists();
    // $data = Product::where('name', 'like', 'z%')->doesntExist();

    // $data =  Order::with('products')->findOrFail(1);

    // $data = Product::has('information')->get();
    // $data = Product::findOrFail(1)->information;

    // $data = Category::findOrFail(1)
    //     ->subCategories()
    //     ->where('title', 'like', '%a%')
    //     ->get();

    // $data = Category::with('products')->get();
    // $data = Category::withCount('products')->get();

    // $data = Image::with('object')->findOrFail(3);
    $data = Product::with('images')->findOrFail(1);
    return response()->json(['data' => $data], 200);

    // return response()->json(['status' => true, 'message' => 'Welcome In API-DataApp']);
});

Route::get('relations', function () {
    // $data = Category::all();
    // $data = Category::get();
    // $data = Category::where('id', 1)->first();
    // $data = Category::find(1);
    // $data = Category::findOrFail(1);
    // $data = Category::first();

    // $data = Category::with('subCategories')->get();
    // $data = Category::with('subCategories')->find(1);

    // $data = Category::find(1)->subCategories;
    // $data = Category::find(1)
    //     ->subCategories()
    //     ->where('title', 'like', '%e')
    //     ->get();
    // $data = Category::find(1)
    //     ->subCategories()
    //     ->where('title', 'like', '%a%')
    //     ->get();

    // $data = Category::get()->skip(10);
    // $data = Category::orderBy('id','DESC')->get()->take(10);
    // $data = Category::orderBy('id', 'ASC')->get()->take(10);
    // $data = Category::orderBy('id')->get()->take(10);
    // $data = Category::get()->skip(10)->take(10);

    // $data = Category::limit(10)->get();
    // $data = Category::limit(10)->offset(10)->get();

    // $data = Category::withCount('subCategories')->get();

    // $data = Category::find(1)->subCategories()
    //     ->where('status', 'Visible')
    //     ->where('title', 'like', '%a%')
    //     ->get();

    // $data = Category::with(['subCategories' => function ($query) {
    //     $query->where('title', 'like', '%a%')->where('status', 'Visible');
    // }])->find(1);
    // $data = Category::with(['subCategories' => function ($query) {
    //     $query->where('title', 'like', 'a%')->where('status', 'Visible');
    // }])->get();

    // $data = Category::with(['subCategories.products' => function ($query) {
    //     $query->where('price', '21');
    // }])->find(1);

    // $data = Product::with('productOrders.order')->get();


    /*
    Category::with('subCategories') Category And SubCategories
    Category::find(1)->subCategories
    Category::find(1)->subCategories()->....
    Category::has('subCategories','condition','count') CATEGORIES ONLY
    */

    //$data = Category::withCount('subCategories')->has('subCategories', '>=', '2')->get();

    // $data = Product::where('name', 'like', '%m')->get()->orders;
    // $data = Product::where('name', 'like', '%m%')->first()->orders;
    // $data = Product::where('name', 'like', 'm%')->first()->orders;

    // $data = Order::all();

    // $data = Product::with('orders')->get();

    // $data = Product::whereHas('productOrders', function ($query) {
    //     $query->where('count', '>', 2);
    // }, '>=', 2)->get();

    // $data = Product::with(['productOrders' => function ($query) {
    //     $query->where('total', '>', 500);
    // }])->get();

    //GET ONLY Products With Order details have a total > 500

    // $data = Product::with(['productOrders' => function ($query) {
    //     $query->where('total', '>', 500);
    // }])->whereHas('productOrders', function ($query) {
    //     $query->where('total', '>', 500);
    // }, '>=', 2)->get();

    // $data =  Product::withCount('productOrders')->doesntHave('productOrders')->get();

    // $data = SubCategory::with('products')->get();


    // $data = Category::withCount('subCategories')->get();
    // $data = Category::has('subCategories')->get();//Categories that have subCategories
    // $data = Product::withCount('productOrders')
    //     ->doesntHave('productOrders')->get();

    // $data = Product::withCount('productOrders')
    //     ->has('productOrders', '<', 1)->get();

    // $data = Product::withCount('productOrders')
    //     ->whereDoesntHave('productOrders', function ($query) {
    //         $query->where('total', '>', 1500);
    //     })->get();

    // $data = Product::with('productOrders')->find(3);

    // $data = SubCategory::whereDoesntHave('products', function ($query) {
    //     $query->where('price', '<', 10);
    // })->get();

    // $data = Order::get()->sum('total');

    // $data = Order::get()->count();
    // $data = Order::get()->avg('total');

    // $data = Order::count();
    // $data = Order::avg('total');

    // $data = Product::max('price');
    // $data = Product::min('price');
    // $data = Product::get()->max('price');
    // $data = Product::get()->min('price');

    // $data = Product::find(1);

    // $data = Product::with(['orders' => function ($query) {
    //     $query->where('payment_status', 'Paid');
    // }])->get();

    // $data = Product::firstWhere('price', '>', 100);

    // $data = SubCategory::whereDoesntHave('products', function ($query) {
    //     $query->where('price', '<', 10);
    // })->get();

    // $data = Category::withCount('subCategories')->has('subCategories', '=', '2')->get();

    // $data = Product::withCount('productOrders')->has('productOrders', '=', '0')->get();

    // $data = Product::withCount('productOrders')->with('productOrders')->get();

    // $data = Product::with('productOrders')->whereDoesntHave('productOrders', function ($query) {
    //     return $query->where('total', '<', 2000);
    // })->get();

    // $data = Product::withCount('productOrders')
    //     ->with('productOrders')
    //     ->whereDoesntHave('productOrders', function ($query) {
    //         return $query->where('total', '<', 2000);
    //     })
    //     ->get();
    // $data = Product::where('price', '>', '300')->exists();
    // $data = Product::where('price', '>', '300')->doesntExist();

    // $data = Product::orderBy('name')->get()->groupBy('sub_category_id');
    // $data = Product::orderBy('name')->get()->last();

    // $data = Product::with('productOrders')
    //     ->whereDoesntHave('productOrders', function ($query) {
    //         return $query->where('total', '<', 2000);
    //     })
    //     ->get();

    // $data = Product::with('productOrders')
    //     ->orWhereDoesntHave('productOrders', function ($query) {
    //         return $query->where('total', '<', 2000);
    //     })
    //     ->get();

    /**
     * 1) whereDoesntHave
     * 2) GroupBy
     * 3) exists
     * 4) doesntExist
     * 5) Collection Methods
     *      1) GroupBy
     *      2) Last
     *      3) avg, min, max, count
     */


    // $data = Product::where('price', '>', '5000')->count() > 0;
    // $data = Product::where('price', '>', '150')->exists();
    // $data = Product::max('price');
    // $data = Product::get()->max('price');
    // $data = Product::get()->max('price');

    // $data = Category::where('title', 'like', '%w')->doesntExist();
    // $data = Category::where('title', 'like', '%w')->count() == 0;

    // $data = User::get()->last();

    // $data = Product::all()->groupBy('sub_category_id');
    // $data = Product::all()->groupBy('status');

    // $data = Product::where('status', 'Visible')->count();
    // $data = Product::where('name', 'like', 'a%')->exists();
    // $data = Product::where('name', 'like', 'a%')->sum('price');

    // $data = User::withCount('orders')->get();
    // $data = User::withCount('orders')->has('orders', '>=', '5')->get();

    // $data = User::whereHas('orders', function ($query) {
    //     $query->where('total', '>=', '800');
    // }, '>=', 5)->with(['orders' => function ($query) {
    //     $query->where('total', '>=', '800');
    // }])->withCount('orders')
    //     ->get();

    // $data = Product::where('price','=','20')->get();

    // $data = Category::with('products')->find(1);

    // $data = SubCategory::with('images')->find(2);

    $data = User::withCount('images')
        ->with('images')
        ->has('images', '>=', '1')->get();

    $newProduct = new Product();
    $newProduct->name = "NEW PRODUCT 1";
    $newProduct->description = "NEW PRODUCT Description";
    $newProduct->price = 550;
    $newProduct->stock = 10;
    $newProduct->status = "Visible";

    $newProduct2 = new Product();
    $newProduct2->name = "NEW PRODUCT 2";
    $newProduct2->description = "NEW PRODUCT Description";
    $newProduct2->price = 550;
    $newProduct2->stock = 10;
    $newProduct2->status = "Visible";

    $newProduct3 = new Product();
    $newProduct3->name = "NEW PRODUCT 3";
    $newProduct3->description = "NEW PRODUCT Description";
    $newProduct3->price = 550;
    $newProduct3->stock = 10;
    $newProduct3->status = "Visible";
    // $newProduct->sub_category_id = 5;
    // $newProduct->save();

    $subCategory = SubCategory::find(5);
    // $data = $subCategory->products()->save($newProduct3);
    // $data = $subCategory->products()->saveMany([$newProduct, $newProduct2, $newProduct3]);

    $data = Product::where('price', 550)->get();
    return response()->json(
        [
            'status' => true,
            'message' => 'Success',
            'data' => $data
        ]
    );






    // return response()->json(['message' => 'Welcome in API - Relations Lessons'], 200);

    // $data = Category::with('subCategories')->find(1);
    // $data = SubCategory::with('category')->find(1);
    // $data = Product::with('information')->find(1);
    // $data = ProductInformation::with('product')->where('id', 1)->first();
    // $data = Category::withCount('subCategories')->get();

    // $data = Category::has('subCategories', '=', '2')
    //     ->withCount('subCategories')
    //     ->where('tsitle', 'like', '%p%')->get();

    // $data = User::with('orders')->get();

    // $data = User::with(['orders' => function ($query) {
    //     $query->where('total', '>=', 800);
    // }])->get();

    // $data = User::with(['orders' => function ($query) {
    //     $query->where('total', '>=', 900);
    // }, 'orders.orderDetails'])->whereHas('orders', function ($query) {
    //     $query->where('total', '>=', 900);
    // }, '>=', 2)->get();

    // return response()->json(
    //     [
    //         'status' => true,
    //         'message' => 'Success',
    //         'data' => $data
    //     ]
    // );
});

Route::get('query', function () {
    //    return response()->json([
    //        'id' => 1,
    //        'name' => 'Ahmed',
    //        'age' => 30,
    //        'is_graduated' => false
    //    ]);
    //    $category = \App\Category::findOrFail(141)->subCategories()->get();
    //    $category = \App\Category::with('subCategories')->findOrFail(141);
    //    return response()->json(
    //        [
    //            'status' => true,
    //            'message' => 'Success',
    //            'data' => $category
    //        ]
    //    );

    //    $data = \App\Category::with(['subCategories'=>function($query){
    //        $query->where('status','InVisible');
    //    }])->findOrFail(141);
    //    return response()->json(
    //        [
    //            'status' => true,
    //            'message' => 'Success',
    //            'data' => $data
    //        ]
    //    );

    //    $data = \App\Category::whereHas('subCategories', function ($query) {
    //        $query->where('status', 'like', 'Visible');
    //    })->find(141);

    //    $data = \App\SubCategory::with('category')->find(5);
    //    return response()->json(
    //        [
    //            'status' => true,
    //            'message' => 'Success',
    //            'data' => $data
    //        ]
    //    );

    //    $data = \App\Category::findOrFail(141)->products()->with('subCategory.category')->get();
    //    $data = \App\Category::findOrFail(141)->products()->get();
    //    $data = \App\Category::all()->products()->get();//NOT WORKING
    //    $data = \App\Category::with('products.subCategory.category')->get();

    //Get all categories that have more than 10 subcategories
    $data = \App\Category::has('subCategories', '>', 10)->get();
    return response()->json(
        [
            'status' => true,
            'message' => 'Success',
            'data' => $data
        ]
    );
});

Route::get('test', function () {
    //    $orders = \App\User::findOrFail(1)->orders()->where('status', 'Delivered')->get();
    //    $orders = \App\User::findOrFail(1)->orders()->with('orderDetails')->where('status', 'Delivered')->get();
    //    $orders = \App\User::findOrFail(1)->orders()->with('products')->where('status', 'Delivered')->get();
    //    $orders = \App\User::findOrFail(1)->orders()->with('products')->where('status', 'Delivered')->get();
    //    $orders = \App\User::findOrFail(1)->orders()->with(['products'=>function($query){
    //        $query->where('price','<',100);
    //    }])->where('status', 'Delivered')->get();

    $orders = \App\User::findOrFail(1)->orders()->whereHas('products', function ($query) {
        $query->where('price', '>', 1000);
    })->where('status', 'Delivered')->get();

    return response()->json(['data' => $orders]);
});

Route::get('product/images', function () {
    //    $data = \App\Product::findOrFail(9)->images()->get();
    //    $data = \App\Category::findOrFail(2)->images()->get();

    //    $image = new \App\Image();
    //    $image->url = 'https://images.pexels.com/photos/120049/pexels-photo-120049.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500';
    ////
    //    $category = \App\Category::findOrFail(1);
    //    return $category->images()->save($image);

    $data = \App\Category::with('images')->findOrFail(1);
    return response()->json(['data' => $data]);
});

Route::get('mutaz/', function () {
    // $data = Category::all();
    // $data = Category::get();

    // $data = Category::orderBy('title', 'ASC')->get();
    // $data = Category::where('title', 'like', 'ac%')->get();
    // $data = Category::where('title', '=', 'accusantium')->get();
    // $data = Category::where('title', '=', 'accusantium')->first();
    // $data = Category::where('title', '=', 'accusantium')->take(1)->get();
    // $data = Category::where('title', '=', 'accusantium')->limit(1)->get();
    // $data = Category::where('title', 'like', 'a%')->skip(4)->take(2)->get();

    // $data = Category::latest()->first();

    // $data = Category::with('subCategories')->get();
    // $data = Category::withCount('subCategories')->get();
    // $data = Category::with('subCategories')->find(1);
    // $data = Category::with('subCategories')->where('title', 'like', 'a%')->get();
    // $data = Category::with(['subCategories' => function ($query) {
    //     $query->where('title', 'like', 'a%');
    // }])->get();

    // $data = Category::find(1)->subCategories;
    // $data = Category::find(2)->subCategories()->where('title', 'like', 'a%')->get();

    // $data = Category::has('subCategories', '>=', 3)->get();

    // $data = Category::whereHas('subCategories', function ($query) {
    //     $query->where('title', 'like', 'a%');
    // }, '>=', 2)->get();

    // $data = Category::whereHas('subCategories', function ($query) {
    //     $query->where('title', 'like', 'a%');
    // }, '>=', 1)->with(['subCategories' => function ($query) {
    //     $query->where('title', 'like', 'a%');
    // }])->get();


    // $data = Category::doesntHave('subCategories')->get();
    // $data = Category::whereDoesntHave('subCategories', function ($query) {
    //     $query->where('title', 'like', 'a%');
    // })->get();

    // $data = Category::whereDoesntHave('subCategories', function ($query) {
    //     $query->where('title', 'like', 'mo%');
    // })->with(['subCategories'])->get();

    // $data = SubCategory::with('category')->get();
    // $data = SubCategory::with('category')->find(1);

    // $data = SubCategory::with(['category' => function ($query) {
    //     $query->where('id', '=', 1);
    // }])->get();

    // $data = SubCategory::whereHas('category', function ($query) {
    //     $query->where('id', '=', 1);
    // })->get();

    // $data = SubCategory::whereHas('category', function ($query) {
    //     $query->where('id', '=', 1);
    // })->with('category')->get();

    // $data = SubCategory::find(2)->category;
    // $data = SubCategory::with('category')->find(2);

    // $data = Category::with(['subCategories', 'products'])->find(1);
    //price > 220 - stock > 20

    // $data = Category::with(['products' => function ($query) {
    //     $query->where('price', '>=', 260)->where('stock', '>=', 20);
    // }])->find(1);

    // $data = Category::with(['products' => function ($query) {
    //     $query->where('price', '>=', 260)->where('stock', '>=', 20);
    // }])->get();

    //ALL USERS HAVE ORDERS WITH TOTAL >= 1000
    // $data = User::whereHas('orders', function ($query) {
    //     $query->where('total', '>=', 900);
    // })->get();

    // $data = User::whereHas('orders', function ($query) {
    //     $query->where('total', '>=', 1000);
    // })->with(['orders' => function ($query) {
    //     $query->where('total', '>=', 1000);
    // }])->get();

    // $data = User::whereHas('orderProducts', function ($query) {
    //     $query->where('item_price', '>=', 270)->where('count', '>=', 10);
    // })->with(['orderProducts' => function ($query) {
    //     $query->where('item_price', '>=', 270)->where('count', '>=', 10);
    // }])->get();

    // $data = User::whereHas('orderProducts', function ($query) {
    //     $query->where('item_price', '>=', 270)->where('count', '>=', 10);
    // })->get();

    // $data = User::whereHas('orderProducts', function ($query) {
    //     $query->where('item_price', '>=', 270)->where('count', '>=', 10);
    // })})->with(['orders' => function ($query) {
    //     $query->whereHas('orderDetails', function ($t) {
    //         $t->where('item_price', '>=', 270)->where('count', '>=', 10);
    //     })->with(['orderDetails' => function ($d) {
    //         $d->where('item_price', '>=', 270)->where('count', '>=', 10);
    //     }]);
    // }])->get();


    $data = User::whereHas('orderProducts', function ($query) {
        $query->where('item_price', '=', 279)->where('count', '>=', 10);
    })->with(['orders' => function ($query) {
        $query->whereHas('orderDetails', function ($t) {
            $t->where('item_price', '=', 279)->where('count', '>=', 10);
        })->with(['orderDetails' => function ($d) {
            $d->where('item_price', '=', 279)->where('count', '>=', 10);
        }]);
    }])->get();

    // $data = OrderProduct::with(['order.user'])
    //     ->where('item_price', '>=', 220)
    //     ->where('count', '>=', 10)
    //     ->get()
    //     ->groupBy('order.user.name');

    return response()->json([
        'data' => $data
    ]);
});


Route::get('test', function () {
    // $data = Category::all();
    // $data = Category::find(10);
    // $data = Category::orderBy('title','ASC')->get();
    // $data = Category::where('title', 'like', 'a%')->get();

    // $data = Category::where('title', 'like', 'a%')->take(10)->get();
    // $data = Category::where('title', 'like', 'a%')->limit(5)->get();

    // $data = Category::where('title', 'like', 'a%')->count();

    // $data = Category::where('title', 'like', 'a%')->take(3)->skip(5)->get();
    // $data = Category::where('title', 'like', 'a%')->limit(3)->offset(5)->get();

    // $data = Category::where('title', '=', 'accusantium')->get(['description']);
    // $data = Category::where('title', '=', 'accusantium')->first(['description']);

    // $data = Category::with('subCategories')->get();
    // $data = Category::with('subCategories')->where('title','like','a%')->get();
    // $data = Category::with(['subCategories' => function ($query) {
    //     $query->where('title', 'like', 'ac%');
    // }])->get();

    //has, WhereHas
    // Category::where('title', 'www')->get();
    // $data = Category::whereHas('subCategories', function ($query) {
    //     $query->where('title', 'like', 'ac%');
    // }, '>=', 1)->get();

    // $data = Category::whereHas('subCategories', function ($query) {
    //     $query->where('title', 'like', 'ac%');
    // }, '>=', 1)->with(['subCategories' => function ($query) {
    //     $query->where('title', 'like', 'ac%');
    // }])->get();

    // $data = Category::has('subCategories', '>=', 10)->get();
    // $data = Category::has('subCategories', '>=', 10)
    //     ->with('subCategories')
    //     ->get();


    //doesnothave,whereDoesnthave
    // $data = Category::doesntHave('subCategories')->get();
    // $data = User::doesntHave('orders')->get();

    // $data = Category::whereDoesntHave('subCategories', function ($query) {
    //     $query->where('title', 'like', 'ac%');
    // })->get();

    // $data = Category::withCount('subCategories')->get();

    // $data = Category::find(1);
    // $data = Category::with('subCategories')->find(1);
    // $data = Category::find(1)->subCategories;
    // $data = Category::find(1)
    //     ->subCategories()
    //     ->where('title', 'like', 'a%')
    //     ->get();

    // $data = Category::find(4)
    //     ->subCategories()
    //     ->orderBy('title', 'DESC')
    //     ->take(3)
    //     ->skip(3)
    //     ->get();

    // $data = Category::find(4)
    //     ->subCategories()
    //     ->orderBy('title', 'DESC')
    //     ->where('title', 'like', 'u%')
    //     // ->orWhere('title','like','r%')
    //     ->get();

    //BELONGS TO
    // $data = SubCategory::with('category')->get();
    // $data = SubCategory::with('category')
    //     ->get()
    //     ->groupBy('category.title');


    // $data = SubCategory::where('category_id', '=', 1)->get();
    // $data = SubCategory::whereHas('category', function ($query) {
    //     $query->where('title', 'like', '%a');
    // })->get();

    // $data = SubCategory::whereDoesntHave('category', function ($query) {
    //     $query->where('title', 'like', 'a%');
    // })->get();

    // $data = SubCategory::where('title','like','a%')->count() > 0;

    // $data = Category::with('subCategories.products')->find(1);
    // $data = Category::with('subCategories.products')->find(1);

    // $data = Category::with('products')->get();
    // $data = Category::withCount('products')->get();
    // $data = Category::has('products', '>=', 5)->get();

    // $data = Category::whereHas('products', function ($query) {
    //     $query->where('price', '>=', 200);
    // }, '>=', 5)->get();

    // $data = SubCategory::with('category')->find(1);
    // $data = SubCategory::find(1)->category;

    // $data = Category::with('subCategories.products')->find(1);


    // $data = Category::with('products')->find(1);
    // $data = Category::find(1)->subCategories;
    // $data = Category::with('subCategories')->get();
    // $data = SubCategory::all();

    // $data = Product::with('information')->find(1);
    // $data = Product::find(1)->information;

    // $data = Order::with('orderDetails.product')->find(1);
    // $data = Order::with('products')->find(1);

    //GET ALL USER(1) ORDERS WHERE TOTAL >= 500
    // $data = User::with(['orders' => function ($query) {
    //     $query->where('total', '>=', 900);
    // }])->find(1);

    // $data = User::whereHas('orders', function ($query) {
    //     $query->where('total', '>=', 900);
    // })->with(['orders' => function ($query) {
    //     $query->where('total', '>=', 900);
    // }])->get();

    //GET PRODUCTS FOR ORDER 10 WHERE PRODUCT PRICE > 100
    // $data = Order::with(['products' => function ($query) {
    //     $query->where('price', '>', 100);
    // }])->find(10);

    //GET ALL USERS WHICH HAVE MORE THAN 5 ORDERS
    // $data = User::has('orders', '>', 7)->get();

    //GET ALL PRODUCTS FOR ORDER (10) WITH SUB FOR EACH PRODUCT
    // $data = Order::with(['products.subCategory.category', 'user'])->find(10);


    //GET ORDERS WITH USER WHERE EACH ORDER HAS AT LEAST (10) PRODUCTS
    // $data = Order::with('user')->has('products','>=',10)->get();

    //GET ORDERS WITH USER WHERE EACH ORDER HAS AT LEAST (10) PRODUCTS
    //EACH ORDER RODUCT MUST HAVE AT LEAST 5 COUNT
    // $data = Order::with('user')
    //     ->whereHas('products', function ($query) {
    //         $query->where('count', '>=', 5);
    //     })->with('products')
    //     ->where('payment_type', 'Online')
    //     ->where('payment_status', 'Waiting')
    //     ->has('products', '>=', 10)
    //     ->skip(10)
    //     ->take(5)
    //     ->get();

    // $data = Product::with('images')->find(10);
    // $data = Category::with('images')->find(1);

    // $data = Order::with('orderDetails')->find(19);

    // $data = Category::find(1)->subCategories()
    //     ->orderBy('title', 'ASC')
    //     ->where('status', 'Visible')
    //     ->where('title', 'like', '%i%')
    //     ->orWhere('title', 'like', '%i%')
    //     ->where('description', 'like', 'n%');

    // $data = Category::with(['subCategories' => function ($query) {
    //     $query->orderBy('title', 'ASC')
    //         ->where('status', 'Visible')
    //         ->where('title', 'like', '%i%')
    //         ->orWhere('title', 'like', '%i%')
    //         ->where('description', 'like', 'n%')
    // }])->find(1);

    $data = SubCategory::get()->groupBy('category_id');

    return response()->json([
        'data' => $data
    ]);
});

Route::get('test2', function () {
    //PRODUCTS -> Min

    // $data = Product::max('price');
    // $data = Product::get()->min('price');
    // $data = Product::avg('price');
    // $data = Product::sum('price');
    // $data = Product::count();

    // $data = Product::skip(10)->limit(10)->get();
    // $data = Product::offset(10)->limit(10)->get();

    // $data = Category::get()->skip(10);
    // $data = Category::orderBy('id', 'DESC')->get()->take(10);
    // $data = Category::orderBy('id', 'ASC')->get()->take(10);
    // $data = Category::orderBy('id')->get()->take(10);
    // $data = Category::get()->skip(10)->take(10);

    // $data = Product::take(10)->get();
    // $data = Product::skip(10)->take(10)->get();
    // $data = Product::offset(10)->limit(10)->get();

    // $data = Product::all()->offset(10);
    // $data = Product::all()->limit(10);

    // $data = Product::all()->offset(10);
    // $data = Product::all()->take(10);
    // $data = Product::all()->skip(10)->take(10);

    // $data = Product::offset(10)->limit(10)->get();
    // $data = Product::skip(10)->take(10)->get();
    // $data = Product::all()->skip(10);

    // $data = Category::with('subCategories')->get();
    // $data = Category::with('subCategories')->findOrFail(1);
    // $data = Category::findOrFail(1)->subCategories;
    // $data = SubCategory::findOrFail(1)->category;

    // $data = Category::with(['subCategories' => function ($query) {
    //     return $query->where('title', 'like', 'a%');
    // }])->get();

    $data = Category::withCount(['subCategories' => function ($query) {
        $query->where('title', 'like', '%a%');
    }])->get();
    return response()->json(['data' => $data]);
});
