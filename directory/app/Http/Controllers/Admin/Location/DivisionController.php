<?php

namespace App\Http\Controllers\Admin\Location;

use App\DataTables\Admin\DivisionDataTable;
use App\Http\Controllers\Controller;

class DivisionController extends Controller
{
    public function index(DivisionDataTable $dataTable)
    {
        return $dataTable->render('admin/pages/location/division/list');
    }
}
