<?php
    class FindAndReplace {

        private $inputString;
        private $wordToReplace;
        private $replacementWord;

        function __construct($new_inputString, $new_wordToReplace, $new_replacementWord)
        {
            $this->inputString = $new_inputString;
            $this->wordToReplace = $new_wordToReplace;
            $this->replacementWord = $new_replacementWord;
        }

        function setInputString($new_inputString)
        {
            $this->inputString = $new_inputString;
        }

        function setWordToReplace($new_wordToReplace)
        {
            $this->wordToReplace = $new_wordToReplace;
        }

        function setReplacementWord($new_replacementWord)
        {
            $this->replacementWord = $new_replacementWord;
        }

        function getInputString()
        {
            return $this->inputString;
        }

        function getWordToReplace()
        {
            return $this->wordToReplace;
        }

        function getReplacementWord()
        {
            return $this->replacementWord;
        }

        function replaceWord($inputString, $wordToReplace, $replacementWord)
        {
            $onlyAlphaInputString = preg_replace("/[^a-z0-9]/i", " ", $inputString);
            $onlyAlphaWordToReplace = preg_replace("/[^a-z0-9]/i", " ", $wordToReplace);
            $onlyAlphaReplacementWord = preg_replace("/[^a-z0-9]/i", " ", $replacementWord);

            $lowerCaseInputString = strtolower($onlyAlphaInputString);
            $lowerCaseWordToReplace = strtolower($onlyAlphaWordToReplace);
            $lowerCaseReplacementWord = strtolower($onlyAlphaReplacementWord);

            $stringArray = explode(" ", $lowerCaseInputString);

            foreach($stringArray as $key=>$item) {
                if ($lowerCaseWordToReplace == $item) {
                    array_splice($stringArray, $key, 1, $lowerCaseReplacementWord);
                }
            }

            $newString = implode(" ", $stringArray);

            $pos = strpos($newString, $lowerCaseWordToReplace);

            if ($pos === false)
            {
             return $newString;
            } else {
                $wordLength = strlen($lowerCaseWordToReplace);
                $finalString = substr_replace($newString, $lowerCaseReplacementWord, $pos, $wordLength);

                return $finalString;
            }
        }
    }
?>
