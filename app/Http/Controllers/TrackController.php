<?php

namespace App\Http\Controllers;

use App\Models\Track;
use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function index(Album $album = null)
{
    // Se um álbum específico for fornecido na rota, busque todas as faixas desse álbum
    if ($album) {
        $tracks = Track::where('album_id', $album->id)->get();
        return response()->json($tracks);
    }

    // Se nenhum álbum específico for fornecido, retorne todas as faixas
    $tracks = Track::all();
    return response()->json($tracks);
}

    public function show($id){
        return Track::findOrFail($id);
    }
    public function store(Request $request){
        return Track::create($request->all());
    }
    public function update(Request $request, $id){
        $track = Track::findOrFail($id);
        $track->update($request->all());
        return $track;
    }
public function destroy($id){
    $track = Track::findOrFail($id);
    $track->delete();
    return 204;
}
}
