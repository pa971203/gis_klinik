<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body mt-2">
                    <form action="<?= base_url('User/action') ?>" method="post">
                        <input type="hidden" name="id_user" value="">
                        <h5>Input User</h5>
                        <div class="form-group">
                            <div class="form-group">
                                <label>Nama</label>
                                <input name="nama" type="text" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input name="username" type="text" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="text" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="password" class="form-control form-control-sm">
                        </div>
                        <div class="form-group text-right">
                            <a href="" class="btn btn-secondary btn-sm">Batal</a>
                            <button class="btn btn-primary btn-sm" id="simpan">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body mt-2">
                    <h5>Input Data</h5>
                    <div class="table-responsive">
                        <table class="table table-striped" style="font-size: 10px !important; color: #000 !important;">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($data_sumber as $value) : ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $value['nama'] ?></td>
                                        <td><?= $value['username'] ?></td>
                                        <td><?= $value['email'] ?></td>
                                        <td><?= $value['password'] ?></td>
                                        <td><?= $value['role'] ?></td> 
                                        <td>
                                            <a href="<?= base_url('User/index/' . $value['id_user']) ?>" class="btn btn-success btn-sm">Edit</a>
                                            <a href="<?= base_url('User/hapus/' . $value['id_user']) ?>" class="btn btn-danger btn-sm">Hapus</a>
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