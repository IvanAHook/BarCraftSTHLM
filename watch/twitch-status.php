<?php
	include("include.php");
	$data = currentstream();
?>



<a class="watchlive-img" target="_blank" href="<?php print $data["link_url"]; ?>"><img width="270" height="152" src="<?php print $data["image_url"]; ?>" /></a>
<a class="watchlive-text watchlive-upper" target="_blank" href="<?php print $data["link_url"]; ?>">Live just nu</a>
<a class="watchlive-text watchlive-title" target="_blank" href="<?php print $data["link_url"]; ?>"><?php print $data["title"]; ?></a>
<a class="watchlive-text watchlive-lower" target="_blank" href="<?php print $data["link_url"]; ?>">Klicka här för att titta live!</a>