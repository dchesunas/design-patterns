<?php

class Maze
{
    public function addRoom(Room $room)
    {
        $rooms[] = $room;
    }

    public function getRoom($roomNubmer)
    {
        return $this->rooms[$roomNubmer];
    }

    private $rooms = [];

}