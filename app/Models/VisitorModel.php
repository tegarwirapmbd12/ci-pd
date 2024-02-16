<?php

namespace App\Models;

use CodeIgniter\Model;

class VisitorModel extends Model
{
    protected $table = 'visitors';
    protected $primaryKey = 'id';
    protected $allowedFields = ['ip_address', 'visit_date'];

    public function addVisitor($ipAddress)
    {
        $this->insert([
            'ip_address' => $ipAddress,
            'visit_date' => date('Y-m-d H:i:s'),
        ]);
    }

    public function CountVisitor()
    {
        return $this->countAll();
    }
}
