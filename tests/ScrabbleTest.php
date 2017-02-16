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
        function test_three_point_letter()
        {

            $test_scrabbleScore = new Scrabble;
            $first_input = "b";

            $result = $test_scrabbleScore->scoreChecker($first_input);

            $this->assertEquals("3", $result);
        }
        function test_four_point_letter()
        {

            $test_scrabbleScore = new Scrabble;
            $first_input = "b";

            $result = $test_scrabbleScore->scoreChecker($first_input);

            $this->assertEquals("3", $result);
        }
        function test_five_point_letter()
        {

            $test_scrabbleScore = new Scrabble;
            $first_input = "k";

            $result = $test_scrabbleScore->scoreChecker($first_input);

            $this->assertEquals("5", $result);
        }
        function test_eight_point_letter()
        {

            $test_scrabbleScore = new Scrabble;
            $first_input = "j";

            $result = $test_scrabbleScore->scoreChecker($first_input);

            $this->assertEquals("8", $result);
        }
        function test_ten_point_letter()
        {

            $test_scrabbleScore = new Scrabble;
            $first_input = "q";

            $result = $test_scrabbleScore->scoreChecker($first_input);

            $this->assertEquals("10", $result);
        }
        function test_word()
        {

            $test_scrabbleScore = new Scrabble;
            $first_input = "band";

            $result = $test_scrabbleScore->scoreChecker($first_input);

            $this->assertEquals("7", $result);
        }
        function test_non_letter()
        {
            
            $test_scrabbleScore = new Scrabble;
            $first_input = "p.p";

            $result = $test_scrabbleScore->scoreChecker($first_input);

            $this->assertEquals("6", $result);
        }


    }






?>
