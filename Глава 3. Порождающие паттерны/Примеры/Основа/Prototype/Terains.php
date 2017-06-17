<?php


abstract class Terrain {}

abstract class Sea extends Terrain {}
class EarthSea extends Sea {}
class MarsSea extends Sea {}
class VenusSea extends Sea {}

abstract class Plains extends Terrain {}
class EarthPlains extends Plains {}
class MarsPlains extends Plains {}
class VenusPlains extends Plains {}

abstract class Forest extends Terrain {}
class EarthForest extends Forest {}
class MarsForest extends Forest {}
class VenusForest extends Forest {}


class TerrainFactory {
    private $sea;
    private $forest;
    private $plains;

    public function __construct( Sea $sea, Plains $plains, Forest $forest ) {
        $this->sea = $sea;
        $this->plains = $plains;
        $this->forest = $forest;
    }
    function getSea( ) {
        return clone $this->sea;
    }
    function getPlains( ) {
        return clone $this->plains;
    }
    function getForest( ) {
        return clone $this->forest;
    }
}


$prototypeFactory = new TerrainFactory(
new EarthSea(),
new MarsPlains(),
new VenusForest()
);
$sea = $prototypeFactory->getSea();
$plains = $prototypeFactory->getPlains();
$forest = $prototypeFactory->getForest();
