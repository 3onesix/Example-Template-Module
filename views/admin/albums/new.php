<?php $this->load->view('admin/_header'); ?>

<?php echo form_for($f, $album, site_url($controller_path.'/create'), array('multipart' => true)); ?>
	<h2 id="title">New <?=ucfirst($content_plural)?></h2>
	<?php $this->load->view($controller_path.'/_form', array('f'=>$f)); ?>
<?php echo form_end(); ?>

<?php $this->load->view('admin/_footer'); ?>