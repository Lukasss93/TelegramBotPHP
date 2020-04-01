<?php

namespace TelegramBot\Types;

use TelegramBot\Abstracts\BaseType;

/**
 * This object contains information about one answer option in a poll.
 * @see https://core.telegram.org/bots/api#polloption
 */
class PollOption extends BaseType
{
    /**
     * Option text, 1-100 characters
     * @var string $text
     */
    public $text;
    
    /**
     * Number of users that voted for this option
     * @var int $voter_count
     */
    public $voter_count;
}
