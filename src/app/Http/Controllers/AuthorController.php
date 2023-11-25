<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorCreateRequest;
use App\Models\Author;
use Illuminate\Routing\Controller as BaseController;

class AuthorController extends BaseController
{
    public function create(AuthorCreateRequest $request)
    {
        $author = Author::insert($request->all());

        return response()->json($author);
    }

    public function show()
    {
        return response()->json(
            Author::select()->paginate(10)
        );
    }
}
