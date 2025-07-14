<?php 
class RescheduleMeetings {

    /**
     * @param int $eventTime
     * @param int $k
     * @param array $startTime
     * @param array $endTime
     * @return int
     */
    public function maxFreeTime(int $eventTime, int $k, array $startTime, array $endTime) {
        $n = count($startTime);
        $durations = [];
        for ($i = 0; $i < $n; $i++) {
            $durations[$i] = $endTime[$i] - $startTime[$i];
        }

        // Calculate original free times between meetings
        $free = [];
        $free[] = $startTime[0]; // Before first meeting
        for ($i = 1; $i < $n; $i++) {
            $free[] = $startTime[$i] - $endTime[$i - 1];
        }
        $free[] = $eventTime - $endTime[$n - 1]; // After last meeting

        // Sliding window to choose up to k free slots to "merge"
        // The idea is that by rescheduling, we can potentially remove gaps
        $maxFree = 0;
        $left = 0;
        $sum = 0;
        for ($right = 0; $right < count($free); $right++) {
            $sum += $free[$right];
            while (($right - $left) > $k) {
                $sum -= $free[$left];
                $left++;
            }
            $maxFree = max($maxFree, $sum);
        }

        return $maxFree;
    }
}
