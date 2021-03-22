
<div class="overflow-hidden  sm:rounded-lg">
    <div class="bg-gray-50">
    <form wire:submit.prevent="submit">
        <div class="md:flex">
            <div class="w-full p-3">
                <div class="relative h-48 rounded-lg border-dashed border-2 border-gray-300 flex justify-center items-center">
                    <div class="absolute">
                        <div class="flex flex-col items-center">
                            @if ($excelid)
                                <i class="fas fa-file-excel fa-4x text-green-700"></i>
                                <span class="block text-gray-400 font-normal">Archivo cargado</span>
                            @else
                                    <i class="fa fa-folder-open fa-4x text-gray-400"></i>
                                    <span class="block font-normal text-sm text-center text-gray-400">Suelte el archivo xlsx,xls o csv aquí</span>
                            @endif
                            @error('excelid') <span class="block text-red-400 font-normal">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <input type="file" class="h-full w-full opacity-0" name="excelid" id="excelid" wire:model="excelid">
                </div>
                <div class="mt-3">
                    <button type="submit" class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline">
                        Importar Excel
                    </button>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>
