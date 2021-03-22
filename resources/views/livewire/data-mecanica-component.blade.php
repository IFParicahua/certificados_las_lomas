<div class="py-12">
    <div class="grid grid-cols-12 gap-4">

        <div class="col-span-9">
            <div class="mx-auto sm:px-6 lg:pl-5 lg:pr-3">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden border-b border-gray-200">
                              <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                  <tr>
                                    <th scope="col" class="px-3 py-4 text-center text-xs font-bold tracking-wider">
                                        LOTE
                                    </th>
                                    <th scope="col" class="px-3 py-4 text-center text-xs font-bold tracking-wider">
                                        PAQUETE
                                    </th>
                                    <th scope="col" class="px-3 py-4 text-center text-xs font-bold tracking-wider">
                                        MASA LINEAL kg/m
                                    </th>
                                    <th scope="col" class="px-3 py-4 text-center text-xs font-bold tracking-wider">
                                        Fy(MPa)
                                    </th>
                                    <th scope="col" class="px-3 py-4 text-center text-xs font-bold tracking-wider">
                                        Fx(MPa)
                                    </th>
                                    <th scope="col" class="px-3 py-4 text-center text-xs font-bold tracking-wider">
                                        A%
                                    </th>
                                    <th scope="col" class="px-3 py-4 text-center text-xs font-bold tracking-wider">
                                        RE (Fx/Fy)
                                    </th>
                                    <th scope="col" class="px-3 py-4 text-center text-xs font-bold tracking-wider">
                                        D (180°)
                                    </th>
                                    <th scope="col" class="px-3 py-4 text-center text-xs font-bold tracking-wider">
                                        ALTURA mm
                                    </th>
                                    <th scope="col" class="px-3 py-4 text-center text-xs font-bold tracking-wider">
                                        ESPAC mm
                                    </th>
                                    <th scope="col" class="px-3 py-4 text-center text-xs font-bold tracking-wider">
                                        GAP mm
                                    </th>
                                    <th scope="col" class="px-3 py-4 text-center text-xs font-bold tracking-wider">
                                        ANGULO
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                      <span class="sr-only">Edit</span>
                                    </th>
                                  </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                  @forelse ($datos as $dato)
                                    <tr>
                                        <td class="px-3 py-3 text-center text-xs uppercase">
                                            {{ $dato->lote->code }}
                                        </td>
                                        <td class="px-3 py-3 text-center text-xs uppercase">
                                            @if ($dato->package)
                                                {{ $dato->package->package }}
                                            @else
                                                ----
                                            @endif
                                        </td>
                                        <td class="px-3 py-3 text-center text-xs">
                                            {{ str_replace('.', ',', (trim(trim($dato->lote->masa_lineal,0), '.'))) }}
                                        </td>
                                        <td class="px-3 py-3 text-center text-xs">
                                            {{ str_replace('.', ',', (trim(trim($dato->fy,0), '.'))) }}
                                        </td>
                                        <td class="px-3 py-3 text-center text-xs">
                                            {{ str_replace('.', ',', (trim(trim($dato->fx,0), '.'))) }}
                                        </td>
                                        <td class="px-3 py-3 text-center text-xs">
                                            {{ str_replace('.', ',', (trim(trim($dato->a,0), '.'))) }}
                                        </td>
                                        <td class="px-3 py-3 text-center text-xs">
                                            {{ str_replace('.', ',', (trim(trim($dato->re,0), '.'))) }}
                                        </td>
                                        <td class="px-3 py-3 text-center text-xs uppercase">
                                            {{ $dato->d }}
                                        </td>
                                        <td class="px-3 py-3 text-center text-xs">
                                            {{ str_replace('.', ',', (trim(trim($dato->altura,0), '.'))) }}
                                        </td>
                                        <td class="px-3 py-3 text-center text-xs">
                                            {{ str_replace('.', ',', (trim(trim($dato->espaciamiento,0), '.'))) }}
                                        </td>
                                        <td class="px-3 py-3 text-center text-xs">
                                            {{ str_replace('.', ',', (trim(trim($dato->gap,0), '.'))) }}
                                        </td>
                                        <td class="px-3 py-3 text-center text-xs">
                                            {{ str_replace('.', ',', (trim(trim($dato->angulo,0), '.'))) }}
                                        </td>
                                        <td class="pr-5 py-3 text-center font-medium">
                                            <div class="grid grid-cols-2 gap-6">
                                                <div class=" col-span-1">
                                                    <a wire:click="deleteId({{ $dato->id }})" class="text-red-600 hover:text-red-900"><i class="far fa-trash-alt"></i></a>
                                                </div>
                                                <div class=" col-span-1">
                                                    <a wire:click="selectItem({{ $dato->id }})" class="text-blue-600 hover:text-blue-900"><i class="far fa-edit"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                  @empty
                                    <tr>
                                        <td class="px-3 py-3 text-center text-xs">
                                            ----
                                        </td>
                                        <td class="px-3 py-3 text-center text-xs">
                                            ----
                                        </td>
                                        <td class="px-3 py-3 text-center text-xs">
                                            ----
                                        </td>
                                        <td class="px-3 py-3 text-center text-xs">
                                            ----
                                        </td>
                                        <td class="px-3 py-3 text-center text-xs">
                                            ----
                                        </td>
                                        <td class="px-3 py-3 text-center text-xs">
                                            ----
                                        </td>
                                        <td class="px-3 py-3 text-center text-xs">
                                            ----
                                        </td>
                                        <td class="px-3 py-3 text-center text-xs">
                                            ----
                                        </td>
                                        <td class="px-3 py-3 text-center text-xs">
                                            ----
                                        </td>
                                        <td class="px-3 py-3 text-center text-xs">
                                            ----
                                        </td>
                                        <td class="px-3 py-3 text-center text-xs">
                                            ----
                                        </td>
                                        <td class="px-3 py-3 text-center text-xs">
                                            ----
                                        </td>
                                        <td class="px-3 py-4 text-center text-right text-sm font-medium">
                                          ----
                                        </td>
                                    </tr>
                                  @endforelse

                                  <!-- More items... -->
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="bg-gray-200 bg-opacity-25">
                        <div class="p-6">
                            {{ $datos->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-span-3">
            <div class="sm:px-6 lg:pl-5 lg:pr-3">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                    <div>
                        @livewire('model-importar-data')
                    </div>
                    <div>
                        @livewire('model-create-data')
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <dialog id="modal-delete" class="p-0 shadow w-11/12 md:w-4/12 overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <div class="mx-5 my-3">
                <div class="bg-gray-50 text-center">
                    <h3>Estas seguro?</h3>
                </div>
                <div class="bg-gray-50 text-center">
                    <p class="text-xl">¡No podrás revertir esto!</p>
                </div>
                <div class="grid grid-cols-12 gap-4 pt-6">
                    <div class="col-span-3">
                        <button onclick="document.getElementById('modal-delete').close();" class="border border-gray-500 bg-white text-gray-500 rounded-md px-4 py-2 mx-2 transition duration-500 ease select-none hover:bg-gray-500 focus:outline-none focus:shadow-outline">
                            Cancelar
                        </button>
                    </div>
                    <div class=" col-start-8 col-span-5">
                        <button wire:click="eliminar" class="border border-red-500 bg-red-500 w-30 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline ">
                            Si, eliminar
                        </button>
                    </div>
                </div>
            </div>
        </dialog>

    </div>
</div>
<script>
    window.addEventListener('closeModal', event =>{
        document.getElementById('modal-delete').close()
    })

    window.addEventListener('openModal', event =>{
        document.getElementById('modal-delete').showModal()
    })
</script>
