<?php

use App\Models\Information;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $data =Information ::all(); // add records that table
    $data= $data[0]; // get the first record
    return view('welcome',[ 'data'=> $data]);
});
