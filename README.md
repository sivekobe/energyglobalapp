# energyglobalapp

PHP developer test case.
Develop a solution which can be implemented in any PHP ecosystem (eg. using packagist).
The solution must hold the following (public) functions:
calcDivisors
calcDivisors takes an integer and returns an array with all of the integer's divisors (except for 1
and the number itself). Prime numbers are not allowed.
calcFactorial
calcFactorial calculates and returns the factorial for a given input. Input below 0 and above 12 is
not allowed.
calcPrimeNumbers
calcPrimeNumbers takes an array with integers finds the prime numbers and returns the result as
a XML document which each found prime number in a ‘number’ node.
Expected XML format:
<?xml version="1.0" encoding="UTF-8"?>
<primeNumbers amount=“{the amount of nodes}”>
<result>
<number>{result}</number
<number>{result}</number
<number>{result}</number
</result>
</primeNumbers>
