<?php


namespace App\Helpers;


trait Conversion
{

    public function calcTriangleArea($sides)
    {

        $perimeter = array_sum($sides) / 2;

        $area = \sqrt($perimeter * ($perimeter - $sides['side_1']) * ($perimeter - $sides['side_2']) * ($perimeter - $sides['side_3']));

        return $area;

    }

    public function isTringle($sides)
    {
        $data = $sides;
        $maxSide = max($data);
        $otherSides = array_sum($data) - $maxSide;

        $isTriangle = ($maxSide < $otherSides) ? true : false ;

        return $isTriangle;
    }

    public function calcRectangleArea($sides)
    {

        $area = max($sides) * min($sides);

        return $area;

    }

    public function isRectangle($sides)
    {
        $data = $sides;
        $dataCheck = $data;
        $side_1 = $data['side_1'];
        $side_2 = $data['side_2'];

        $compareValues = array_splice($dataCheck, 2, 4);

        if(in_array($side_1, $compareValues) && in_array($side_2, $compareValues))
        { 
            $result = true;

            return $result;

        }else{

            $result = false;
            return $result;
        }
    }
}
