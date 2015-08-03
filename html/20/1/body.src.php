<?php foreach(sample::getColors() as $color): ?>
<p>
	<span class="color" style="background-color: <?= $color ?>"></span> <?= $color ?>
</p>
<?php endforeach; ?>