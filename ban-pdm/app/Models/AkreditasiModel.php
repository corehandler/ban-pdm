<?php
// AkreditasiModel.php

namespace App\Models;
use CodeIgniter\Model;

class AkreditasiModel extends Model
{
    protected $table = 'akreditasi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['data'];
    protected $returnType = 'array';
}