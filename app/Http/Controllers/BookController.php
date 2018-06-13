<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Resources\BooksResource;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index(){

        $book = Book::with('ratings')->orderBy('created_at','desc')->paginate(5);

        return BooksResource::collection($book);
    }
}
