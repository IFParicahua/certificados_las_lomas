<?php

namespace App\Http\Livewire;


use App\Models\Lot;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ModalAddLoteCertificado extends Component
{

    public $producto = '';
    public $lote;
    public $certificado = '';

    protected $listeners = [
        'getAdd'
    ];

    public function getAdd($id){
        $this->certificado = $id;
    }


    public function saveLot(){
        $this->validate([
            'lote' => 'required',
            'certificado' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $lot = Lot::find($this->lote);
            $lot->certicado_id = $this->certificado;
            $lot->product_id = $this->producto;
            $lot->save();
            $this->lote = '';
            $this->emit('getView', $this->certificado);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            $this->emit('swal:alert', [
                'icon'    => 'error',
                'title'   => 'Ocurrio un error, vuele a intentar!!',
                'timeout' => 10000
            ]);
        }
    }

    public function render()
    {
        $products = Product::all();
        $lotes = Lot::where('certicado_id', null)->get();
        return view('livewire.modal-add-lote-certificado', compact('lotes','products'));
    }
}
