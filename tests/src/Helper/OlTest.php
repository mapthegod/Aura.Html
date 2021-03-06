<?php
namespace Aura\Html\Helper;

class OlTest extends AbstractHelperTest
{
    public function test()
    {
        $ol = $this->helper;
        
        $actual = $ol(array('id' => 'test'))
                ->items(array('foo', 'bar', 'baz'))
                ->item('dib', array('class' => 'callout'))
                ->get();
        
        $expect = '<ol id="test">' . PHP_EOL
                . '    <li>foo</li>' . PHP_EOL
                . '    <li>bar</li>' . PHP_EOL
                . '    <li>baz</li>' . PHP_EOL
                . '    <li class="callout">dib</li>' . PHP_EOL
                . '</ol>' . PHP_EOL;
        
        $this->assertSame($expect, $actual);
        
        $actual = $ol()->items(array('foo', 'bar', 'baz'))->get();
        $expect = '<ol>' . PHP_EOL
                . '    <li>foo</li>' . PHP_EOL
                . '    <li>bar</li>' . PHP_EOL
                . '    <li>baz</li>' . PHP_EOL
                . '</ol>' . PHP_EOL;
        $this->assertSame($expect, $actual);
        
        $actual = $ol()->get();
        $expect = null;
        $this->assertSame($expect, $actual);
    }
}
