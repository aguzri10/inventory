@extends('layouts.templates.theme')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Data Supplier</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-truck"></i>Supplier</a></li>
            </ol>
        </section>

        <section class="content">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Supplier</h3>

                    <div class="box-tools pull-right">
                        <a onclick="addForm()" class="btn btn-block btn-warning btn-flat" style="margin-top: -8px;">Add Supplier</a>
                    </div>
                </div>
                <div class="box-body">
                    <table id="supplier-table" class="table table-hover">
                        <thead>
                            <tr>
                                <th width="30">No</th>
                                <th>Nama Supplier</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        @include('form.form-sup')
    </div>
@endsection

@section('scripts')
<script>
    var table = $('#supplier-table').DataTable({
                      processing: false,
                      serverSide: true,
                      ajax: "{{ route('api.supplier') }}",
                      columns: [
                        {data: "id_supplier" },
                        {data: "name" },
                        {data: "address" },
                        {data: "phone" },
                        {data: "action", orderable: false, searchable: false}
                      ]
                    });

    function addForm() {
        save_method = "add";
        $('input[name=_method]').val('POST');
        $('#modal-form').modal('show');
        $('#modal-form form')[0].reset();
        $('.modal-title').text('Add Supplier');
      }
    
      $(function(){
            $('#modal-form form').validator().on('submit', function (e) {
                if (!e.isDefaultPrevented()){
                    var id_supplier = $('#id_supplier').val();
                    if (save_method == 'add') url = "{{ url('supplier') }}";
                    else url = "{{ url('supplier') . '/' }}" + id_supplier;

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

        function deleteData(id_supplier){
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
                  url : "{{ url('supplier') }}" + '/' + id_supplier,
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

        function editForm(id_supplier) {
        save_method = 'edit';
        $('input[name=_method]').val('PATCH');
        $('#modal-form form')[0].reset();
        $.ajax({
          url: "{{ url('supplier') }}" + '/' + id_supplier + "/edit",
          type: "GET",
          dataType: "JSON",
          success: function(data) {
            $('#modal-form').modal('show');
            $('.modal-title').text('Edit Data Product');

            $('#id_supplier').val(data.id_supplier);
            $('#name').val(data.name);
            $('#address').val(data.address);
            $('#phone').val(data.phone);
          },
          error : function() {
              alert("Nothing Data");
          }
        });
      }
</script>
@endsection