<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Product;

class ProductController extends Controller
{

  public function create()
  {
    $category=Category::all();
    return view('products.create',compact('category'));
  }

  public function store(Request $request)
  {
      $product = new Product;
      $product->name = $request->get('name');
      $product->price = $request->get('price');

      $product->save();

      $category = $request->category_id;
      //dd($category);
      $product->categories()->attach($category);

      return 'Success';
  }
}
