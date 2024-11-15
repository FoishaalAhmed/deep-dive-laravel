<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index(Request $request)
    {
        $request->ips();

        $request->getAcceptableContentTypes();

        $request->collect();

        dd($request->string('name')->trim()->lower());
    }
}
