<?php

class Door extends MapSite
{
    public function __construct(Room $room1,Room $room2)
    {
        $this->room1 = $room1;
        $this->room2 = $room2;
    }

    public function Enter()
    {
        return parent::Enter();
    }

    public function otherSideFrom(Room $room)
    {

    }

    private $room1;
    private $room2;
    private $_isOpen = false;
}