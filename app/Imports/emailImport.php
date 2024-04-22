<?php

namespace App\Imports;

use App\Models\emaildata;
use Maatwebsite\Excel\Concerns\ToModel;

class emailImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new emaildata([
            'name'=>$row[0],
            'email'=>$row[1]
        ]);
    }
}
