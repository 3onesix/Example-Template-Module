<?php $this->load->view('admin/_header'); ?>

<?php if($notice): ?><div class="notice"><?php echo $notice; ?></div><?php endif; ?>

<div id="actions">
	<h2>All <?=ucfirst($content_plural)?></h2>
	<a href="<?php echo site_url($controller_path.'/new'); ?>" class="button new <?=$content_singular?>">Add a New <?=ucfirst($content_singular)?></a>
</div>
<div id="records" class="<?=$content_plural?>">
	<ul>
		<?php $odd = false; ?>
		<?php foreach($items as $item): ?>
		<li<?=($odd ? ' class="odd"' : '')?>>
			<div class="what"><?=$item->name?> <span class="sub">(created on <?=date('m/d/Y', $item->created_at)?>)</span></div>
			<div class="actions">
				<a class="edit" href="<?=site_url($controller_path.'/edit/'.$item->id)?>">edit</a>
				<a class="delete" href="<?=site_url($controller_path.'/destroy/'.$item->id)?>">delete</a>
			</div>
		</li>
		<?php $odd = !$odd; ?>
		<?php endforeach; ?>
	</ul>
	<?php pagination($pages); ?>
</div>
<div id="sidebar">
</div>

<?php $this->load->view('admin/_footer'); ?>
