<?php

namespace App\Models;

class ExtraModel extends Model
{
    // Name of the table
    protected $model = "extracarriculars";

    // Max number of records when fetching all records from table
    protected $limit;

    // Non writable fields
    protected $guarded = [
        'id',
        'deleted',
    ];

    public function __construct()
    {
        parent::__construct($this->model);
    }
}