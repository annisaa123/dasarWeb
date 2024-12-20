<div class="container-fluid">
    <div class="row">
    <!-- Include menu.php untuk menampilkan menu navigasi -->
    <?php require 'admin/template/menu.php'; ?>
    
    <!-- Bagian utama konten -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <!-- Judul halaman -->
         <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Jabatan</h1>
    </div>

      <!-- Tombol tambah jabatan -->
      <div class="row">
        <div class="col-lg-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
            <i class="fa fa-plus"></i> Tambah Jabatan
        </button>
        </div>
    </div>

    <!-- Flash message jika ada -->
     <?php
     if (isset($_SESSION['_flashdata'])) {
        echo "<br>";
        foreach ($_SESSION['_flashdata'] as $key => $val) {
          echo get_flashdata($key);
        }
      }
      ?>
      
      <!-- Tabel daftar jabatan -->
      <div class="table-responsive small">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Jabatan</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            // Mengambil data jabatan dari database dan menampilkannya dalam tabel
            $no = 1;
            $query = "SELECT * FROM jabatan order by id desc";
            $result = mysqli_query($koneksi, $query);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $row['jabatan']; ?></td>
                <td><?= $row['keterangan']; ?></td>
                <td>
                  <!-- Tombol edit dan hapus untuk setiap jabatan -->
                  <a href="index.php?page=jabatan/edit&id=<?php echo $row['id']; ?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                  <a href="fungsi/hapus.php?jabatan=hapus&id=<?php echo $row['id']; ?>" onclick="javascript:return confirm('Hapus Data Jabatan ?');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      
      <!-- Modal untuk menambah jabatan baru -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Form Jabatan</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Form untuk menambahkan jabatan baru -->
            <form action="fungsi/tambah.php?jabatan=tambah" method="POST">
              <div class="modal-body">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nama Jabatan:</label>
                  <input type="text" name="jabatan" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Keterangan:</label>
                  <textarea class="form-control" name="keterangan" id="message-text"></textarea>
                </div>
              </div>
              <div class="modal-footer">
                <!-- Tombol untuk menutup modal -->
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Close</button>
                <!-- Tombol untuk menyimpan data jabatan baru -->
                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>