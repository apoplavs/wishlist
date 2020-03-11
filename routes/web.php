<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


/** @var $router */
$router->get('/post', function () use ($router) {
    //dd($router->app);
    return $router->app->version();
});

$router->post('register', 'AuthController@register');

/** PROTECTED ROUTES */

$router->group(
    ['middleware' => 'auth'],
    function () use ($router) {

        $router->get('/user', function  (Request $request, $id) {
            return 'Hello';
        });

});

/** END PROTECTED ROUTES */

//$router->get('/post/{id}', ['middleware' => 'auth', function (Request $request, $id) {
//    return Auth::user();
//
//    $user = $request->user();
//
//    //
//}]);
