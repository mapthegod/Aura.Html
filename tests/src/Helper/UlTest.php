<?php
namespace Aura\Html\Helper;

class UlTest extends AbstractHelperTest
{
    public function test()
    {
        $ul = $this->helper;
        
        $actual = $ul(array('id' => 'test'))
                ->items(array('foo', 'bar', 'baz'))
                ->item('dib', array('class' => 'callout'))
                ->get();
        
        $expect = '<ul id="test">' . PHP_EOL
                . '    <li>foo</li>' . PHP_EOL
                . '    <li>bar</li>' . PHP_EOL
                . '    <li>baz</li>' . PHP_EOL
                . '    <li class="callout">dib</li>' . PHP_EOL
                . '</ul>' . PHP_EOL;
        
        $this->assertSame($expect, $actual);
        
        $actual = $ul()->items(array('foo', 'bar', 'baz'))->get();
        $expect = '<ul>' . PHP_EOL
                . '    <li>foo</li>' . PHP_EOL
                . '    <li>bar</li>' . PHP_EOL
                . '    <li>baz</li>' . PHP_EOL
                . '</ul>' . PHP_EOL;
        $this->assertSame($expect, $actual);
        
        $actual = $ul()->get();
        $expect = null;
        $this->assertSame($expect, $actual);
    }
}
