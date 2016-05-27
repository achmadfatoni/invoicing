<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Support\Facades\Request;

class ClientsController extends Controller
{
    public function index()
    {
        if (Request::ajax()) {
            return Client::all();
        }

        return view('clients.index');
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'organization_name' => 'required',
            'organization_id_number' => 'required',
            'organization_website' => 'required',
        ]);

        return 'saved';
    }
}
