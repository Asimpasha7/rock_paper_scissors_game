<?php

class RockPaperScissorsGame {
    private $rounds = 100;
    private $player1Choice = 'Rock';
    private $player2Choices = ['Rock', 'Paper', 'Scissors'];
    private $statistics = ['Player1' => 0, 'Player2' => 0, 'Draw' => 0];

    // print_r($statistics);
    public function play() {
        for ($round = 1; $round <= $this->rounds; $round++) {
            $this->playRound();
        }
        $this->displayStatistics();
    }

    private function playRound() {
        $player2Choice = $this->player2Choices[array_rand($this->player2Choices)];

        $winner = $this->determineWinner($this->player1Choice, $player2Choice);
        if ($winner === 'Player1') {
            $this->statistics['Player1']++;
        } elseif ($winner === 'Player2') {
            $this->statistics['Player2']++;
        } else {
            $this->statistics['Draw']++;
        }
    }

    private function determineWinner($choice1, $choice2) {
        if ($choice1 == $choice2) {
            return 'Draw';
        }

        $rules = [
            'Rock' => 'Scissors',
            'Paper' => 'Rock',
            'Scissors' => 'Paper',
        ];

        if ($rules[$choice1] == $choice2) {
            return 'Player1';
        } else {
            return 'Player2';
        }
    }
    private function displayStatistics() {
        echo "OHH Game Over!\n";
        echo "Player1 wins: {$this->statistics['Player1']}\n";
        echo "Player2 wins: {$this->statistics['Player2']}\n";
        echo "Draws: {$this->statistics['Draw']}\n";
    }

    public function getStatistics() {
        return $this->statistics;
    }
}

?>
