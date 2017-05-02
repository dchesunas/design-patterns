<?php

class MazeGame {
    public function createMaze(Fabric $factory)
    {
        $aMaze = $factory->MakeMaze();
        $r1 = $factory->MakeRoom(1);
        $r2 = $factory->MakeRoom(2);
        $theDoor = $factory->MakeDoor($r1, $r2);
        $aMaze->addRoom($r1);
        $aMaze->addRoom($r2);

        $r1->setSide('North', $factory->MakeWall());
        $r1->setSide('East', $theDoor);
        $r1->setSide('South', $factory->MakeWall());
        $r1->setSide('West', $factory->MakeWall());

        $r2->setSide('North', $factory->MakeWall());
        $r2->setSide('East', $factory->MakeWall());
        $r2->setSide('South', $factory->MakeWall());
        $r2->setSide('West', $theDoor);

        return $aMaze;
    }
}

$game = new MazeGame();
$game = $game->createMaze();