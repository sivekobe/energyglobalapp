<?php
namespace Energyglobalapp\Classes;
/* calcDivisors takes an integer and returns an array with all of the integer's divisors (except for 1
and the number itself). Prime numbers are not allowed. */
 class calcDivisors {
    
  public $integer;
  public $numbers  = array();

  public function set_Integer($integer){

    $this->integer = $integer;
    
  }

  public function get_Divisor(){
           
    global $numbers;


    for($i=1;$i <= $this->integer;$i++){

      if($this->integer%$i === 0){
            
        if ($i != 1 && $i != $this->integer){
          $numbers[] += $i;
        }

      }

    } 

   return $numbers;
            
  }

}




