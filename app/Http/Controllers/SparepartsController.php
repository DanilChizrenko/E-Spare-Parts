<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpareParts;

class SparepartsController extends Controller
{
    public function show(){
        $spareparts = SpareParts::get();
        return $spareparts;
    }
    public function create(Request $request){
        $sparepart = SpareParts::create(['name' => $request -> name]);
        return $sparepart;
    }
    public function update(Request $request){
        try {
            $sparepart = SpareParts::findOrFail($request->id);
        }
        catch(Exception $exception){
            throw new NotFoundException('Not found spare part!');
        }
        $sparepart->update(['name' => $request -> name]);
        return $sparepart;
    }
    public function delete($id){
        try {
            $sparepart = SpareParts::findOrFail($id);
        }
        catch(Exception $exception){
            throw new NotFoundException('Not found spare part!');
        }
        $sparepart->delete();
        return response()->json('Seccesfully deleted', 204);
    }
}
