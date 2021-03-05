<!-- tambah -->
<div class="modal fade" id="tambahMahasiswa" tabindex="-1" aria-labelledby="tambahMahasiswaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahMahasiswaLabel">Tambah Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="../assets/helper/tambah_mahasiswa.php">
                    <div class="mb-3">
                        <label for="namaMahasiswa" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="namaMahasiswa" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <label for="nimMahasiswa" class="form-label">NIM</label>
                        <input type="number" name="nim" class="form-control" id="nimMahasiswa" placeholder="NIM">
                    </div>
                    <div class="mb-3">
                        <label for="alamatMahasiswa" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamatMahasiswa" placeholder="Alamat">
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->

<div class="modal fade" id="editMahasiswa<?php echo $d['id'] ?>" tabindex="-1" aria-labelledby="editMahasiswaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editMahasiswaLabel">Edit Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form method="post" action="../assets/helper/update_mahasiswa.php">
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <div class="mb-3">
                        <label for="namaMahasiswa" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="namaMahasiswa" placeholder="Nama"
                            value="<?php echo $d['nama']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nimMahasiswa" class="form-label">NIM</label>
                        <input type="number" name="nim" class="form-control" id="nimMahasiswa" placeholder="NIM"
                            value="<?php echo $d['nim']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="alamatMahasiswa" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamatMahasiswa" placeholder="Alamat"
                            value="<?php echo $d['alamat']; ?>">
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>