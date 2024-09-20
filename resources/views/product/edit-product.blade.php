@extends('template.base')
@section('title','Tambah Product')
@section('content')
{{-- @dd($products) --}}
<form action="{{ route('product.update',$products->id) }}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="product_name" required
            value="{{ $products->product_name }}">
    </div>
    <div class="form-group">
        <label for="email">Stok</label>
        <input type="number" class="form-control" id="email" name="qty" required value="{{ $products->qty }}">
    </div>
    <div class="form-group">
        <label for="password">Kategori</label>
        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1"
            tabindex="-1" aria-hidden="true" name="category_id">
            <option selected>Pilih Kategori Makanan</option>
            @foreach ($categories as $item)
            <option {{ $item->id == $products->category_id ?'selected':'' }} value="{{ $item->id }}">{{
                $item->category_name
                }}
            </option>
            @endforeach

        </select>
    </div>
    <div class="form-group">
        <label for="password">Harga</label>
        <input type="text" class="form-control" id="password" name="price" required value="{{ $products->price }}">
    </div>

    <div class="form-group">
        <label for="password">Descripsi Makananan</label>
        <textarea name="description" id="" cols="30" rows="10"
            class="form-control">{{ $products->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection