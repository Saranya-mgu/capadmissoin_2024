<?php

namespace App\Models;

use CodeIgniter\Model;

class CollegeModel extends Model
{
    protected $table            = 'ugcap2011_master_college';
    protected $primaryKey       = 'college_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function get_college($college_id)
    {
         $query = $this->db->table('ugcap2011_master_college a')
        ->select('*')
        ->join('college_authorities b','a.college_id=b.college_id')
        ->join('ugcap_master_district c','a.college_district=c.district_id')
        ->join('mgucap_community_master d','a.community_quota=d.community_id')
        ->join('mgucap_master_college_type e','a.college_type=e.college_type')
        ->where('a.college_id',$college_id)
        ->get();
        //print_r($query->getRow());exit;
        return $query->getRow();
    }
}
