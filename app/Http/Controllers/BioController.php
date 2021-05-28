<?php

namespace App\Http\Controllers;

use App\Models\BioModel;
use App\Libraries\View;
use App\Libraries\MySql;
use App\Models\UserModel;
use PDO;

class BioController extends Controller
{
    public function index()
    {
        $sql = 'SELECT * FROM `bios` LEFT JOIN users ON bios.user_id = users.id WHERE user_id = 2'; 

        $res = MySql::query($sql);

        View::render('bios/index.view', [
            'bio' => $res->fetch(PDO::FETCH_ASSOC),
        ]);
    }

    public function store()
    {
    }

    public function create()
    {
    }

    public function update()
    {
        $data = [];

        BioModel::update($data, 1);
    }

    public function destroy(int $id)
    {
    }
}