<?php

class Fabric
{
    public function MakeMaze()
    {
        return new Maze();
    }
    public function MakeRoom($number)
    {
        return new Room($number);
    }
    public function MakeWall()
    {
        return new Wall();
    }
    public function MakeDoor(Room $r1, Room $r2)
    {
        return new Door($r1, $r2);
    }
}