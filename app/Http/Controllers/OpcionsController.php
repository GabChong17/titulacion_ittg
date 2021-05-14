<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpcionsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    
    public function plans_id($id){

        $opcions = App\Opcion::findOrFail($id);
    
        return view('opcions.plans_id', compact('opcioñns'));
    }

}
