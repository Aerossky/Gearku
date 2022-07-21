<?php
// cek apakah tombol submit sudah di tekan apa belum
if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "
            <script>
            alert('user baru berhasil ditambahkan!')
              document.location.href = 'akun.php';
            </script>";
    }else{
        echo mysqli_error($conn);
    }

}

?>


<!-- Modal -->
<div class="modal fade" id="tambahAkun" tabindex="-1" aria-labelledby="tambahAkun" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Registrasi Pegawai</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                    <div class="col-md-12">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="col-md-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="col-md-12">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="col-md-12">
                        <label for="password2" class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="password2" name="password2">
                    </div>


                    <div class="col-md-6">
                        <label for="role" class="form-label">Role</label>
                        <select id="role" class="form-select" name="role">
                            <option selected>Pilih..</option>
                            <option value="pemilik">Pemilik</option>
                            <option value="pegawai">Pegawai</option>
                        </select>
                    </div>


                    <div class="col-12">
                        <label for="gambar" class="form-label">Foto Profil</label>
                        <input type="file" class="form-control" id="gambar" name="gambar">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" name="register" class="btn btn-primary">Tambah</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>