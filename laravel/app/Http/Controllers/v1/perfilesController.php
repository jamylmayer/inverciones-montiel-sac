<?php
 
namespace App\Http\Controllers\v1;
 
use App\Http\Controllers\Controller;
use App\Models\Perfil;
use Illuminate\Http\Request;
 
class PerfilesController extends Controller
{
    public function getAll()
    {
        $response = new \stdClass(); 

        $perfiles = Perfil::all();

        $response->success=true;
        $response->data=$perfiles;

        return response()->json($response,200);
    }

    public function getItem($id)
    {
        $response = new \stdClass();

        $perfiles = Perfil::find($id);

        $response->data = $perfiles;
        $response->success=true;

        return response()->json($response,200);

    }

    public function store(Request $request)
    {
        $response = new \stdClass();

        $perfiles = new Perfil();
        $perfiles->cod_perfil=$request->cod_perfil;
        $perfiles->nombre_perfil=$request->nombre_perfil;
        $perfiles->save();

        $response->data = $perfiles;
        $response->success=true;
        return response()->json($response,200);
    }

    public function update(Request $request,$id)
    {
        $response = new \stdClass();

        $perfiles = Perfil::find($id);
        $perfiles->cod_perfil=$request->cod_perfil;
        $perfiles->nombre_perfil=$request->nombre_perfil;
        $perfiles->save();

        $response->data = $perfiles;
        $response->success=true;
        return response()->json($response,200);
    }

    public function patchUpdate(Request $request,$id)
    {
        $response = new \stdClass();
        $perfiles = Perfil::find($id);

        if($request->cod_perfil!=null)
        {
            $perfiles->cod_perfil=$request->cod_perfil;
        }
        
        if($request->nombre_perfil!=null)
        {
            $perfiles->nombre_perfil=$request->nombre_perfil;
        }
        
        $perfiles->save();

        $response->data = $perfiles;
        $response->success=true;
        return response()->json($response,200);

    }

    public function delete($id)
    {
        $response = new \stdClass();

        $perfiles = Perfil::find($id);
        $perfiles->delete();

        $response->success=true;
        return response()->json($response,200);
    }
}