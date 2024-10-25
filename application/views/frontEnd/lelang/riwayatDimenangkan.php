`           <main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Riwayat Ajuan Lelang Dimenangkan</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<!-- <div class="card-header">
									<h5 class="card-title mb-0">Empty card</h5>
								</div> -->
                                <div class="card-body">
                                    <?php $bgLight = true; ?>
                                        <?php foreach($dataAjuan as $da) : ?>
                                        <?php if($da['lelang_dimenangkan'] == 1) : ?>
                                        <?php if ($bgLight) : ?>
                                            <div class="row pt-4 pb-3 bg-light">
                                        <?php else : ?>
                                            <div class="row pt-4 pb-3">
                                        <?php endif; ?>
                                        <?php $bgLight = !$bgLight;?>
                                        <div class="col-sm-3">
                                            <img src="<?= $da['gambar'] ?>" style="width: 210px;" alt="">
                                        </div>
                                        <div class="col-sm-6">
                                            <h4 class="mb-0"><b><?= $da['merk'] ?> <?= $da['model'] ?></b> (<?= $da['tahun_dibuat'] ?>)</h4>
                                            <h5 class="mb-0"><?= $da['tipe'] ?></h5>
                                            <h5 class="mt-2 mb-0"> <span class="text-muted">Kategori : </span><?= $da['kategori'] ?></h5>
                                            <h5 class="mb-0"> <span class="text-muted">Transmisi : </span><?= $da['transmisi'] ?> <?= $da['girboks'] ?></h5>
                                            <h5 class="mb-0"> <span class="text-muted">Mesin : </span><?= $da['jenis_mesin'] ?></h5>
                                            <h5 class="mb-0"> <span class="text-muted">Penggerak : </span><?= $da['jenis_penggerak'] ?></h5>
                                            <h5 class="mt-0 text-muted">Lelang : <span class="h3">Rp. <?= number_format($da['jumlah_lelang']) ?></span></h5>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <h5 class="mb-0"> <span class="text-muted"></span><?= $da['dilelang_pada'] ?></h5>
                                                </div>
                                                <div class="col-sm-3 ">
                                                    <?php if($da['lelang_dimenangkan'] == 1) : ?>
                                                        <a href="" class="btn btn-success confirm-ajuan"><i data-feather="check-circle"></i></a>
                                                    <?php else : ?>
                                                        <a href="" class="btn btn-success edit-ajuan"><i data-feather="edit"></i></a>
                                                        <a href="<?= base_url() ?>lelang/hapusAjuan/<?= $da['id'] ?>" onclick="return confirm('Anda yakin ingin menghapus?')" class="btn btn-danger hapus-ajuan mt-1"><i data-feather="trash-2"></i></a>
                                                    <?php endif; ?>
                                                    <a href="<?= base_url() ?>lelang/lihatLelang/<?= $da['id'] ?>" class="btn btn-warning lihat-ajuan mt-1"><i data-feather="eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <?php if($da['lelang_dimenangkan'] == 1) : ?>
                                                <div class="col mt-4">
                                                    <a href="" class="btn btn-primary form-control lelang-menang"><i class="me-1" data-feather="alert-circle"></i>LELANG DIMENANGKAN</a>
                                                </div>
                                                <?php else : ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
							</div>
						</div>
					</div>

				</div>
			</main>

            <!-- form eror -->
	<div class="notif notification-eror">
          <?php if(validation_errors()) : ?>
              <?php
                  $errors = validation_errors();
                  $error_array = explode("\n", trim(strip_tags($errors)));
                  foreach($error_array as $error) :
              ?>
              <div class="notif notification-danger alert alert-success text-white d-flex align-items-center" role="alert">
                  <i class="fas fa-exclamation-triangle" style="font-size: 24px;"></i>
                  <div style="font-size: 13px;">
                      <?= $error; ?>
                  </div>
                  <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
                  <?php endforeach; ?>
          <?php endif; ?>
      </div>

      <!-- form success -->
      <div class="notif notification-message">
          <?php $message = $this->session->flashdata('message-success'); ?>
          <?php if($message) : ?>
              <div class="notif notification-success alert alert-success text-white d-flex align-items-center" role="alert">
                  <i class="fas fa-check-circle me-2 text-white" style="font-size: 24px;"></i>
                  <div class="text-popup">
                      <?= $message; ?>
                  </div>
                  <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          <?php endif; ?>
      </div>

      <!-- form danger -->
      <div class="notif notification-message">
          <?php $message = $this->session->flashdata('message-danger'); ?>
          <?php if($message) : ?>
              <div class="notif notification-danger alert alert-danger text-white d-flex align-items-center" role="alert">
                  <i class="fas fa-check-circle me-2" style="font-size: 24px;"></i>
                  <div class="text-popup">
                      <?= $message; ?>
                  </div>
                  <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          <?php endif; ?>
      </div>