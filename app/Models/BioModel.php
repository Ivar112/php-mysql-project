<?php

namespace App\Models;

class BioModel extends Model
{
    // Name of the table
    protected $model = "bios";

    // Max number of records when fetching all records from table
    protected $limit;

    // Non writable fields
    protected $guarded = [
        'id',
        'updated',
        'deleted',
        'updated_by',
        'deleted_by',
    ];

    public function __construct()
    {
        parent::__construct($this->model);
    }
}