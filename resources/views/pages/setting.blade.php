@extends('layouts.templates.theme')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Pengaturan</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('setting') }}"><i class="fa fa-gear"></i> Pengaturan</a></li>
            </ol>
        </section>

        
        
        <section class="content">
            <div class="box box-aqua">
                <div class="box-header with-border">
                    <h3 class="box-title">Pengaturan</h3>
                </div>
                <form class="form form-horizontal" data-toggle="validator" method="post" >
                {{ csrf_field() }} {{ method_field('POST') }}
                <div class="box-body">
                <div class="alert alert-info alert-dismissible" style="display:none">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="fa fa-check"></i>
                    Perubahan berhasil disimpan.
                </div>

                <div class="form-group">
                    <label for="nama" class="col-md-2 control-label">Nama Perusahaan</label>
                    <div class="col-md-6">
                        <input type="text" id="nama" name="nama" class="form-control" required>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="alamat" class="col-md-2 control-label">Alamat</label>
                    <div class="col-md-10">
                        <input type="text" id="alamat" name="alamat" class="form-control" required>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="telepon" class="col-md-2 control-label">Nomor Telepon</label>
                    <div class="col-md-4">
                        <input type="text" id="telepon" name="telepon" class="form-control" required>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="logo" class="col-md-2 control-label">Logo Perusahaan</label>
                    <div class="col-md-4">
                        <input type="file" id="logo" name="logo" class="form-control" required>
                        <br><div class="tampil-logo"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="tentang" class="col-md-2 control-label">Tentang Perusahaan</label>
                    <div class="col-md-10">
                        <input type="text" id="tentang" name="tentang" class="form-control" required>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
            </div>
            </form>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(function() {
        showData();
        $('.form').validator().on('submit', function(e){
            if(!e.isDefaultPrevented()) {
                $ajax({
                    url : "pengaturan/1"
                    type : "POST",
                    data : new FormData($(".form")[0]),
                    async : false,
                    processData : false,
                    contentType : false,
                    success : function(data){
                        showData();
                        $('.alert').css('display', 'block').delay(2000).fadeOut();
                    },
                    error : function(){
                        alert("Tidak dapat menyimpan data");
                    }
                });
                return false;
            }
        });
    });

    function showData(){
        $.ajax({
            url : ("pengaturan/1/edit"),
            type : "GET",
            dataType : "JSON",
            success : function(data){
                $('#nama').val(data.nama);
                $('#alamat').val(data.alamat);
                $('#telepon').val(data.telepon);

                d = new Date();
                $('.tampil-logo').html('<img src="public/images/'+data.logo+'?'+d.getTime()+'" width="200">');
            },
            error : function(){
                alert("Gagal")
            }
        });
    }
</script>
@endsection