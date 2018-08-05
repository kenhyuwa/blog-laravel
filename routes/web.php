<?php

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

Route::any('/', 'KenHyuwa\KenHyuwaController@index')->name('index');
Route::get('/page/{page}', 'KenHyuwa\KenHyuwaController@page')->name('page');
Route::get('/packages/{page?}', 'KenHyuwa\KenHyuwaController@packages')->name('packages');
Route::get('/packages/{vendor}/{name}', 'KenHyuwa\KenHyuwaController@singlePackagist');
Route::get('/{category}', 'KenHyuwa\BlogController@index')->name('blog');
Route::get('/{category}/{slug}', 'KenHyuwa\BlogController@post')->name('blog.single');

Route::get('/site/map/sitemap.xml', 'KenHyuwa\SitemapController@index');
Route::get('/site/map/sitemap/posts', 'KenHyuwa\SitemapController@posts');
Route::get('/site/map/sitemap/categories', 'KenHyuwa\SitemapController@categories');
Route::get('/site/map/sitemap/pages', 'KenHyuwa\SitemapController@pages');

Route::group(['prefix' => config()->get('voyager.prefix')], function () {
    Voyager::routes();
});
