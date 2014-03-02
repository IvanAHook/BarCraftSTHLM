<?php
	include("include.php");
	$data = currentstream();
?>

<a class="watchlive-text" target="_blank" href="<?php print $data["link_url"]; ?>">
	<div class="watchlive-box">
		<span class="watchlive-title"><?php print $data["title"]; ?></span><span class="watchlive-more"> Visas live här &#9658;</span>
	</div>
</a>