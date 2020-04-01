<?php

namespace TelegramBot\Types;

use TelegramBot\Abstracts\BaseType;

/**
 * This object represents one row of the high scores table for a game.
 * @see https://core.telegram.org/bots/api#gamehighscore
 */
class GameHighScore extends BaseType
{
    /**
     * Position in high score table for the game
     * @var int $position
     */
    public $position;
    
    /**
     * User
     * @var User $user
     */
    public $user;
    
    /**
     * Score
     * @var int $score
     */
    public $score;
}
