<?php

class About extends Controller
{

    public function index($d1 = "debora", $d2 = "daisy", $d3 = 5)
    {
        $data['d1'] = $d1;
        $data['d2'] = $d2;
        $data['d3'] = $d3;
        $data['judul'] = "About";

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

}