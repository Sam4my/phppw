<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Providers\RouteServiceProvider;


class HelloController extends controller {
    public function Name(string $name){
        if(mb_substr($name, 2, 100, 'UTF-8')){
            return view('hello', ['name'=>$name]);
        } else{
            echo "Nome inválido! Menos de três letras inseridas";
        }
    }    
}