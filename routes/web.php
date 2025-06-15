<?php

use Illuminate\Support\Facades\file;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//chamando rotas organizadas
foreach(file::allfiles(__DIR__ .'/web')as $route_file){
require $route_file->getPathname();
}
// Dashboard padrão (geral)

require __DIR__.'/auth.php';



