<?php
use PHPUnit\Framework\TestCase;

class AdvancedFsTestCase extends TestCase
{
    const MOCK_DIR_ROOT = 'mockdir';
    private $mockDir = null;
    public static function setUpBeforeClass() {
        $mockRoot = self::MOCK_DIR_ROOT;
        `rm -rf $mockRoot`;
        mkdir($mockRoot);
    }

    protected function setUp() {
        $this->mockDir = self::MOCK_DIR_ROOT . '/' . time();
        mkdir($this->mockDir);
    }

    public function mockDir (){
        return $this->mockDir;
    }

//    protected function tearDown() {
//        $mockDir = self::MOCKDIR;
//        `rm -rf $mockDir`;
//    }

}