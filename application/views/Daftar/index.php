<!-- Start Landing Page Section -->
		<div class="landing">
			<div class="home-wrap">
				<div class="home-inner">
					
				</div>
			</div>
		</div>

	<div class="caption text-center">
		<div class="col-md-12">
			<div class="jumbotron jumbotron-fluid jumbotron-custom">
				  <div class="container">
				    <div class="row">
				    	<div class="col-md-6 col-responsive">
				    		<h3 class="text-light text-center login-custom">Anda Sudah Memiliki Sebuah Akun ?</h3>
				    		<a href="<?= base_url(); ?>Login" class="btn btn-outline-light btn-lg">MASUK</a>
				    	</div>

				    	<div class="col-md-6" id="form-left-line">
				    	<h3 class="text-center text-light daftar-h3">DAFTAR</h3>
				    		<form method="POST" action="" id="form-custom">
				    			<div class="form-group">
								    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Anda">
								  </div>

								  <div class="form-group">
								    <input type="email" class="form-control" id="email" placeholder="Masukkan Alamat E-mail Anda">
								  </div>

								  <div class="form-group">
								    <input type="password" class="form-control" id="password" placeholder="Masukkan Password Anda">
								    <small id="emailHelp" class="form-text text-muted text-left p-2">Password Minimal 8 Karakter</small>
								  </div>

								  <button type="submit" class="btn btn-primary d-flex align-items-start btn-custom">DAFTAR<i class="fas fa-caret-square-right ml-2" data-fa-transform="down-1"></i></button>

								  <h5 class="text-center pt-3 h5-custom">Sudah Memiliki Sebuah Akun ?</h5>
								  <a href="<?= base_url(); ?>Login" class="btn btn-outline-light btn-sm mt-2 login-responsive">LOGIN</a>
				    		</form>
				    	</div>
				    </div>
				  </div>
				</div>
		</div>
	</div>
	<!-- End Landing Page Section -->