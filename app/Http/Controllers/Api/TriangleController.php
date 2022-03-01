<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Triangle;
use Illuminate\Http\Request;
use App\helpers\Conversion;

class TriangleController extends Controller
{
    Use Conversion;

    /**
     * @var Triangle
     */

    private $triangle;
    
    public function __construct(Triangle $triangle) {
        $this->triangle = $triangle;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $triangle = $this->triangle->select('id','area')->get();
        return \response()->json($triangle);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sides = $request->all();

        if($this->isTringle($sides))
        {
            $area = $this->calcTriangleArea($sides);

            $triangle = $this->triangle->create([
                'side_1' => $sides['side_1'],
                'side_2' => $sides['side_2'],
                'side_3' => $sides['side_3'],
                'area' => $area
            ]);
    
            return \response()->json($triangle);

        }else{
            
            return \response()->json('As medidas inseridas são inválidas.');
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $triangle = $this->triangle->find($id);
        return \response()->json($triangle);
    }


}
