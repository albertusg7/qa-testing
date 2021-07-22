<?php
namespace Step\Acceptance;

class Example
{
    protected $I;

    public function __construct(\AcceptanceTester $I)
    {
        $this->I = $I;
    }
 
    /**
     * @When I see :arg1
     */
    public function iSee($arg1)
    {
        $this->I->see($arg1);
    }
}
