<form method="post" {{ $attributes }}>
    @csrf
    <div>
        <label>Nama</label>
        <input type="text" name="nama" value="{{ old('nama') ?? $barang->nama }}"/>
    </div>
    <div>
        <label>Harga</label>
        <input type="text" name="harga" value="{{ old('harga') ?? $barang->harga }}" />
    </div>
    <div>
        <input type="submit" value="Simpan" class="border-blue-500 border bg-blue-500 text-white font-semibold p-2"/>
        <a href="{{ route('barang.index') }}"><input type="button" value="Batal" /></a>
    </div>
</form>