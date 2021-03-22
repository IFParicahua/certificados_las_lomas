<?php

namespace App\Http\Livewire;

use App\Models\Chemical;
use App\Models\Lot;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class DataQuimicoComponent extends Component
{
    use WithPagination;
    protected $queryString = ['search' => ['except' => '']];
    public $search = '';
    public $prompt;
    public $deleteId = '';

    protected $listeners = [
        'refreshParent'
    ];

    public function refreshParent(){
        $this->prompt = " ";
    }

    public function selectItem($id){
        $this->emit('getDataId', $id);
    }

    public function deleteId($id){
        $this->deleteId = $id;
        $this->dispatchBrowserEvent('openModal');
    }

    public function eliminar()
    {
        DB::beginTransaction();
        try {
            $item = Chemical::find($this->deleteId);
            $item->delete();
            $this->dispatchBrowserEvent('closeModal');
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
        $lote = Lot::where('code', 'LIKE', $this->search)->first();
        if($lote){
            $datos = Chemical::where('lot_id', $lote->id)->orderBy('id', 'desc')->paginate(10);
        }else{
            $datos = Chemical::orderBy('id', 'desc')->paginate(10);
        }
        return view('livewire.data-quimico-component', compact('datos'));
    }
}
