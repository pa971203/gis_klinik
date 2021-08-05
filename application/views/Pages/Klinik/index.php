<div class="container">
    <div class="row">
        <div class="col-md-12">
         <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb breadcrumb-arrow">
                    <li class="breadcrumb-item"  id="btn-inp"><a style=" cursor: pointer;">Input Data Klinik</a></li>
                    <li class="breadcrumb-item" id="btn-view"><a style=" cursor: pointer;">Lihat Data Klinik</a></li>
                </ol>
            </div>
        </div>
        <div class="card">
            <div class="card-body mt-2" id="inp">            
            <h5>Input Data Klinik</h5>
                <form action="<?= base_url('Klinik/action') ?>" method="post">
                    <input type="hidden" name="id_klinik" value="">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">NAMA KLINIK</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">ALAMAT</label>
                                <input type="text" name="alamat" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">DR.PENANGGUNG JAWAB</label>
                                <input type="text" name="dr_penanggung_jawab" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">IZIN OPERASIONAL</label>
                                <input type="text" name="izin_operasional" class="form-control">
                            </div>
                            <label for="exampleFormControlInput1">KLINIK PRATAMA </label>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input"  name="kp_rj" type="checkbox"value="YA">
                                  <label class="form-check-label">RAWAT JALAN</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input"  name="kp_ri" type="checkbox" value="YA">
                                  <label class="form-check-label">RAWAT INAP</label>
                              </div>
                          </div>
                          <label for="exampleFormControlInput1">KLINIK UTAMA </label>
                          <div class="form-group">
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input"  name="ku_rj" type="checkbox" value="YA">
                                  <label class="form-check-label">RAWAT JALAN</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input"  name="ku_ri" type="checkbox" value="YA">
                                  <label class="form-check-label">RAWAT INAP</label>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input"  name="spesialis" type="checkbox" id="sp" value="YA">
                                  <label class="form-check-label" for="sp">SPESIALIS</label>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">BERSALIN</label>
                            <select class="form-control"  name="bersalin" id="exampleFormControlSelect1">
                                <option>PILIH</option>
                                <option>YA</option>
                                <option>TIDAK</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">JENIS PELAYANAN</label>
                            <select class="form-control"  name="jp" id="exampleFormControlSelect1">
                                <option>PILIH</option>
                                <option>UMUM</option>
                                <option>KHUSUS</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">WAKTU PELAYANAN</label>
                            <select class="form-control"  name="wp" id="exampleFormControlSelect1">
                                <option>PILIH</option>
                                <option>24 JAM</option>
                                <option>TIDAK 24 JAM</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">KEPEMILIKAN</label>
                            <select class="form-control"  name="kepemilikan" id="exampleFormControlSelect1">
                                <option>PILIH</option>
                                <option>PEMDA</option>
                                <option>YAYASAN</option>
                                <option>TNI</option>
                                <option>POLRI</option>
                                <option>PERSEORANGAN</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">DIKELUARKAN</label>
                            <input type="date"  name="dikeluarkan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">KOORDINAT</label>
                            <input type="text"  name="koordinat" class="form-control">
                        </div>
                        <div class="form-group text-right">
                            <!-- <a href="<?= base_url('Klinik') ?>" class="btn btn-secondary btn-sm">Batal</a> -->
                            <button class="btn btn-primary btn-sm" id="simpan">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>      
</div>
</div>
</div>
<div class="col-md-12">
    <div class="card">
        <div class="card-body mt-2" id="view">
            <h5>Data Klinik</h5>
            <div class="table-responsive">
                <table class="table table-striped table-bordered zero-configuration" style="font-size: 10px !important; color: #000 !important;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NAMA KLINIK</th>
                            <th>ALAMAT</th>
                            <th>DR.PENANGGUNG JAWAB</th>
                            <th>IZIN OPERASIONAL</th>
                            <th>KLINIK PRATAMA RAWAT JALAN</th>
                            <th>KLINIK PRATAMA RAWAT INAP</th>
                            <th>KLINIK UTAMA RAWAT JALAN</th>
                            <th>KLINIK UTAMA RAWAT INAP</th>
                            <th>SPESIALIS</th>
                            <th>BERSALIN</th>
                            <th>JENIS PELAYANAN</th>
                            <th>WAKTU PELAYANAN</th>
                            <th>KEPEMILIKAN</th>
                            <th>DIKELUARKAN</th>
                            <th>KOORDINAT</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($data_sumber as $value) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $value['nama'] ?></td>
                                <td><?= $value['alamat'] ?></td>
                                <td><?= $value['dr_penanggung_jawab'] ?></td>
                                <td><?= $value['izin_operasional'] ?></td>
                                <td><?= $value['kp_rj'] ?></td>
                                <td><?= $value['kp_ri'] ?></td>
                                <td><?= $value['ku_rj'] ?></td>
                                <td><?= $value['ku_ri'] ?></td>
                                <td><?= $value['spesialis'] ?></td>
                                <td><?= $value['bersalin'] ?></td>
                                <td><?= $value['jp'] ?></td>
                                <td><?= $value['wp'] ?></td>
                                <td><?= $value['kepemilikan'] ?></td>
                                <td><?= $value['dikeluarkan'] ?></td>
                                <td><?= $value['koordinat'] ?></td>
                                <td>
                                    <a href="<?= base_url('Klinik/index/' . $value['id_klinik']) ?>" class="ti-pencil btn btn-success btn-sm">Edit</a>
                                    <a href="<?= base_url('Klinik/hapus/' . $value['id_klinik']) ?>" class="ti-trash btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>      
</div>