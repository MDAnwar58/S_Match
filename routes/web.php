<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', 'Frontend\WelcomeController@index')->name('welcome This site');

Auth::routes();

Route::get('/home', 'Frontend\HomeController@index')->name('home');
Route::get('ম্যাচ_সর্ম্পকে_জানুন', 'Frontend\AboutController@index')->name('about');
Route::get('সেকশন', 'Frontend\SectionController@index')->name('section');
Route::get('সদস্য', 'Frontend\MemberController@index')->name('member');
Route::get('ম্যাচের_ছবি', 'Frontend\GalleryController@index')->name('gallery');
Route::get('ম্যাচের_ছবি/allcategory/{slug}', 'Frontend\AllCategoryController@show')->name('gallery.all.category');
Route::get('ম্যাচের_ছবি/category/{slug}', 'Frontend\CategoryController@show')->name('gallery.category');
Route::get('যোগাযোগ_কুরুণ', 'Frontend\ContactController@index')->name('contact');
Route::post('যোগাযোগ_কুরুণ/store', 'Frontend\ContactController@store')->name('contact.store');
// মিলের হিসাব
Route::get('র্বতমান_ম্যাচের/মিলের_হিসাব', 'Frontend\MileController@index')->name('frontend.mile');
// মিলের হিসাব
// টাকা জমা হিসাব
Route::get('র্বতমান_ম্যাচের/টাকা_জমা_হিসাব', 'Frontend\MoneyController@index')->name('frontend.money');
// টাকা জমা হিসাব
// বাজার খরচ হিসাব
Route::get('র্বতমান_ম্যাচের/বাজার_খরচ_হিসাব', 'Frontend\BajarController@index')->name('frontend.bajar');
Route::get('র্বতমান_ম্যাচের/বাজার_খরচ_জমা', 'Frontend\BajarController@create')->name('frontend.bajar.create');
Route::post('র্বতমান_ম্যাচের/বাজার_খরচ_জমা/store', 'Frontend\BajarController@store')->name('frontend.bajar.store');

// বাজার খরচ হিসাব
Route::get('র্বতমান_ম্যাচের/বিবিধ_খরচের_হিসাব', 'Frontend\BibidhController@index')->name('frontend.bibidh');
// বিবিধ খরচের হিসাব
// >প্রত্যেক মাসের হিসাব
Route::get('র্বতমান_ম্যাচের/প্রত্যেক_মাসের_হিসাব', 'Frontend\MonthController@index')->name('frontend.month');
// >প্রত্যেক মাসের হিসাব

// sub_admin area
// sub_admin login
Route::get('/sub_admin_login', 'SubAdminAuth\LoginController@login')->name('sub.admin.login');


// sub_admin 
// Route::group(['prefix'=>'sub_admin', 'middleware'=>['isSubAdmin'=>'auth']], function () {

// 	// dashboard
// 	Route::get('/', 'Backend\Sub_Admin\HomeController@index')->name('sub_admin.home');
// });



Route::prefix('sub_admin')->group(function () {

	Route::get('/', 'Backend\Sub_Admin\HomeController@index')->name('sub_admin.home');
	// mile
	Route::get('মিলের_হিসাব', 'Backend\Sub_Admin\MileController@index')->name('sub_admin.mile');
	Route::get('মিলের_জন্য_সদস্যের_নাম', 'Backend\Sub_Admin\MileController@create')->name('sub_admin.mile.create');
	Route::post('মিলের_জন্য_সদস্যের_নাম/store', 'Backend\Sub_Admin\MileController@store')->name('sub_admin.mile.store');
	Route::post('মিলের_জন্য_সদস্যের_নাম/store/{id}', 'Backend\Sub_Admin\MileController@storewithid')->name('sub_admin.mile.storeWithId');
	// mile
	// money
	Route::resource('জমা_টাকা', 'Backend\Sub_Admin\MoneyController', ['names'=>'money']);
	Route::get('জমা_টাকা/edit/{id}', 'Backend\Sub_Admin\MoneyController@edit')->name('money.edit');
	Route::put('জমা_টাকা/update/{id}', 'Backend\Sub_Admin\MoneyController@update')->name('money.update');
	Route::get('money/moneyAdd/{id}', 'Backend\Sub_Admin\MoneyController@moneyAdd')->name('money.moneyAdd');
	// money

	// bajar
	Route::resource('বাজার_খরচ', 'Backend\Sub_Admin\BajarController', ['names'=>'bajar']);
	// bajar

	// bibidh
	Route::resource('বিবিধ', 'Backend\Sub_Admin\BibidhController', ['names'=>'bibidh']);
	Route::get('বিবিধ/{id}', 'Backend\Sub_Admin\BibidhController@edit')->name('edit');
	Route::put('বিবিধ/update/{id}', 'Backend\Sub_Admin\BibidhController@update')->name('update');
	Route::delete('বিবিধ/destroy/{id}', 'Backend\Sub_Admin\BibidhController@destroy')->name('destroy');
	// bibidh

	// month
	Route::resource('মাসের_হিসাব', 'Backend\Sub_Admin\MonthController', ['names'=>'month']);
	Route::put('মাসের_হিসাব/{id}', 'Backend\Sub_Admin\MonthController@update')->name('update');
	Route::delete('মাসের_হিসাব/delete/{id}', 'Backend\Sub_Admin\MonthController@destroy')->name('destroy');
	// month
	
});
// sub_admin area



// admin area
Route::get('/admin_login', 'AdminAuth\LoginController@login')->name('admin.login');
Route::post('admin_login/store', 'AdminAuth\LoginController@store')->name('admin.login.store');
Route::get('/admin_register', 'AdminAuth\RegisterController@register')->name('admin.register');
Route::post('admin_register/store', 'AdminAuth\RegisterController@store')->name('admin.register.store');


Route::prefix('admin')->group(function () {

	Route::get('/', 'Backend\Admin\HomeController@index')->name('admin.home');
	Route::get('ম্যাচের/সদস্য', 'Backend\Admin\MemberController@index')->name('admin.member.index');
	Route::get('ম্যাচের/সদস্য/status/{id}', 'Backend\Admin\MemberController@statusChange')->name('admin.member.status');
// welcome
	// logo section
	Route::resource('welcome/logo', 'Backend\Admin\LogoController', ['names'=>'logo']);
	Route::get('welcome/logo/role/{id}', 'Backend\Admin\LogoController@updateRole')->name('logo.role.update');
	// logo section

	// banner section
	Route::resource('welcome/banner', 'Backend\Admin\BannerController', ['names'=>'banner']);
	// banner section

	// facility section
	Route::resource('welcome/facility', 'Backend\Admin\FacilityController', ['names'=>'facility']);
	Route::get('welcome/facility/role/{id}', 'Backend\Admin\FacilityController@facilityRole')->name('facility.facilityRole');
	// facility section

	// learn about section
	Route::resource('welcome/learn_about', 'Backend\Admin\LearnAboutController', ['names'=>'learn_about']);
	// learn about section
	// section section
	Route::resource('welcome/section', 'Backend\Admin\SectionController', ['names'=>'section']);
	// section section

	// home section
	Route::resource('ইউজার_হোম_সেকশন/latest_report', 'Backend\Admin\LatestController', ['names'=>'latest_report']);
	Route::get('ইউজার_হোম_সেকশন/latest_report/reportRole/{id}', 'Backend\Admin\LatestController@reportRole')->name('latest_report.reportRole');
	// home section

	// gallery section
	Route::resource('ইউজার_ছবি_সেকশন/all/category', 'Backend\Admin\AllCategoryController', ['names'=>'all.category']);
	Route::resource('ইউজার_ছবি_সেকশন/category', 'Backend\Admin\CategoryController', ['names'=>'category']);
	Route::resource('ইউজার_ছবি_সেকশন', 'Backend\Admin\GalleryController', ['names'=>'gallery']);
	Route::get('ইউজার_ছবি_সেকশন/role/{id}', 'Backend\Admin\GalleryController@updateRole')->name('gallery.role.update');
	// gallery section
	// about section
	Route::resource('ম্যাচ_সর্ম্পকে_জানুন', 'Backend\Admin\AboutController', ['names'=>'about']);
	// about section
// welcome
	// member milet
	Route::get('মিলের/হিসাব', 'Backend\Admin\MileController@index')->name('admin.mile.index');
	Route::delete('মিলের/হিসাব/{id}', 'Backend\Admin\MileController@destroy')->name('admin.mile.destroy');
	// member money deposit
	Route::get('জমা/টাকা/হিসাব', 'Backend\Admin\MoneyController@index')->name('admin.money.index');
	Route::delete('জমা/টাকা/হিসাব/{id}', 'Backend\Admin\MoneyController@destroy')->name('admin.money.destroy');
	// member bajar
	Route::get('বাজার/খরচের/হিসাব', 'Backend\Admin\BajarController@index')->name('admin.bajar.index');
	Route::delete('বাজার/খরচের/হিসাব/{id}', 'Backend\Admin\BajarController@destroy')->name('admin.bajar.destroy');
	// member bibidh
	Route::get('বিবিধ/খরচের/হিসাব', 'Backend\Admin\BibidhController@index')->name('admin.bibidh.index');
	Route::delete('বিবিধ/খরচের/হিসাব/{id}', 'Backend\Admin\BibidhController@destroy')->name('admin.bibidh.destroy');
	// member month
	Route::get('প্রত্যেক/মাসের/হিসাব', 'Backend\Admin\MonthController@index')->name('admin.month.index');
	Route::delete('প্রত্যেক/মাসের/হিসাব/{id}', 'Backend\Admin\MonthController@destroy')->name('admin.month.destroy');

	// for contact
	Route::get('support/user', 'Backend\Admin\ContactController@index')->name('support.user');
	Route::get('support/user/show/{id}', 'Backend\Admin\ContactController@show')->name('support.user.show');
	Route::delete('support/user/destroy/{id}', 'Backend\Admin\ContactController@destroy')->name('support.user.destroy');
	// যোগাযোগ
	Route::resource('যোগাযোগ', 'Backend\Admin\JogajogController', ['names'=>'jogajog']);
	Route::get('যোগাযোগ/{id}', 'Backend\Admin\JogajogController@edit')->name('jogajog.edit');
	Route::put('যোগাযোগ/update/{id}', 'Backend\Admin\JogajogController@update')->name('jogajog.update');
	Route::delete('যোগাযোগ/destroy/{id}', 'Backend\Admin\JogajogController@destroy')->name('jogajog.destroy');
	// যোগাযোগ

	Route::get('admin/logout', 'AdminAuth\LoginController@Logout')->name('admin.logout');
	
});

// admin area
