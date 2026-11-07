<?php

include __DIR__ . "/Team.php";

$teamName = $_GET["teamName"] ?? "";
$homeTeam = new Team($teamName);

$ht1 = (int) ($_GET["home1"] ?? 0);
$at1 = (int) ($_GET["away1"] ?? 0);
$ht2 = (int) ($_GET["home2"] ?? 0);
$at2 = (int) ($_GET["away2"] ?? 0);
$ht3 = (int) ($_GET["home3"] ?? 0);
$at3 = (int) ($_GET["away3"] ?? 0);

$homeTeam->finalScore($ht1, $at1);
$homeTeam->finalScore($ht2, $at2);
$homeTeam->finalScore($ht3, $at3);

echo "Goal average: " . $homeTeam->getGoalAverage();