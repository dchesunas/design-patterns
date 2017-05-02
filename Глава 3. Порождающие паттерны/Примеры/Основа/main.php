<?php

class MazeGame {
    public function createMaze()
    {
        $aMaze = new Maze();
        $r1 = new Room(1);
        $r2 = new Room(2);
        $theDoor = new Door($r1, $r2);
        $aMaze->addRoom($r1);
        $aMaze->addRoom($r2);

        $r1->setSide('North', new Wall());
        $r1->setSide('East', $theDoor);
        $r1->setSide('South', new Wall());
        $r1->setSide('West', new Wall());

        $r2->setSide('North', new Wall());
        $r2->setSide('East', new Wall());
        $r2->setSide('South', new Wall());
        $r2->setSide('West', $theDoor);

        return $aMaze;
    }
}

$game = new MazeGame();
$game = $game->createMaze();