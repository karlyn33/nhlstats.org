<?php

use App\Http\Controllers;

Route::get('/', [
    'as' => 'index',
    'uses' => 'PlayerController@getListFiltered',
]);

Route::get('player', [
    'as' => 'players_filtered',
    'uses' => 'PlayerController@getListFiltered',
]);

Route::get('player/{id}/{name}', [
    'as' => 'player_page',
    'uses' => 'PlayerPageController@index',
])
->where('id', '[0-9]+');

Route::get('goalers', [
    'as' => 'goalers',
    'uses' => 'GoalerController@getListFiltered',
]);

Route::group(['prefix' => 'team'], function () {
    Route::get('/', [
        'as' => 'teams',
        'uses' => 'TeamController@index',
    ]);
    Route::get('/{team}', [
        'as' => 'team',
        'uses' => 'TeamController@show',
    ]);
});

Route::group(['prefix' => 'standings'], function () {
    Route::get('overall', [
        'as' => 'standings',
        'uses' => 'StandingsController@overall',
    ]);

    Route::get('division', [
        'as' => 'standings_division',
        'uses' => 'StandingsController@division',
    ]);

    Route::get('wildcard', [
        'as' => 'standings_wildcard',
        'uses' => 'StandingsController@wildcard',
    ]);
});

Route::group(['prefix' => 'pool'], function () {
    Route::get('me', [
        'as' => 'pool_me',
        'uses' => 'PoolController@edit',
    ]);

    Route::post('me', [
        'as' => 'pool_save',
        'uses' => 'PoolController@store',
    ]);

    Route::get('', [
        'as' => 'pool_index',
        'uses' => 'PoolController@index',
    ]);
});

Route::get('scores/{date?}', [
    'as' => 'scores',
    'uses' => 'ScoresController@index',
]);

Route::get('playoff-bracket', [
    'as' => 'playoff_bracket',
    'uses' => 'PlayoffBracketController@index',
]);


/// Oauth Login
Route::get('login', [
    'as' => 'user_login',
    'uses' => 'SocialLoginController@login',
]);

Route::get('login/{type}', [
    'as' => 'do_login',
    'uses' => 'SocialLoginController@doLogin',
]);

Route::get('logged-in/{type}', [
    'as' => 'user_logged',
    'uses' => 'SocialLoginController@logged_in',
]);

Route::get('logout', [
    'as' => 'user_logout',
    'uses' => 'SocialLoginController@logout',
]);

/// API
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->get('teams', ['as' => 'api.get.teams', 'uses' =>'App\Http\Controllers\ApiController@teams_get']);
    $api->get('team/{id}', ['as' => 'api.get.team', 'uses' =>'App\Http\Controllers\ApiController@team_get']);
});
