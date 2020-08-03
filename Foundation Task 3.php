<?php
    function isPalindrome($text){
        if(is_string($text)){
            $text = strtolower($text);
            $text = str_replace(" ", "", $text);
            $rev_text = strrev($text);
            if ($rev_text == $text)
                return true;
            else
                return false;
        }
    }
    $str = "BoB isi BOb";
    echo $str;
    echo "<br>";
    if(isPalindrome($str))
        echo "String is a Palindrome";
    else
        echo "String is NOT a Palindrome";

?>