<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClientsController extends Controller
{
    public function index()
    {
        return view('clients.index');
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'organization_name' => 'required',
            'organization_id_number' => 'required',
            'organization_website' => 'required',
        ]);

        return 'saved';
    }
}
