<?php

namespace TelegramBot\Types;

use TelegramBot\Abstracts\BaseType;

/**
 * This object represents an incoming inline query.
 * When the user sends an empty query, your bot could return some default or trending results.
 * @see https://core.telegram.org/bots/api#inlinequery
 */
class InlineQuery extends BaseType
{
    /**
     * Unique identifier for this query
     * @var string $id
     */
    public $id;
    
    /**
     * Sender
     * @var User $from
     */
    public $from;
    
    /**
     * Optional. Sender location, only for bots that request user location
     * @var Location $location
     */
    public $location;
    
    /**
     * Text of the query (up to 256 characters)
     * @var string $query
     */
    public $query;
    
    /**
     * Offset of the results to be returned, can be controlled by the bot
     * @var string $offset
     */
    public $offset;
}
