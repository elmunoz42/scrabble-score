<?php
    class Scrabble
    {
        function scoreChecker($userInput)
        {
            $score = 0;
            $score_one_arr = array("a","e", "i", "o", "u", "l", "n", "r", "s", "t");

            $str_split = str_split(strtolower($userInput));
            foreach($str_split as $char){
                $positionOne = array_search($char, $score_one_arr);
                if ( $positionOne!== false ) {
                        $score++;
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
