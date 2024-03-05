<?php

namespace App\Models;

use CodeIgniter\Model;

class InfografiCategory extends Model
{
    protected $table = 'infografi_categories';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name'];
}
