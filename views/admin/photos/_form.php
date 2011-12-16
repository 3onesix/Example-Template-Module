<?php $this->load->view('admin/_errors', array('errors' => $photo->errors()))?>
<div id="page_variables">
	<fieldset>
		<div class="field">
			<?php echo $f->label('name', 'Name:'); ?>
			<?php echo $f->text_field('name'); ?>
		</div>
		<div class="field">
			<?php echo $f->label('description', 'Description:'); ?>
			<?php echo $f->text_area('description'); ?>
		</div>
		<div class="field">
			<?php echo $f->label('file', 'Upload:'); ?>
			<?php echo $f->file_field('file'); ?>
		</div>
	</fieldset>
</div>
<div id="sidebar">
</div>
<div class="actions">
	<?php echo submit_tag(); ?> or <a href="<?php echo site_url($controller_path); ?>">cancel</a>
</div>