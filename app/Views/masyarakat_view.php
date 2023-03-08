<?= $this->extend('layouts/admin')?>
<?= $this->section('title')?>
    Masyarakat
<?= $this->endSection()?>
<?= $this->section('content')?>

<div class="row">
    <div class="col">
        <div class="card-header bg-info">
            <a href="#" data-masyarakat="" class="btn btn-outline-light" data-target="#modalMasyarakat" data-toggle="modal"><i class="fas fa-fw fa-solid fa-user-plus"></i>Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Telp</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 0;
                foreach ($masyarakat as $row) {
                    $no++;
                    $data = $row['nik'].",".$row['nama'].",".$row['username'].",".$row['password'].",".$row['telp'].",".base_url('masyarakat/edit/'.$row['id_masyarakat']);
                    ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $row['nik']?></td>
                        <td><?= $row['nama']?></td>
                        <td><?= $row['username']?></td>
                        <td><?= $row['password']?></td>
                        <td><?= $row['telp']?></td>
                        <td>
                        <a href="#" data-masyarakat="<?=$data?>"data-target="#modalMasyarakat" data-toggle="modal" class="btn btn-warning">Edit</a>
                        <a href="<?=base_url('masyarakat/delete/'.$row['id_masyarakat'])?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <?php if (!empty(session()->getFlashdata("message"))) :?>
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata("message");?>
                </div>
                <?php endif ?>
        </div>
    </div>
</div>
<div class="modal fade" id="modalMasyarakat" tabindex="-1" aria-labelledby="modalMasyarakat" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Data Masyarakat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="frmMasyarakat" action="" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nik">Nik</label>
                        <input type="text" name="nik" class="form-control" id="nik">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <label for="telp">Telp</label>
                        <input type="text" name="telp" class="form-control" id="telp">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Simpan</button>
                        <button type="button" class="btn btn-secondart" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection()?>
<?= $this->Section("script")?>
    <script>
    $(document).ready(function(){
        $("#modalMasyarakat").on('show.bs.modal',function(event){
            var button = $(event.relatedTarget);
            var data = button.data('masyarakat');
            if(data != "add"){
                const barisdata= data.split(",");
                $('#nik').val(barisdata[0]);
                $('#nama').val(barisdata[1]);
                $('#username').val(barisdata[2]).change();
                $('#password').val(barisdata[3]);
                $('#telp').val(barisdata[4]).change();
                $('#frmMasyarakat').attr('action',barisdata[5]);
            }else{
                $('#nik').val('');
                $('#nama').val('');
                $('#username').val('').change();
                $('#password').val('');
                $('#telp').val('').change();
                $('#frmMasyarakat').attr('action','/smasyarakat');
            }
        });
    })

    </script>
<?= $this->endSection()?>