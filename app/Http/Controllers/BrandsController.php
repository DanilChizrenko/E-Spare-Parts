<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandsController extends Controller
{
    public function show(Request $request){
        if($request->name!=null){
        $brands = Brand::where('name', '=', $request->name)->get();
        }else{
            return response()->json('NON',404);
        }
        return $brands;
    }
    public function create(Request $request){
        $brand = Brand::create(['name' => $request->name]);
        return $brand;
    }
    public function update(Request $request){
        try {
            $brand = Brand::findOrFail($request->id);
        }
        catch(Exception $exception){
            throw new NotFoundException('Not found brand!');
        }
        $brand->update(['name' => $request -> name]);
        return $brand;
    }
    public function delete($id){
        try {
            $brand = Brand::findOrFail($id);
        }
        catch(Exception $exception){
            throw new NotFoundException('Not found brands!');
        }
        $brand->delete();
        return response()->json('Seccesfully deleted', 204);
    }
}
