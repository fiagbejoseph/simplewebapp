<?php
//Checking if some post data was sent for processing
if (isset($_POST)) {
    $inputdataArr = array();
    $inputdata = $_POST['inputdata'];

    switch ($_POST['action']) {
        case 'Count Characters':
//            Spliting the text into an array of Characters
            $charactersArr = str_split($inputdata);

//            Count and return the length of the array after spliting
            echo count($charactersArr);
            break;
        case 'Count Vowels':
//            Declaration and Initialization of the count and vowels array variable
            $count = 0;
            $vowelsArr = ['A', 'E', 'I', 'O', 'U', 'a', 'e', 'i', 'o', 'u'];

//            Spliting the text into an array of Characters
            $charactersArr = str_split($inputdata);

//            Looping throught all characters while comparing to Vowels array  
            foreach ($charactersArr as $index => $character) {
//                Count if found in array
                if (in_array($character, $vowelsArr))
                    $count++;
            }

//            Return count when done
            echo $count;
            break;
        case 'Count Consonants':
//            Declaration and Initialization of the count and consonants array variable
            $count = 0;
            $consonantsArr = ['B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Y', 'Z',
                'b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z'];

//            Spliting the text into an array of Characters
            $charactersArr = str_split($inputdata);

//            Looping throught all characters while comparing to consonants array  
            foreach ($charactersArr as $index => $character) {
//                Count if found in array
                if (in_array($character, $consonantsArr))
                    $count++;
            }
//            Return count when done
            echo $count;
            break;
        case 'Count Words':
//            Spliting the text into an array of words using Regular Expression with space, new line, tab as delimeters
            $wordArr = preg_split("/\s+|\n|\t/", $inputdata);
//            Count and return the length of the array after spliting
            echo count($wordArr);
            break;
        default :
            echo 'Invalid Case';
    }
}

