    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"><?php echo $subtitle; ?></h5>io
              </div>
              <form class="form-horizontal" method="post" action="<?php echo base_url('siswa/simpan'); ?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Id</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" name="id" placeholder="Id" required>
                    </div>
                  </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nis</label>
                      <div class="col-sm-8">
                      <input type="number" class="form-control" name="nis" placeholder="Nis" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Kelas</label>
                      <div class="col-sm-4">
                        <select class="form-control" style="width: 100%;" name="kelas" required>
                          <option value="0" selected>- Pilih -</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nomor</label>
                      <div class="col-sm-8">
                      <input type="number" class="form-control" name="nomor" placeholder="Nomor" required>
                      </div>
                    </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-sm btn-default">Reset</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
