<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LatihanController extends Controller {
    public function getTable() {
        return view("v_html.getTableMahasiswa");
    }

    public function getForm() {
        return view("v_html.getFormMahasiswa");
    }
}