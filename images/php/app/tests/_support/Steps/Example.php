<?php
namespace Steps;


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
}