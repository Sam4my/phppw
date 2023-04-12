<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use SebastianBergmann\Type\NullType;
use Symfony\Component\Console\Output\NullOutput;

class OperationController extends controller {
    public function Conta(int $number1, int $number2, string $operation=null){
           if($operation == 'soma' 
           or $operation == 'subtracao' 
           or $operation == 'multiplicacao' 
           or $operation == 'divisao'
           or $operation == null){
                $somar = $number1 + $number2;
                $subtrair = $number1 - $number2;
                $multiplicar = $number1 * $number2;
                $dividir = $number1 / $number2;
                return view('operation', ['soma'=>$somar, 
                'subt'=>$subtrair, 
                'mult'=>$multiplicar, 
                'div'=>$dividir, 
                'op'=>$operation]);
           }else{
                echo 'Erro';
           }
    }
}