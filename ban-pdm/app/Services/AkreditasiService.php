<?php
// Akreditasi.php

// SERVER and MYSQL Communication for Akreditasis Related data.

namespace App\Services;

use App\Models\AkreditasiModel;

class AkreditasiService
{
    protected $akreditasiModel;
    
    public function __contruct() {
        return $this->akreditasiModel = new AkreditasiModel();
    }
    
    // FIXME: self explainable
    public function requestData() {
        return $this->$akreditasiModel->findAll();
    }
}