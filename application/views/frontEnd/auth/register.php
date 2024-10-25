<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Daftarkan akun anda!</h1>
							<p class="lead">
								Lengkapi form berikut untuk mendaftarkan sesi anda!
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<form action="<?= base_url('auth/register') ?>" method="post">
										<div class="mb-3">
											<label class="form-label">Nama Anda</label>
											<input class="form-control form-control-lg" type="text" name="nama" placeholder="Masukkan nama anda..." value="<?= set_value('nama') ?>" />
                                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Masukkan email anda..." value="<?= set_value('email') ?>" />
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="mb-3">
											<label class="form-label">No. Handphone</label>
											<input class="form-control form-control-lg" type="numeric" name="telp" placeholder="Masukkan no. handphone anda..." value="<?= set_value('telp') ?>" />
                                            <?= form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Masukkan password anda..." />
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="d-grid gap-2 mt-3">
											<button  type="submit" name="submit" class="btn btn-lg btn-primary">Register</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="text-center mb-3">
							Sudah mempunyai akun? <a href="<?= base_url('auth/login') ?>">Log In</a> sekarang!
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