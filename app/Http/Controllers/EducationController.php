<?php

namespace App\Http\Controllers;

use App\Models\EducationModel;
use App\Libraries\View;
use App\Libraries\MySql;
use PDO;

class EducationController extends Controller
{
    public function index()
    {
        $sql = 'SELECT * FROM `educations` LEFT JOIN schools ON educations.school_id = schools.id WHERE user_id = 2'; 

        $res = MySql::query($sql);

        View::render('educations/index.view', [
            'edu' => $res->fetchALL(PDO::FETCH_ASSOC),
        ]);
    }
}