@extends('template')
@section('content')
    <section class="main-section">
        <div class="content">
            <h1>Ubah Data Penjualan</h1>
            <hr>
            @if($errors->any())
                <div class="alert alert danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
           
           @foreach($data as $datas)
            <form action="{{ route('barang.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT')}}
                <div class="form-group">
                    <label for="id">ID:</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{ $datas->id }}">
                </div>
                <div class="form-group">
                    <label for="kd_barang">kd_barang:</label>
                    <input type="text" class="form-control" id="kd_barang" name="kd_barang" value="{{ $datas->kd_barang }}">
                </div>
                <div class="form-group">
                    <label for="nama_barang">nama barang:</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $datas->nama_barang }}">
                </div>
                <div class="form-group">
                    <label for="stok">jumlah:</label>
                    <input type="number" class="form-control" id="stok" name="stok" value="{{ $datas->stok }}">
                </div>
                <div class="form-group">
                    <label for="harga">total_harga:</label>
                    <input type="number" class="form-control" id="harga" name="harga" value="{{ $datas->harga }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        </div>
    </section>
@endsection