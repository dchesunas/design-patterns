<?php

class Room extends MapSite
{
    private $_roomNumber;
    private $_sides = [];
    public function __construct($number)
    {
            $this->_roomNumber = $number;
    }

    public function setSide($Direction, MapSite $mapSite)
    {
    }


}