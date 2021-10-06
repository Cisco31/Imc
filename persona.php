<?php

class Persona{
    public $nombre;
    public $peso;
    public $estatura;
    

    public function calcularIMC($nombre,$peso,$estatura){
        $this->nombre = $nombre;
        $this->peso = $peso;
        $this->estatura = $estatura;


        $Imc=($peso)/($estatura*$estatura);
        $gradoObesidad = '';

        if($Imc<18.5){
            $gradoObesidad=" tiene delgadez o bajo
            peso";
 
        }else
 
        if($Imc>=18.5 && $Imc<=24.9){
          $gradoObesidad= " tiene su peso Normal";
 
 
        }else
        if($Imc>=25 && $Imc<=29.9){
          $gradoObesidad= " tiene  Sobrepeso";
 
        }else
        if($Imc>=30){
          $gradoObesidad= " tiene un problema de Obesidad";
 
        }
        
        
        echo 'El es '. $this->nombre. ' tiene una estarura de '. $this->estatura . ' metros y un peso de '. $this->peso . ' kilogramos, por lo que su IMC es de ' .$Imc . ' Kg/m2.' . '<br>'.
        'Esto quiere decir que ' .$this->nombre . $gradoObesidad;
    }


}