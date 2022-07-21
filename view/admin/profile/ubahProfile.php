<?php

// cek apakah tombol submit sudah di tekan apa belum
if (isset($_POST["ubah"])) {
//cek apakah data berhasil di ubah atau tidak
    if (ubahProfil($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil DiUbah');
//                document.location.href = '../../admin';
//            </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal DiUbah');
//            document.location.href = '../../admin';
        </script>
    ";
    }

}

?>



<div class="modal fade" id="ubahProfil" tabindex="-1"
     aria-labelledby="ubahProfil" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Barang</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                    <div class="col-md-12">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="hidden" name="id" value="<?= $id?>">
                        <input type="text" class="form-control" id="nama" name="nama"  value="<?= $profil["nama"]?>" readonly>

                    </div>


                    <div class="col-md-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="col-md-12">
                        <label for="passwordLama" class="form-label">Password Lama</label>
                        <input type="password" class="form-control" id="passwordLama" name="passwordLama" required>
                    </div>

                    <div class="col-md-12">
                        <label for="passwordBaru" class="form-label">Password Baru</label>
                        <input type="password" class="form-control" id="passwordBaru" name="passwordBaru" required>
                    </div>



                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" name="ubah" class="btn btn-primary" onSubmit="window.location.reload()">
                            Ubah
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
