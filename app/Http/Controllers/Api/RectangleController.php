<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rectangle;
use Illuminate\Http\Request;

class RectangleController extends Controller
{

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
        return 'retangulos aqui';
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
        $dataCheck = $data;
        $side_1 = $data['side_1'];
        $side_2 = $data['side_2'];

        $check = array_splice($dataCheck, 2, 4);

        if(in_array($side_1, $check) && in_array($side_2, $check))
        { 
            $area = max($data) * min($data);
            $result = 'Medidas ok';


        }else{

            $result = 'As medidas inseridas não formam um retângulo';
        }

        $rectangle = $this->rectangle->create([
            'side_1' => $data['side_1'],
            'side_2' => $data['side_2'],
            'side_3' => $data['side_3'],
            'side_4' => $data['side_4'],
            'area' => $area
        ]);

        return \response()->json($data);
        
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
