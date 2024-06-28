<?php
namespace ScreenMatch\Calculations;

use DivisionByZeroError;
use ScreenMatch\Model\Rated;
class StarConverter
{
    public function convert(Rated $rated): float
    {
        try {
        $rating = $rated->getAverageRating();
        return round($rating) / 2;
        } catch (DivisionByZeroError) {
            return 0;
        }
    }
}