<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-3 text-gray-800">Tables</h1>
  <p class="mb-1">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
  <?php if ($this->session->flashdata('flash')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Data Barang</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

  <?php endif; ?>

  <?php if (empty($barang)) : ?>
    <div class="alert alert-danger" role="alert">
      Data Barang Ditak ditemukan...
    </div>
  <?php endif; ?>
  <div class="container">
    <div class="rowmt3">
      <div class="colmd-6"><br>
        <a href="http://localhost/penjualan/Barang/tambah/" class="btn btn-primary">Tambah Data Barang</a>
      </div>
    </div>
    <br>
    <div class="row mt3">
      <div class="col-md-6">
        <form action="" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Data Barang..." name="keyword">
            <button class="btn btn-primary" type="submit">Cari</button>
          </div>
        </form>
      </div>
    </div>

    <!-- DataTales Example -->
    <br>
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php foreach ($barang as $brg) : ?>
                  <td><?= ++$start; ?></td>
                  <td><?= $brg['id_barang']; ?></td>
                  <td><?= $brg['nama_barang']; ?></td>
                  <td><?= $brg['harga']; ?></td>
                  <td><?= $brg['stok']; ?></td>
                  <td><a href="http://localhost/penjualan/Barang/detail/<?= $brg['id_barang']; ?>" class="btn btn-primary">Detail</a>
                    <a href="http://localhost/penjualan/Barang/ubah/<?= $brg['id_barang']; ?>" class="btn btn-success">Ubah</a>
                    <a href="http://localhost/penjualan/Barang/hapus/<?= $brg['id_barang']; ?>" class="btn btn-danger" onclick="return confirm ('Apakah Yakin Akan Dihapus?')">Hapus</a>
                  </td>
              </tr>
            <?php endforeach ?>
            </tr>
            </tbody>
          </table>
          <?= $this->pagination->create_links(); ?>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->