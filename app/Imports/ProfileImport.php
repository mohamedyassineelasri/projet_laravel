<?php

namespace App\Imports;

use App\Models\Profile;
use Maatwebsite\Excel\Concerns\ToModel;

class ProfileImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Profile([
            //
            "name"=>$row[0],
            "email"=>$row[1],
            "password"=>$row[2],
            "bio"=>$row[3],
            "image"=>$row[4],
        ]);
    }
}
