<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public static function getBooksWithAuthors()
    {
        $books = Book::select()->get();

        foreach ($books as $book) {
            $book->authors = static::getAuthors($book->id);
        }

        return $books;
    }

    public static function getAuthors(int $bookId)
    {
        return BookAuthorPivot::query()
            ->select('first_name', 'last_name', 'patronymic')
            ->where('book_id', $bookId)
            ->join('authors', 'authors.id', '=', 'author_id')
            ->get();
    }
}
