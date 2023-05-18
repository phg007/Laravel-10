<?php

namespace App\Http\Controllers\Admin;

use App\Models\Support;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {

        $supports = $support->all();
        
        return view('admin/supports/index', compact('supports'));
    }
}
