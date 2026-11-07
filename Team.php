<?php

class Team
{
        public function getGoalAverage()
    {
        if ($this->totalGames == 0) {
            return 0;
        }

        return $this->totalGoals / $this->totalGames;
    }
    public $name;
    public $totalPoints = 0;
    public $totalGames = 0;
    public $totalGoals = 0;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function finalScore($homeScore, $awayScore)
    {
        if ($homeScore > $awayScore) {
            $this->totalPoints += 3;
        } elseif ($homeScore == $awayScore) {
            $this->totalPoints += 1;
        }

        $this->totalGoals += $homeScore;
        $this->totalGames += 1;
    }
}