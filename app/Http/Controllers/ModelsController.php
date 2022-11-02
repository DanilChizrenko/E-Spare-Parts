<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models;

class ModelsController extends Controller
{
    public function show(){
        $models = Models::with('brand')->get();
        return $models;
    }
    public function create(Request $request){
        $model = Models::create(['name' => $request -> name,
        'typefuel' => $request -> typefuel,
        'brand_id' => $request -> brand_id,
        'year' => $request -> year]);
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
        'year' => $request -> year]);
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
