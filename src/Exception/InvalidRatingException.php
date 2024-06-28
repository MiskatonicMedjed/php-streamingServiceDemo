<?php

namespace ScreenMatch\Exception;

class InvalidRatingException extends \InvalidArgumentException 
{
    public function __contruct() {
        parent::__construct('Rating needs to be larger than 0 and smaller than 10.');
    }
}
