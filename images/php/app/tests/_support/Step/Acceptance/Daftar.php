<?php
namespace Step\Acceptance;


class Daftar
{
  protected $I;

  function __construct(\AcceptanceTester $I)
  {
      $this->I = $I;
  } 
  
     /**
     * @Given /^saya berada di halaman "([^"]+)"$/
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
    * @Given saya pilih opsi :arg1
    */
    public function sayaPilihOpsi($arg1)
    {
        $this->I->click($arg1);
        // throw new \PHPUnit\Framework\IncompleteTestError("Step `saya pilih opsi :arg1` is not defined");
    }

   /**
    * @Given saya memilih opsi :arg1
    */
    public function sayaMemilihOpsi($arg1)
    {
        $this->I->click($arg1);
        // throw new \PHPUnit\Framework\IncompleteTestError("Step `saya memilih opsi :arg1` is not defined");
    }

    /**
     * @Given saya mengisi form: :arg1
     */
    public function sayaMengisiForm(\Behat\Gherkin\Node\PyStringNode $arg1)
    {   
        $data1 = explode(":", $arg1->getStrings()[0]);
        $data2 = explode(":", $arg1->getStrings()[1]);
        $data3 = explode(":", $arg1->getStrings()[2]);
        echo(explode(":", $arg1->getStrings()[0]));
        // $this->I->fillField('Nama Lengkap:',);
        // throw new \PHPUnit\Framework\IncompleteTestError("Step `saya mengisi form: :arg1` is not defined");
    }

   /**
    * @Then sistem akan menampilkan halaman :arg1
    */
    public function sistemAkanMenampilkanHalaman($arg1)
    {
        $this->I->amOnPage($arg1);
        // throw new \PHPUnit\Framework\IncompleteTestError("Step `sistem akan menampilkan halaman :arg1` is not defined");
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
    public function sistemMenampilkanresult()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `sistem menampilkan <result>` is not defined");
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