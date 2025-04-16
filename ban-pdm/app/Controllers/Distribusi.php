<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Distribusi extends ResourceController
{
    protected $format = 'json';

    public function documentation() : string {
        return view('api_documentation');        
    }
    
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

    public function sebaranSekolahTerakreditasi(string $daerah)
    {
        return $this->respond([
            'status' => 'success',
            'data' => 'Sebaran sekolah terakreditasi ' . $daerah
        ]);
    }

    public function akreditasiBerdasarkanJenjang(string $jenjang)
    {
        return $this->respond([
            'status' => 'success',
            'data' => 'Akreditasi berdasarkan jenjang ' . $jenjang
        ]);
    }
    public function invalidParameters()
    {
        return $this->respond([
            'status' => 'failed'
        ]);
    }
}
