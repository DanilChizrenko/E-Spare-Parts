<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Models;

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
        $model = Models::find([1,2,3,4,5,6,7,8]);
        $category = Category::with('models')->find($request->id);
        $category->models()->attach($model);
        return 'Success';
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
