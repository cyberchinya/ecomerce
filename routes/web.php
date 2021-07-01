<?php
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', HomeComponent::class);

Route::get('shop',ShopComponent::class);

Route::get('/cart', CartComponent::class);

Route::get('/checkout', CheckoutComponent::class);

/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/

//For user or customer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
  Route::get('/user/dashboard',\App\Http\Livewire\User\UserDashboardComponent::class)->name('user.dashboard');
});
//For admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
Route::get('/admin/dashboard', \App\Http\Livewire\Admin\AdminDashboardComponent::class)->name('admin.dashboard');
});
