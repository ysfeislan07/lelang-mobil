            <main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Profile</h1>
						<?php if(!$dataLogin['alamat']) : ?>
						<a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.html">
                            Lengkapi profil dibawah ini!
                        </a>
						<?php else : ?>
						<?php endif; ?>
					</div>
					<div class="row">
						<div class="col-md-4 col-xl-3">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="card-title mb-0">Profile Details</h5>
								</div>
								<div class="card-body text-center">
									<img src="<?= base_url() ?>assets/static/img/photos/default.jpg" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128" />
									<h5 class="card-title mb-0"><?= $dataLogin['nama'] ?></h5>
									<div class="text-muted mb-2"><?= $dataLogin['role'] ?></div>

									<div>
										<a class="btn btn-primary btn-sm" href="#">Follow</a>
										<a class="btn btn-primary btn-sm" href="#"><span data-feather="message-square"></span> Message</a>
									</div>
								</div>
								<hr class="my-0" />
								<!-- <div class="card-body">
									<h5 class="h6 card-title">Skills</h5>
									<a href="#" class="badge bg-primary me-1 my-1">HTML</a>
									<a href="#" class="badge bg-primary me-1 my-1">JavaScript</a>
									<a href="#" class="badge bg-primary me-1 my-1">Sass</a>
									<a href="#" class="badge bg-primary me-1 my-1">Angular</a>
									<a href="#" class="badge bg-primary me-1 my-1">Vue</a>
									<a href="#" class="badge bg-primary me-1 my-1">React</a>
									<a href="#" class="badge bg-primary me-1 my-1">Redux</a>
									<a href="#" class="badge bg-primary me-1 my-1">UI</a>
									<a href="#" class="badge bg-primary me-1 my-1">UX</a>
								</div> -->
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">About</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> <a href="#"><?= $dataLogin['alamat'] ?></a></li>

										<li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span><a href="#"><?= $dataLogin['profesi'] ?></a></li>
										<li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span><a href="#"><?= $dataLogin['kewarganegaraan'] ?></a></li>
									</ul>
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">Elsewhere</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><a href="#">staciehall.co</a></li>
										<li class="mb-1"><a href="#">Twitter</a></li>
										<li class="mb-1"><a href="#">Facebook</a></li>
										<li class="mb-1"><a href="#">Instagram</a></li>
										<li class="mb-1"><a href="#">LinkedIn</a></li>
									</ul>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Pengguna Lain</h5>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-sm-3">
											<img src="<?= base_url() ?>assets/static/img/photos/default.jpg" class="rounded-circle" style="width: 40px;" alt="">
										</div>
										<div class="col-sm-6">
											<p class="mb-0">Eislan Yusuf</p>
											<p>User</p>
										</div>
										<div class="col-sm-3">
											<a href="" class="text-warning"><i data-feather="eye"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-8 col-xl-9">
                            <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Edit Profil</h5>
								</div>
								<div class="card-body">
                                    <form action="<?= base_url() ?>user/updateProfil/<?= $dataLogin['id'] ?>" method="post">
                                        <div class="row">
                                            <div class="col-sm-6">
                                            <label for="" class="form-label mb-1">Nama Anda</label>
                                            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama anda..." value="<?= set_value('nama', $dataLogin['nama']) ?>">
											<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="" class="form-label mb-1">Email Anda</label>
                                            <input type="text" class="form-control" name="email" placeholder="Masukkan email anda..." value="<?= $dataLogin['email'] ?>" readonly>
                                        </div>
                                        <div class="col-sm-3 mt-3">
                                            <label for="" class="form-label mb-1">No. Handphone</label>
                                            <input type="text" class="form-control" name="telp" placeholder="Masukkan no. handphone anda..." value="<?= set_value('telp', $dataLogin['telp']) ?>">
											<?= form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-sm-9 mt-3">
                                            <label for="" class="form-label mb-1">Alamat</label>
                                            <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat anda..." value="<?= set_value('alamat', $dataLogin['alamat']) ?>">
											<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-sm-3 mt-3">
                                            <label for="" class="form-label mb-1">Kecamatan</label>
                                            <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan anda..." value="<?= set_value('kecamatan', $dataLogin['kecamatan']) ?>">
											<?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-sm-3 mt-3">
                                            <label for="" class="form-label mb-1">Kabupaten / Kota</label>
                                            <input type="text" class="form-control" name="kabupaten" placeholder="Kabupaten anda..." value="<?= set_value('kabupaten', $dataLogin['kabupaten']) ?>">
											<?= form_error('kabupaten', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-sm-6 mt-3">
                                            <label for="" class="form-label mb-1">Provinsi</label>
                                            <!-- <input type="text" class="form-control" name="provinsi" placeholder="Provinsi anda..." value="<?= $dataLogin['provinsi'] ?>"> -->
                                            <select name="provinsi" id="" class="form-control form-select">
                                                <option value="">Pilih Provinsi</option>
                                                <?php foreach($dataProvinsi as $dp) : ?>
                                                    <option value="<?= $dp['nama'] ?>" <?= set_select('provinsi', $dp['nama']) ?> <?= ($dp['nama'] == $dataLogin['provinsi']) ? 'selected' : '' ?>><?= $dp['nama'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
											<?= form_error('provinsi', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-sm-4">
                                                <div class="form-button">
                                                    <button type="submit" class="btn btn-success">Edit Profil</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
								</div>
							</div>

							<div class="card">
                                
								<div class="card-header">

									<h5 class="card-title mb-0">Activities</h5>
								</div>
								<div class="card-body h-100">

									<div class="d-flex align-items-start">
										<img src="<?= base_url() ?>assets/static/img/avatars/avatar-5.jpg" width="36" height="36" class="rounded-circle me-2" alt="Vanessa Tucker">
										<div class="flex-grow-1">
											<small class="float-end text-navy">5m ago</small>
											<strong>Vanessa Tucker</strong> started following <strong>Christina Mason</strong><br />
											<small class="text-muted">Today 7:51 pm</small><br />

										</div>
									</div>

									<hr />
									<div class="d-flex align-items-start">
										<img src="<?= base_url() ?>assets/static/img/avatars/avatar.jpg" width="36" height="36" class="rounded-circle me-2" alt="Charles Hall">
										<div class="flex-grow-1">
											<small class="float-end text-navy">30m ago</small>
											<strong>Charles Hall</strong> posted something on <strong>Christina Mason</strong>'s timeline<br />
											<small class="text-muted">Today 7:21 pm</small>

											<div class="border text-sm text-muted p-2 mt-1">
												Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus
												pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
											</div>

											<a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm" data-feather="heart"></i> Like</a>
										</div>
									</div>

									<hr />
									<div class="d-flex align-items-start">
										<img src="<?= base_url() ?>assets/static/img/avatars/avatar-4.jpg" width="36" height="36" class="rounded-circle me-2" alt="Christina Mason">
										<div class="flex-grow-1">
											<small class="float-end text-navy">1h ago</small>
											<strong>Christina Mason</strong> posted a new blog<br />

											<small class="text-muted">Today 6:35 pm</small>
										</div>
									</div>

									<hr />
									<div class="d-flex align-items-start">
										<img src="<?= base_url() ?>assets/static/img/avatars/avatar-2.jpg" width="36" height="36" class="rounded-circle me-2" alt="William Harris">
										<div class="flex-grow-1">
											<small class="float-end text-navy">3h ago</small>
											<strong>William Harris</strong> posted two photos on <strong>Christina Mason</strong>'s timeline<br />
											<small class="text-muted">Today 5:12 pm</small>

											<div class="row g-0 mt-1">
												<div class="col-6 col-md-4 col-lg-4 col-xl-3">
													<img src="<?= base_url() ?>assets/static/img/photos/unsplash-1.jpg" class="img-fluid pe-2" alt="Unsplash">
												</div>
												<div class="col-6 col-md-4 col-lg-4 col-xl-3">
													<img src="<?= base_url() ?>assets/static/img/photos/unsplash-2.jpg" class="img-fluid pe-2" alt="Unsplash">
												</div>
											</div>

											<a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm" data-feather="heart"></i> Like</a>
										</div>
									</div>

									<hr />
									<div class="d-flex align-items-start">
										<img src="<?= base_url() ?>assets/static/img/avatars/avatar-2.jpg" width="36" height="36" class="rounded-circle me-2" alt="William Harris">
										<div class="flex-grow-1">
											<small class="float-end text-navy">1d ago</small>
											<strong>William Harris</strong> started following <strong>Christina Mason</strong><br />
											<small class="text-muted">Yesterday 3:12 pm</small>

											<div class="d-flex align-items-start mt-1">
												<a class="pe-3" href="#">
                <img src="<?= base_url() ?>assets/static/img/avatars/avatar-4.jpg" width="36" height="36" class="rounded-circle me-2" alt="Christina Mason">
              </a>
												<div class="flex-grow-1">
													<div class="border text-sm text-muted p-2 mt-1">
														Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
													</div>
												</div>
											</div>
										</div>
									</div>

									<hr />
									<div class="d-flex align-items-start">
										<img src="<?= base_url() ?>assets/static/img/avatars/avatar-4.jpg" width="36" height="36" class="rounded-circle me-2" alt="Christina Mason">
										<div class="flex-grow-1">
											<small class="float-end text-navy">1d ago</small>
											<strong>Christina Mason</strong> posted a new blog<br />
											<small class="text-muted">Yesterday 2:43 pm</small>
										</div>
									</div>

									<hr />
									<div class="d-flex align-items-start">
										<img src="<?= base_url() ?>assets/static/img/avatars/avatar.jpg" width="36" height="36" class="rounded-circle me-2" alt="Charles Hall">
										<div class="flex-grow-1">
											<small class="float-end text-navy">1d ago</small>
											<strong>Charles Hall</strong> started following <strong>Christina Mason</strong><br />
											<small class="text-muted">Yesterdag 1:51 pm</small>
										</div>
									</div>

									<hr />
									<div class="d-grid">
										<a href="#" class="btn btn-primary">Load more</a>
									</div>
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