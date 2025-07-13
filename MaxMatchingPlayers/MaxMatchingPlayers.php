<?php 
class MaxMatchingPlayers {

    /**
     * @param array $players
     * @param array $trainers
     * @return int
     */
    function matchPlayersAndTrainers(array $players, array $trainers) {
        $last_i = $count = 0;

        sort($players);
        sort($trainers);
        
        foreach ( $players AS $key => $player )
        {
            for ($i=$last_i ; $i < count($trainers); $i++)
            {
                if ($player <= $trainers[$i])
                {
                    $count++;
                    $last_i = $i+1;
                    break;
                }
            }
        }

        return $count;
    }
}