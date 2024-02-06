<x-base-app>
    <x-header>Edit Barang</x-header>
    <x-barang.Form action="{{  route('barang.update', [ 'id' => $barang->id ]) }}" :barang="$barang"></x-barang.Form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</x-base-app>
