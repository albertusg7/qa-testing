<?php
namespace Step\Acceptance;
use Log;



class Daftar
{
  protected $I;

  function __construct(\AcceptanceTester $I)
  {
      $this->I = $I;
  } 
  
     /**
     * @Given /^saya berada di halaman "([^"]+)"$/
     * @Given /^I on page "([^"]+)"$/i
     */
    public function sayaBeradaDiHalamanBeranda($arg1)
    {
        $this->I->amOnPage($arg1);
        // throw new \PHPUnit\Framework\IncompleteTestError("Step `saya berada di halaman :arg1` is not defined");
    }

   /**
    * @Given /^terdapat opsi "([^"]+)"$/
    */
    public function terdapatOpsi1($arg1)
    {
        $this->I->amOnPage('/');
        // throw new \PHPUnit\Framework\IncompleteTestError("Step `terdapat opsi: :arg1` is not defined");
    }

   /**
    * @Given /^terdapat opsi:/
    */
    public function terdapatOpsi2(\Behat\Gherkin\Node\PyStringNode $markdown)
    {
        // $this->I->amOnPage($markdown->getLine());
        echo(json_encode($markdown->getStrings()));
    }

   /**
    * @Given saya pilih opsi :arg1
    */
    public function sayaPilihOpsi($arg1)
    {
        $this->I->amOnPage($arg1);
        // throw new \PHPUnit\Framework\IncompleteTestError("Step `saya pilih opsi :arg1` is not defined");
    }

   /**
    * @Given saya memilih opsi :arg1
    */
    public function sayaMemilihOpsi($arg1)
    {
        $this->I->amOnPage($arg1);
        // throw new \PHPUnit\Framework\IncompleteTestError("Step `saya memilih opsi :arg1` is not defined");
    }
}