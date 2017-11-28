<?php

use PHPUnit\Framework;

class PhpFunctionTest extends Framework\TestCase
{
    public function testPhpFunctionStrSplit()
    {
        $strSplitRewriting = new \Wcs\PhpFunction();
        $this->assertEquals(array('a'),$strSplitRewriting->rewritingStrSplit('a',1));
        $this->assertEquals(array('a','b'),$strSplitRewriting->rewritingStrSplit('ab',1));
        $this->assertEquals(array('abc','def','ghi'), $strSplitRewriting->rewritingStrSplit('abcdefghi', 3));

    }
}