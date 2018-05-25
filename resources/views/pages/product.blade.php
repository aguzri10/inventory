@extends('layouts.templates.theme')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Data Product</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="fa fa-opencart"></i>Product</a></li>
            </ol>
        </section>

        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Title</h3>

                    <div class="box-tools pull-right">
                        <a onclick="addForm()" class="btn btn-block btn-primary btn-flat" style="margin-top: -8px;">Add Product</a>
                    </div>
                </div>
                <div class="box-body">
                    <table id="product-table" class="table table-hover">
                        <thead>
                            <tr>
                                <th width="30">No</th>
                                <th>Nama Barang</th>
                                <th>Merk Barang</th>
                                <th>Harga</th>
                                <th>Stok Barang</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        @include('form.form-pro')
    </div>
@endsection

@section('scripts')
<script>
    var table = $('#product-table').DataTable({
                      processing: false,
                      serverSide: true,
                      ajax: "{{ route('api.product') }}",
                      columns: [
                        {data: "id" },
                        {data: "name" },
                        {data: "brands" },
                        {data: "price" },
                        {data: "stock" },
                        {data: "action", orderable: false, searchable: false}
                      ]
                    });

    function addForm() {
        save_method = "add";
        $('input[name=_method]').val('POST');
        $('#modal-form').modal('show');
        $('#modal-form form')[0].reset();
        $('.modal-title').text('Add Product');
      }
    
      $(function(){
            $('#modal-form form').validator().on('submit', function (e) {
                if (!e.isDefaultPrevented()){
                    var id = $('#id').val();
                    if (save_method == 'add') url = "{{ url('product') }}";
                    else url = "{{ url('product') . '/' }}" + id;

                    $.ajax({
                        url : url,
                        type : "POST",
                        data : $('#modal-form form').serialize(),
                        success : function($data) {
                            $('#modal-form').modal('hide');
                            table.ajax.reload();
                            swal({
                              title: 'Berhasil',
                              text: 'Succesfully',
                              type: 'success',
                              timer: '2000'
                            })
                        },
                        error : function(){
                          swal({
                              title: 'Oops...',
                              text: 'Data tidak berhasil ditambahkan',
                              type: 'error',
                              timer: '2000'
                            })
                        }
                    });
                    return false;
                }
            });
        });

        function deleteData(id){
          var csrf_token = $('meta[name="csrf-token"]').attr('content');
          swal({
              title: 'Apa kamu yakin?',
              text: "Kamu akan menghapus data ini!",
              type: 'warning',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Ya, Hapus!',
              showCancelButton: true,
              cancelButtonColor: '#d33'
          }).then(function () {
              $.ajax({
                  url : "{{ url('product') }}" + '/' + id,
                  type : "POST",
                  data : {'_method' : 'DELETE', '_token' : csrf_token},
                  success : function(data) {
                      table.ajax.reload();
                      swal({
                          title: 'Berhasil!',
                          text: data.message,
                          type: 'success',
                          timer: '1500'
                      })
                  },
                  error : function () {
                      swal({
                          title: 'Oops...',
                          text: data.message,
                          type: 'error',
                          timer: '1500'
                      })
                  }
              });
          });
        }

        function editForm(id) {
        save_method = 'edit';
        $('input[name=_method]').val('PATCH');
        $('#modal-form form')[0].reset();
        $.ajax({
          url: "{{ url('product') }}" + '/' + id + "/edit",
          type: "GET",
          dataType: "JSON",
          success: function(data) {
            $('#modal-form').modal('show');
            $('.modal-title').text('Edit Data Product');

            $('#id').val(data.id);
            $('#name').val(data.name);
            $('#brands').val(data.brands);
            $('#color').val(data.color);
            $('#price').val(data.price);
            $('#stock').val(data.stock);
            $('#rack').val(data.rack);
            $('#id_supplier').val(data.id_supplier);
            $('#keterangan').val(data.keterangan);
          },
          error : function() {
              alert("Nothing Data");
          }
        });
      }
</script>
@endsection