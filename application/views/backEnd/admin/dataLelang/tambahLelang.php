
            <main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Tambah Data Mobil</h1>

					<form action="<?= base_url('lelang/tambahLelang') ?>" method="post">
						<div class="row">
							<div class="col-6">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">Data Mobil</h5>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Merk</label>
													<input class="form-control form-control-lg" type="text" name="merk" placeholder="Masukkan merk mobil..."  value="<?= set_value('merk') ?>" />
													<?= form_error('merk', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Model</label>
													<input class="form-control form-control-lg" type="text" name="model" placeholder="Masukkan model mobil..."  value="<?= set_value('model') ?>" />
													<?= form_error('model', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Tipe</label>
													<input class="form-control form-control-lg" type="text" name="tipe" placeholder="Masukkan tipe mobil..."  value="<?= set_value('tipe') ?>" />
													<?= form_error('tipe', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Gambar</label>
													<input class="form-control form-control-lg" type="text" name="gambar" placeholder="Masukkan gambar mobil..."  value="<?= set_value('gambar') ?>" />
													<?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Tahun Dibuat</label>
													<!-- <input class="form-control form-control-lg" type="email" name="email" placeholder="Masukkan email anda..."  value="<?= set_value('email') ?>" /> -->
													<select name="tahun_dibuat" id="" class="form-control form-select">
														<option value="">Pilih Opsi</option>
														<option value="2023" <?= set_select('tahun_dibuat', '2023') ?>>2023</option>
														<option value="2022" <?= set_select('tahun_dibuat', '2022') ?>>2022</option>
														<option value="2021" <?= set_select('tahun_dibuat', '2021') ?>>2021</option>
														<option value="2020" <?= set_select('tahun_dibuat', '2020') ?>>2020</option>
														<option value="2019" <?= set_select('tahun_dibuat', '2019') ?>>2019</option>
														<option value="2018" <?= set_select('tahun_dibuat', '2018') ?>>2018</option>
														<option value="2017" <?= set_select('tahun_dibuat', '2017') ?>>2017</option> 
													</select>
													<?= form_error('tahun_dibuat', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Kategori</label>
													<!-- <input class="form-control form-control-lg" type="email" name="email" placeholder="Masukkan email anda..."  value="<?= set_value('email') ?>" /> -->
													<select name="kategori" id="" class="form-control form-select">
														<option value="">Pilih Opsi</option>
														<option value="Sedan" <?= set_select('kategori', 'Sedan') ?>>Sedan</option>
														<option value="Sedan Hybrid" <?= set_select('kategori', 'Sedan Hybrid') ?>>Sedan Hybrid</option>
														<option value="Hatchback" <?= set_select('kategori', 'Hatchback') ?>>Hatchback</option>
														<option value="Hatchback Hybrid" <?= set_select('kategori', 'Hatchback Hybrid') ?>>Hatchback Hybrid</option>
														<option value="MPV" <?= set_select('kategori', 'MPV') ?>>MPV</option>
														<option value="MPV Hybrid" <?= set_select('kategori', 'MPV Hybrid') ?>>MPV Hybrid</option>
														<option value="SUV" <?= set_select('kategori', 'SUV') ?>>SUV</option>
														<option value="SUV Hybrid" <?= set_select('kategori', 'SUV Hybrid') ?>>SUV Hybrid</option>
														<option value="D Cab" <?= set_select('kategori', 'D Cab') ?>>D Cab</option>
													</select>
													<?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Harga Lelang</label>
													<input class="form-control form-control-lg" type="numeric" name="harga_lelang" placeholder="Lelang mulai dari..."  value="<?= set_value('harga_lelang') ?>" />
													<?= form_error('harga_lelang', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Harga Baru</label>
													<input class="form-control form-control-lg" type="numeric" name="harga_baru" placeholder="Harga baru mobil..."  value="<?= set_value('harga_baru') ?>" />
													<?= form_error('harga_baru', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Odo Meter</label>
													<input class="form-control form-control-lg" type="numeric" name="odometer" placeholder="Odo meter mobil..."  value="<?= set_value('odometer') ?>" />
													<?= form_error('odometer', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Pajak</label>
													<input class="form-control form-control-lg" type="numeric" name="pajak" placeholder="Masukkan pajak mobil..."  value="<?= set_value('pajak') ?>" />
													<?= form_error('pajak', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label for="" class="form-label">Region</label>
													<select name="region" id="" class="form-control form-select">
														<option value="">Pilih Provinsi</option>
														<?php foreach($dataProvinsi as $dp) : ?>
															<option value="<?= $dp['nama'] ?>" <?= set_select('provinsi', $dp['nama']) ?>><?= $dp['nama'] ?></option>
														<?php endforeach; ?>
													</select>
													<?= form_error('region', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Kategori</label>
													<!-- <input class="form-control form-control-lg" type="email" name="email" placeholder="Masukkan email anda..."  value="<?= set_value('email') ?>" /> -->
													<select name="plat_tipe" id="" class="form-control form-select">
														<option value="">Pilih Opsi</option>
														<option value="Ganjil" <?= set_select('plat_tipe', 'Ganjil') ?>>Ganjil</option>
														<option value="Genap" <?= set_select('plat_tipe', 'genap') ?>>Genap</option>
													</select>
													<?= form_error('plat_tipe', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Plat Region</label>
													<input class="form-control form-control-lg" type="numeric" name="plat_region" placeholder="Masukkan plat mobil..."  value="<?= set_value('plat_region') ?>" />
													<?= form_error('plat_region', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Warna</label>
													<input class="form-control form-control-lg" type="numeric" name="warna" placeholder="Masukkan warna mobil..."  value="<?= set_value('warna') ?>" />
													<?= form_error('warna', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">Spesifikasi Mesin</h5>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Mesin</label>
													<input class="form-control form-control-lg" type="text" name="mesin" placeholder="Masukkan mesin mobil..."  value="<?= set_value('mesin') ?>" />
													<?= form_error('mesin', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Katup</label>
													<!-- <input class="form-control form-control-lg" type="text" name="model" placeholder="Masukkan model mobil..."  value="<?= set_value('model') ?>" /> -->
													<select name="katup" id="" class="form-control form-select">
														<option value="">Pilih Opsi</option>
														<option value="3" <?= set_select('katup', '3') ?>>3</option>
														<option value="4" <?= set_select('katup', '4') ?>>4</option>
														<option value="5" <?= set_select('katup', '5') ?>>5</option>
														<option value="6" <?= set_select('katup', '6') ?>>6</option>
														<option value="7" <?= set_select('katup', '7') ?>>7</option>
														<option value="8" <?= set_select('katup', '8') ?>>8</option>
														<option value="9" <?= set_select('katup', '9') ?>>9</option>
													</select>
													<?= form_error('katup', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Cylinder</label>
													<!-- <input class="form-control form-control-lg" type="text" name="model" placeholder="Masukkan model mobil..."  value="<?= set_value('model') ?>" /> -->
													<select name="cilinder" id="" class="form-control form-select">
														<option value="">Pilih Opsi</option>
														<option value="3" <?= set_select('cilinder', '3') ?>>3</option>
														<option value="4" <?= set_select('cilinder', '4') ?>>4</option>
														<option value="5" <?= set_select('cilinder', '5') ?>>5</option>
														<option value="6" <?= set_select('cilinder', '6') ?>>6</option>
														<option value="7" <?= set_select('cilinder', '7') ?>>7</option>
														<option value="8" <?= set_select('cilinder', '8') ?>>8</option>
														<option value="9" <?= set_select('cilinder', '9') ?>>9</option>
													</select>
													<?= form_error('cilinder', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Kapasitas CC</label>
													<input class="form-control form-control-lg" type="text" name="kapasitas_cc" placeholder="Masukkan cc mobil..."  value="<?= set_value('kapasitas_cc') ?>" />
													<?= form_error('kapasitas_cc', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Tenaga (HP)</label>
													<input class="form-control form-control-lg" type="numeric" name="tenaga" placeholder="Masukkan tenaga mobil..."  value="<?= set_value('tenaga') ?>" />
													<?= form_error('tenaga', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Torsi (Nm)</label>
													<input class="form-control form-control-lg" type="numeric" name="torsi" placeholder="Masukkan torsi mobil..."  value="<?= set_value('torsi') ?>" />
													<?= form_error('torsi', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-sm-6">
												<div class="form-button">
													<button type="submit" class="btn btn-success form-control" name="submit">TAMBAH MOBIL</button>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-button">
													<a href="<?= base_url('lelang') ?>" type="submit" class="btn btn-secondary form-control" name="">BATAL</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">Spesifikasi Transmisi</h5>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Jenis Transmisi</label>
													<!-- <input class="form-control form-control-lg" type="merk" name="merk" placeholder="Masukkan merk mobil..."  value="<?= set_value('merk') ?>" /> -->
													<select name="transmisi" id="" class="form-select form-control">
														<option value="">Pilih Opsi</option>
														<option value="Manual" <?= set_select('transmisi', 'Manual') ?>>Manual</option>
														<option value="Automatic"  <?= set_select('transmisi', 'Automatic') ?>>Automatic</option>
														<option value="Otomatis"  <?= set_select('transmisi', 'Otomatis') ?>>Otomatis</option>
													</select>
													<?= form_error('transmisi', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Girboks</label>
													<!-- <input class="form-control form-control-lg" type="girboks" name="girboks" placeholder="Masukkan mdoel mobil..."  value="<?= set_value('girboks') ?>" /> -->
													<select name="girboks" id="" class="form-select form-control">
														<option value="">Pilih Opsi</option>
														<option value="AT" <?= set_select('girboks', 'AT') ?>>AT</option>
														<option value="CVT" <?= set_select('girboks', 'CVT') ?>>CVT</option>
														<option value="DVT" <?= set_select('girboks', 'DVT') ?>>DVT</option>
														<option value="AMT" <?= set_select('girboks', 'AMT') ?>>AMT</option>
														<option value="4-Speed" <?= set_select('girboks', '4-Speed') ?>>4-Speed</option>
														<option value="5-Speed" <?= set_select('girboks', '5-Speed') ?>>5-Speed</option>
														<option value="6-Speed" <?= set_select('girboks', '6-Speed') ?>>6-Speed</option>
														<option value="7-Speed" <?= set_select('girboks', '7-Speed') ?>>7-Speed</option>
														<option value="8-Speed" <?= set_select('girboks', '8-Speed') ?>>8-Speed</option>
														<option value="9-Speed" <?= set_select('girboks', '9-Speed') ?>>9-Speed</option>
														<option value="10-Speed" <?= set_select('girboks', '10-Speed') ?>>10-Speed</option>
													</select>
													<?= form_error('girboks', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Jenis Penggerak</label>
													<!-- <input class="form-control form-control-lg" type="jenis_penggerak" name="jenis_penggerak" placeholder="Masukkan jenis_penggerak mobil..."  value="<?= set_value('jenis_penggerak') ?>" /> -->
													<select name="jenis_penggerak" id="" class="form-select form-control">
														<option value="">Pilih Opsi</option>
														<option value="FWD" <?= set_select('jenis_penggerak', 'FWD') ?>>FWD</option>
														<option value="RWD" <?= set_select('jenis_penggerak', 'RWD') ?>>RWD</option>
														<option value="AWD" <?= set_select('jenis_penggerak', 'AWD') ?>>AWD</option>
														<option value="4x2" <?= set_select('jenis_penggerak', '4x2') ?>>4x2</option>
														<option value="4x4" <?= set_select('jenis_penggerak', '4x4') ?>>4x4</option>
													</select>
													<?= form_error('jenis_penggerak', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Jenis BBM</label>
													<!-- <input class="form-control form-control-lg" type="email" name="email" placeholder="Masukkan email anda..."  value="<?= set_value('email') ?>" /> -->
													<select name="jenis_bbm" id="" class="form-control form-select">
														<option value="">Pilih Opsi</option>
														<option value="Bensin" <?= set_select('jenis_bbm', 'Bensin') ?>>Bensin</option>
														<option value="Bensin" <?= set_select('jenis_bbm', 'Bensin Hybrid') ?>>Bensin Hybrid</option>
														<option value="Diesel" <?= set_select('jenis_bbm', 'Diesel') ?>>Diesel</option>
														<option value="Diesel" <?= set_select('jenis_bbm', 'Diesel Hybrid') ?>>Diesel Hybrid</option>
														<option value="Electric Vehicle" <?= set_select('jenis_bbm', 'Electric Vehicle') ?>>Electric Vehicle</option>
													</select>
													<?= form_error('jenis_bbm', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">Spesifikasi Kapasitas</h5>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Kapasitas Duduk</label>
													<!-- <input class="form-control form-control-lg" type="merk" name="merk" placeholder="Masukkan merk mobil..."  value="<?= set_value('merk') ?>" /> -->
													<select name="kapasitas_duduk" id="" class="form-select form-control">
														<option value="">Pilih Opsi</option>
														<option value="2" <?= set_select('kapasitas_duduk', '2') ?>>2</option>
														<option value="3" <?= set_select('kapasitas_duduk', '3') ?>>3</option>
														<option value="4" <?= set_select('kapasitas_duduk', '4') ?>>4</option>
														<option value="5" <?= set_select('kapasitas_duduk', '5') ?>>5</option>
														<option value="6" <?= set_select('kapasitas_duduk', '6') ?>>6</option>
														<option value="7" <?= set_select('kapasitas_duduk', '7') ?>>7</option>
														<option value="8" <?= set_select('kapasitas_duduk', '8') ?>>8</option>
														<option value="9" <?= set_select('kapasitas_duduk', '9') ?>>9</option>
														<option value="10" <?= set_select('kapasitas_duduk', '10') ?>>10</option>
													</select>
													<?= form_error('kapasitas_duduk', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Kapasitas Tangki</label>
													<input class="form-control form-control-lg" type="numeric" name="kapasitas_tangki" placeholder="Masukkan kapasitas tangki..."  value="<?= set_value('kapasitas_tangki') ?>" />
													<?= form_error('kapasitas_tangki', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Panjang</label>
													<input class="form-control form-control-lg" type="numeric" name="panjang" placeholder="Masukkan panjang mobil..."  value="<?= set_value('panjang') ?>" />
													<?= form_error('panjang', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Lebar</label>
													<input class="form-control form-control-lg" type="numeric" name="lebar" placeholder="Masukkan lebar anda..."  value="<?= set_value('lebar') ?>" />
													<?= form_error('lebar', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Tinggi</label>
													<input class="form-control form-control-lg" type="numeric" name="tinggi" placeholder="Masukkan tinggi anda..."  value="<?= set_value('tinggi') ?>" />
													<?= form_error('tinggi', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Ground Clearance</label>
													<input class="form-control form-control-lg" type="numeric" name="ground" placeholder="Masukkan ground anda..."  value="<?= set_value('ground') ?>" />
													<?= form_error('ground', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>

				</div>
			</main>