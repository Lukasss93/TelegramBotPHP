<?php

namespace TelegramBot\Methods;

use TelegramBot\Abstracts\BaseMethod;
use TelegramBot\Types\User;

class GetMe extends BaseMethod
{
    protected $endpoint = 'getMe';
    protected $isPost = false;
    
    /**
     * Send request
     * @return static
     */
    public function send(): self
    {
        return parent::send()->getResultAs(User::class);
    }
}