<?php
    class Scrabble
    {
        function scoreChecker($userInput)
        {
            $score = 0;
            $score_one_arr = array("a","e", "i", "o", "u", "l", "n", "r", "s", "t");
            $score_two_arr = array("d", "g");
            $score_three_arr = array("b", "c", "m", "p");
            $score_four_arr = array("f","h","v","w","y");
            $score_five_arr = array("k");
            $score_eight_arr = array("j", "x");
            $score_ten_arr = array("q","z");



            $str_split = str_split(strtolower($userInput));
            foreach($str_split as $char){
                $positionOne = array_search($char, $score_one_arr);
                $positionTwo = array_search($char, $score_two_arr);
                $positionThree = array_search($char, $score_three_arr);
                $positionFour = array_search($char, $score_four_arr);
                $positionFive = array_search($char, $score_five_arr);
                $positionEight = array_search($char, $score_eight_arr);
                $positionTen = array_search($char, $score_ten_arr);
                if ( $positionOne!== false ) {
                        $score++;
                }
                else if ( $positionTwo !== false ) {
                        $score+=2;
                }
                else if ( $positionThree !== false ) {
                        $score+=3;
                }
                else if ( $positionFour !== false ) {
                        $score+=4;
                }
                else if ( $positionFive !== false ) {
                        $score+=5;
                }
                else if ( $positionEight !== false ) {
                        $score+=8;
                }
                else if ( $positionTen !== false ) {
                        $score+=10;
                }
            }
            return $score;
        }



        function save($results)
        {
            array_unshift($_SESSION['game_rounds'], $results);
        }

        static function getAll()
        {
            return $_SESSION['game_rounds'];
        }

        static function deleteAll()
        {
            $_SESSION['game_rounds'] = array();
        }




    }


?>
