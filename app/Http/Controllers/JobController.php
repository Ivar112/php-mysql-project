<?php

namespace App\Http\Controllers;

use App\Models\JobModel;
use App\Libraries\View;
use App\Libraries\MySql;
use PDO;

class JobController extends Controller
{
    public function index()
    {
        $sql = 'SELECT * FROM `jobs` WHERE user_id = 2'; 

        $res = MySql::query($sql);

        View::render('jobs/index.view', [
            'job' => $res->fetchALL(PDO::FETCH_ASSOC),
        ]);
    }
}