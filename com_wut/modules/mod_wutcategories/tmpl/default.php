<ul>
	<li><a href="#">
		<img src="/media/com_wut/images/icon_all-2x.png" width="19" height="19" alt="All Categories">
		<span>All</span>
	</a></li>

	<? foreach($categories as $category): ?>
		<li><a href="#">
			<? if ($category->logo): ?>
				<img src="/media/com_wut/uploads/icons/<?= $category->logo ?>" height="19" alt="<?= $category->title ?>">
			<? endif; ?>
			<span><?= $category->title ?></span>
		</a></li>
	<? endforeach; ?>
</ul>