<?php

namespace Conv\Factory;

use Conv\Structure\TableStructure;

class TableStructureFactoryTest extends \PHPUnit\Framework\TestCase
{
    public function testFromYaml()
    {
        $actual = TableStructureFactory::fromYaml('tests/schema/tbl_player.yaml');
        // TODO
        $this->assertInstanceOf(TableStructure::class, $actual);
    }
}