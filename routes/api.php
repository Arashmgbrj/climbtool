<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\Admin\AdminController;
use App\Http\Controllers\Api\Ai\Ai;

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

Route::group(['prefix' => 'cart',], function () {  
    Route::get('add_to_cart/{p_id}/{counter}/{u_id}', [CartController::class, 'Add_to_cart'])->name('Add_to_cart');  
    Route::get('product/{p_id}', [CartController::class, 'Get_product'])->name('Get_product');  
    Route::get('delete/{p_id}/{o_id}', [CartController::class, 'Delete_order'])->name('Delete_order'); 
    Route::get('get_count/{u_id}', [CartController::class, 'Get_Count'])->name('Get_Count'); 


});  
Route::group(['prefix' => 'admin',], function () {  

    Route::post('check', [AdminController::class, 'check_user'])->name('check_user');  
    Route::get('get_name/{token}', [AdminController::class, 'get_name'])->name('get_name');  
    Route::get('c_pa', [AdminController::class, 'c_pa'])->name('c_pa');  
    Route::get('get_all_users', [AdminController::class, 'get_all_users'])->name('get_all_users');  
    Route::get('get_all_users_admin', [AdminController::class, 'get_all_users_admin'])->name('get_all_users_admin');  
    Route::get('get_user_per/{id}', [AdminController::class, 'get_user_per'])->name('get_user_per');  
    Route::get('get_user_admin/{id}', [AdminController::class, 'get_user_admin'])->name('get_user_admin');  
    Route::get('get_cat_product_on/{id}', [AdminController::class, 'get_cat_product_on'])->name('get_cat_product_on');  
    Route::put('d_active/{id}', [AdminController::class, 'd_active'])->name('d_active');  
    Route::put('active/{id}', [AdminController::class, 'active'])->name('active');  
    Route::put('edit_per/{id}', [AdminController::class, 'edit_per'])->name('edit_per');  
    Route::put('edit_admin/{id}', [AdminController::class, 'edit_admin'])->name('edit_admin');  
    Route::post('create_user_per', [AdminController::class, 'create_user_per'])->name('create_user_per'); 
    Route::post('create_user_admin', [AdminController::class, 'create_user_admin'])->name('create_user_admin'); 
    Route::post('create_product_category', [AdminController::class, 'create_product_category'])->name('create_product_category'); 

    Route::delete('delete_user/{id}', [AdminController::class, 'delete_user'])->name('delete_user');  
    Route::delete('delete_product/{id}', [AdminController::class, 'delete_product'])->name('delete_product');  
    Route::delete('delete_user_admin/{id}', [AdminController::class, 'delete_user_admin'])->name('delete_user_admin');  
    Route::delete('delete_product_cat/{id}', [AdminController::class, 'delete_product_cat'])->name('delete_product_cat');  
    Route::get('get_all_products', [AdminController::class, 'get_all_products'])->name('get_all_products');  
    Route::get('get_all_products_cat', [AdminController::class, 'get_all_products_cat'])->name('get_all_products_cat');  
    Route::put('edit_pr_cat/{id}', [AdminController::class, 'edit_pr_cat'])->name('edit_pr_cat');  
    Route::get('all_categorys_pr', [AdminController::class, 'all_categorys_pr'])->name('all_categorys_pr');  
    Route::post('create_product', [AdminController::class, 'create_product'])->name('create_product');  
    Route::get('getproductdetail/{id}', [AdminController::class, 'getproductdetail'])->name('getproductdetail');  
    Route::post('EditProduct/{id}', [AdminController::class, 'EditProduct'])->name('EditProduct');  
    Route::get('getallarticls', [AdminController::class, 'getallarticls'])->name('getallarticls');  
    Route::delete('deletearticle/{id}', [AdminController::class, 'deletearticle'])->name('deletearticle');
    Route::delete('delete_article_cat/{id}', [AdminController::class, 'delete_article_cat'])->name('delete_article_cat');
    Route::get('get_all_category_blogs', [AdminController::class, 'get_all_category_blogs'])->name('get_all_category_blogs');
    Route::post('cr_ar', [AdminController::class, 'cr_ar'])->name('cr_ar');
    Route::get('category_article_get/{id}', [AdminController::class, 'category_article_get'])->name('category_article_get');
    Route::put('category_article_change/{id}', [AdminController::class, 'category_article_change'])->name('category_article_change');
    Route::post('create_article', [AdminController::class, 'create_article'])->name('create_article');
    Route::get('get_article_detail/{id}', [AdminController::class, 'get_article_detail'])->name('get_article_detail');
    Route::post('edit_article/{id}', [AdminController::class, 'edit_article'])->name('edit_article');
    Route::get('get_ansered_comments', [AdminController::class, 'get_ansered_comments'])->name('get_ansered_comments');
    Route::get('get_not_ansered_comments', [AdminController::class, 'get_not_ansered_comments'])->name('get_not_ansered_comments');
    Route::get('get_ansered_comments_blogs', [AdminController::class, 'get_ansered_comments_blogs'])->name('get_ansered_comments_blogs');
    Route::get('get_not_ansered_comments_blogs', [AdminController::class, 'get_not_ansered_comments_blogs'])->name('get_not_ansered_comments_blogs');
    Route::delete('delete_not_ansered_comments/{id}', [AdminController::class, 'delete_not_ansered_comments'])->name('delete_not_ansered_comments');
    Route::delete('delete_ansered_comments/{id}', [AdminController::class, 'delete_ansered_comments'])->name('delete_ansered_comments');
    Route::delete('delete_not_ansered_comments_blogs/{id}', [AdminController::class, 'delete_not_ansered_comments_blogs'])->name('delete_not_ansered_comments_blogs');
    Route::delete('delete_ansered_comments_blogs/{id}', [AdminController::class, 'delete_ansered_comments_blogs'])->name('delete_ansered_comments_blogs');
    Route::get('get_not_anser/{id}', [AdminController::class, 'get_not_anser'])->name('get_not_anser');
    Route::get('get_anser_pr/{id}', [AdminController::class, 'get_anser_pr'])->name('get_anser_pr');
    Route::post('answer_comment', [AdminController::class, 'answer_comment'])->name('answer_comment');
    Route::post('edit_comment_pr', [AdminController::class, 'edit_comment_pr'])->name('edit_comment_pr');
    Route::get('get_not_anser_blogs/{id}', [AdminController::class, 'get_not_anser_blogs'])->name('get_not_anser_blogs');
    Route::post('answer_comment_blogs', [AdminController::class, 'answer_comment_blogs'])->name('answer_comment_blogs');
    Route::get('get_anser_blogs/{id}', [AdminController::class, 'get_anser_blogs'])->name('get_anser_blogs');
    Route::post('edit_comment_blogs', [AdminController::class, 'edit_comment_blogs'])->name('edit_comment_blogs');
    Route::get('get_all_blogs_ai', [AdminController::class, 'get_all_blogs_ai'])->name('get_all_blogs_ai');
    Route::delete('delete_blogs_title_ai/{id}', [AdminController::class, 'delete_blogs_title_ai'])->name('delete_blogs_title_ai');
    Route::get('get_ai_blogs/{id}', [AdminController::class, 'get_ai_blogs'])->name('get_ai_blogs');
    Route::put('update_ai_blogs/{id}', [AdminController::class, 'update_ai_blogs'])->name('update_ai_blogs');
    Route::get('get_detail_trx_page', [AdminController::class, 'get_detail_trx_page'])->name('get_detail_trx_page');
    Route::delete('delete_transaction_None/{id}', [AdminController::class, 'delete_transaction_None'])->name('delete_transaction_None');
    Route::delete('delete_transaction_Accept/{id}', [AdminController::class, 'delete_transaction_Accept'])->name('delete_transaction_Accept');
    Route::delete('delete_transaction_refus/{id}', [AdminController::class, 'delete_transaction_refus'])->name('delete_transaction_refus');
    Route::get('receved_deliveris', [AdminController::class, 'receved_deliveris'])->name('receved_deliveris');
    Route::delete('receved_deliveris_delete/{id}', [AdminController::class, 'receved_deliveris_delete'])->name('receved_deliveris_delete');
    Route::get('none_deliveris', [AdminController::class, 'none_deliveris'])->name('none_deliveris');
    Route::delete('none_deliveris_delete/{id}', [AdminController::class, 'none_deliveris_delete'])->name('none_deliveris_delete');
    Route::delete('none_deliveris_delivered/{id}', [AdminController::class, 'none_deliveris_delivered'])->name('none_deliveris_delivered');
    Route::get('all_address', [AdminController::class, 'all_address'])->name('all_address');
    Route::delete('delete_address/{id}', [AdminController::class, 'delete_address'])->name('delete_address');
    Route::get('address_info/{id}', [AdminController::class, 'address_info'])->name('address_info');
    Route::delete('delete_address/{id}', [AdminController::class, 'delete_address'])->name('delete_address');
    Route::put('address_update/{id}', [AdminController::class, 'address_update'])->name('address_update');
    Route::get('product_view', [AdminController::class, 'product_view'])->name('product_view');
    Route::get('blog_view', [AdminController::class, 'blog_view'])->name('blog_view');
    Route::get('other_view', [AdminController::class, 'other_view'])->name('other_view');
    Route::post('sendsms', [AdminController::class, 'sendsms'])->name('sendsms');


 
      








});  
 
Route::group(['prefix' => 'Ai',], function () {  

    Route::get('all_title_blog', [Ai::class, 'all_title_blog'])->name('all_title_blog');  
    Route::get('get_all_blog', [Ai::class, 'get_all_blog'])->name('get_all_blog');  
    Route::post('set_title_ai', [Ai::class, 'set_title_ai'])->name('set_title_ai');  
    Route::get('get_last_title', [Ai::class, 'get_last_title'])->name('get_last_title');  
    Route::get('delete_last_title', [Ai::class, 'delete_last_title'])->name('delete_last_title');  
    Route::get('get_all_key_words', [Ai::class, 'get_all_key_words'])->name('get_all_key_words');  
    Route::post('add_key_word', [Ai::class, 'add_key_word'])->name('add_key_word');  
    Route::post('set_article', [Ai::class, 'set_article'])->name('set_article');  
    Route::get('get_questchen', [Ai::class, 'get_questchen'])->name('get_questchen');  
    
    Route::post('set_result_blog', [Ai::class, 'set_result_blog'])->name('set_result_blog');  
    Route::get('get_questchen_pr', [Ai::class, 'get_questchen_pr'])->name('get_questchen_pr'); 
    Route::post('set_questchen_pr', [Ai::class, 'set_questchen_pr'])->name('set_questchen_pr');  



});  

Route::get('ContactApi', [AdminController::class, 'ContactApi'])->name('ContactApi'); 
Route::delete('DeleteContactApi/{id}', [AdminController::class, 'DeleteContactApi'])->name('DeleteContactApi'); 
        