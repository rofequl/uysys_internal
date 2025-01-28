<?php

namespace App\Http\Controllers\Admin\User;

use App\DataTables\Admin\PermissionsDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionManagementController extends Controller
{
    public function index(PermissionsDataTable $dataTable)
    {
        return $dataTable->render('admin/pages/apps/user-management.permissions.list');
    }
}
