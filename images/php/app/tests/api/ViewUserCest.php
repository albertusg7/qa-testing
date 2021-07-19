<?php

class ViewUserCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
    }

    public function getDetail(ApiTester $I)
    {
        $id = "1";
        $I->sendGet('/users/'.$id, ['status' => 'pending']);
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson([
            'user' => [
                'name' => 'davert',
                'email' => 'davert@codeception.com',
                'status' => 'inactive'
            ]
          ]);
    }
    public function getDetailNotFound(ApiTester $I)
    {
        $id = "2";
        $I->sendGet('/users/'.$id, ['status' => 'pending']);
        $I->seeResponseCodeIs(404);
    }
    
}
