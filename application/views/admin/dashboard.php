<div class="container-fluid">

	<style type="text/css">
		
		.jumbotron {
			background-image: url("<?php echo base_url('assets/img/banner-admin.jpg') ?>");
			background-size: cover;
		}
	</style>

	<header>
		<h4 class="mb-3 text-primary">ID : <b><?php echo $this->session->userdata('username') ?></b></h4>
	</header>

	<div class="jumbotron mx-auto">
		<br>
	</div>

	<div class="single-feature">
		<img class="img-fluid mx-auto" width="100%" src="<?php echo base_url('assets/img/control.jpg') ?>" alt="">
		<div class="banner-content col-lg-6 col-md-6">
		</div>
	</div>

</div>