<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(){
        return Album::all();
    }
    
    public function store(Request $request){
        return Album::create($request->all());
    }
    
    public function show($id){
        return Album::findOrFail($id);
    }

    public function update(Request $request, $id){
        $album = Album::findOrFail($id);
        $album->update($request->all());
        return $album;
    }

    public function destroy($id){
        $album = Album::findOrFail($id);
        $album->delete();
        return 204;
    }

}
