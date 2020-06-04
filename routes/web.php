<?php

use App\Http\Controllers\Admin\IndexContorller;
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


Route::get('admin/login', 'Admin\AuthController@create')->name('admin.showlogin');
Route::post('admin/login', 'Admin\AuthController@store')->name('admin.login');

Route::namespace('Admin')->prefix('admin')->middleware('auth:admin')->group(function() {
    Route::get('/', 'IndexController@index')->name('admin.index');
    Route::resource('/table', 'ModelTableController');
    Route::resource('/tables.groups', 'FieldGroupController');
    Route::resource('/group.field', 'TableFieldController');
    Route::get('/customer/create', 'CustomerController@create')->name('admin.customer.create');
    Route::get('/customer/{customer?}/{section?}', 'CustomerController@show')->name('admin.customer.index')->middleware('data.exist');
    

    Route::post('/customer/{customer?}/{section?}', 'CustomerController@store')->name('admin.customer.store');//新增

    Route::get('/customer/{customer}/edit/{section?}', 'CustomerController@edit')->name('admin.customer.edit');//编辑

    Route::put('/customer/{customer}/{section?}', 'CustomerController@update')->name('admin.customer.update')->middleware('input.set');//更新

    Route::post('/{customer?}/callback/', 'CallbackController@store')->name('admin.callback.store');
    Route::delete('/callback/{id}', 'CallbackController@destroy')->name('admin.callback.destroy');
    Route::post('/{customer?}/consume', 'ConsumeController@store')->name('admin.consume.store');

    Route::resource('user.prescribe', 'CustomerPrescribeController');
    Route::resource('user.aplasticdata', 'CustomerOrderController');

    Route::put('/plan/{user}/update', 'DryeyePlanController@update')->name('plan.update');

    Route::resource('/user.myopias', 'CustomerMyopiaController')->shallow();
    Route::resource('/user.records', 'CustomerRecordController')->shallow();
    Route::resource('/user.comments', 'CustomerCommentController')->shallow();

    Route::post('/upload', 'UploadController@store')->name('admin.upload');

    Route::get('users', 'UserController@index')->name('admin.users.index');

    Route::resource('manager/roles', 'RoleController');
    Route::resource('manager/manager', 'ManagerController');
    Route::resource('shop/shops', 'ShopController');
    Route::resource('shop/areas', 'ShopAreaController');

    Route::get('shopdoctor/{shop?}', 'ShopDoctorController@index')->name('admin.shopdoctor');

    Route::get('exp', 'ExportController@index');

    Route::get('/qrcode', 'WechatQrcodeController@show');

    Route::resource('project/{type}/brand', 'BrandController')->middleware('brand.type');
    Route::resource('project/school', 'SchoolController');

    Route::resource('project/{type}/category', 'CategoryController')->middleware('category.type');

    Route::resource('subscribe/appointment', 'AppointmentController');
    Route::resource('subscribe/reservation', 'ReservationController');
    Route::resource('doctors', 'DoctorController');

    Route::resource('setting/banner', 'BannerController');
    
    
    //Route::resource('')
});
