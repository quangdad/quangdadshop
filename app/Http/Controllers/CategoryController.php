<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Components\Recusive;
class CategoryController extends Controller
{
    private $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    public function create(){
        $data = $this->category::all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive();
        return view('category.add', compact('htmlOption'));

    }
    public function index(){
        return view('category.index');
    }

    public function store(Request $request){
        $this->category->create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => str::slug($request->name)
        ]);
    }
}
