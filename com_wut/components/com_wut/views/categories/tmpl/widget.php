<style src="media://com_wut/css/com_wut_site.css" />

<div class="mod_wutcategories">
	<ul>
		<li><a href="<?= @route("view=ups&{$itemid}&category_id=") ?>">
			<img src="/media/com_wut/images/icon_all-2x.png" width="19" height="19" alt="All Categories">
			<span>All</span>
		</a></li>

		<? foreach($categories as $category): ?>
			<li><a href="<?= @route("view=ups&{$itemid}&category_id={$category->id}") ?>">
				<? if ($category->icon): ?>
					<img src="/media/com_wut/uploads/icons/<?= $category->icon ?>" height="19" alt="<?= $category->title ?>">
				<? endif; ?>
				<span><?= $category->title ?></span>
			</a></li>
		<? endforeach; ?>
	</ul>
</div>