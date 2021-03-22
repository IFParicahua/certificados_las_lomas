<div class="md:flex">
    <form wire:submit.prevent="save">
    <div class="w-full p-3">

        <div class="text-2xl">
            Formulario
        </div>
        <div class="flex flex-col mt-3">
            <label class="block text-sm font-medium text-gray-700 m-0">LOTE</label>
            <input type="text" name="lote" id="lote" autocomplete="given-name" wire:model="lote"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @if($errors->has('lote'))
                <p class="m-0 text-red-400 font-normal">{{ $errors->first('lote') }}</p>
            @endif
        </div>
        <div class="flex flex-col mt-3">
            <label class="block text-sm font-medium text-gray-700 m-0">PAQUETE</label>
            <input type="text" name="package" id="package" autocomplete="given-name" wire:model="package"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @if($errors->has('package'))
                <p class="m-0 text-red-400 font-normal">{{ $errors->first('package') }}</p>
            @endif
        </div>
        <div class="flex flex-col mt-3">
            <label class="block text-sm font-medium text-gray-700 m-0">MASA LINEAL kg/m</label>
            <input step="any" type="number" name="masa" id="masa" autocomplete="given-name" wire:model="masa" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @if($errors->has('masa'))
                <p class="m-0 text-red-400 font-normal">{{ $errors->first('masa') }}</p>
            @endif
        </div>
        <div class="flex flex-col mt-3">
            <label class="block text-sm font-medium text-gray-700 m-0">FY(MPa)</label>
            <input step="any" type="number" name="fy" id="fy" autocomplete="given-name" wire:model="fy" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @if($errors->has('fy'))
                <p class="m-0 text-red-400 font-normal">{{ $errors->first('fy') }}</p>
            @endif
        </div>
        <div class="flex flex-col mt-3">
            <label class="block text-sm font-medium text-gray-700 m-0">FX(MPa)</label>
            <input step="any" type="number" name="fx" id="fx" autocomplete="given-name" wire:model="fx" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @if($errors->has('fx'))
                <p class="m-0 text-red-400 font-normal">{{ $errors->first('fx') }}</p>
            @endif
        </div>
        <div class="flex flex-col mt-3">
            <label class="block text-sm font-medium text-gray-700 m-0">A%</label>
            <input step="any" type="number" name="a" id="a" autocomplete="given-name" wire:model="a" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @if($errors->has('a'))
                <p class="m-0 text-red-400 font-normal">{{ $errors->first('a') }}</p>
            @endif
        </div>
        <div class="flex flex-col mt-3">
            <label class="block text-sm font-medium text-gray-700 m-0">RE(Fx/Fy)</label>
            <input step="any" type="number" name="re" id="re" autocomplete="given-name" wire:model="re" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @if($errors->has('re'))
                <p class="m-0 text-red-400 font-normal">{{ $errors->first('re') }}</p>
            @endif
        </div>
        <div class="flex flex-col mt-3">
            <label class="block text-sm font-medium text-gray-700 m-0">D 180°</label>
            <input type="text" name="d" id="d" autocomplete="given-name" wire:model="d" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @if($errors->has('d'))
                <p class="m-0 text-red-400 font-normal">{{ $errors->first('d') }}</p>
            @endif
        </div>
        <div class="flex flex-col mt-3">
            <label class="block text-sm font-medium text-gray-700 m-0">ALTURA mm</label>
            <input step="any" type="number" name="altura" id="altura" autocomplete="given-name" wire:model="altura" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @if($errors->has('altura'))
                <p class="m-0 text-red-400 font-normal">{{ $errors->first('altura') }}</p>
            @endif
        </div>
        <div class="flex flex-col mt-3">
            <label class="block text-sm font-medium text-gray-700 m-0">ESPAC. mm</label>
            <input step="any" type="number" name="espaciamiento" id="espaciamiento" autocomplete="given-name" wire:model="espaciamiento" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @if($errors->has('espaciamiento'))
                <p class="m-0 text-red-400 font-normal">{{ $errors->first('espaciamiento') }}</p>
            @endif
        </div>
        <div class="flex flex-col mt-3">
            <label class="block text-sm font-medium text-gray-700 m-0">GAP mm</label>
            <input step="any" type="number" name="gap" id="gap" autocomplete="given-name" wire:model="gap" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @if($errors->has('gap'))
                <p class="m-0 text-red-400 font-normal">{{ $errors->first('gap') }}</p>
            @endif
        </div>
        <div class="flex flex-col mt-3">
            <label class="block text-sm font-medium text-gray-700 m-0">ANGULO</label>
            <input step="any" type="number" name="angulo" id="angulo" autocomplete="given-name" wire:model="angulo" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @if($errors->has('angulo'))
                <p class="m-0 text-red-400 font-normal">{{ $errors->first('angulo') }}</p>
            @endif
        </div>
        <div class="mt-3">
            <button type="submit" class="w-full border border-green-500 bg-green-500 text-white text-sm rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline">
                Guardar
            </button>
        </div>
    </div>
   </form>
</div>
