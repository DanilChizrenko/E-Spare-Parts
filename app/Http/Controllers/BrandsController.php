<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brands;

class BrandsController extends Controller
{
    public function show(){
        $brands = Brands::with('models');
        return $brands;
    }
    public function create(Request $request){
        $brand = Brands::create(['name' => $request->name]);
        return $brand;
    }
    public function update(Request $request){
        try {
            $brand = Brands::findOrFail($request->id);
        }
        catch(Exception $exception){
            throw new NotFoundException('Not found brand!');
        }
        $brand->update(['name' => $request -> name]);
        return $brand;
    }
    public function delete($id){
        try {
            $brand = Brands::findOrFail($id);
        }
        catch(Exception $exception){
            throw new NotFoundException('Not found brands!');
        }
        $brand->delete();
        return response()->json('Seccesfully deleted', 204);
    }
}
