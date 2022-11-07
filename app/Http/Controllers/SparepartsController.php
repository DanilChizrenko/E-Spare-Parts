<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SparePart;

class SparepartsController extends Controller
{
    public function show(Request $request){
        $spareparts = SparePart::with(['category','manufacturer'])->where('manufacturer_id', '=', $request -> manufacturer_id)->get();
        return $spareparts;
    }
    public function create(Request $request){
        $sparepart = SparePart::create(['name' => $request -> name,
        'category_id' => $request -> category_id,
        'manufacturer_id' => $request -> manufacturer_id]);
        return $sparepart;
    }
    public function update(Request $request){
        try {
            $sparepart = SparePart::findOrFail($request->id);
        }
        catch(Exception $exception){
            throw new NotFoundException('Not found spare part!');
        }
        $sparepart->update(['name' => $request -> name,
        'category_id' => $request -> category_id,
        'manufacturer_id' => $request -> manufacturer_id]);
        return $sparepart;
    }
    public function delete($id){
        try {
            $sparepart = SparePart::findOrFail($id);
        }
        catch(Exception $exception){
            throw new NotFoundException('Not found spare part!');
        }
        $sparepart->delete();
        return response()->json('Seccesfully deleted', 204);
    }
}
