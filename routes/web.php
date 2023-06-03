<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome1');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/placeorder', [UserController::class, 'myOrders'])->name('placeorder');
    Route::get('/payments', [UserController::class, 'payments'])->name('payments');
    
    Route::get('/settings', [UserController::class, 'settings'])->name('settings');


    Route::get('/newOrder', function () {
       return view('order.placeOrder');
    })->name('newOrder');
});


Route::post('/orderInfo', function () {
    // Retrieve the form data from the request
    dd("test");
});

// Route::get('/makePayment', function () {
//     return view('order.makePayment');
//  })->name('makePayment');

Route::post('/makePayment/{id}', [UserController::class, 'makePaymentOrder'])->name('makePayment');

Route::post('/makePayment', [UserController::class, 'makePaymentOrder'])->name('makePayment');





Route::get('/about', function () {
    return view('user.aboutUsPage');
})->name('about');

Route::get('/contact', function () {
    return view('user.sendUsMessage');
})->name('contact');

Route::get('/notfound', function () {
    return view('user.notFound');
});



Route::get('/addFunds', function () {
    return view('Order.addFunds');
})->name('addFunds');

Route::get('/summary', function () {
    return view('Order.orderSummary');
});


// Route::get('/settings', function () {
//     return view('userPanel.settings');
// })->name('settings');



Route::post('/orderInfo', [UserController::class, 'orderInfo']);

Route::post('/orderPayment', [UserController::class, 'orderPayment']);








/////////////// Routes from Previous Project /////////////



Route::get('/wel', function () {
    return view('welcome1');
});
Route::get('/order', function () {
    return view('Order.placeOrder');
});



Route::get('/signup', function () {
    return view('user.signup');
});

Route::get('/signin', function () {
    return view('user.signin');
});




//////////////////////////


// Route::get('/dashboard', function () {
//     return view('userPanel.sidepanel');
// })->name('dashboard');

Route::get('/orders', function () {
    return view('userPanel.sidepanel');
})->name('orders');
// Route::get('/payments', function () {
//     return view('userPanel.sidepanel');
// })->name('payments');


Route::get('/test', function () {
    return view('userPanel.test');
});