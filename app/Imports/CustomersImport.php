<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Customer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class CustomersImport implements ToModel,WithStartRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Customer([
            'name'        => $row[0],
            'companyname' => $row[1],
            'designation' => $row[2],
            'phone'       => $row[3],
            'email'       => $row[4],
            'address'     => $row[5],
            'status'      => "active"
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}
