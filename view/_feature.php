<div class="feature">
	
		<?php if ($type == 'string') : ?>
		<img src="<?= $media ?>" class="container feature__media feature__media--image" alt="<?= $text ?>">
		<?php endif; ?>

		<?php if ($type == 'array') : ?>
		<video controls="true" preload="meta" class="container feature__media feature__media--video">
			<source src="<?= $media['webm'] ?>" type="video/webm; codecs=&quot;vp8, vorbis&quot;">
			<source src="<?= $media['mp4'] ?>"  type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
			<source src="<?= $media['ogv'] ?>"  type="video/ogg; codecs=&quot;theora, vorbis&quot;">
		</video>
		<?php endif; ?>

		<?php if ($text) : ?>
		<div class="feature__text">
			<p>
				<?= $text ?>
			</p>
		</div>
		<?php endif; ?>
	
</div>