<?php
    class FindAndReplace {

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
