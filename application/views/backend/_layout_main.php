<?php 

	$this->data['meta_title'] .= ' | Dashboard';
	$this->load->view('backend/parts/header', $this->data); 

?>


	<h1>Admin Dashboard</h1>


<?php $this->load->view('backend/parts/footer'); ?>