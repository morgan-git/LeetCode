<?php 

class kthCharacter {

    /**
     * @param int $k
     * @param int[] $operations
     * @return string
     */
    function applyOperations(int $k, array $operations) {
        $word = "a";
        
        foreach ($operations AS $jj=>$kk){
            if ($kk === 0){
                $word .= $word;
            } else if ($kk == 1){
                $word = $this->appendShiftedLetters($word);
            }
        }
        
        return substr($word, $k-1, 1);
    }


    function appendShiftedLetters(string $word) {
        $result = $word;
        
        for ($i = 0; $i < strlen($word); $i++) {
            $char = $word[$i];
            
            if (ctype_lower($char)) {
                $next = $char === 'z' ? 'a' : chr(ord($char) + 1);
            } elseif (ctype_upper($char)) {
                $next = $char === 'Z' ? 'A' : chr(ord($char) + 1);
            } else {
                $next = $char; // non-alphabet characters stay the same
            }

            $result .= $next;
        }

        return $result;
    }

}