<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    private $nrp = "200914022";

    private $name = "salsabila hajar";

    public function index() {
        return view("person.index");
    }
    public function sendData() {
        $nrp = $this-> nrp;
        $name = $this->name;

        return view("person.sendData", compact("nrp","name"));
    }
    public function show($param) {
        $this->name = $param;
        return $this->name;
    }
}
