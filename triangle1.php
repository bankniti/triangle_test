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
        $answer = array('path' => array(),'answer'=> 'out of range' );
        $isOutOfRange = false;
        array_push($answer['path'], 'a');

        array_push($answer['path'], 'b');
        if(!($C >= 1 && $C <= 200)){

            $answer['answer'] = 'C '.$answer['answer'];
            $isOutOfRange = true;
            array_push($answer['path'], 'c');

        }

        array_push($answer['path'], 'd');
        if(!($B >= 1 && $B <= 200)){

            $answer['answer'] = 'B '.$answer['answer'];
            $isOutOfRange = True;
            array_push($answer['path'], 'e');
        }

        array_push($answer['path'], 'f');
        if(!($A >= 1 && $A <= 200)){
            $answer['answer'] = 'A '.$answer['answer'];
            $isOutOfRange = true;
            array_push($answer['path'], 'g');
        }

        array_push($answer['path'], 'h');
        if(!$isOutOfRange){

            array_push($answer['path'], 'i');
            if($A != $B && $B != $C && $A != $C){
                $answer['answer'] = 'scalene';
                array_push($answer['path'], 'j');
            }
        }

        echo json_encode($answer);
    }
}


