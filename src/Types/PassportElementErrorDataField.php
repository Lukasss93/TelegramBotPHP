<?php

namespace TelegramBot\Types;

use TelegramBot\Abstracts\BaseType;

/**
 * Represents an issue in one of the data fields that was provided by the user. The error is considered resolved when
 * the field's value changes. Class PassportElementErrorDataField
 * @see https://core.telegram.org/bots/api#passportelementerrordatafield
 */
class PassportElementErrorDataField extends BaseType
{
    /**
     * Error source, must be data
     * @var string $source
     */
    public $source;
    
    /**
     * The section of the user's Telegram Passport which has the error, one of “personal_details”,
     * “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”
     * @var string $type
     */
    public $type;
    
    /**
     * Name of the data field which has the error
     * @var string $field_name
     */
    public $field_name;
    
    /**
     * Base64-encoded data hash
     * @var string $data_hash
     */
    public $data_hash;
    
    /**
     * Error message
     * @var string $message
     */
    public $message;
}
