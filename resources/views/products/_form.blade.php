@csrf

<label class="text-gray-700">Nombre</label>
<span class="ml-3 text-red-700">@error('name') *{{ $message }} @enderror</span>
<input type="text" name="name" class="rounded border-gray-200 w-full mb-4" value="{{ old('name', $product->name) }}">

<label class="text-gray-700">Precio</label>
<span class="ml-3 text-red-700">@error('price') *{{ $message }} @enderror</span>
<input type="number" step="0.01" name="price" class="rounded border-gray-200 w-full mb-4" value="{{ old('price', $product->price) }}">

<label class="text-gray-700">Stock Alejo</label>
<span class="ml-3 text-red-700">@error('stock1') *{{ $message }} @enderror</span>
<input type="number" name="stock1" class="rounded border-gray-200 w-full mb-4" value="{{ old('stock1', $product->stock1) }}">

<label class="text-gray-700">Stock Andy</label>
<span class="ml-3 text-red-700">@error('stock2') *{{ $message }} @enderror</span>
<input type="number" name="stock2" class="rounded border-gray-200 w-full mb-4" value="{{ old('stock2', $product->stock2) }}">

<label class="text-gray-700">Stock Rodolfo</label>
<span class="ml-3 text-red-700">@error('stock3') *{{ $message }} @enderror</span>
<input type="number" name="stock3" class="rounded border-gray-200 w-full mb-4" value="{{ old('stock3', $product->stock3) }}">

<label class="text-gray-700">Stock Kevin</label>
<span class="ml-3 text-red-700">@error('stock4') *{{ $message }} @enderror</span>
<input type="number" name="stock4" class="rounded border-gray-200 w-full mb-4" value="{{ old('stock4', $product->stock4) }}">

<label class="text-gray-700">Stock Hector</label>
<span class="ml-3 text-red-700">@error('stock5') *{{ $message }} @enderror</span>
<input type="number" name="stock5" class="rounded border-gray-200 w-full mb-4" value="{{ old('stock5', $product->stock5) }}">

<label class="text-gray-700">Stock Jenny</label>
<span class="ml-3 text-red-700">@error('stock6') *{{ $message }} @enderror</span>
<input type="number" name="stock6" class="rounded border-gray-200 w-full mb-4" value="{{ old('stock6', $product->stock6) }}">

<div class="flex items-center justify-between">
    <a href="{{ route('products.index') }}" class="text-red-600">Volver</a>

    <input type="submit" value="Enviar" class="text-green-800 rounded">
</div>
