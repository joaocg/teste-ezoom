<?php

namespace App\Models;

use CodeIgniter\Model;
class ClientModel extends Model
{
    protected $table = 'clients';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'phone', 'segment', 'created_at', 'updated_at'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getClientCountBySegment(): array
    {

        $builder = $this->db->table('clients');

        $builder->select('segment, COUNT(id) as count');
        $builder->groupBy('segment');
        return $builder->get()->getResultArray();
    }
}
