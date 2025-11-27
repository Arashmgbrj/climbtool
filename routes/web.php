<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Api\ContactController;
use App\Models\viewOtherModel;
use App\Models\ProductModel;
use App\Models\MasterBlog;


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
use Illuminate\Support\Facades\DB;

Route::get('/dbcheck', function () {
    return [
        'path' => database_path('database.sqlite'),
        'exists' => file_exists(database_path('database.sqlite')),
        'can_connect' => DB::connection()->getPdo() ? 'yes' : 'no',
    ];
});
Route::get('/', function () {
    $check_view = viewOtherModel::where("page_name", 'home')->exists();
    if ($check_view) {
        $check_view_data = viewOtherModel::where("page_name", "home")->first();
        $check_view_data->view = $check_view_data->view + 1;
        $check_view_data->save();

    } else {


        $check_view_data = new viewOtherModel();
        $check_view_data->page_name = "home";
        $check_view_data->view = 1;
        $check_view_data->save();

    }
    $is_offer_data = ProductModel::where("is_offer", "1")->get();
    $new_data = ProductModel::orderBy('created_at', 'desc')->take(4)->get();
    $blog = MasterBlog::orderBy('created_at', 'desc')->take(6)->get();



    return view('Home.home', ['offers' => $is_offer_data, "new_crops" => $new_data, "blogs" => $blog]);
})->name("home");
Route::group(['prefix' => 'register',], function () {
    Route::get('/', [RegisterController::class, 'UserRegisterget'])->name('UserRegisterget');
    Route::post('/', [RegisterController::class, 'UserRegisterpost'])->name('UserRegisterpost');
    Route::get('/activated', [RegisterController::class, 'ActivatedRegisterget'])->name('ActivatedRegisterget');
    Route::post('/activated', [RegisterController::class, 'ActivatedRegisterpost'])->name('ActivatedRegisterpost');

});
Route::group(['prefix' => 'product',], function () {
    Route::get('/', [ProductController::class, 'Storeget'])->name('Storeget');
    Route::get('/{id}', [ProductController::class, 'ProductGet'])->name('ProductGet');
    Route::post('/{id}', [ProductController::class, 'ProductPost'])->name('ProductPost');


});
Route::group(['prefix' => 'orders',], function () {
    Route::get('/', [CartController::class, 'OrderGet'])->name('OrderGet');






});
Route::group(['prefix' => 'payment',], function () {

    Route::get('/', [OrderController::class, 'payingGet'])->name('payingGet');
    Route::post('/', [OrderController::class, 'go_paying'])->name('payingPost');
    Route::post('/addr', [OrderController::class, 'addAddress'])->name('addAddress');
    Route::get('/delete', [OrderController::class, 'payingGetDelete'])->name('payingGetDelete');
    Route::get('/callback', [OrderController::class, 'callback'])->name('callback');





});
Route::group(['prefix' => 'weblog',], function () {
    Route::get('/{name}', [BlogController::class, 'BlogItemsGet'])->name('BlogItemsGet');
    Route::post('/{name}', [BlogController::class, 'BlogItemsPost'])->name('BlogItemsPost');
    Route::get('/', [BlogController::class, 'blog_main'])->name('blog_main');



});
Route::get('user', [UserController::class, 'UserGet'])->name('UserGet');
Route::post('user', [UserController::class, 'UserPost'])->name('UserPost');


Route::get('/contact-us', [ContactController::class, 'ContactView'])->name('ContactView');
Route::post('/contact-us', [ContactController::class, 'ContactViewPost'])->name('ContactViewPost');
// routes/web.php
Route::get('/test-storage-setup', function() {
    \Log::info('=== STORAGE SETUP TEST ===');
    
    try {
        // تست 1: بررسی disk public
        $disk = Storage::disk('public');
        \Log::info('Public disk root: ' . $disk->path(''));
        
        // تست 2: ایجاد پوشه products اگر وجود ندارد
        if (!$disk->exists('products')) {
            $disk->makeDirectory('products');
            \Log::info('Created products directory');
        }
        
        // تست 3: نوشتن یک فایل تست
        $testContent = 'Test file content ' . date('Y-m-d H:i:s');
        $disk->put('products/test.txt', $testContent);
        \Log::info('Test file written');
        
        // تست 4: خواندن فایل تست
        $content = $disk->get('products/test.txt');
        \Log::info('Test file content: ' . $content);
        
        return response()->json([
            'success' => true,
            'message' => 'Storage test passed',
            'storage_path' => $disk->path(''),
            'public_path' => public_path('storage')
        ]);
        
    } catch (\Exception $e) {
        \Log::error('Storage test failed: ' . $e->getMessage());
        return response()->json([
            'success' => false,
            'message' => 'Storage test failed: ' . $e->getMessage()
        ], 500);
    }
});
// routes/web.php
Route::get('/list-products-files', function() {
    $files = Storage::disk('public')->files('products');
    
    return response()->json([
        'files' => $files,
        'count' => count($files),
        'full_paths' => array_map(function($file) {
            return [
                'path' => $file,
                'url' => asset('storage/' . $file),
                'exists' => Storage::disk('public')->exists($file),
                'size' => Storage::disk('public')->size($file)
            ];
        }, $files)
    ]);
});