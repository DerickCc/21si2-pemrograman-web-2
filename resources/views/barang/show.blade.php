<x-base-app>
    <x-header>Detail Barang: {{ $barang->id }}</x-header>

    <a href="{{ route('barang.index') }}">Back</a>
    <x-barang.detail :barang="$barang"/>
</x-base-app>

