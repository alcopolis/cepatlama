<?php $this->load->view('backend/parts/header', $this->data); ?>

<body>
	
	<div id="header" class="navbar navbar-static-top navbar-inverse">
    	<div class="navbar-inner">
            <a class="brand" href="<?php echo site_url('backend/dashboard'); ?>">Dashboard</a>
            
            <ul class="nav">
                <li><?php echo anchor('backend/products', 'Products'); ?></li>
                <li><?php echo anchor('backend/pages', 'Pages'); ?></li>
                <li><?php echo anchor('backend/promo', 'Promo'); ?></li>
                <li><?php echo anchor('backend/epg', 'EPG'); ?></li>
                <li><?php echo anchor('backend/news', 'News'); ?></li>
                <li><?php echo anchor('backend/users', 'Users'); ?></li>
            </ul>
        </div>
    </div>
    
    <div id="content" class="container">
    	<div class="row">
            <div class="span9">
                <h1><?php echo $page_title?></h1>
            </div>
            <div class="span3">
                <section id="user">
                    <ul>
                        <li><?php echo anchor('backend/users/' . 'admin', 'User'); ?></li>
                        <li><?php echo anchor('backend/users/logout', 'Logout'); ?></li>
                    </ul>
                </section>
            </div>
		</div>
        
<?php $this->load->view('backend/parts/footer'); ?>