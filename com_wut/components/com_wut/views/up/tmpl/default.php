<style src="media://com_wut/css/com_wut_site.css" />

<div class="item-page">
	<h1><?= $up->title ?></h1>

	<?= $up->description ?>

	<p><a href="<?= @route("view=ups&{$upsid}") ?>">
		Back to UPs
	</a></p>
</div>