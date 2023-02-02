@csrf

<label class="text-gray-700">Nombre</label>
<span class="ml-3 text-red-700">@error('name') *{{ $message }} @enderror</span>
<input type="text" name="name" class="rounded border-gray-200 w-full mb-4" value="{{ old('name', $product->name) }}">

<label class="text-gray-700">Precio</label>
<span class="ml-3 text-red-700">@error('price') *{{ $message }} @enderror</span>
<input type="number" name="price" class="rounded border-gray-200 w-full mb-4" value="{{ old('price', $product->price) }}">

<label class="text-gray-700">Stock Alejo</label>
<span class="ml-3 text-red-700">@error('stock_alejo') *{{ $message }} @enderror</span>
<input type="number" name="stock_alejo" class="rounded border-gray-200 w-full mb-4" value="{{ old('stock_alejo', $product->stock_alejo) }}">

<label class="text-gray-700">Stock Andy</label>
<span class="ml-3 text-red-700">@error('stock_andy') *{{ $message }} @enderror</span>
<input type="number" name="stock_andy" class="rounded border-gray-200 w-full mb-4" value="{{ old('stock_andy', $product->stock_andy) }}">

<label class="text-gray-700">Stock Rodolfo</label>
<span class="ml-3 text-red-700">@error('stock_rodolfo') *{{ $message }} @enderror</span>
<input type="number" name="stock_rodolfo" class="rounded border-gray-200 w-full mb-4" value="{{ old('stock_rodolfo', $product->stock_rodolfo) }}">

<label class="text-gray-700">Stock Kevin</label>
<span class="ml-3 text-red-700">@error('stock_kevin') *{{ $message }} @enderror</span>
<input type="number" name="stock_kevin" class="rounded border-gray-200 w-full mb-4" value="{{ old('stock_kevin', $product->stock_kevin) }}">

<label class="text-gray-700">Stock Hector</label>
<span class="ml-3 text-red-700">@error('stock_hector') *{{ $message }} @enderror</span>
<input type="number" name="stock_hector" class="rounded border-gray-200 w-full mb-4" value="{{ old('stock_hector', $product->stock_hector) }}">

<label class="text-gray-700">Stock Jenny</label>
<span class="ml-3 text-red-700">@error('stock_jenny') *{{ $message }} @enderror</span>
<input type="number" name="stock_jenny" class="rounded border-gray-200 w-full mb-4" value="{{ old('stock_jenny', $product->stock_jenny) }}">

<div class="flex items-center justify-between">
    <a href="{{ route('products.index') }}" class="text-red-600">Volver</a>

    <input type="submit" value="Enviar" class="text-green-800 rounded">
</div>
