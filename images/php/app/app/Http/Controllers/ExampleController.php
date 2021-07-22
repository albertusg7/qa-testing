<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    //
    public function getUser( $id)
    {
        if ($id == "1")
            return response()->json([
                'user' => [
                    'name' => 'davert',
                    'email' => 'davert@codeception.com',
                    'status' => 'inactive'
                ]
            ]);
        return response()->json(['id' => $id], 404, ['x-header' => 'value header']);
    }
    public function getSession(Request $request){
        return $request->url();
    }
}
