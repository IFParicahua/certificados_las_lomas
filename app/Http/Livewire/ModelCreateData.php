<?php

namespace App\Http\Livewire;

use App\Models\Lot;
use App\Models\Mechanic;
use App\Models\Package;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ModelCreateData extends Component
{
    public  $id_edit;
    public $lote ;
    public $masa ;
    public $package ;
    public $fy ;
    public $fx ;
    public $a ;
    public $re ;
    public $d ;
    public $altura ;
    public $espaciamiento ;
    public $gap ;
    public $angulo ;
    public $mensajeLote = '';

    protected $listeners = [
        'getDataId'
    ];


    public function getDataId($modelId){
        $this->id_edit = $modelId;
        $chemical = Mechanic::find($this->id_edit);
        $this->lote = $chemical->lote->code ;
        $this->masa = $chemical->lote->masa_lineal ;
        $this->fy = $chemical->fy ;
        $this->fx = $chemical->fx ;
        $this->a = $chemical->a ;
        $this->re = $chemical->re ;
        $this->d = $chemical->d ;
        $this->altura = $chemical->altura ;
        $this->espaciamiento = $chemical->espaciamiento ;
        $this->gap = $chemical->gap ;
        $this->angulo = $chemical->angulo ;
        if ($chemical->package) {
            $this->package = $chemical->package->package ;
        }
    }

    public function save(){
        $this->validate([
            'lote' => 'required',
            'fy' => 'required',
            'fx' => 'required',
            'a' => 'required',
            're' => 'required',
            'd' => 'required',
            'altura' => 'required',
            'espaciamiento' => 'required',
            'gap' => 'required',
            'angulo' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $lot = Lot::where('code', $this->lote)->first();
            if ($lot) {
                $id_lote = $lot->id;
            } else {
                $lote = new Lot;
                $lote->code = $this->lote;
                $lote->masa_lineal = $this->masa;
                $lote->save();
                $id_lote = $lote->id;
            }

            if ($this->package) {
                $pack = Package::where('package', $this->package)->first();
                if ($pack) {
                    $id_pack = $pack->id;
                } else {
                    $packs = new Package;
                    $packs->package = $this->package;
                    $packs->lots_id = $id_lote;
                    $packs->save();
                    $id_pack = $packs->id;
                }
            } else {
                $id_pack = '';
            }

            if($this->id_edit){
                $item = Mechanic::find($this->id_edit);
                $item->lot_id = $id_lote;
                $item->package_id = $id_pack;
                $item->fy = $this->fy;
                $item->fx = $this->fx;
                $item->a = $this->a;
                $item->re = $this->re;
                $item->d = $this->d;
                $item->altura = $this->altura;
                $item->espaciamiento = $this->espaciamiento;
                $item->gap = $this->gap;
                $item->angulo = $this->angulo;
                $item->save();
                $this->lote = '';
                $this->package = '';
                $this->fy = '';
                $this->fx = '';
                $this->a = '';
                $this->re = '';
                $this->d = '';
                $this->altura = '';
                $this->espaciamiento = '';
                $this->gap = '';
                $this->angulo = '';
            }else{
                $item = new Mechanic;
                $item->lot_id = $id_lote;
                $item->package_id = $id_pack;
                $item->fy = $this->fy;
                $item->fx = $this->fx;
                $item->a = $this->a;
                $item->re = $this->re;
                $item->d = $this->d;
                $item->altura = $this->altura;
                $item->espaciamiento = $this->espaciamiento;
                $item->gap = $this->gap;
                $item->angulo = $this->angulo;
                $item->save();
                $this->lote = '';
                $this->package = '';
                $this->fy = '';
                $this->fx = '';
                $this->a = '';
                $this->re = '';
                $this->d = '';
                $this->altura = '';
                $this->espaciamiento = '';
                $this->gap = '';
                $this->angulo = '';
            }
            $this->mensajeLote = '';
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            $this->emit('swal:alert', [
                'icon'    => 'error',
                'title'   => 'Ocurrio un error, vuele a intentar!!',
                'timeout' => 10000
            ]);
        }
        $this->emit('refreshParent');
    }

    public function render()
    {
        return view('livewire.model-create-data');
    }
}
