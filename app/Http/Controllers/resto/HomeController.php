<?php

namespace App\Http\Controllers\resto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class HomeController extends Controller
{
    public function __construct()
{
$this->middleware('auth');
}
public function index()
{
return view('resto.home.index');
}
}
