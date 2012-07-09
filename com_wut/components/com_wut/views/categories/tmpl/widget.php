<style src="media://com_wut/css/com_wut_site.css" />

<div class="mod_wutcategories">
	<ul>
		<li <?= ($current === '')? 'class="active"':'' ?>><a 
			href="<?= @route("view=ups&{$itemid}{$date}") ?>" 
			data-category="">
			<img src="/media/com_wut/images/icon_all-2x.png" width="19" height="19" alt="All Categories">
			<span>All</span>
		</a></li>

		<? foreach($categories as $category): ?>
			<li <?= ($current === strtolower($category->title))? 'class="active"':'' ?>><a 
				data-category="<?= strtolower($category->title) ?>"
				href="<?= @route("view=ups&{$itemid}{$date}&category=". strtolower($category->title)) ?>">
				<? if ($category->icon): ?>
					<img src="/media/com_wut/uploads/icons/<?= $category->icon ?>" height="19" alt="<?= $category->title ?>">
				<? endif; ?>
				<span><?= $category->title ?></span>
			</a></li>
		<? endforeach; ?>
	</ul>
</div>