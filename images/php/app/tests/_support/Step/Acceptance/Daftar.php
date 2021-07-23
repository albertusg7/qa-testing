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
    * @Given /^terdapat opsi "([^"]+)"$/i
    */
    public function terdapatOpsi($arg1)
    {
        $this->I->see($arg1);
        // throw new \PHPUnit\Framework\IncompleteTestError("Step `terdapat opsi: :arg1` is not defined");
    }

   /**
    * @Given /^saya pilih opsi "([^"]+)"$/i
    */
    public function sayaPilihOpsi($arg1)
    {
        $this->I->click($arg1);
        // throw new \PHPUnit\Framework\IncompleteTestError("Step `saya pilih opsi :arg1` is not defined");
    }

   /**
    * @Given /^saya memilih opsi "([^"]+)"$/i
    */
    public function sayaMemilihOpsi($arg1)
    {
        $this->I->click($arg1);
        // throw new \PHPUnit\Framework\IncompleteTestError("Step `saya memilih opsi :arg1` is not defined");
    }

    /**
     * @Given saya mengisi form: :arg1
     */
    public function sayaMengisiForm($arg1)
    {
        $this->I->see($arg1);
        // throw new \PHPUnit\Framework\IncompleteTestError("Step `saya mengisi form: :arg1` is not defined");
    }

   /**
    * @Then sistem akan menampilkan halaman :arg1
    */
    public function sistemAkanMenampilkanHalaman($arg1)
    {
        $this->I->imOnPage($arg1);
        throw new \PHPUnit\Framework\IncompleteTestError("Step `sistem akan menampilkan halaman :arg1` is not defined");
    }

   /**
    * @When Saya mengisi dengan case --------------------------------------
    */
    public function sayaMengisiDenganCase()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `Saya mengisi dengan case --------------------------------------` is not defined");
    }

   /**
    * @Then sistem menampilkan <result>
    */
    public function sistemMenampilkanresult($arg1)
    {
        $this->I->see($arg1);
        // throw new \PHPUnit\Framework\IncompleteTestError("Step `sistem menampilkan <result>` is not defined");
    }

   /**
    * @When Saya mengisi dengan case [positive case] - Daftar Akun passed
    */
    public function sayaMengisiDenganCasepositiveCaseDaftarAkunPassed()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `Saya mengisi dengan case [positive case] - Daftar Akun passed` is not defined");
    }

   /**
    * @When Saya mengisi dengan case [negative case] - Daftar Akun failed
    */
    public function sayaMengisiDenganCasenegativeCaseDaftarAkunFailed()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `Saya mengisi dengan case [negative case] - Daftar Akun failed` is not defined");
    }

}