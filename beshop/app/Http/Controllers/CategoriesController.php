<?php


namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(Category::with(['children'])->whereNull('parent_id')->get());
    }
}
