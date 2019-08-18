<?php


namespace BelowAverage\RockPaper;

use InvalidArgumentException;

/**
 * GameModel
 *
 * Models the logic of RockPaperScissorLizardSpock game.
 *
 * Game rules:
 *   Rock crushes Scissors
 *   Rock crushes Lizard
 *   Paper covers Rock
 *   Paper disproves Spock
 *   Scissors cuts Paper
 *   Scissors decapitates Lizard
 *   Lizard poisons Spock
 *   Lizard eats Paper
 *   Spock vaporizes Rock
 *   Spock smashes Scissors
 *
 *
 * @package BelowAverage\RockPaper
 */
class GameModel {

    private $wins = [
        'rock' => [
            'scissors' => 'Rock crushes scissors',
            'lizard' => 'Rock crushes lizard'
        ],
        'paper' => [
            'rock' => 'Paper covers rock',
            'spock' => 'Paper disproves rock'
        ],
        'scissors' => [
            'paper' => 'Scissors cuts paper',
            'lizard' => 'Scissors decapitates lizard'
        ],
        'lizard' => [
            'spock' => 'Lizard poisons Spock',
            'paper' => 'Lizard eats paper'
        ],
        'spock' => [
            'rock' => 'Spock vaporizes rock',
            'scissors' => 'Spock smashes scissors'
        ]
    ];

    private $userSelection;
    private $computerSelection;
    private $winPhrase;

    /**
     * @param $userSelection string selection
     */
    public function play($userSelection) {
        if (!in_array($userSelection, array_keys($this->wins))) {
            throw new InvalidArgumentException("Invalid selection");
        }

        $this->userSelection = $userSelection;
        $this->computerSelection = array_rand($this->wins);

        if ($this->computerSelection === $userSelection) {
            $this->winPhrase = "It's a tie!";
        } else {
            if (array_key_exists($userSelection, $this->wins[$this->computerSelection])) {
               $this->winPhrase = $this->wins[$this->computerSelection][$userSelection] . ", I win!";
            } else {
                $this->winPhrase = $this->wins[$userSelection][$this->computerSelection] . ", You win!";
            }
        }

    }

    /**
     * @return mixed
     */
    public function getUserSelection() {
        return $this->userSelection;
    }

    /**
     * @return mixed
     */
    public function getComputerSelection() {
        return $this->computerSelection;
    }

    /**
     * @return mixed
     */
    public function getWinPhrase() {
        return $this->winPhrase;
    }
}
