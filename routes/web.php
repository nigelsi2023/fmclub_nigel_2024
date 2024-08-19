<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/404', function(){
   return view('errors/404'); 
});
Route::get('test', 'TestController@index');
Route::get('live-product2-data', 'TestController@live_product2_data');
Route::get('live-product-data', 'TestController@live_product_data');
Route::get('update-email-list', 'EmailController@index');

Route::get('disclaimer', function(){
    return view('financepro.pages.disclaimer');
})->name('disclaimer');
Route::get('privacy-policy', function(){
    return view('financepro.pages.privacy-policy');
})->name('privacy.policy');
Route::get('cookie-policy', function(){
    return view('financepro.pages.cookie-policy');
})->name('cookie.policy');

Route::get('/', function () {
    $posts = DB::table('trader_blogs')->orderBy('id', 'DESC')->offset(0)->limit(5)->get();
    $post  = DB::table('trader_blogs')->orderBy('id', 'DESC')->first();
    $signal= DB::table('signals')->WHERE('signal_privacy','public')->orderBy('id', 'DESC')->offset(0)->limit(5)->get();
    
    
    $last30days = DB::table("signals")
    ->where('status', '1')
    ->where('created_at', '>', now()->subDays(30)->endOfDay())
    ->get();
    
   if(isset($_GET['Ref'])){
        setcookie('Ref', $_GET['Ref'], time()+60*60*24*30);
    }
    
    return view('financepro.pages.index2',['posts'=>$posts,'tBlog'=>$post,'signals'=>$signal,'last30days'=>$last30days]);
})->name('index');      



Route::get('/go-vip', function(){
    $packages = DB::table('packages')->get();
    return view('financepro.pages.price',['packages'=>$packages]);
})->name('go-vip');




//New Forex-Signal
Route::get('/forex-signal','ForexSignalsNEWController@forexsignalsget')->name('forex-signal');

//New Live Forex Signal
Route::get('/live-forex-signal','ForexSignalsNEWController@liveForexSignals')->name('live-forex-signal');

// OilGoldPaperTradingExpert
Route::get('oil_gold_paper_trading_expert', 'OilGoldPaperTradingExpertController@index')->name('oil_gold_paper_trading_expert');
Route::post('oil_gold_paper_trading_expert/send_info', 'OilGoldPaperTradingExpertController@sendInfo')->name('oil_gold_paper_trading_expert.sendinfo');


Route::get('cron', 'CronController@index')->name('cron');

Route::post('/subscriber', 'SubscriberController@add')->name('subscribe.create');


Auth::routes();

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/register2', function () {
    return view('auth.register2');
})->name('register2');

Route::post('register', 'CustomAuthController@register');
Route::post('register2', 'CustomAuthController@register2');

Route::get('profile', 'UserProfileController@index')->name('profile')->middleware('auth');
Route::post('profile', 'UserProfileController@update_profile')->name('update_profile');

Route::get('account-settings', 'UserProfileController@account')->name('account')->middleware('auth');
Route::post('account-settings', 'UserProfileController@password')->name('password');

Route::resource('products','ProductController');

// Products Buy

Route::get('products/buy/{id}', 'ProductController@buy')->name('product.buy');
Route::post('products/buy/{id}', 'ProductController@buy_product')->name('buy_product');

// Products Sell

Route::get('products/sell/{id}', 'ProductController@sell')->name('product.sell');
Route::post('products/sell/{id}', 'ProductController@sell_product')->name('sell_product');

// Share Buy

Route::get('share/buy/{id}', 'ProductController@buy_share')->name('share.buy');
Route::post('share/buy/{id}', 'ProductController@buy_share_process')->name('buy_share');

// Share Sell

Route::get('share/sell/{id}', 'ProductController@sell_share')->name('share.sell');
Route::post('share/sell/{id}', 'ProductController@sell_share_process')->name('sell_share');



Route::get('stock-charts', 'StockController@index')->name('stock-charts');

Route::post('ticker', 'StockController@ticker')->name('ticker');
Route::post('compare', 'StockController@compare')->name('compare');
Route::post('moving', 'StockController@moving')->name('moving');
Route::post('technical', 'StockController@technical')->name('technical');



Route::get('about-us', function () {
	$desc_blogs         = DB::table('trader_blogs')->orderBy('created_at', 'desc')->limit(5)->get();
	$trader_category    = DB::table('trader_categories')->orderBy('name', 'asc')->get();
    return view('financepro.pages.about_us', compact('desc_blogs', 'trader_category'));
})->name('about_us');

Route::get('why-choose-us', function () {
    return view('financepro.pages.why_choose');
})->name('why_choose');


Route::get('stock-charts', function () {
    return view('financepro.pages.stock_chart');
})->name('stock_chart');

Route::get('contact', 'ContactController@index')->name('contact');
Route::get('/contact/success/{name}', 'ContactController@success')->name('contact.success');
Route::post('contact', 'ContactController@send_message');




Route::get('faq', 'UserFaqController@faqs')->name('faq');
Route::post('faq-search', 'UserFaqController@faq_search')->name('faq_search');

Route::get('dse', function () {
   return view('financepro.pages.dse');
})->name('dse');

Route::get('uk', function () {
   return view('financepro.pages.uk');
})->name('uk');

Route::get('us-dow', function () {
   return view('financepro.pages.us_dow');
})->name('us_dow');

Route::get('nasdaq', function () {
   return view('financepro.pages.nasdaq');
})->name('nasdaq');

Route::get('currencies', function () {
   return view('financepro.pages.currencies');
})->name('currencies');

Route::get('commodities', function () {
   return view('financepro.pages.commodities');
})->name('commodities');

Route::get('share-market-course', function () {
   return view('financepro.pages.share_market');
})->name('share_market');

Route::get('monthly-competition', function () {
   return view('financepro.pages.monthly_competition');
})->name('monthly_competition');





Route::get('company-analysis', 'PostController@company')->name('company-analysis');
Route::get('learning-center', 'PostController@index')->name('learning-center');

//Route::get('learning-center/category/{id}','PostController@learning_category_view')->name('learning_category');
Route::get('learning-center/category/{id}','PostController@learning_category_view2')->name('learning_category');

Route::get('trader-blog', 'PostController@trader_blog')->name('trader-blog');
//Route::get('trader-blog/category/{id}','PostController@trader_category_view')->name('trader_category');
Route::get('trader-blog/category/{id}','PostController@trader_category_view2')->name('trader_category');

Route::get('forum', 'PostController@forum')->name('forum');
//Route::get('forum/category/{id}', 'PostController@forum_category_view')->name('forum.category');
Route::get('forum/category/{id}', 'PostController@forum_category_view2')->name('forum.category');
Route::get('forum/create', 'ForumInsertController@create')->name('forum.create');
Route::post('forum/create', 'ForumInsertController@insert')->name('forum.insert');
//Route::get('forum/{id}', 'PostController@forum_view')->name('forum.view');

Route::get('forum/{id}', 'PostController@forum_view2')->name('forum.view');


Route::get('home', function () {
    // return view('financepro.pages.index');
    return redirect(route('index'));
});


//see one Post
//Route::get('learning-center/{id}','PostBlogController@fulldata')->name('fullpost');
Route::get('learning-center/{id}','PostBlogController@fulldata2')->name('fullpost');
//Route::get('trader-blog/{id}','PostController@fulldata')->name('fulltraderpost');
Route::get('trader-blog/{id}','PostController@fulldata2')->name('fulltraderpost');

// Checkout Page
// Route::get('signal/checkout/{id}', 'SignalController@checkout');
    Route::get('checkout/{id}', 'CheckoutController@index')->name('checkout');
    Route::post('/checkout/store', 'CheckoutController@store')->name('checkout.add');

// Paypal payment route
    // Route::post('pay','PaymentController@pay')->name('payment');
    // Route::get('success','PaymentController@success');
    // Route::get('error','PaymentController@error');
    // Route::get('signup-complete', 'PaymentController@index')->name('signup_complete');
    
    // // //sammy
    // Route::get('signup_complete', 'PaymentController@signup_complete');
    
   
    
    
// Route::get('/home', 'HomeController@index')->name('home');



//Admin Controller

Route::group(['prefix'=>'admin', 'middleware'=>'admin'], function(){
	Route::resource('category', 'CategoryController');
	Route::resource('trader-category', 'TraderCategoryController');
	Route::resource('forum-category', 'ForumCategoryController');
	Route::resource('signal', 'SignalController');
	Route::resource('userdelete', 'RegisterUserDeleteController');
	//Route::resource('usercolorselect', 'UserColorController');
    Route::post('signal/updateSignalStatus/{id}','SignalController@updateSignalStatus')->name('updatestatus');
    
    
    //Scott
    Route::get('/signalcsv_file/export','SignalcsvFile@csv_export')->name('signalexport');
    Route::post('/signalcsv_file/import','SignalcsvFile@csv_import')->name('signalimport');
});

// mac
//Route::get('signal/registeredUser/{id}','UserColorController@create');
Route::post('signal/registeredUser/store-color/{id}','UserColorsSelController@updatex');
Route::post('signal/registeredUser/store-uncolor/{id}','UserColorsSelController@uncolor');

// Route::post('signal/registeredUser/send-mail','RegUserSendMailController@sendmail');
// //Route::get('/signal/registeredUser/send-mail','RegUserSendMailController@sendmail2');

// Route::get('signal/registeredUser/view-history/{id}','RegUserSendMailController@viewmail');

// Route::post('signal/registeredUser/save-send-mail','RegUserSaveSendMailController@saveandsendmail');

Route::post('signal/registeredUser/store-p-id/{id}','UserPaymentStatusController@paidstatus');
Route::post('signal/registeredUser/store-un-pid/{id}','UserPaymentStatusController@unpaidstatus');

Route::get('signal/all-emails','AllEmailsController@viewallmail')->middleware('admin');
Route::post('signal/delete-save-send/{id}','AllEmailsController@deletemail')->middleware('admin');

Route::get('signal/registeredUser','SignalController@signalRegisterdUser')->name('')->middleware('admin');
//Route::get('signal/registeredUser','SignalController@dropallmail')->name('')->middleware('admin');


Route::get('admin', 'AdminAuthController@index')->name('admin');
Route::post('admin', 'AdminAuthController@login');

Route::get('admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard')->middleware('auth');

Route::get('admin/profile', 'AdminController@profile')->name('admin.profile')->middleware('auth');
Route::post('admin/profile', 'AdminController@profile_update')->name('admin.update')->middleware('auth');

Route::get('admin/account-settings', 'AdminController@account')->name('admin.account')->middleware('auth');
Route::post('admin/account-settings', 'AdminController@password')->name('admin.password');
Route::post('admin/change-password', 'AdminController@change_password')->name('admin.change_password');

Route::get('admin/product', 'AdminController@otherindex')->name('product')->middleware('auth');
Route::get('admin/product/add', 'AdminController@add_product')->name('product.add')->middleware('auth');
Route::post('admin/product/add', 'AdminController@store_product')->name('product.store')->middleware('auth');

//Admin List Of Project
Route::get('admin/admins', 'AdminController@admins')->name('admin.index')->middleware('auth');
Route::get('admin/admin/create', 'AdminController@admin_create')->name('admin.create')->middleware('auth');
Route::post('admin/admin/create', 'AdminController@admin_store')->name('admin.store')->middleware('auth');


// User List Of Project

Route::get('admin/users', 'AdminController@users')->name('admin.users')->middleware('auth');
Route::get('admin/users/ban/{id}', 'AdminController@users_ban')->name('admin.users.ban')->middleware('auth');
Route::get('admin/users/unban/{id}', 'AdminController@users_unban')->name('admin.users.unban')->middleware('auth');
Route::post('admin/users/delete/{id}', 'AdminController@users_delete')->name('admin.users.delete')->middleware('auth');


//Insert Posts
Route::get('admin/insert','PostInsertController@show')->name('postshow')->middleware('auth');

Route::post('admin/create','PostInsertController@insert')->middleware('auth');



//Blog Posts

Route::get('admin/view-post','PostDeleteController@show')->name('postdelete')->middleware('auth');
Route::get('admin/view-post/view/{id}','PostDeleteController@view')->name('postview')->middleware('auth');
Route::get('admin/view-post/edit/{id}','PostDeleteController@edit')->name('editpost')->middleware('auth');
Route::post('admin/view-post/edit/{id}','PostDeleteController@update')->name('updatepost')->middleware('auth');
Route::get('admin/delete/{id}','PostDeleteController@delete')->middleware('auth');


// //Insert Signal
// Route::get('admin/insert','PostInsertController@show')->name('postshow')->middleware('auth');
// Route::post('admin/create','PostInsertController@insert')->middleware('auth');
// //Blog Signal
// Route::get('admin/view-post','PostDeleteController@show')->name('postdelete')->middleware('auth');
// Route::get('admin/view-post/view/{id}','PostDeleteController@view')->name('postview')->middleware('auth');
// Route::get('admin/view-post/edit/{id}','PostDeleteController@edit')->name('editpost')->middleware('auth');
// Route::post('admin/view-post/edit/{id}','PostDeleteController@update')->name('updatepost')->middleware('auth');
// Route::get('admin/delete/{id}','PostDeleteController@delete')->middleware('auth');



// Trader Blog Post

Route::get('admin/trader-post/insert','PostInsertController@show_trader')->name('traderadd')->middleware('auth');
Route::post('admin/trader-post/insert','PostInsertController@insert_trader')->middleware('auth');

Route::get('admin/view-trader-post','TraderPostController@show')->name('traderpost')->middleware('auth');
Route::get('admin/view-trader-post/view/{id}','TraderPostController@view')->name('traderpostview')->middleware('auth');
Route::get('admin/view-trader-post/edit/{id}','TraderPostController@edit')->name('edittraderpost')->middleware('auth');
Route::post('admin/view-trader-post/edit/{id}','TraderPostController@update')->name('update_trader_post')->middleware('auth');

Route::get('admin/view-trader-post/delete/{id}','TraderPostController@delete')->middleware('auth');


// Forum Post
Route::get('admin/forum-post/insert','PostInsertController@show_forum')->name('forumadd')->middleware('auth');
Route::post('admin/forum-post/insert','PostInsertController@insert_forum')->middleware('auth');

Route::get('admin/view-forum-post','ForumController@show')->name('forumpost')->middleware('auth');
Route::get('admin/view-forum-post/view/{id}','ForumController@view')->name('forumpostview')->middleware('auth');
Route::get('admin/view-forum-post/edit/{id}','ForumController@edit')->name('editforumpost')->middleware('auth');
Route::post('admin/view-forum-post/edit/{id}','ForumController@update')->name('update_forum_post')->middleware('auth');

Route::get('admin/view-forum-post/delete/{id}','ForumController@delete')->middleware('auth');





// Comments
Route::get('admin/comments','AdminPostCommentController@all_comments')->name('comment.index')->middleware('auth');
Route::get('admin/comments/delete/{id}','CommentController@delete')->middleware('auth');

// Trader Comments
Route::get('admin/trader-comments','AdminPostCommentController@all_trader_comments')->name('trader_comment.index')->middleware('auth');
Route::get('admin/trader-comments/delete/{id}','TraderCommentController@delete')->middleware('auth');

// Forum Comments
Route::get('admin/forum-comments','AdminPostCommentController@all_forum_comments')->name('forum_comment.index')->middleware('auth');
Route::get('admin/forum-comments/delete/{id}','ForumCommentController@delete')->middleware('auth');


// FAQ
Route::resource('admin/faqs','FaqController')->middleware('auth');

// Contact Message
Route::get('admin/contact', 'AdminContactController@view_contacts')->name('contact.view')->middleware('auth');
Route::get('admin/contact/{id}', 'AdminContactController@view')->name('contact.singleview')->middleware('auth');
Route::get('admin/contact/destroy/{id}', 'AdminContactController@destroy')->name('contact.destroy')->middleware('auth');
Route::get('admin/contact/history/{id}', 'AdminContactController@history')->name('contact.history')->middleware('auth');


// Subscriber
Route::get('admin/subscriber', 'AdminSubscriberController@view')->name('subscriber.view')->middleware('auth');
Route::get('admin/subscriber/delete/{id}','AdminSubscriberController@delete')->name('subscriber.delete')->middleware('auth');
//new
Route::post('admin/subscriber/delete-selected','AdminSubscriberController@deleteselected')->name('subscriber.deleteselected')->middleware('auth');











// Comment
Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');

Route::get('/comment/edit/{id}', 'CommentController@edit')->name('comment.edit');
Route::post('/comment/edit/{id}', 'CommentController@update')->name('comment.update');
Route::get('/comment/delete/{id}', 'CommentController@delete')->name('comment.delete');;



// Trader Comment
Route::post('/trader-comment/store', 'TraderCommentController@store')->name('trader_comment.add');
Route::post('/trader-reply/store', 'TraderCommentController@replyStore')->name('trader_reply.add');

Route::get('/trader-comment/edit/{id}', 'TraderCommentController@edit')->name('trader_comment.edit');
Route::post('/trader-comment/edit/{id}', 'TraderCommentController@update')->name('trader_comment.update');
Route::get('/trader-comment/delete/{id}', 'TraderCommentController@delete')->name('trader_comment.delete');




// Forum Comment
Route::post('/forum-comment/store', 'ForumCommentController@store')->name('forum_comment.add');
Route::post('/forum-reply/store', 'ForumCommentController@replyStore')->name('forum_reply.add');

Route::get('/forum-comment/edit/{id}', 'ForumCommentController@edit')->name('forum_comment.edit');
Route::post('/forum-comment/edit/{id}', 'ForumCommentController@update')->name('forum_comment.update');
Route::get('/forum-comment/delete/{id}', 'ForumCommentController@delete')->name('forum_comment.delete');



/**
 * ===============< Affiliate >=================
*/
// Route::get('affiliate', 'AffiliatController@index');
Route::group([
    'prefix' => 'affiliate', //URL
    'as' => 'affiliate.', //Route
    // 'namespace' => '', // Controller
],
    function(){
        Route::get('/', 'AffiliatController@index')->name('index');
        Route::get('/login', 'AffiliatController@login')->name('login');
        Route::get('/registration', 'AffiliatController@registration')->name('registration');
        Route::post('/logout', 'AffiliatController@logoutAffiliate')->name('logout');
        Route::post('/store', 'AffiliatController@store')->name('store');

        Route::post('/login', 'AffiliatorLoginController@login')->name('login');
    }
);


/**
 * ===============< Admin Affiliators >=================
*/
Route::group([
    'prefix' => 'admin', //URL
    'as' => 'admin.', //Route
    'middleware' => ['auth', 'admin'], // Middleware
],
    function(){
        Route::get('/affiliators', 'AdminAffiliatorController@index')->name('affiliators.index');
        Route::get('/affiliators/show/{id}', 'AdminAffiliatorController@show')->name('affiliators.show');
    }
);


/**
 * ===============< Affiliator Routes >=================
*/
Route::group([
    'prefix' => 'affiliator', //URL
    'as' => 'affiliator.', //Route
    'middleware' => ['auth', 'affiliator'], // Middleware
],
    function(){
        Route::get('/dashboard', 'AffiliatorDashboardController@index')->name('dashboard.index');

        // AffiliatorReferralController
        Route::get('/referrals', 'AffiliatorReferralController@index')->name('referral.index');
        Route::get('/referrals/create', 'AffiliatorReferralController@create')->name('referral.create');
    }
);
