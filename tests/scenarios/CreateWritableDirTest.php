<?php

class CreateWritableDirTest extends AdvancedFsTestCase
{
    public function testOneLevel()
    {
        $dir = $this->mockDir() . '/firstdir';
        AdvancedFs::createPath($dir);

        $this->assertEquals(true, is_dir($dir));
    }

//    public function testMultipleLevels()
//    {
//        $dir = self::MOCKDIR . '/dir1/dir2/dir3';
//        AdvancedFs::createPath($dir);
//        $this->assertEquals(true, is_dir($dir));
//    }
//
//    public function testAdditionalSlash()
//    {
//        $dir = self::MOCKDIR . '/somedir/domeotherdir/';
//        AdvancedFs::createPath($dir);
//        $this->assertEquals(true, is_dir($dir));
//    }
}