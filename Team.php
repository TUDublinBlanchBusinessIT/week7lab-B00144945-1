<?php

class Team {
    private $teamName;
    private $totalPoints;
    private $totalGoals;
    private $totalGames;

    public function __construct($teamName) {
        $this->teamName = $teamName;
        $this->totalPoints = 0;
        $this->totalGoals = 0;
        $this->totalGames = 0;
    }

    public function finalScore($homeScore, $opposingScore) {
        $this->totalGames++;

        if ($homeScore > $opposingScore) {
            $this->totalPoints += 3; // Home team won
        } elseif ($homeScore === $opposingScore) {
            $this->totalPoints += 1; // It's a draw
        }

        $this->totalGoals += $homeScore;
    }

    public function getTeamName() {
        return $this->teamName;
    }

    public function getTotalPoints() {
        return $this->totalPoints;
    }

    public function getTotalGoals() {
        return $this->totalGoals;
    }

    public function getTotalGames() {
        return $this->totalGames;
    }
}

?>