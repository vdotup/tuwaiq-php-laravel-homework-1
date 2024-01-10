<?php

namespace App\Http\Controllers;
class TuwaiqController extends Controller {

    public function GetResult($value) {
        if ($value < 49) {
            return "fail";
        } else if ($value >= 50) {
            return "pass";
        }
    }

    public function getPhones() {

        $phones = [
            ["id" => 1, "name" => "Samsung", "model" => "S22", "price" => 2000], 
            ["id" => 2, "name" => "IPhone", "model" => "15", "price" => 3500],
            ["id" => 3, "name" => "Nokia", "model" => "Lomia", "price" => 1500]
        ];

        return view("phones", ["phones" => $phones]);
    }
}