<ul>
<?php foreach(sample::getColors() as $color): ?>
	<li><div class="color" style="background-color: <?= $color ?>"></div> <?= $color ?></li>
<?php endforeach; ?>
</ul>