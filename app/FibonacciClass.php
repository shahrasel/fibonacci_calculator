<?php
interface Fibonacci {
    public function getNumber(int $n); // the return type is up to you
};

Class FibonacciClass implements Fibonacci{
    public function getNumber(int $n) {

        $num1 = 0;
        $num2 = 1;
        $sum = 0;
        $counter = 1;

        while ($counter <= $n) { //run the loop until the nth number
            $counter++;

            $num1 = $num2; // replaces with the last number
            $num2 = $sum; // get the sum of two preceding numbers

            $sum = $num1+$num2;

        }

        return $sum;
    }
}