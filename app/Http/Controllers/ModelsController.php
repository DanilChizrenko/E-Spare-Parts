<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models;
use App\Models\Category;

class ModelsController extends Controller
{
    public function show(Request $request){
        if($request->brand_id!=null){
            $models = Models::with('brand')->where('brand_id', '=', $request->brand_id)->get();
        }else{
            return response()->json('Not Elements',404);
        }
        return $models;
    }
    public function create(Request $request){
        $model = Models::create(['name' => $request -> name,
        'typefuel' => $request -> typefuel,
        'brand_id' => $request -> brand_id,
        'year' => $request -> year,
        'category_id' => $request -> category_id]);
        return $model;
    }
    public function update(Request $request){
        try {
            $model = Models::findOrFail($request->id);
        }
        catch(Exception $exception){
            throw new NotFoundException('Not found model!');
        }
        $model->update(['name' => $request -> name,
        'typefuel' => $request -> typefuel,
        'brand_id' => $request -> brand_id,
        'year' => $request -> year,
        'category_id' => $request -> category_id]);
        return $model;
    }
    public function delete($id){
        try {
            $model = Models::findOrFail($id);
        }
        catch(Exception $exception){
            throw new NotFoundException('Not found models!');
        }
        $model->delete();
        return response()->json('Seccesfully deleted', 204);
    }
}
