<?php

namespace TelegramBot\Abstracts;

use TelegramBot\TelegramBot;
use TelegramBot\TelegramException;
use TelegramBot\Types\Response;

/**
 * Class BaseMethod
 */
abstract class BaseMethod
{
    /**
     * Bot instance
     * @var TelegramBot $bot
     */
    protected $bot;
    
    /**
     * API endpoint
     * @var string $endpoint
     */
    protected $endpoint;
    
    /**
     * Method parameters
     * @var array $parameters
     */
    protected $parameters;
    
    /**
     * Endpoint request method
     * @var bool $isPost
     */
    protected $isPost = true;
    
    /**
     * BaseMethod constructor
     * @param  TelegramBot  $bot
     * @param  array  $parameters
     */
    public function __construct(TelegramBot $bot, array $parameters = [])
    {
        $this->bot = $bot;
        $this->parameters = $parameters;
    }
    
    /**
     * Set method parameter
     * @param  string  $key  Parameter key
     * @param  mixed  $value  Parameter value
     * @return BaseMethod
     */
    public function setRaw($key, $value): self
    {
        $this->parameters[$key] = $value;
        return $this;
    }
    
    /**
     * Send request
     * @return Response|mixed
     */
    public function send()
    {
        $parameters = array_map(static function ($item) {
            if ($item instanceof BaseType) {
                return $item->toArray();
            }
            return $item;
        }, $this->parameters);
        
        return $this->bot->send($this->endpoint, $parameters, $this->isPost);
    }
}