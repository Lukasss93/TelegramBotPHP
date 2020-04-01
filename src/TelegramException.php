<?php

namespace TelegramBot;

use Exception;

class TelegramException extends Exception
{
    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}";
    }
}
