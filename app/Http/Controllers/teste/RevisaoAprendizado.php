<?php

namespace App\Http\Controllers\teste;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RevisaoAprendizado extends Controller
{
    public function revisao()
    {

        return view("teste/revisao/revisao");
    }
}
