<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use SebastianBergmann\Type\NullType;
use Symfony\Component\Console\Output\NullOutput;

/*class IdadeController extends controller{
    public function Calculo(int $ano, int $mes=null, int $dia=null){
        if(mb_substr($ano, 4, 4, 'UTF-8') 
        & mb_substr($mes, 1, 2, 'UTF-8')
        & mb_substr($dia, 1, 2, 'UTF-8')){
            if($mes == null & $dia == null){
                $anoAtual = 2023;
                $idade = $anoAtual - $ano; 
                
                return view('calculo', ['idade'=>$idade]);
            }

        }else{
            echo 'Erro!!!';
        }
    }
}*/