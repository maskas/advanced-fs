<?php

class CreateWritableDirTest extends AdvancedFsTestCase
{
    public function testOneLevel()
    {
        $dir = $this->mockDir() . '/firstdir';
        AdvancedFs::createPath($dir);

        $this->assertEquals(true, is_dir($dir));
    }

    public function testMultipleLevels()
    {
        $dir = $this->mockDir() . '/dir1/dir2/dir3';
        AdvancedFs::createPath($dir);
        $this->assertEquals(true, is_dir($dir));
    }

    public function testAdditionalSlash()
    {
        $dir = $this->mockDir() . '/somedir/domeotherdir/';
        AdvancedFs::createPath($dir);
        $this->assertEquals(true, is_dir($dir));
    }
}