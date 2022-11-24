<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function book () {
        $books = Book::all();
        $categories = Category::all();
        return view('home', ['books'=>$books, 'categories'=>$categories]);
    }

    public function detail ($id) {
        $book = Book::find($id);
        $categories = Category::all();
        return view('detail', ['book'=>$book, 'categories'=>$categories]);
    }

    public function category ($id) {
        $categories = Category::all();
        $category = Category::find($id);

        return view('category', ['category'=>$category, 'categories'=>$categories]);
    }

    public function publisher () {
        $categories = Category::all();
        $publishers = Publisher::all();

        return view('publisher', ['publishers'=>$publishers, 'categories'=>$categories]);
    }

    public function contact () {
        $categories = Category::all();

        return view('contact', ['categories'=>$categories]);
    }
}
