<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturers;

class ManufacturersController extends Controller
{
    public function show(){
        $manufacturers = Manufacturers::get();
        return $manufacturers;
    }
    public function create(Request $request){
        $manufacturer = Manufacturers::create(['name' => $request -> name]);
        return $manufacturer;
    }
    public function update(Request $request){
        try {
            $manufacturer = Manufacturers::findOrFail($request->id);
        }
        catch(Exception $exception){
            throw new NotFoundException('Not found manufacturer!');
        }
        $manufacturer->update(['name' => $request -> name]);
        return $manufacturer;
    }
    public function delete($id){
        try {
            $manufacturer = Manufacturers::findOrFail($id);
        }
        catch(Exception $exception){
            throw new NotFoundException('Not found manufacturer!');
        }
        $manufacturer->delete();
        return response()->json('Seccesfully deleted', 204);
    }
}
