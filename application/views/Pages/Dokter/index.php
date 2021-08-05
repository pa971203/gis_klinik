<div class="container">
    <div class="row">
        <div class="col-md-12">
         <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb breadcrumb-arrow">
                    <li class="breadcrumb-item"  id="btn-inp"><a style=" cursor: pointer;">Input Data</a></li>
                    <li class="breadcrumb-item" id="btn-view"><a style=" cursor: pointer;">Lihat Data</a></li>
                </ol>
            </div>
        </div>
        <div class="card">
            <div class="card-body mt-2" id="inp">
                <h5>Input Dokter</h5>
                <form action="<?= base_url('Dokter/action') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_dokter" value="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ID User</label>
                                <input name="id_user" type="text" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label>NIP</label>
                                <input name="nip" type="text" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input name="nama" type="text" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <input name="jk" type="text" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input name="alamat" type="text" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label>NO Handphone</label>
                                <input name="no_hp" type="text" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Foto</label>
                                <input name="foto" type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group text-right">
                                <a href="<?= base_url('Dokter') ?>" class="btn btn-secondary btn-md">Batal</a>
                                <button class="btn btn-primary btn-md" id="simpan">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body mt-2" id="view">
                <h5>Data Dokter</h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>ID User</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>NO Handphone</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($data_sumber as $value) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $value['id_user'] ?></td>
                                    <td><?= $value['nip'] ?></td>
                                    <td><?= $value['nama'] ?></td>
                                    <td><?= $value['jk'] ?></td>
                                    <td><?= $value['alamat'] ?></td>
                                    <td><?= $value['no_hp'] ?></td>
                                    <td><img src="<?= base_url('assets/images/foto/'. $value['foto'])  ?>" alt="" border=3 height=100 width=80></td>
                                    <td>
                                        <a href="<?= base_url('Dokter/index/' . $value['id_dokter']) ?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="<?= base_url('Dokter/hapus/' . $value['id_dokter']) ?>" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>