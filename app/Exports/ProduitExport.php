<?php

namespace App\Exports;

use App\Models\Produit;
use App\Models\Profile;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProduitExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        return Profile::all([
            'name','email','password','bio','image'
        ]);
    }
    // public function headings():array
    // {
    //     return [
    //         'Name',
    //         'Email',
    //         'Password',
    //         'Bio',
    //         'Image',
    //     ];
    // }
}
