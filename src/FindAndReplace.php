<?php
    class FindAndReplace {

        function replaceWord($inputString, $wordToReplace, $replacementWord)
        {
            $stringArray = explode(" ", $inputString);
            // $modifiedArray = array();

            foreach($stringArray as $key=>$item) {
                if ($wordToReplace == $item) {
                    array_splice($stringArray, $key, 1, $replacementWord);
                }
            }

            $newString = implode(" ", $stringArray);

            $pos = strpos($newString, $wordToReplace);

            if ($pos === false)
            {
             return $newString;
            } else {
                $wordLength = strlen($wordToReplace);
                $finalString = substr_replace($newString, $replacementWord, $pos, $wordLength);

                return $finalString;
            }
        }
    }
?>


$
