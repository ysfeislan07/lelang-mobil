            <main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Data Pengguna</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-xxl-9 d-flex">
                                            <div class="card flex-fill">
                                                <table class="table table-hover my-0">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Action</th>
                                                            <th class="d-none d-xl-table-cell">ID</th>
                                                            <th class="d-none d-xl-table-cell">Nama</th>
                                                            <th class="d-none d-xl-table-cell">Email</th>
                                                            <th class="d-none d-xl-table-cell">No. Handphome</th>
                                                            <th class="d-none d-xl-table-cell">Role</th>
                                                            <th class="d-none d-xl-table-cell">Akses</th>
                                                            <th class="d-none d-xl-table-cell">Data Dibuat</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($sesiPengguna as $sp) : ?>
                                                            <tr>
                                                                <td><?= ++$start ?></td>
                                                                <td>
                                                                    <a href="" class="btn btn-success edit-data-pengguna"><span data-feather="edit"></span></a>
                                                                    <a href="" class="btn btn-danger hapus-data-pengguna"><span data-feather="trash-2"></span></a>
                                                                </td>
                                                                <td><?= $sp['id'] ?></td>
                                                                <td><?= $sp['nama'] ?></td>
                                                                <td><?= $sp['email'] ?></td>
                                                                <td><?= $sp['telp'] ?></td>
                                                                <td><?= $sp['role'] ?></td>
                                                                <td class="text-center"><?= $sp['akses'] ?></td>
                                                                <td><?= $sp['data_dibuat'] ?></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                    <div class="pagination-links">
                                                        <?= $this->pagination->create_links(); ?>  
                                                    </div>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
					</div>

                    <style>
                        .pagination-links {
                            margin-top: 20px;
                            font-size: 20px;
                        }

                        .pagination-links ul.pagination {
                            display: inline-block;
                            padding: 0;
                            margin: 0;
                        }

                        .pagination-links ul.pagination li {
                            display: inline;
                            margin: 0 5px;
                            font-size: 14px;
                        }

                        .pagination-links ul.pagination li a {
                            color: #333;
                            text-decoration: none;
                            padding: 5px 10px;
                            border: 1px solid #ccc;
                            background-color: #fff;
                            border-radius: 5px;
                            transition: background-color 0.2s;
                        }

                        .pagination-links ul.pagination li a:hover {
                            background-color: #007bff;
                            color: #fff;
                        }

                        .pagination-links ul.pagination .active a {
                            background-color: #007bff;
                            color: #fff;
                        }

                        /* Center the pagination */
                        .pagination-links ul.pagination {
                            text-align: center;
                        }

                    </style>

				</div>
			</main>