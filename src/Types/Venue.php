<?php

namespace TelegramBot\Types;

use TelegramBot\Abstracts\BaseType;

/**
 * This object represents a venue.
 * @see https://core.telegram.org/bots/api#venue
 */
class Venue extends BaseType
{
    /**
     * Venue location
     * @var Location $location
     */
    public $location;
    
    /**
     * Name of the venue
     * @var string $title
     */
    public $title;
    
    /**
     * Address of the venue
     * @var string $address
     */
    public $address;
    
    /**
     * Optional. Foursquare identifier of the venue
     * @var string $foursquare_id
     */
    public $foursquare_id;
    
    /**
     * Optional. Foursquare type of the venue.
     * (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
     * @var string $foursquare_type
     */
    public $foursquare_type;
}
