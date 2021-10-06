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
            $gradoObesidad="Usted tiene Desnutrición";
 
        }else
 
        if($Imc>=18.5 && $Imc<=24.9){
          $gradoObesidad= "Su peso es Normal";
 
 
        }else
        if($Imc>=25 && $Imc<=29.9){
          $gradoObesidad= "Usted tiene Sobrepeso";
 
        }else
        if($Imc>=30 && $Imc<=34.9){
          $gradoObesidad= "Tiene un problema de Obesidad";
 
        }else
        if($Imc>=35 && $Imc<=39.9){
          $gradoObesidad= "Tiene un problema de Obesidad Severa";
 
        }else
        if($Imc>=40){
          $gradoObesidad= "obeso severo";
 
        }
        
        
        echo 'El es '. $this->nombre. ' tiene una estarura de '. $this->estatura . ' metros y un peso de '. $this->peso . ' kilogramos, por lo que su IMC es de ' .$Imc . ' Kg/m2.';
    }


}