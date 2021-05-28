<?php

namespace App\Http\Controllers;

use App\Models\ExtraModel;
use App\Libraries\View;
use App\Libraries\MySql;
use PDO;

class ExtraController extends Controller
{
    public function index()
    {
        $sql = 'SELECT * FROM `extracarriculars` WHERE user_id = 2'; 

        $res = MySql::query($sql);

        View::render('extracarriculars/index.view', [
            'extra' => $res->fetchALL(PDO::FETCH_ASSOC),
        ]);
    }
}