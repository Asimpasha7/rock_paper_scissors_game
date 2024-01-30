<?php

use PHPUnit\Framework\TestCase;

class RockPaperScissorsGameTest extends TestCase {
    public function testPlay() {
        $game = new RockPaperScissorsGame();
        $game->play();
        // print_r($game);
        $statistics = $game->getStatistics(); 
        $this->assertGreaterThanOrEqual(0, $statistics['Player1']);
        $this->assertGreaterThanOrEqual(0, $statistics['Player2']);
        $this->assertGreaterThanOrEqual(0, $statistics['Draw']);
    }
}

?>
