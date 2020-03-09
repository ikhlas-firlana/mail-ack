<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mails\MyEmail;


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
    public function sendEmail() {
        try {
            Mail::to('ifirlana@gmail.com')->send(new MyEmail());
            return response()->json([]);
        } catch (\Exception $e) {
            //throw $th;
            return response()->json($e->getMessage());
        }
    }
}
