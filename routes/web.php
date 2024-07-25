<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Posts;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/posts', function () {
//     $data = Posts::query()->get();
    // $data = Posts::all();
    //them
    // $post = new Posts();
    // $post->title = "BV 2";
    // $post->content = "Noi dung BV 2";
    // $post->save();
    //cách 2
//     $post = Posts::query()->create([
//         'title' => "BV 3",
//         'content' => "Noi dung BV 3"
//     ]);
//     //sửa
//     // $post = Posts::query()->find(1);
//     // $post->title = "BV 3";
//     // $post->save();
//     //cách 2 
//     $post = Posts::query()->find(1);
//     $post->update([
//         'title' => "BV 10 Sửa",
//         'content' => "Noi dung BV 3 Sửa"
//     ]);
//     //xóa
//     //cứng
//     $post = Posts::query()->find(1)->delete();
//     dd($data);
// });
// Route::get('/products',[ProductController::class,'index'])
// ->name('products.index');

// Route::get('/products/create',[ProductController::class,'create'])
// ->name('products.create');
Route::controller(ProductController::class)
    ->name('products.')
    ->prefix('products/')
    ->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit')->where('id','[0+9]+');
        Route::get('/{id}/update', 'update')->name('update')->where('id','[0+9]+');
        Route::get('/{id}/destroy', 'destroy')->name('destroy')->where('id','[0+9]+');


});
