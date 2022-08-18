<?php 
require_once __DIR__ ."/vendor/autoload.php";


include("templates/form.php");

use Energyglobalapp\Classes\calcDivisors;
use Energyglobalapp\Classes\calcFactorial;
use Energyglobalapp\Classes\calcPrimeNumbers;

$check_pattern =  "/[0-9]/";

if (isset($_POST['divisor'])){

  $test = new calcDivisors();
  $primecheck = new calcPrimeNumbers();
  $divisor_input = intval($_POST['first_integer']);


  if (preg_match($check_pattern, $_POST['first_integer'])){ 

    if (!$primecheck->checkPrime($divisor_input) ){

      $test->set_Integer($divisor_input);
 
      /* Print the divisor */
      print_r($test->get_Divisor());

    } else {

      echo "Please input a prime number value!";

    }

  } else {
     
     echo "Please input a valid integer value!"; 

  }

} elseif (isset($_POST['factorial'])) {


  $test1 = new calcFactorial();

  if (preg_match($check_pattern, $_POST['second_integer'])){

    $test1->set_Input($_POST['second_integer']);

    /* Let the user know what the factorial of the input is */
    echo "The factorial of your input is " . $test1->get_Factorial() . "\n";

  } else {
    
    echo "Please enter a valid integer value!";

  }

}  elseif (isset($_POST['primenumbers'])){
 
     if (preg_match($check_pattern, $_POST['third_integer'])){
       $test2 = new calcPrimeNumbers();

       /* print the prime numbers to the user */  
       $array_int = array_map('intval',explode(',',$_POST['third_integer']));
       print_r($test2->get_PrimeNumbers($array_int));

     } else {
        
         echo "Please enter a valid integer value!";

     }     

}
?>