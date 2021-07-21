<?php
namespace Step\Acceptance;


class Example
{
  protected $I;

  function __construct(\AcceptanceTester $I)
  {
      $this->I = $I;
  }
  /**
     * @Given I on page :arg1
     */
     public function iOnPage($arg1)
     {
         $this->I->amOnPage($arg1);
     }
    /**
     * @When I see :arg1
     */
    public function iSee($arg1)
    {
        $this->I->see($arg1);
    }
}