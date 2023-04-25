<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;

class TestEmailQueuController extends Controller
{
    public function sendMail(){
       
       $email = new SendEmailJob();
       $this->dispatch($email);
    }
}
