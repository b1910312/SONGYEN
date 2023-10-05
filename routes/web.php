<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Mail\DemoMail;
use App\Mail\FeedbackMail;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('user.home');
// })->name('home1');
// Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
// Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
// Route::get('/event', [App\Http\Controllers\HomeController::class, 'event'])->name('event');
// Route::get('/contact', function () {
//     return view('user.contact');
// })->name('contact');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home1');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/event', [App\Http\Controllers\HomeController::class, 'event'])->name('event');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('/EmailToCustomer', [App\Http\Controllers\HomeController::class, 'mailtocus'])->name('mailtocus');
Route::post('/send', [App\Http\Controllers\FeedbackController::class, 'SendFeedBack'])->name('user.feedback.send');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admins', 'middleware' => 'auth'], function () {
    Route::get('/addThumbnail/{post}/{type}/{image}', [AdminController::class, 'addThumbnail'])->name('admin.addthumbnail');
    Route::post('/updateThumbnail/{post}/{type}/', [AdminController::class, 'updateThumdnail'])->name('admin.updatethumbnail');
    Route::get('/changepassword', [AdminController::class, 'changepassword'])->name('admin.changePass');
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');
    Route::get('/profile/{email}', [App\Http\Controllers\AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/seacrch', [App\Http\Controllers\AdminController::class, 'search'])->name('admin.search');
    Route::group(['prefix' => 'users'], function () {
        Route::group(['prefix' => 'customers'], function () {
            Route::get('/', [App\Http\Controllers\CustomerController::class, 'index'])->name('admin.customer.home');
            Route::post('/add', [App\Http\Controllers\CustomerController::class, 'add'])->name('admin.customer.add');
            Route::post('/update/{id}', [App\Http\Controllers\CustomerController::class, 'update'])->name('admin.customer.update');
            Route::post('/updateimage/{id}', [App\Http\Controllers\CustomerController::class, 'updateimage'])->name('admin.customer.update.image');
            Route::get('/updaterole/{email}', [App\Http\Controllers\CustomerController::class, 'updaterole'])->name('admin.customer.update.role');
            Route::get('/delete/{id}', [App\Http\Controllers\CustomerController::class, 'delete'])->name('admin.customer.delete');
        });
        Route::group(['prefix' => 'members'], function () {
            Route::get('/', [App\Http\Controllers\SYmemberController::class, 'index'])->name('admin.member.home');
            Route::post('/add', [App\Http\Controllers\SYmemberController::class, 'add'])->name('admin.member.add');
            Route::post('/update/{id}', [App\Http\Controllers\SYmemberController::class, 'update'])->name('admin.member.update');
            Route::post('/updateimage/{id}', [App\Http\Controllers\SYmemberController::class, 'updateimage'])->name('admin.member.update.image');
            Route::get('/updaterole/{email}', [App\Http\Controllers\SYmemberController::class, 'updaterole'])->name('admin.member.update.role');
            Route::get('/delete/{id}', [App\Http\Controllers\SYmemberController::class, 'delete'])->name('admin.member.delete');
        });
        Route::group(['prefix' => 'decentralizations'], function () {
            Route::get('/', [App\Http\Controllers\AdminController::class, 'decentralization'])->name('admin.decentralization.home');
        });
        Route::get('/comment', [CommentController::class, 'homecomment'])->name('comment.home');
    });
    Route::group(['prefix' => 'blogs'], function () {
        Route::group(['prefix' => 'post'], function () {
            Route::get('/', [App\Http\Controllers\BlogController::class, 'index'])->name('admin.blog.home');
            Route::get('/new', [App\Http\Controllers\BlogController::class, 'new'])->name('admin.blog.new');
            Route::get('/edit/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('admin.blog.edit');
            Route::post('/add', [App\Http\Controllers\BlogController::class, 'add'])->name('admin.blog.add');
            Route::post('/update/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('admin.blog.update');
            Route::get('/delete/{id}', [App\Http\Controllers\BlogController::class, 'delete'])->name('admin.blog.delete');
        });

        Route::group(['prefix' => 'categories'], function () {
            Route::get('/', [App\Http\Controllers\CategoriesController::class, 'index'])->name('admin.cate.home');
            Route::post('/add', [App\Http\Controllers\CategoriesController::class, 'add'])->name('admin.cate.add');
            Route::post('/update/{id}', [App\Http\Controllers\CategoriesController::class, 'update'])->name('admin.cate.update');
            Route::get('/delete/{id}', [App\Http\Controllers\CategoriesController::class, 'delete'])->name('admin.cate.delete');
        });
        Route::group(['prefix' => 'rates'], function () {
            Route::get('/', [App\Http\Controllers\RateController::class, 'index'])->name('admin.rate.home');
        });
        Route::group(['prefix' => 'comments'], function () {
            Route::get('/', [App\Http\Controllers\CommentController::class, 'index'])->name('admin.comment.home');
            Route::get('/add', [App\Http\Controllers\CommentController::class, 'addcomment'])->name('admin.comment.add');
            Route::get('/reply/{id}', [App\Http\Controllers\CommentController::class, 'replycomment'])->name('admin.comment.reply');
            Route::get('/update/{id}', [App\Http\Controllers\CommentController::class, 'updatecomment'])->name('admin.comment.update');
            Route::get('/show/{id}', [App\Http\Controllers\CommentController::class, 'showcomment'])->name('admin.comment.show');
            Route::get('/hide/{id}', [App\Http\Controllers\CommentController::class, 'hidecomment'])->name('admin.comment.hide');
            Route::get('/delete{id}', [App\Http\Controllers\CommentController::class, 'deletecomment'])->name('admin.comment.delete');
        });
    });
    Route::group(['prefix' => 'events'], function () {
        Route::get('/', [App\Http\Controllers\EventController::class, 'index'])->name('admin.event.home');
        Route::get('/new', [App\Http\Controllers\EventController::class, 'new'])->name('admin.event.new');
        Route::get('/edit/{id}', [App\Http\Controllers\EventController::class, 'edit'])->name('admin.event.edit');
        Route::post('/add', [App\Http\Controllers\EventController::class, 'add'])->name('admin.event.add');
        Route::post('/update/{id}', [App\Http\Controllers\EventController::class, 'update'])->name('admin.event.update');
        Route::get('/delete/{id}', [App\Http\Controllers\EventController::class, 'delete'])->name('admin.event.delete');
    });
    Route::group(['prefix' => 'partner'], function () {
        Route::get('/', [App\Http\Controllers\PartnerController::class, 'index'])->name('admin.partner.home');
        Route::post('/add', [App\Http\Controllers\PartnerController::class, 'add'])->name('admin.partner.add');
        Route::post('/update/{id}', [App\Http\Controllers\PartnerController::class, 'update'])->name('admin.partner.update');
        Route::post('/updateimage/{id}', [App\Http\Controllers\PartnerController::class, 'updateimage'])->name('admin.partner.update.image');
        Route::get('/delete/{id}', [App\Http\Controllers\PartnerController::class, 'delete'])->name('admin.partner.delete');
    });
    Route::group(['prefix' => 'feedbacks'], function () {
        Route::get('/', [App\Http\Controllers\FeedbackController::class, 'index'])->name('admin.feedback.home');
        Route::get('/reply/{id}', [App\Http\Controllers\FeedbackController::class, 'ReplyFeedBack'])->name('admin.feedback.reply');
    });
    Route::group(['prefix' => 'statistics'], function () {
        Route::get('/', [App\Http\Controllers\AdminController::class, 'statistics'])->name('admin.statistics.home');
    });
});
Route::group(['prefix' => 'users', 'middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('user.home');
    Route::get('/profile/{email}', [App\Http\Controllers\HomeController::class, 'profile'])->name('user.profile');
    Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('user.about');
    Route::get('/service', [App\Http\Controllers\HomeController::class, 'service'])->name('user.service');
    Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('user.blog');
    Route::get('/event', [App\Http\Controllers\HomeController::class, 'event'])->name('user.event');
    Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('user.contact');
    Route::get('/blog-details', [App\Http\Controllers\HomeController::class, 'blogdetails'])->name('user.blogdetails');
    Route::get('/event-details', [App\Http\Controllers\HomeController::class, 'eventdetails'])->name('user.eventdetails');
    Route::get('/service-details', [App\Http\Controllers\HomeController::class, 'servicedetails'])->name('user.servicedetails');
    route::group(['prefix' => 'comment'], function () {
        Route::post('/add', [CommentController::class, 'addcomment'])->name('comment.add');
        Route::get('/reply/{id}', [CommentController::class, 'replycomment'])->name('comment.reply');
        Route::post('/update', [CommentController::class, 'updatecomment'])->name('comment.update');
        Route::get('/delete/{id}', [CommentController::class, 'deletecomment'])->name('comment.delete');
        Route::get('/hide/{id}', [CommentController::class, 'hidecomment'])->name('comment.hide');
        Route::get('/show/{id}', [CommentController::class, 'showcomment'])->name('comment.show');
    });
    Route::post('/ContactSendingMailToCus', [App\Http\Controllers\SendMailController::class, 'AfterContact'])->name('mailtocus');
});