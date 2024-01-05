<?php
    include("../koneksi.php");

    $id = $_GET['id']; //mengambil id user yang ingin diubah

    //menampilkan user berdasarkan id
    $data = mysqli_query($mysqli, "select * from jadwal_periksa where id = '$id'");
    $row = mysqli_fetch_assoc($data);
?>

<!-- Modal -->
<div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Jadwal Periksa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm" method="POST" action="pages/updateJadwal.php">
                    <input type="hidden" name="id" value="<?= $row['id']; ?>">

                    <input type="hidden" class="form-control" id="id_dokter" name="id_dokter"
                        value="<?= $row['id_dokter']; ?>" required>

                    <div class="form-group">
                        <label for="hari">Hari</label>
                        <select class="form-control" id="hari" name="hari" required>
                            <option value="Senin" <?= ($row['hari'] == 'Senin') ? 'selected' : ''; ?>>Senin</option>
                            <option value="Selasa" <?= ($row['hari'] == 'Selasa') ? 'selected' : ''; ?>>Selasa</option>
                            <option value="Rabu" <?= ($row['hari'] == 'Rabu') ? 'selected' : ''; ?>>Rabu</option>
                            <option value="Kamis" <?= ($row['hari'] == 'Kamis') ? 'selected' : ''; ?>>Kamis</option>
                            <option value="Jumat" <?= ($row['hari'] == 'Jumat') ? 'selected' : ''; ?>>Jumat</option>
                            <option value="Sabtu" <?= ($row['hari'] == 'Sabtu') ? 'selected' : ''; ?>>Sabtu</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jam_mulai">Jam_Mulai</label>
                        <input type="time" class="form-control" id="jam_mulai" name="jam_mulai"
                            value="<?= $row['jam_mulai']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="jam_selesai">Jam_Selesai</label>
                        <input type="time" class="form-control" id="jam_selesai" name="jam_selesai"
                            value="<?= $row['jam_selesai']; ?>" required>
                    </div>

                    <input type="submit" name="submit" value="Update" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>