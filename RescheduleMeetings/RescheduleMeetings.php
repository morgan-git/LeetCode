3439. Reschedule Meetings for Maximum Free Time I
Solved
Medium
Topics
premium lock icon
Companies
Hint
You are given an integer eventTime denoting the duration of an event, where the event occurs from time t = 0 to time t = eventTime.

You are also given two integer arrays startTime and endTime, each of length n. These represent the start and end time of n non-overlapping meetings, where the ith meeting occurs during the time [startTime[i], endTime[i]].

You can reschedule at most k meetings by moving their start time while maintaining the same duration, to maximize the longest continuous period of free time during the event.

The relative order of all the meetings should stay the same and they should remain non-overlapping.

Return the maximum amount of free time possible after rearranging the meetings.

Note that the meetings can not be rescheduled to a time outside the event.

 
<?php 
class Solution {

    /**
     * @param Integer $eventTime
     * @param Integer $k
     * @param Integer[] $startTime
     * @param Integer[] $endTime
     * @return Integer
     */
    function maxFreeTime($eventTime, $k, $startTime, $endTime) {
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
