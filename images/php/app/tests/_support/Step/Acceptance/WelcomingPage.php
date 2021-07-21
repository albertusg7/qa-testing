<?php
namespace Step\Acceptance;

class WelcomingPage extends \AcceptanceTester
{
  /**
     * @Given saya berada pada halaman :arg1
     */
    public function sayaBeradaPadaHalaman($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `saya berada pada halaman :arg1` is not defined");
    }

   /**
    * @When user pilih :arg1
    */
    public function userPilih($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `user pilih :arg1` is not defined");
    }

   /**
    * @Then sistem akan menuju halaman :arg1
    */
    public function sistemAkanMenujuHalaman($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `sistem akan menuju halaman :arg1` is not defined");
    }

   /**
    * @Given saya mendownload apk :arg1
    */
    public function sayaMendownloadApk($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `saya mendownload apk :arg1` is not defined");
    }

   /**
    * @Given terdapat halaman :arg1
    */
    public function terdapatHalaman($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `terdapat halaman :arg1` is not defined");
    }
}