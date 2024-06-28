<?php
namespace ScreenMatch\Model;
interface Rated
{
    public function getAverageRating(): float;
    public function addRating(float $rating): void; 
}