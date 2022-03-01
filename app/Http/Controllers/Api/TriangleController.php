<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Triangle;
use Illuminate\Http\Request;

class TriangleController extends Controller
{

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
        return 'nothing yet';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $maxSide = max($data);
        $otherSides = array_sum($data) - $maxSide;

        $isTriangle = ($maxSide < $otherSides) ? true : false ;

        if ($isTriangle) {

            $perimeter = array_sum($data) / 2;

            $area = \sqrt($perimeter * ($perimeter - $data['side_1']) * ($perimeter - $data['side_2']) * ($perimeter - $data['side_3']));

        }else{
            $area = 'As medidas não são o suficiente para formar um triângulo';
        }
        
        $triangle = $this->triangle->create([
            'side_1' => $data['side_1'],
            'side_2' => $data['side_2'],
            'side_3' => $data['side_3'],
            'area' => $area
        ]);

        return \response()->json($triangle);
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
