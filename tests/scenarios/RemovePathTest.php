<?php

class RemovePathTest extends AdvancedFsTestCase
{
    public function testOneLevel()
    {
        $path = $this->mockDir() . '/newdir1';
        $this->createSomeFiles($path);
        AdvancedFs::removePath($path);
        $this->assertEquals(false, is_dir($path));
    }

    private function createSomeFiles($path)
    {
        mkdir($path);
        file_put_contents($path . '/somefile.txt', $path);
        file_put_contents($path . '/.somehiddenfile', $path);
        mkdir($path . '/subdir');
        file_put_contents($path . '/subdir/somefile.txt', $path);
        file_put_contents($path . '/subdir/.somehiddenfile', $path);
    }
}