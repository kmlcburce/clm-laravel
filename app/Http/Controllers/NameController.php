<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Name;

class NameController extends APIController
{
    public function retrieveAll(Request $request)
    {
        $page = $request->input('page', 1);
        $perPage = $request->input('perPage', 5);

        $names = Name::paginate($perPage, ['*'], 'page', $page);

        return response()->json([
            'users' => $names->items(),
            'total' => $names->total(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
        ]);

        $name = Name::create($validated);

        $this->response['name'] = $name;
        $this->response['status'] = 201;
        return $this->getResponse();
    }
}

