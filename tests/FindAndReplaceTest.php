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

    }
?>



<!-- replace cat with dog in sentence
input "the cat is bad"
output "the dog is bad"

replace duplicated word in sentence
input "that cat is my cat"
output "the dog is my dog" -->
