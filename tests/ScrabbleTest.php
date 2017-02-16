<?php

    require_once 'src/Scrabble.php';

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {

        function test_one_point_letter()
        {

            $test_scrabbleScore = new Scrabble;
            $first_input = "a";

            $result = $test_scrabbleScore->scoreChecker($first_input);

            $this->assertEquals("1", $result);
        }
        function test_two_point_letter()
        {

            $test_scrabbleScore = new Scrabble;
            $first_input = "d";

            $result = $test_scrabbleScore->scoreChecker($first_input);

            $this->assertEquals("2", $result);
        }


    }






?>
