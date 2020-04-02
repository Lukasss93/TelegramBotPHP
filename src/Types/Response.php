<?php

namespace TelegramBot\Types;

use Exception;
use JsonMapper;
use TelegramBot\Abstracts\BaseType;

/**
 * Response from an API request
 * @see https://core.telegram.org/bots/api#making-requests
 */
class Response extends BaseType
{
    /**
     * Response status
     * @var bool $ok
     */
    public $ok;
    
    /**
     * An Integer field but its contents are subject to change in the future.
     * @var int $error_code
     */
    public $error_code;
    
    /**
     * Optional field with a human-readable description of the result.
     * @var string $description
     */
    public $description;
    
    /**
     * Result data
     * @var array $result
     */
    public $result;
    
    /**
     * Optional field which can help to automatically handle the error.
     * @var ResponseParameters $parameters
     */
    public $parameters;
    
    /**
     * Get the result data
     * @param  string  $key
     * @return mixed
     */
    public function getResult($key = null)
    {
        if ($key !== null) {
            $this->result[$key];
        }
        
        return $this->result;
    }
    
    /**
     * Get the result data as an Object or Object Array
     * @param $class
     * @param  bool  $isArray
     * @return mixed
     */
    public function getResultAs($class, $isArray = false)
    {
        $mapper = new JsonMapper();
        $mapper->bStrictNullTypes = false;
        
        try {
            if ($isArray) {
                return $mapper->mapArray($this->result, [], $class);
            }
            
            return $mapper->map((object)$this->result, new $class());
        } catch (Exception $e) {
            return (object)$this->result;
        }
    }
}
