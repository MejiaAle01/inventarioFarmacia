<?php

namespace App\Controllers;

class Dashboard extends BaseController {
    public function dashAdmin() {
        return view('admin/indexAdmin');
    }
}