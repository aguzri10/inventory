@extends('layouts.templates.theme')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Check In</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-cart-plus"></i>Check In Barang</a></li>
            </ol>
        </section>

        <section class="content">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Check In Barang</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                        @foreach($data as $datas)
                            <form action="{{ route('checkin.update', $datas->id) }}" method="post">
                            {{ csrf_field() }} {{ method_field('PUT') }}
                            <!-- <div class="form-group">
                                <label>Nama Barang</label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option>{{ $datas->name }}</option>
                                </select>
                            </div> -->
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input disabled type="text" name="name" class="form-control" value="{{ $datas->name }}" placeholder="Masukan jumlah stock barang yang masuk">
                            </div>
                            <div class="form-group">
                                <label>Stok Barang Yang Ada</label>
                                <!-- <label for="stock" name="stock">{{ $datas->stock }}</label> -->
                                <input type="number" name="stock" class="form-control" value="{{ $datas->stock }}" placeholder="Masukan jumlah stock barang yang masuk">
                            </div>
                            <div class="form-group">
                                <label>Stok Barang Yang Masuk</label>
                                <input type="number" class="form-control" name="stok" placeholder="Masukan jumlah stock barang yang masuk">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger btn-flat">Submit</button>
                            </div>
                            </form>
                        @endforeach
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <h4>Start Guide</h4>
                            <h6>Petunjuk penggunaan form untuk check in barang</h6>
                            <ul>
                                <li>Pilihlah barang mana yang akan masuk</li>
                                <li>Kemudian masukan jumlah barangnya</li>
                                <li>Jika sudah selesai bisa klik submit</li>
                            </ul>
                            <!-- <h6>*klik button "Data Product" untuk melihat semua product</h6>
                            <button class="btn btn-primary btn-flat">Data Product</button> -->
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                </div>
            </div>

            <!-- <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Table Check In Barang</h3>
                </div>
                <div class="box-body">
                    <table id="supplier-table" class="table table-hover">
                        <thead>
                            <tr>
                                <th>Id Check In</th>
                                <th>Nama Barang</th>
                                <th>Jumlah Check In</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div> -->
        </section>
    </div>
@endsection
