<?php

class CleanPathTest extends AdvancedFsTestCase
{
    public function testOneLevel()
    {
        $path = $this->mockDir() . '/path-to-clean';
        $this->createSomeFiles($path);
        AdvancedFs::cleanPath($path);

        $this->assertEquals(true, is_dir($path));

        $files = scandir($path);
        $realFiles = [];
        foreach ($files as $key => $file) {
            if (!in_array($file, ['.', '..'])) {
                $realFiles[] = $file;
            }
        }
        $this->assertEmpty($realFiles);
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