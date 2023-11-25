<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookCreateRequest;
use App\Http\Requests\BookEditRequest;
use App\Models\Book;
use Illuminate\Routing\Controller as BaseController;

class BookController extends BaseController
{
    public function create(BookCreateRequest $request)
    {
        $book = Book::insert($request->all());

        return response()->json($book);
    }

    public function show()
    {
        return response()->json(
            Book::getBooksWithAuthors()
        );
    }

    public function edit(BookEditRequest $request)
    {
        $book = Book::where('id', $request->input('id'))
            ->update($request->all());

        return response()->json($book);
    }

    public function single(string $id)
    {
        return response()->json(
            [
                'book' => Book::select()->where('id', $id)->first(),
                'authors' => Book::getAuthors($id)
            ]
        );
    }

    public function search(string $keywords)
    {
        return response()->json(
            Book::select()->where('name', 'like', '%' . $keywords . '%')->get()
        );
    }
}
