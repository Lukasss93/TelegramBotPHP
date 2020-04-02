<?php

/**
 * A helper file to provide autocomplete information to your IDE
 * This file should not be included in your code, only analyzed by your IDE!
 */

namespace TelegramBot {
    
    use TelegramBot\Methods\SendMessage;
    
    /**
     * @see TelegramBot
     */
    class TelegramBot
    {
        /**
         * Use this method to send text messages. On success, the sent Message is returned.
         * @see https://core.telegram.org/bots/api#sendmessage
         * @param  array  $parameters
         * @return SendMessage
         */
        public function sendMessage(array $parameters = []): SendMessage
        {
            return new SendMessage($this, $parameters);
        }
    }
}