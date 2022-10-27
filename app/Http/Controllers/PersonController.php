<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    private $nrp = "200914022";

    private $name = "salsabila hajar";

    private $task = '100';

    private $quiz = '100';

    private $mid_term = '90' ;

    private $final = '90';
   

    public function index() {
        return view("person.index");
    }

    public function myCourse($task,$quiz,$mid_term,$final) {
        $this->task = $task;
        $this->quiz = $quiz;
        $this->mid_term = $mid_term;
        $this->final = $final;
        $grade = $this->calculateGrade();

        return view('person.my_course', compact('task','quiz','mid_term','final','grade'));
    }

    private function calculateGrade() {
        $grade = (($this-> task * 0.1) + ($this-> quiz * 0.1) + ($this-> mid_term * 0.3) + ($this-> final * 0.5));
        return $grade;
    }
  
    public function show($param) {
        $this->name = $param;
        return $this->name;
    }
}
