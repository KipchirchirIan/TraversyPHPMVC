<?php
/**
 * Created by PhpStorm.
 * Author: Ian Kipchirchir
 * Date: 7/16/20
 * Time: 12:26 PM
 */

class Pages extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data =  [
            'title' => 'TraversyMVC'
        ];

        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data =  [
            'title' => 'About Us'
        ];

        $this->view('pages/about', $data);
    }
}