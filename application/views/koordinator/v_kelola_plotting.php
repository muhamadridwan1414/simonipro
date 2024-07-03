        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-12 d-flex align-items-strech">
            <div class="card w-100">
              <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                    <h5 class="card-title fw-semibold">Daftar Plotting</h5>
                  </div>
                </div>
              <div class="card">
                <div class="card-body">
                  <?= $this->session->flashdata('pesan'); ?>
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="mb-3">
                      <button type="button" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#modalAddPlotting">
                        <span>
                          <i class="ti ti-plus"></i>
                        </span> 
                        Tambah Data
                      </button>
                    </div>
                  </div>
                  <table id="myTable" class="table table-hover table-responsive">
                    <thead>
                      <tr>
                        <th class="text-start">#</th>
                        <th class="text-start">Koordinator</th>
                        <th class="text-start">Dosen pembimbing</th>
                        <th class="text-start">Nama Mahasiswa</th>
                        <th class="text-start">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($plotting as $plot) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $plot['nama_plotting']; ?></td>
                        <td><?= date('d-M-Y', $plot['created_at']); ?></td>
                        <td>
                          <?php ( $plot['status'] == 'draft' ) ? $color = 'warning' : $color = 'success' ?>
                            <span class="badge text-bg-<?= $color; ?>">
                                <?= $plot['status']; ?>
                            </span>
                        </td>
                        <td>
                          <small>
                          <a href="detail_plotting/<?= $plot['id']; ?>" class="btn btn-outline-primary mb-2">
                              <span>
                                <i class="ti ti-info-circle"></i>
                              </span>
                              Detail
                            </a>
                          </small>
                          <small>
                          <a href="ubah_plotting/<?= $plot['id']; ?>" class="btn btn-outline-warning mb-2">
                              <span>
                                <i class="ti ti-edit"></i>
                              </span>
                              Ubah
                            </a>
                          </small>
                        </td>
                      </tr>
                      <?php $i++; ?>
                      <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th class="text-start">#</th>
                        <th class="text-start">Nama plotting</th>
                        <th class="text-start">Dibuat pada</th>
                        <th class="text-start">Status</th>
                        <th class="text-start">Aksi</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="modalAddPlotting" tabindex="-1" aria-labelledby="modalAddPlottingLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalAddPlottingLabel">Form Tambah Data plotting</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('koordinator/tambah_plotting'); ?>" method="post">
            <div class="mb-3">
                <label for="nama_plotting" class="form-label">Nama plotting</label>
                <input type="text" name="nama_plotting" id="nama_plotting" class="form-control" autofocus autocomplete="off" value="<?= set_value('nama_plotting'); ?>">
                <?= form_error('nama_plotting', '<small class="text-danger fst-italic">', '</small>'); ?>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
    </form>
</div>
</div>
</div>