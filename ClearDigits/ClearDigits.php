<?php 
class Solution {
    /**
     * @param string $s
     * @return string
     */
    function clearDigits($s) {
        $char_stack = [];

        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];
            
            // If the current character is a digit, 
            //remove the last non-digit character (if any)
            if (ctype_digit($char)) {
                
                if (!empty($char_stack)) {
                // remove the closest non-digit character to the left
                    array_pop($char_stack); 
                }
            } else {
                // If the current character is a letter, push it to the stack
                $char_stack[] = $char;
            }
        }

        // The stack now contains only the characters that remain
        return implode('', $char_stack);
    }
}
