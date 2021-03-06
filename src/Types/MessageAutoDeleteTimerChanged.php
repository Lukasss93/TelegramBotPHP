<?php

namespace TelegramBot\Types;

/**
 * This object represents a service message about a change in auto-delete timer settings.
 * @see https://core.telegram.org/bots/api#voicechatended
 */
class MessageAutoDeleteTimerChanged
{
    /**
     * New auto-delete time for messages in the chat
     * @var int $message_auto_delete_time
     */
    public $message_auto_delete_time;
}
