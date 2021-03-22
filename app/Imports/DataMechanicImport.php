<?php

namespace App\Imports;

use App\Models\Lot;
use App\Models\Mechanic;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class DataMechanicImport implements ToModel, WithCalculatedFormulas
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $e = Lot::where('code', $row[4])->first();
        if($e){
            $dato = $e->id;
        }else{
            $col = new Lot;
            $col->code = strval($row[4]);
            $col->masa_lineal = floatval(str_replace(',', '.',$row[11]));
            $col->save();
            $dato = $col->id;
        }

        $a = floatval(str_replace(',', '.',$row[22]));
        $b = floatval(str_replace(',', '.',$row[26]));
        $ab = ($a + $b)/2;

        $i = floatval(str_replace(',', '.',$row[27]));
        $e = floatval(str_replace(',', '.',$row[28]));
        $ie = ($i + $e)/2;

        $o = floatval(str_replace(',', '.',$row[37]));
        $u = floatval(str_replace(',', '.',$row[38]));
        $ou = ($o + $u)/2;

        return new Mechanic([
            'fy' => floatval(str_replace(',', '.',$row[14])),
            'fx' => floatval(str_replace(',', '.',$row[16])),
            'a' => floatval(str_replace(',', '.',$row[18])),
            're' => floatval(str_replace(',', '.',$row[17])),
            'd' => $row[36],
            'altura' => $ab,
            'espaciamiento' => $ie,
            'gap' => floatval(str_replace(',', '.',$row[35])),
            'angulo' => $ou,
            'lot_id' => $dato,
        ]);
    }
}
