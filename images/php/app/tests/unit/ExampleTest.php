<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

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

    public function testUserDetailSuccess(){
        $exam = new App\Http\Controllers\ExampleController();
        $expected = json_encode( array(
            
                'user' => [
                    'name' => 'davert',
                    'email' => 'davert@codeception.com',
                    'status' => 'inactive'
                ]
            ));
        
            $this->assertEquals($expected,$exam->getUser("1")->getContent());
    }
    public function testUserDetailFail(){
        $exam = new App\Http\Controllers\ExampleController();
        $id = '2';
        $expected = Illuminate\Http\Response::HTTP_NOT_FOUND;
        
        $this->assertEquals($expected,$exam->getUser($id)->getStatusCode());
    }
    public function testRequest(){
        $exam = new App\Http\Controllers\ExampleController();
        $expected = 'testing/5';
        $requestMock = Mockery::mock(Request::class)
            ->makePartial()
            ->shouldReceive('url')
            ->once()
            ->andReturn($expected);

        app()->instance('request', $requestMock->getMock());

        $request = request();

        $request->setRouteResolver(function () use ($request) {
            return (new Route('GET', 'testing/{info}', []))->bind($request);
        });
        
        $this->assertEquals($expected,$exam->getSession($request ));
    }
    
    // tests
    public function testDummy()
    {
        $y =  $this->make(
            'Y',
            [
                'getSomething' => "fake"
            ]
        );
        $x = new X($y);
        $this->assertEquals($x->getAnotherThing(), "X call :"."fake");
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
