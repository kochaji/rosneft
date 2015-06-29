
<div class="feature js-feature-video <?php if ($active) echo 'active'; ?> "> 
	<video preload="meta" class="feature__video hidden" loop muted>
		<source src="video/<?= $media['webm'] ?>" type="video/webm; codecs=&quot;vp8, vorbis&quot;">
		<source src="video/<?= $media['mp4']  ?>"  type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
		<source src="video/<?= $media['ogv']  ?>"  type="video/ogg; codecs=&quot;theora, vorbis&quot;">
	</video>
	<div class="feature__controls"></div>
</div>


