<ul>
	<li><a href="#">
		<img src="/media/com_wut/images/icon_all-2x.png" width="19" height="19" alt="icon all-2x">
		<span>All</span>
	</a></li>

	<? foreach($categories as $category): ?>
		<li><a href="#">
			<span><?= $category->title ?></span>
		</a></li>
	<? endforeach; ?>
</ul>