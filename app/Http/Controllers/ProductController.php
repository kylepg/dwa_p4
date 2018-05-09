<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /*
    * Asks user to confirm they actually want to delete the product
    */
    public function delete($id)
    {
        $book = Book::find($id);

        if (!$book) {
            return redirect('/books')->with('alert', 'Book not found');
        }

        return view('books.delete')->with([
            'book' => $book,
        ]);
    }

    /*
    * Actually deletes the book
    */
    public function destroy($id)
    {
        $book = Product::find($id);

        # Before we delete the book we have to delete any tag associations
        $book->tags()->detach();

        $book->delete();

        return redirect('/books')->with([
            'alert' => '“' . $book->title . '” was removed.'
        ]);
    }
}
