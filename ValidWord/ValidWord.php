<?php 
class ValidWord {
public static int $min_length = 3;
public static $allowed_chars = "^[A-Za-z0-9]+$";
public static $must_contain_one = ['a','e','i','o','u'];

    /**
     * @param string $word
     * @return bool
     */
    public function isValid(string $word) {
    if (strlen($word) < self::$min_length) {
        return false;
    }

    // Check if it contains only allowed chars
    if (!preg_match('/' . self::$allowed_chars . '/', $word)) {
        return false;
    }

    // Check for at least one vowel
    if (!preg_match('/[aeiou]/', strtolower($word))) {
        return false;
    }

    // Check for at least one consonant (English letters that are not vowels)
    if (!preg_match('/[b-df-hj-np-tv-zB-DF-HJ-NP-TV-Z]/', $word)) {
        return false;
    }

    return true;
}

}