<?php

namespace App\Imports;

use App\Models\Lot;
use App\Models\Chemical;
use Maatwebsite\Excel\Concerns\ToModel;

class DataQuimicaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $e = Lot::where('code', $row[1])->first();
        if($e){
            $dato = $e->id;
        }else{
            $col = new Lot;
            $col->code = strval($row[1]);
            $col->save();
            $dato = $col->id;
        }

        $e = strval($row[0]);
        $a = substr($e, 4, -2);

        return new Chemical([
            'lote_quimica' => $a,
            'c' => floatval(str_replace(',', '.',$row[2])),
            'mn' => floatval(str_replace(',', '.',$row[3])),
            'si' => floatval(str_replace(',', '.',$row[4])),
            'p' => floatval(str_replace(',', '.',$row[6])),
            's' => floatval(str_replace(',', '.',$row[5])),
            'lot_id' => $dato,
        ]);
    }
}
