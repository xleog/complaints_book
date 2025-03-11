
<?= $this->extend('dashboard/template.php');?>
<?= $this->section('titulo'); ?>
        Inicio de sesion
<?= $this->endsection() ?> 

<?= $this->section('content'); ?>
	<div class="page-body">
				<div class="container-xl">
					<div class="row row-deck row-cards">
					
		

										
										
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Invoices</h3>
								</div>

								<div class="table-responsive">
									<table class="table card-table table-vcenter text-nowrap datatable" id="tblusuarios" name="tblusuarios">
										<thead>
											<tr>
												<th class="w-1"><input class="form-check-input m-0 align-middle"
														type="checkbox" aria-label="Select all invoices"></th>
												<th class="w-1">COD
													<!-- Download SVG icon from http://tabler.io/icons/icon/chevron-up -->
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none" stroke="currentColor"
														stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
														class="icon icon-sm icon-thick icon-2">
														<path d="M6 15l6 -6l6 6" />
													</svg>
												</th>
												<th>Nombre</th>
												<th>Password</th>
												<th>Estado</th>
												<th>Perfil</th>
												<th>Status</th>
												<th>Price</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											
										</tbody>
									</table>
								</div>
								<div class="card-footer d-flex align-items-center">
									<p class="m-0 text-secondary">Showing <span>1</span> to <span>8</span> of
										<span>16</span> entries
									</p>
									<ul class="pagination m-0 ms-auto">
										<li class="page-item disabled">
											<a class="page-link" href="#" tabindex="-1" aria-disabled="true">
												<!-- Download SVG icon from http://tabler.io/icons/icon/chevron-left -->
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none" stroke="currentColor"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
													class="icon icon-1">
													<path d="M15 6l-6 6l6 6" />
												</svg>
												prev
											</a>
										</li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item active"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">4</a></li>
										<li class="page-item"><a class="page-link" href="#">5</a></li>
										<li class="page-item">
											<a class="page-link" href="#">
												next
												<!-- Download SVG icon from http://tabler.io/icons/icon/chevron-right -->
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none" stroke="currentColor"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
													class="icon icon-1">
													<path d="M9 6l6 6l-6 6" />
												</svg>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?= $this->endsection() ?> 

<?= $this->section('scripts'); ?>
	<script src="<?= base_url('public/dist/js/paginas/man_usuarios.js') ?>" defer></script>
<?= $this->endsection() ?> 