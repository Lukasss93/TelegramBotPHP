<?php

namespace TelegramBot\Types;

use TelegramBot\Abstracts\BaseType;

/**
 * This object represents a dice with random value from 1 to 6.
 * (Yes, we're aware of the “proper” singular of die.
 * But it's awkward, and we decided to help it change. One dice at a time!)
 * @see https://core.telegram.org/bots/api#dice
 */
class Dice extends BaseType
{
    /**
     * Value of the dice, 1-6
     * @var int $value
     */
    public $value;
}
