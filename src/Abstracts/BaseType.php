<?php

namespace TelegramBot\Abstracts;

use ReflectionClass;
use ReflectionException;

abstract class BaseType
{
    /**
     * Instance the class via static
     * @return static
     */
    public static function create(): self
    {
        return new static();
    }
    
    /**
     * Returns object as array
     * @return array
     */
    public function toArray(): array
    {
        $properties = [];
        
        try {
            $reflection = new ReflectionClass($this);
            
            foreach ($reflection->getProperties() as $property) {
                $name = $property->name;
                $value = $this->{$name};
                
                if ($value !== null) {
                    $properties[$name] = $value;
                }
            }
            
        } catch (ReflectionException $e) {
        }
        
        return $properties;
    }
}