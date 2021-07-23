<?php
namespace Step\Acceptance;

class WelcomingPage extends \AcceptanceTester
{
    protected $I;

    function __construct(\AcceptanceTester $I)
    {
        $this->I = $I;
    } 
  /**
     * @Given /^saya berada pada halaman "([^"]+)"$/i
     */
    public function sayaBeradaPadaHalaman($arg1)
    {
        $this->I->amOnPage($arg1);
        // throw new \PHPUnit\Framework\IncompleteTestError("Step `saya berada pada halaman :arg1` is not defined");
    }

   /**
    * @When /^user pilih "([^"]+)"$/i
    */
    public function userPilih($arg1)
    {
        $this->I->click($arg1);
        // throw new \PHPUnit\Framework\IncompleteTestError("Step `user pilih :arg1` is not defined");
    }

   /**
    * @Then /^sistem akan menuju halaman "([^"]+)"$/i
    */
    public function sistemAkanMenujuHalaman($arg1)
    {
        $this->I->amOnPage($arg1);
        // throw new \PHPUnit\Framework\IncompleteTestError("Step `sistem akan menuju halaman :arg1` is not defined");
    }
}