@extends('layouts.templates.theme')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Dashboard</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            </ol>
        </section>

        
        
        <section class="content">
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                Selamat datang, di halaman dashboard.
            </div>

            <div class="row">

                <!-- <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>150</h3>
                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-opencart"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>150</h3>
                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-cart-plus"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>150</h3>
                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-cart-arrow-down"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>150</h3>
                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-truck"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div> -->



                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <a href="{{ route('product') }}">
                        <span class="info-box-icon bg-blue"><i class="fa fa-opencart"></i></span></a>
                        <div class="info-box-content">
                        <span class="info-box-text">Barang</span>
                        <span class="info-box-number"><small>Data Barang</small></span>
                        </div>
                    </div>
                </div>


                <!-- <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <a href="{{ url('/checkin') }}">
                        <span class="info-box-icon bg-red"><i class="fa fa-cart-plus"></i></span></a>
                        <div class="info-box-content">
                        <span class="info-box-text">Check In</span>
                        <span class="info-box-number"><small>Check In Product</small></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <a href="{{ url('checkout') }}">
                        <span class="info-box-icon bg-green"><i class="fa fa-cart-arrow-down"></i></span></a>
                        <div class="info-box-content">
                        <span class="info-box-text">Check Out</span>
                        <span class="info-box-number"><small>Check Out Product</small></span>
                        </div>
                    </div>
                </div> -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <a href="{{ route('supplier') }}">
                        <span class="info-box-icon bg-yellow"><i class="fa fa-truck"></i></span></a>
                        <div class="info-box-content">
                        <span class="info-box-text">Supplier</span>
                        <span class="info-box-number"><small>Data Supplier</small></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
