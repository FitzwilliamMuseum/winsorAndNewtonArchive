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

/*
 * Base route
 */
Route::get('/', function () {
    return view('pages.index');
});

/*
 * Base route for about page
 */
Route::get('/about', function () {
    return view('pages.about');
});

/*
 * Base route for technical details
 */
Route::get('/technical', function () {
    return view('pages.technical');
});

/*
 * Base route for database information
 */
Route::get('/database', function () {
    return view('pages.database');
});

/*
 * Base route for applying for access
 */
Route::get('/application', function () {
    return view('pages.application');
});


Route::get('/browse', function () {
    return view('pages.browse');
});


Route::get('/search', [
    'uses' => 'SearchController@index',
    'as' => 'pages.search'
]);

Route::match(array('GET', 'POST'), 'search/results', [
    'uses' => 'SearchController@results',
    'as' => 'pages.results'
]);

/*
 * Route for checking solr up and running
 */
Route::get('/ping', 'SearchController@ping');

/*
 * Route for full record of recipe
 */
Route::get('/detail/{urc}', [
    'uses' => 'DetailController@record',
    'as' => 'pages.detail'
]);

/*
 * Route for various browse facets
 */

Route::get('/search/browse/by/{querystring}', [
    'uses' => 'BrowseController@solr',
    'as' => 'pages.browsed'
]);