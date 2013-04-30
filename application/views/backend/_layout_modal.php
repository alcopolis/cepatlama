<?php $this->load->view('backend/parts/header', $this->data); ?>

<body>
	<div class="modal show" role="dialog">
        
        <?php $this->load->view($subview); //Subview is set in controller ?>
        
        <div class="modal-footer">
        	<p>Modal footer</p>
        </div>
	</div>

<?php $this->load->view('backend/parts/footer'); ?>