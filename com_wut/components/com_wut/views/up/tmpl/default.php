<style src="media://com_wut/css/com_wut_site.css" />

<div class="item-page">
	<h1><?= "{$up->title} - ". date('l F j, Y', strtotime($up->date)) ?></h1>

	<?= @template('com://site/wut.view.location.simple', array('location'=>$up->location)) ?>

	<?= $up->description ?>

	<p><a href="<?= @route("view=ups&{$upsid}") ?>">
		Back to UPs
	</a></p>
</div>