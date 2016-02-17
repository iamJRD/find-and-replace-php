<?php
    require_once "src/FindAndReplace.php";

    class FindAndReplaceTest extends PHPUnit_Framework_TestCase {

        function test_replace_word_single() {
            //arrange
            $test_FindAndReplace = new FindAndReplace();
            $inputString = "cat";
            $wordToReplace = "cat";
            $replacementWord = "dog";

            //act
            $result = $test_FindAndReplace->replaceWord($inputString, $wordToReplace, $replacementWord);

            //assert
             $this->assertEquals("dog", $result);
        }

        function test_replace_word_sentence() {
            //arrange
            $test_FindAndReplace = new FindAndReplace();
            $inputString = "the cat is bad";
            $wordToReplace = "cat";
            $replacementWord = "dog";

            //act
            $result = $test_FindAndReplace->replaceWord($inputString, $wordToReplace, $replacementWord);

            //assert
             $this->assertEquals("the dog is bad", $result);
        }

        function test_replace_word_sentence_multiple() {
            //arrange
            $test_FindAndReplace = new FindAndReplace();
            $inputString = "that cat is my cat";
            $wordToReplace = "cat";
            $replacementWord = "dog";

            //act
            $result = $test_FindAndReplace->replaceWord($inputString, $wordToReplace, $replacementWord);

            //assert
             $this->assertEquals("that dog is my dog", $result);
        }

        function test_replace_word_partially() {
            //arrange
            $test_FindAndReplace = new FindAndReplace();
            $inputString = "habitual";
            $wordToReplace = "habit";
            $replacementWord = "routine";

            //act
            $result = $test_FindAndReplace->replaceWord($inputString, $wordToReplace, $replacementWord);

            //assert
             $this->assertEquals("routineual", $result);
        }
    }
?>
