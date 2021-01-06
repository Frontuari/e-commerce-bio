<?php

namespace App\Exports;

use App\People;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PeoplesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return People::select('peoples.rif','peoples.name','peoples.birthdate','peoples.sex','peoples.phone','users.created_at','peoples.phone_home','users.email','peoples.saldo')->leftJoin('users','peoples.id','=','users.peoples_id')->get();
    }

    public function headings(): array
    {
        return ["Rif o Cedula", "Nombre", "Fecha de Nacimiento","Sexo","Telefono","Creado","Telefono de Casa","Usuario","Saldo"];
    }
}
