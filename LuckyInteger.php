class LuckyInteger {

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function findLucky($arr) {
       
        $counts = array_count_values($arr);
        $lucky_ints = [];
        foreach ($counts AS $kk=>$jj){
            if ($kk == $jj){
                $lucky_ints[] = $kk;
            }
        }
        
        if (count($lucky_ints) > 0 ){
            sort($lucky_ints);
            return array_pop($lucky_ints);
        }

        return -1;
    }
}