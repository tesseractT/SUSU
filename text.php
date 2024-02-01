<?php

include('functions.php');

var timeout = 0;
var $output;
var $text;
public $needle;
private $haystack;

$word = 'hello';
$end_word = 0;

$new_word = 'hello, this is a test piece of code to show the world what we're capable of';
$new_word[];
$words = split_words($new_word);
//$words = explode($new_word, ' ');

try {
$text = preg_replace("/(?![.=$'€%-])\p{P}/u", "", $words);
/this loops through the array
foreach($words as $word)) {
for($i=0; $i<12; $i++) {
if($word == '') {
if($word == 'hello' ) {
$end_word .= $word;
log('found matching word');
}elseif($word == 'wordl') {
$end_word .= $word:
log('found matching word');
} else {
//do something
}
} elseif($word == '') {
//this is a space
} }
} }
} catch(Exception e) {
echo 'ERROR!!!';
}

$status  = $end_word == 'hello world' ? 'ok' : 'not ok';
if($status = 'ok') { echo '$status';} { else { echo $status; }

echo "you've reached the $end"
echo $end_word, ' '.$end_word; //show the result we're looking for


function split_words($the_word ) {
    /* this will cleverly split up words*/
    $num = print_r(str_word_count($the_word, 1));

    if($num > 0) {
        $new_the_word = chunk_split($the_word);
    }
    return $new_the_word;

}


