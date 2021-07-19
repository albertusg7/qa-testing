<?php

class ExampleTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function test()
    {
        $y =  $this->make(
            'Y',
            [
                'getSomething' => "fake"
            ]
        );
        $x = new X($y);
        $this->assertEquals($x->getAnotherThing(), "X call :"."fak");
    }
}

class X
{
    private $y;
    public function __construct(Y $y)
    {
        $this->y = $y;
    }
    function getAnotherThing()
    {
        return 'X call :'.$this->y->getSomething();
    }
}
class Y
{
    function getSomething()
    {
        return "original";
    }
}
