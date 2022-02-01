<?php

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
    return view('/page-login');
})->name('login');

// Route::get('/index', function () {
//     return view('/index');
// });
Route::get('/analytics', function () {
    return view('/analytics');
});

// Route::get('/banks/senior_financing', function () {
//     return view('/senior_financing');
// });

// Route::get('/banks/new_senior_financing', function () {
//     return view('/new_senior_financing');
// });

// Route::get('/banks/mezzanine_financing', function () {
//     return view('/mezzanine_financing');
// });

// Route::get('/banks/new_mezzanine_financing', function () {
//     return view('/new_mezzanine_financing');
// });

Route::get('/users', function () {
    return view('/users');
});

// Route::get('/search-history', function () {
//     return view('/search-history');
// });

Route::get('/forget_password', function () {
    return view('/forget_password');
});

Route::get('/all-modal', function () {
    return view('/all-modal');
});

Route::get('/email/inbox', function () {
    return view('/email-inbox');
});

Route::get('/email/compose', function () {
    return view('/email-compose');
});

Route::get('/email/detail', function () {
    return view('/email-detail');
});

Route::get('/widgets', function () {
    return view('/widgets');
});

Route::get('/ui/bootstrap', function () {
    return view('/ui-bootstrap');
});

Route::get('/ui/buttons', function () {
    return view('/ui-buttons');
});

Route::get('/ui/card', function () {
    return view('/ui-card');
});

Route::get('/ui/icons', function () {
    return view('/ui-icons');
});

Route::get('/ui/modal-notifications', function () {
    return view('/ui-modal-notifications');
});

Route::get('/ui/typography', function () {
    return view('/ui-typography');
});

Route::get('/ui/tabs-accordions', function () {
    return view('/ui-tabs-accordions');
});

Route::get('/form/elements', function () {
    return view('/form-elements');
});

Route::get('/form/plugins', function () {
    return view('/form-plugins');
});

Route::get('/form/wizards', function () {
    return view('/form-wizards');
});

Route::get('/table/elements', function () {
    return view('/table-elements');
});

Route::get('/table/plugins', function () {
    return view('/table-plugins');
});

Route::get('/chart/chart-js', function () {
    return view('/chart-js');
});

Route::get('/chart/chart-apex', function () {
    return view('/chart-apex');
});

Route::get('/map', function () {
    return view('/map');
});

Route::get('/layout/starter-page', function () {
    return view('/layout-starter-page');
});

Route::get('/layout/fixed-footer', function () {
    return view('/layout-fixed-footer');
});

Route::get('/layout/full-height', function () {
    return view('/layout-full-height');
});

Route::get('/layout/full-width', function () {
    return view('/layout-full-width');
});

Route::get('/layout/boxed-layout', function () {
    return view('/layout-boxed-layout');
});

Route::get('/layout/minified-sidebar', function () {
    return view('/layout-minified-sidebar');
});

Route::get('/page/scrum-board', function () {
    return view('/page-scrum-board');
});

Route::get('/page/products', function () {
    return view('/page-products');
});

Route::get('/page/orders', function () {
    return view('/page-orders');
});

Route::get('/page/gallery', function () {
    return view('/page-gallery');
});

Route::get('/page/search-results', function () {
    return view('/page-search-results');
});

Route::get('/page/coming-soon', function () {
    return view('/page-coming-soon');
});

Route::get('/page/error', function () {
    return view('/page-error');
});

Route::get('/page/login', function () {
    return view('/page-login');
});

Route::get('/page/register', function () {
    return view('/page-register');
});

Route::get('/profile', function () {
    return view('/profile');
});

Route::get('/calendar', function () {
    return view('/calendar');
});

// Route::get('/settings', function () {
//     return view('/settings');
// });

Route::get('/helper', function () {
    return view('/helper');
});
// Route::get('/users_view', function () {
//     return view('/users_view');
// });
// Route::get('/show','UserViewers@show');
Route::get('/banks/userlist', 'UserViewers@show')->name('userlist');
Route::get('/userlist', 'UserViewers@show')->name('userlist');
Route::get('/users_view/{id}', 'UserViewers@show_view')->name('users_view');
Route::get('/search-history', 'UserViewers@search')->name('search-history');
Route::get('/search-history_view/{id}', 'UserViewers@search_view')->name('search-history_view');
Route::get('/banks/search-history', 'UserViewers@search')->name('search-history');
Route::get('/banks/search-history_view/{id}', 'UserViewers@search_view')->name('search-history_view');
Route::get('/banks/mezzanine_financing', 'UserViewers@create')->name('mezzanine_financing');
Route::get('/banks/Mezz_/{id}', 'UserViewers@index')->name('Mezz_');
Route::get('/banks/mezzanine_financinglist/{id}', 'UserViewers@MezzEdit')->name('mezzanine_financinglist');
Route::post('/banks/Mezz_edit', 'UserViewers@update')->name('Mezz_edit');
Route::get('/edituserlist/{id}', 'ListController@edituserlist')->name('edituserlist');

Route::get('/banks/senior_financing', 'ListController@list')->name('senior_financing');
Route::get('/banks/senior_financing/{id}', 'ListController@list')->name('senior_financing');
    
Route::POST('/delete', 'ListController@deletedata')->name('deleteuser');


Route::GET('/editlist/{id}', 'ListController@editlist')->name('editdata');
Route::POST('/editlist', 'ListController@update')->name('senior_financinglist');
Route::get('/banks/Senior_/{id}', 'ListController@index')->name('Senior_');
Route::post('/loginweb',  'UserViewers@login')->name('loginweb');
Route::get('/banks/new_senior_financing', 'FormController@new_senior_financing')->name('new_senior_financing');
Route::POST('/banks/new_senior_financing', 'FormController@senior')->name('senior');
Route::get('/banks/new_mezzanine_financing', 'FormController@new_Mezz_financing')->name('new_Mezz_financing');
Route::POST('/banks/new_mezzanine_financing', 'FormController@MezzCreate')->name('MezzCreate');
Route::get('/settings', 'UserViewers@settings')->name('settings');
Route::post('/savechanges', 'UserViewers@savechanges')->name('savechanges');
Route::post('/restore','BackupController@restore')->name('restore');
Route::get('/our_backup_database', 'BackupController@our_backup_database')->name('our_backup_database');
Route::post('/updatepassword', 'UserViewers@updatepassword')->name('updatepassword');
Route::post('/uploadExcel', 'BackupController@uploadExcel')->name('uploadExcel');
Route::post('/uploadMezzExcel', 'BackupController@uploadMezzExcel')->name('uploadMezzExcel');
Route::get('/downloadMezz', 'BackupController@exportMezz')->name('downloadMezz');
Route::get('/downloadQuestionnaire', 'BackupController@exportQuestionnaire')->name('downloadQuestionnaire');
Route::get('/logout', [App\Http\Controllers\UserViewers::class, 'logout'])->name('logout');