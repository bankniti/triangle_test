<?php
class triangle {

    private $a_side;
    private $b_side;
    private $c_side;

    public function __construct($a, $b, $c)
    {
        $this->a_side = $a;
        $this->b_side = $b;
        $this->c_side = $c;
    }

    public function runTriangle()
    {
        $A = $this->a_side;
        $B = $this->b_side;
        $C = $this->c_side;
        $path = array();
        array_push($path, '1');

        array_push($path, '2');
        $checkInteger = $this->checkInteger($A, $B, $C);
        if ($checkInteger['is_integer'] === false){
            array_push($path, '3');
            $answer = array(
                'path' => $path,
                'answer'=> 'Not an integer',
                'invalid_input' => $checkInteger['invalid_input'],
            );
            return $answer;
        }

        array_push($path, '4');
        $checkOutOfRange = $this->checkOutOfRange($A, $B, $C);
        if ($checkOutOfRange['is_out_of_range'] === true){
            array_push($path, '5');
            $answer = array(
                'path' => $path,
                'answer'=> 'Out of range',
                'invalid_input' => $checkOutOfRange['invalid_input'],
            );
            return $answer;
        }

        array_push($path, '6');
        if ($this->checkTriangle($A, $B, $C) === false){
            array_push($path, '7');
            $answer = array(
                'path' => $path,
                'answer'=> 'Not a triangle',
            );

        /**
         *  Process a valid triangle
        **/
        }else{
            array_push($path, '8');
            if (($A == $B) && ($B == $C)){
                array_push($path, '9');
                $answer = array(
                    'path' => $path,
                    'answer'=> 'Equilateral',
                );
            }else{

                array_push($path, '10');
                if (($A != $B) && ($A != $C) && ($B != $C)){
                    array_push($path, '11');
                    $answer = array(
                        'path' => $path,
                        'answer'=> 'Scalene',
                    );
                }else{
                    array_push($path, '12');
                    $answer = array(
                        'path' => $path,
                        'answer'=> 'Isosceles',
                    );
                }
            }
        }
        array_push($path, '13');
        return $answer;
    }

    private function checkInteger($a, $b, $c)
    {
        $isInteger = true;
        $invalid = array();

        if (!is_numeric($a) || ((float)$a != (int)$a)){
            $isInteger = false;
            array_push($invalid, 'A');
        }

        if (!is_numeric($b) || ((float)$b != (int)$b)){
            $isInteger = false;
            array_push($invalid, 'B');
        }

        if (!is_numeric($c) || ((float)$c != (int)$c)){
            $isInteger = false;
            array_push($invalid, 'C');
        }

        return array(
            'is_integer' => $isInteger,
            'invalid_input' => $invalid,
        );
    }

    private function checkOutOfRange($a, $b, $c)
    {
        $isOutOfRange = false;
        $invalid = array();

        if(($a >= 1 && $a <= 200) === false){
            $isOutOfRange = true;
            array_push($invalid, 'A');
        }

        if(($b >= 1 && $b <= 200) === false){
            $isOutOfRange = true;
            array_push($invalid, 'B');
        }

        if(($c >= 1 && $c <= 200) === false){
            $isOutOfRange = true;
            array_push($invalid, 'C');
        }

        return array(
            'is_out_of_range' => $isOutOfRange,
            'invalid_input' => $invalid,
        );
    }

    private function checkTriangle($a, $b, $c)
    {
        return (($a < $b + $c) && ($b < $a + $c) && ($c < $a + $b)) ? true : false;
    }

}


