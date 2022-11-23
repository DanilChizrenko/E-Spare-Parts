<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Models;
use App\Models\ModelCategory;

class CategoryController extends Controller
{
    public function show(Request $request){
        if($request->name!=null){
            $categories = Category::with('models')->where('name', '=', $request -> name)->get();
        }else{
            return response()->json('Not Elements',404);
        }
        return $categories;
    }
    public function create(Request $request){
        $category = Category::create(['name' => $request -> name]);
        return $category;
    }

    public function createCompound(Request $request){
        $model_category = ModelCategory::create(['category_id'=> $request -> category_id,'model_id'=> $request -> model_id]);
        return $model_category;
    }

    public function update(Request $request){
        try {
            $category = Category::findOrFail([$request->id]);
        }
        catch(Exception $exception){
            throw new NotFoundException('Not found category!');
        }
        $category->update(['name' => $request -> name]);
        return $category;
    }
    public function delete($id){
        try {
            $category = Category::findOrFail($id);
        }
        catch(Exception $exception){
            throw new NotFoundException('Not found category!');
        }
        $category->delete();
        return response()->json('Seccesfully deleted', 204);
    }
}
