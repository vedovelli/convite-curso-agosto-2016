<?php

Route::get('/', function () {
    $users = \App\User::where('id', '>', 20)->get(['id', 'email']);
    dd($users->toArray());
});