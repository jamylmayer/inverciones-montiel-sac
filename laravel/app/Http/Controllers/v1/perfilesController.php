<?php
 
namespace App\Http\Controllers\v1;
 
use App\Models\perfiles;
use App\Http\Controllers\Controller;

class perfilesController extends Controller
{
    public function getperfiles()
    {
        $response_local=new \stdClass();

        $response_local->success=true;
        $response_local->data=perfiles::all();

        return response()->json($response_local,200);
    }
}