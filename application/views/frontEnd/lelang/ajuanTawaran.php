            <main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Ajuan Lelang untuk <b> <?= $dataLelang['merk'] ?> <?= $dataLelang['model'] ?> <?= $dataLelang['tipe'] ?></b></h1>

					<div class="row">
						<div class="col-8">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Detail Mobil</h5>
								</div>
								<div class="card-body bg-light mb-2">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <img  class="card-img-top rounded"src="<?=$dataLelang['gambar']  ?>"  alt="">
                                        </div>
                                        <div class="col-sm-4">
                                            <h5 class="text-"><b><?= $dataLelang['merk'] ?> <?= $dataLelang['model'] ?></b> (<?= $dataLelang['tahun_dibuat'] ?>)</h5>
                                            <h5 class="text-black"><b>Harga Lelang : Rp. <?= number_format($dataLelang['harga_lelang']) ?></b> <small>OTR</small></h5>
                                            <h5 class="text-muted"><?= $dataLelang['tipe'] ?></h5>
                                        </div>
                                    </div>
								</div>
                                <div class="card-header">
									<h5 class="card-title mb-0">Detail Tawaran Anda</h5>
								</div>
                                <div class="card-body">
                                    <form action="<?= base_url() ?>lelang/ajuanTawaran/<?= $dataLelang['id'] ?>" method="post">
                                        <div class="row">
                                            <div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Nama Saya</label>
													<input class="form-control form-control-lg" type="text" name="nama" value="<?= $dataPengguna['nama'] ?>" readonly />
												</div>
											</div>
                                            <div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Email Saya</label>
													<input class="form-control form-control-lg" type="text" name="email" value="<?= $dataPengguna['email'] ?>" readonly />
												</div>
											</div>
                                            <div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Email Tambahan</label>
													<input class="form-control form-control-lg" type="email" name="email2" placeholder="Masukkan email tambahan..." value="<?= set_value('email2') ?>" />
                                                    <?= form_error('email2', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
                                            <div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">No. Handphone Saya</label>
													<input class="form-control form-control-lg" type="text" name="telp" value="<?= $dataPengguna['telp'] ?>" readonly />
												</div>
											</div>
                                            <div class="col-sm-8">
												<div class="mb-3">
													<label class="form-label">Jumlah Ajuan</label>
													<input class="form-control form-control-lg" type="text" name="jumlah_ajuan" placeholder="Masukkan jumlah ajuan... (cth : 450000000)" value="<?= set_value('jumlah_ajuan') ?>" />
                                                    <?= form_error('jumlah_ajuan', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
                                            <div class="col-sm-4">
                                                <div class="form-button">
                                                    <button type="submit" name="submit" class="form-control btn btn-success">Ajukan Lelang</button>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-button">
                                                    <a href="<?= base_url() ?>lelang/detailLelang/<?= $dataLelang['id'] ?>" type="submit" name="submit" class="form-control btn btn-secondary">Kembali</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
							</div>
						</div>
						<div class="col-4">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Ajuan Lelang Pengguna Lain</h5>
								</div>
								<div class="card-body">
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>