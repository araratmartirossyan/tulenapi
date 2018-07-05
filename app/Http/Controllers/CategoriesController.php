<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller {

  public function index() {
    $post = Category::all();
    return response() -> json($post);
  }

  public function create(Request $request) {
    $this -> validate($request, [
      'title' => 'required'
    ]);
    $newPost = Category::create($request->all());
    if ($newPost) {
      return response() -> json([
        'status' => 'success',
        'newElementId' => $newPost
      ]);
    } else {
      return response()->json(['status' => 'fail']);
    }
  }
}
