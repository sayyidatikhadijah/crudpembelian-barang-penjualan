@extends('template')
@section('content')
    <section class="main-section">
        <div class="content">
            <h1>Tambah Data Pembelian</h1>
            <hr>
           

            <form action="{{ route('pembelian.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="id">ID:</label>
                    <input type="text" class="form-control" id="id" name="id">
                </div>
                <div class="form-group">
                    <label for="kd_barang">kd_barang:</label>
                    <input type="text" class="form-control" id="kd_barang" name="kd_barang">
                </div>
                <div class="form-group">
                    <label for="jumlah">jumlah:</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah">
                </div>
                <div class="form-group">
                    <label for="total_harga">total_harga:</label>
                    <input type="number" class="form-control" id="total_harga" name="total_harga">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
    </section>
@endsection