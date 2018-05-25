<div class="modal fade in" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="post" class="form-horizontal" data-toggle="validator">
                {{ csrf_field() }} {{ method_field('POST') }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title"></h3>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label for="name" class="col-md-3 control-label">Nama Barang</label>
                        <div class="col-md-6">
                            <input type="text" id="name" name="name" class="form-control" autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="brands" class="col-md-3 control-label">Merk Barang</label>
                      <div class="col-md-6">
                          <input type="text" id="brands" name="brands" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="color" class="col-md-3 control-label">Warna Barang</label>
                      <div class="col-md-6">
                          <input type="text" id="color" name="color" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="price" class="col-md-3 control-label">Harga Barang</label>
                      <div class="col-md-6">
                          <input type="number" id="price" name="price" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="stock" class="col-md-3 control-label">Stock</label>
                      <div class="col-md-6">
                          <input type="number" id="stock" name="stock" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="rack" class="col-md-3 control-label">Nomor Rack</label>
                      <div class="col-md-6">
                          <input type="number" id="rack" name="rack" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="id_supplier" class="col-md-3 control-label">ID Supplier</label>
                      <div class="col-md-6">
                          <input type="number" id="id_supplier" name="id_supplier" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="keterangan" class="col-md-3 control-label">Deskripsi Barang</label>
                      <div class="col-md-6">
                          <input type="text" id="keterangan" name="keterangan" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-flat">Submit</button>
                    <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal">Cancel</button>
                </div>
                
            </form>
        </div>
    </div>
</div>