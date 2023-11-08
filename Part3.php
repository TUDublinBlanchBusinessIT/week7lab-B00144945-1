<?php
include("Team.php");


if (isset($_GET['teamName'])) {
    $teamName = $_GET['teamName'];

    
    $homeTeam = new Team($teamName);

    
    if (isset($_GET['result1'])) {
        $result1 = $_GET['result1'];
        list($ht1, $at1) = explode('-', $result1); 
        $homeTeam->finalScore(intval($ht1), intval($at1));
    }

    if (isset($_GET['result2'])) {
        $result2 = $_GET['result2'];
        list($ht2, $at2) = explode('-', $result2); 
        $homeTeam->finalScore(intval($ht2), intval($at2));
    }

    if (isset($_GET['result3'])) {
        $result3 = $_GET['result3'];
        list($ht3, $at3) = explode('-', $result3); 
        $homeTeam->finalScore(intval($ht3), intval($at3));
    }

    $goalAverage = $homeTeam->getGoalAverage();
    echo "Goal Average for $teamName: " . number_format($goalAverage, 2);
} else {
    echo "Team name not provided.";
}
?>
