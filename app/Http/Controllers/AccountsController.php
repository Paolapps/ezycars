<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AccountsController extends Controller
{
    // Display accounts
    public function accounts(){
        return View('viewAccounts.accounts');
    }

    //add User
    public function addUser(){
        return View('viewAccounts.addUser');
    }
}
