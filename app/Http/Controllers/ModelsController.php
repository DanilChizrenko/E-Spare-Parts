<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model;

class ModelsController extends Controller
{
    public function show(){
        $models = Model::get();
        return $models;
    }
    public function create(Request $request){
        $model = Model::create(['name' => $request -> name,
        'typefuel' => $request -> typefuel,
        'brand_id' => $request -> brand_id,
        'year' => $request -> year]);
        return $model;
    }
    public function update(Request $request){
        try {
            $model = Model::findOrFail($request->id);
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
            $model = Model::findOrFail($id);
        }
        catch(Exception $exception){
            throw new NotFoundException('Not found models!');
        }
        $model->delete();
        return response()->json('Seccesfully deleted', 204);
    }
}
