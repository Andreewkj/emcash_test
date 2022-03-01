<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Conversion;
use App\Http\Controllers\Controller;
use App\Models\Rectangle;
use Illuminate\Http\Request;

class RectangleController extends Controller
{

    Use Conversion;
     /**
     * @var Rectangle
     */

    private $rectangle;
    
    public function __construct(Rectangle $rectangle) {
        $this->rectangle = $rectangle;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rectangle = $this->rectangle->select('id','area')->get();
        return \response()->json($rectangle);
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

        if($this->isRectangle($sides))
        {
            $area = $this->calcRectangleArea($sides);

            $rectangle = $this->rectangle->create([
                'side_1' => $sides['side_1'],
                'side_2' => $sides['side_2'],
                'side_3' => $sides['side_3'],
                'side_4' => $sides['side_4'],
                'area' => $area
            ]);
    
            return \response()->json($rectangle);
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
        //
    }

}
