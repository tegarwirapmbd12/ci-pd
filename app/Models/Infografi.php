<?php

namespace App\Models;

use CodeIgniter\Model;

class Infografi extends Model
{
    protected $table = 'infografis';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'caption', 'image', 'infograficategory_id'];
}
