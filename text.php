<?php

include('functions.php');

$timeout = 0;
$output;
$text;
$needle;
$haystack;

$word = 'hello';
$end_word = ''; // Initialize $end_word as an empty string

$new_word = "hello, this is a test piece of code to show the world what we're capable of";
$words = split_words($new_word);

try {
    // Use implode to join the array elements into a string
    $text = preg_replace("/(?![.=$'€%-])\p{P}/u", "", implode(' ', $words));

    foreach($words as $word) {
        for($i = 0; $i < 12; $i++) {
            // Correct the condition, $word cannot be both empty and 'hello' or 'wordl' at the same time
            if($word != '') {
                if($word == 'hello' ) {
                    $end_word .= $word . ' '; // Concatenate with space
                    // Use error_log instead of undefined log function
                    error_log('found matching word');
                } elseif($word == 'world') { // Correct the spelling of 'world'
                    $end_word .= $word . ' ';
                    error_log('found matching word');
                } else {
                    // do something
                }
            }
        }
    }
} catch(Exception $e) {
    echo 'ERROR!!!';
}

$status  = trim($end_word) == 'hello world' ? 'ok' : 'not ok'; // Trim to remove extra space
echo $status;

echo "you've reached the $end_word";
echo $end_word; // Output $end_word

function split_words($theWord) {
    // Remove unnecessary code in split_words function
    return str_word_count($theWord, 1);
}