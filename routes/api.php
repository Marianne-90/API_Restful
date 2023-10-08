<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Buyer\BuyerController; // Importa el controlador
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Transaction\TransactionController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Product\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



//Route::resource('buyers', BuyerController::class)->only(['index', 'show']); //*? un sujeto recomienda usar apiResoures 


//* Buyers *//

Route::apiResource('buyers', BuyerController::class)->only(['index', 'show']); 

//* Category *//

Route::apiResource('category', CategoryController::class)->except(['create', 'edit']); 

//* Seller *//

Route::apiResource('seller', SellerController::class)->only(['index', 'show']); 

//* Transaction *//

Route::apiResource('transaction', TransactionController::class)->only(['index', 'show']); 

//* User *//

Route::apiResource('user', UserController::class)->only(['index', 'show']); 

//* Product *//

Route::apiResource('product', ProductController::class)->except(['create', 'edit']); 

