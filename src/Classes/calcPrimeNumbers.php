<?php
namespace Energyglobalapp\Classes;

/* calcPrimeNumbers takes an array with integers finds the prime numbers and returns the result as
a XML document which each found prime number in a ‘number’ node. */
class calcPrimeNumbers {
    
  public $count;

  public function checkPrime($input){

   if ($input == 1){

     return 0;

   }

   for ($i = 2; $i <= $input/2; $i++){

      if ($input % $i == 0){

        return 0;

      }  
   }

   return 1;

  }


  public function get_PrimeNumbers($array){


    //$array_integers = array(11,2,34,4,59,6,7,811,97,111);
    $prime_numbers  = array();

    /* loop through the input array and store the prime values in an array */
    if (is_array($array) || is_object($array)){

      foreach ($array as $value){
      
        if ($this->checkPrime($value)){

          array_push($prime_numbers, $value);

        }

      }

    } 

    $count = count($prime_numbers);
   
    $xml = new \DOMDocument('1.0','UTF-8');
    $xml->formatOutput=true;


    $books=$xml->createElement("primeNumbers");
    $books->setAttribute('amount', "$count");
    $xml->appendChild($books);


    $book=$xml->createElement("result");
    $books->appendChild($book);
  

    foreach ($prime_numbers as $prime) {

      $price=$xml->createElement("number","$prime");
      $book->appendChild($price);
  

    }
    return "<xmp>".$xml->saveXML()."</xmp>";
    

  }

}
