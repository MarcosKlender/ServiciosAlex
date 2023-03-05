@csrf

<label class="text-gray-700">Stock</label>
<span class="ml-3 text-red-700">@error('existencias') *{{ $message }} @enderror</span>
<input type="number" name="existencias" class="rounded border-gray-200 w-full mb-4" value="{{ old('existencias', $product->existencias) }}" required>

<label class="text-gray-700">Lunes</label>
<span class="ml-3 text-red-700">@error('lunes') *{{ $message }} @enderror</span>
<input type="number" name="lunes" class="rounded border-gray-200 w-full mb-4" value="{{ old('lunes', $product->lunes) }}" required>

<label class="text-gray-700">Martes</label>
<span class="ml-3 text-red-700">@error('martes') *{{ $message }} @enderror</span>
<input type="number" name="martes" class="rounded border-gray-200 w-full mb-4" value="{{ old('martes', $product->martes) }}" required>

<label class="text-gray-700">Miércoles</label>
<span class="ml-3 text-red-700">@error('miercoles') *{{ $message }} @enderror</span>
<input type="number" name="miercoles" class="rounded border-gray-200 w-full mb-4" value="{{ old('miercoles', $product->miercoles) }}" required>

<label class="text-gray-700">Jueves</label>
<span class="ml-3 text-red-700">@error('jueves') *{{ $message }} @enderror</span>
<input type="number" name="jueves" class="rounded border-gray-200 w-full mb-4" value="{{ old('jueves', $product->jueves) }}" required>

<label class="text-gray-700">Viernes</label>
<span class="ml-3 text-red-700">@error('viernes') *{{ $message }} @enderror</span>
<input type="number" name="viernes" class="rounded border-gray-200 w-full mb-4" value="{{ old('viernes', $product->viernes) }}" required>

<label class="text-gray-700">Sábado</label>
<span class="ml-3 text-red-700">@error('sabado') *{{ $message }} @enderror</span>
<input type="number" name="sabado" class="rounded border-gray-200 w-full mb-4" value="{{ old('sabado', $product->sabado) }}" required>

<label class="text-gray-700">Domingo</label>
<span class="ml-3 text-red-700">@error('domingo') *{{ $message }} @enderror</span>
<input type="number" name="domingo" class="rounded border-gray-200 w-full mb-4" value="{{ old('domingo', $product->domingo) }}" required>

<input type="hidden" name="id" value="{{ $product->id }}">

<div class="flex items-center justify-between">
    <a href="{{ route('search.report') }}" class="text-red-600">Volver</a>

    <input type="submit" value="Enviar" class="text-green-800 rounded">
</div>
