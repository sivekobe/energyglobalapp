<?php
namespace Energyglobalapp\Classes;
/* calcFactorial calculates and returns the factorial for a given input. Input below 0 and above 12 is
not allowed. */
class calcFactorial {
	
	public $input;
   public $fact;

	public function set_Input($input){

	  $this->input = $input;
     $this->fact  = 1;

	}	

	public function get_Factorial(){

    $answer = 0;

    if($this->input < 0 || $this->input > 12){

      return "Input below 0 and above 12 is not allowed!";

    } else {

       for($i=$this->input; $i>=1; $i--){

          $this->fact *= $i;

      	}

        return $this->fact;

    }  

	}

}