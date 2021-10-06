<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Repositories\AccountRepository;
use App\Http\Requests\frontend\createAccount;
use App\Http\Requests\frontend\updateAccount;

class LoginController extends Controller
{

  public $account;

  public function __construct(AccountRepository $account)
  {
    $this->account = $account;
  }


  public function login(Request $request)
  {
    return  $this->account->login($request);
  }


  public function logout()
  {
    return $this->account->logout();
  }


  public function register(createAccount $request)
  {

    return  $this->account->register($request);
  }


  public function editAccount()
  {
    $dataAcount =  $this->account->editAccount();
    return view('frontend/editAcount', compact('dataAcount'));
  }


  public function uploadAccount(updateAccount $request)
  {


    return $this->account->uploadAccount($request);
  }

  public function uploadPassword(Request $request)
  {
    return $this->account->uploadPassword($request);

  }
}
