<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;

class ManufacturersController extends Controller
{
    public function show(){
        $manufacturers = Manufacturer::get();
        return $manufacturers;
    }
    public function create(Request $request){
        $manufacturer = Manufacturer::create(['name' => $request -> name]);
        return $manufacturer;
    }
    public function update(Request $request){
        try {
            $manufacturer = Manufacturer::findOrFail($request->id);
        }
        catch(Exception $exception){
            throw new NotFoundException('Not found manufacturer!');
        }
        $manufacturer->update(['name' => $request -> name]);
        return $manufacturer;
    }
    public function delete($id){
        try {
            $manufacturer = Manufacturer::findOrFail($id);
        }
        catch(Exception $exception){
            throw new NotFoundException('Not found manufacturer!');
        }
        $manufacturer->delete();
        return response()->json('Seccesfully deleted', 204);
    }
}
