<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Data Faskes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Daftar Fasilitas Kesehatan Depok</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <h1>Data Faskes Depok </h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th><th>Nama</th>
                    <th>alamat</th><th>Latlong</th>
                    <th>Deskripsi</th><th>Score Rating</th>
                    <th>Website</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $id = 1;
                    foreach($list_faskes as $row){
                ?>

                    <tr>
                        <td><?=$id?></td>
                        <td><?=$row->nama?></td>
                        <td><?=$row->alamat?></td>
                        <td><?=$row->latlong?></td>
                        <td><?=$row->deskripsi?></td>
                        <td><?=$row->skor_rating?></td>
                        <td><?=$row->website?></td>
                    </tr>
                <?php
                    $id++;
                    }

                ?>
               
            </tbody>
        </table>
        <a class="btn btn-primary" href="<?php echo base_url('index.php/faskes/create')?>" role="button"></a>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>