<?php
function getSchedule($date){
    $dayOfWeek = date('l', strtotime($date));
    $dayOfWeek = strtolower($dayOfWeek);
    $json = file_get_contents('../model/schedule.json');
    $data = json_decode($json, true);
    $hours = [];
 
    foreach($data['rows'] as $row){
        if($row['dayWeek'] === $dayOfWeek){
            if($row['startTime'] !== null && $row['finishTime'] !== null){
                $hours[] = ['start' => $row['startTime'], 'finish' => $row['finishTime']];
            }
        }
    }
 
    return $hours;
}
function getBoatsByType($type){

    $json = file_get_contents('../model/boats.json');
    $data = json_decode($json, true);
    $boats = [];
    foreach($data['rows'] as $row){
        if($row['type'] == $type){
            $boats[] = $row;
        }
    }

    return $boats;
}
function getHoursGrid($date, $type){
$hours = getSchedule($date);
$boats = getBoatsByType($type);

return ['hours' => $hours, 'boats' => $boats];
}
?>