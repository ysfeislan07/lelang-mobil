
            <main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3">Katalog Lelang</h1>
					<p class="mb-5">Sedang berlangsung sesuai waktu yang ditentukan</p>
                    <?php if( $this->session->userdata('akses') == 1) : ?>
                    <a href="<?= base_url('lelang/tambahLelang') ?>" class="btn btn-dark mb-2">Tambah Mobil</a>
                    <?php else : ?>
                    <?php endif; ?>
                    <br>
                    <form action="<?= base_url('lelang') ?>" method="post">
                        <div class="row mb-2">
                            <div class="col-sm-8">
                                <a href="<?= base_url('menu') ?>" class="btn btn-secondary">Kembali ke dashboard</a>
                            </div>
                            <div class="col-sm-3 text-end">
                                <select name="kategori" id="" class="form-control form-select">
                                    <option value="">Pilih Opsi</option>
                                    <option value="Sedan">Sedan</option>
                                    <option value="Sedan Hybrid">Sedan Hybrid</option>
                                    <option value="MPV">MPV</option>
                                    <option value="MPV Hybrid">MPV Hybrid</option>
                                    <option value="SUV">SUV</option>
                                    <option value="SUV Hybrid">SUV Hybrid</option>
                                    <option value="Hatchback">Hatchback</option>
                                    <option value="Hatchback Hybrid">Hatchback Hybrid</option>
                                    <option value="D Cab">D Cab</option>
                                </select>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-button">
                                    <button type="submit" class="btn btn-success form-control">Apply</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card">
                        <div class="row p-3">
                            <?php foreach($dataLelang as $dl) : ?>
                            <div class="col-12 col-md-3">
                                <?php if($dl['sesi_lelang'] == 1) : ?>
                                <div class="card" style="opacity: 40%;">
                                <?php else : ?>
                                <div class="card">
                                <?php endif; ?>
                                    <img class="card-img-top" src="<?= $dl['gambar'] ?>" style="width: 266px; height: 160px; max-width: 266px; max-height: 160px;" alt="Unsplash">
                                    <div class="card-body" >
                                        <h4 class="mb-0"><b><?= $dl['model'] ?> <?= $dl['tahun_dibuat'] ?> </b></h4>
                                        <p class="card-text">Mulai dari Rp. <?= number_format($dl['harga_lelang']) ?></p>
                                        <?php if($dl['sesi_lelang'] == 1) : ?>
                                        <h1 class="sold-out-text text-black">SESI HABIS</h1>
                                        <?php else : ?>
                                        <div class="mt-2"></div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Ajukan lelang <?= $dl['model'] ?> hingga kalian mendapatkannya.</p>
                                        <?php if($dl['sesi_lelang'] == 1) : ?>
                                            <?php if($this->session->userdata('akses') == 1) : ?>
                                            <a href="<?= base_url() ?>lelang/detailLelang/<?= $dl['id'] ?>" class="card-link btn btn-secondary">Cek Lelang</a>
                                            <?php else : ?>
                                            <a href="<?= base_url() ?>lelang/detailLelang/<?= $dl['id'] ?>" class="card-link btn btn-secondary disabled">Cek Lelang</a>
                                            <?php endif; ?>
                                        <!-- <a href="#" class="card-link">Another link</a> -->
                                        <?php else : ?>
                                            <a href="<?= base_url() ?>lelang/detailLelang/<?= $dl['id'] ?>" class="card-link btn btn-secondary">Cek Lelang</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
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