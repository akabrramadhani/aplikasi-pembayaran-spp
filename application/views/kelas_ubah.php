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
              <?php foreach ($kelas->result() as $value): ?>
                <form class="form-horizontal" method="post" action="<?php echo base_url('kelas/update') ?>">    
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Id</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" name="id_kelas" placeholder="Id" required>
                    </div>
                  </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nama Kelas</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" name="nama_kelas" value="<?php echo $value->nama_kelas; ?>" placeholder="Nama Kelas" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Kompetensi Keahlian</label>
                      <div class="col-sm-4">
                        <select class="form-control" style="width: 100%;" name="id_kelas" required>
                          <option value="0" selected>- Pilih -</option>
                          <option value="10">Multi Media</option>
                          <option value="10">Akutansi</option>
                          <option value="11">Teknik Komputer dan Jaringan</option>
                          <option value="12">Rekayasa Perangkat Lunak</option>
                        </select>
                      </div>
                    </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-sm btn-default">Reset</button>
                </div>
              </form>
              <?php endforeach; ?>
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