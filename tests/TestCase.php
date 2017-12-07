<?php
// +----------------------------------------------------------------------
// | TestCase.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace Tests;

use PHPUnit\Framework\TestCase as UnitTestCase;
use Xin\Support\File as FileSystem;

abstract class TestCase extends UnitTestCase
{
    protected $tempDir;

    public function setUp()
    {
        $this->tempDir = __DIR__ . '/tmp';
        mkdir($this->tempDir);
    }

    public function tearDown()
    {
        $files = new Filesystem;
        $files->deleteDirectory($this->tempDir);
    }
}