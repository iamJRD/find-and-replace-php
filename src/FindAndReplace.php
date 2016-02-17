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

            $newString = implode($stringArray);
            return $newString;
        }


    }
?>
