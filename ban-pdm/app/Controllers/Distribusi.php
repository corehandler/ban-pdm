<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Distribusi extends ResourceController
{
    protected $format = 'json';
    
    public function peringkatAkreditasi()
    {
        return $this->respond([
            'status' => 'success',
            'data' => 'Data peringkat akreditasi'
        ]);
    }

    public function sekolahPerTahun(string $year = "2025")
    {
        return $this->respond([
            'status' => 'success',
            'data' => 'Data sekolah tahun ' . $year
        ]);
    }

    public function sebaranSekolahTerakreditasi()
    {
        return $this->respond([
            'status' => 'success',
            'data' => 'Sebaran sekolah terakreditasi'
        ]);
    }

    public function akreditasiBerdasarkanJenjang()
    {
        return $this->respond([
            'status' => 'success',
            'data' => 'Akreditasi berdasarkan jenjang'
        ]);
    }
    public function invalidParameters()
    {
        return $this->respond([
            'status' => 'failed'
        ]);
    }
}
