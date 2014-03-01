<html>
	<head>
		<?php

		error_reporting(0);

		  // validate GET input, only letters, numbers, underscores and dashes
		if ($_GET['channel'] && !preg_match('/[^A-Z0-9_-]/i', $_GET['channel'])) {
			$channel = $_GET['channel'];
			$title = $channel;
		} else {
			include("include.php");
			$data = currentstream();

			if ($data["username"] != "") {
				$channel = $data["username"];
				$title = $data["title"];
			} else {
				$channel = "barcraftse";
				$title = "Offline";
			}
		}

		?>
		<link href="embed.css?update=1" rel="stylesheet" type="text/css">
		<title><?php echo $title; ?> - BarCraft Community Viewer</title>
		<link rel="icon" type="image/png" href="http://www.barcraftsthlm.se/watch/favicon5.png">

		<meta property="og:title" content="BarCraft Community Viewer" />
		<meta property="og:image" content="http://barcraftsthlm.se/watch/og-image.png?update=2" />
		<meta property="og:site_name" content="BarCraftSTHLM" />
		<meta property="og:description" content="BarCraft Community Viewer från BarCraftSTHLM låter oss titta på aktuella turneringar på twitch.tv medan vi chattar med BarCraft-communityt på svenska!" />
	

		<script language="javascript"> 
			function toggleStreamChat() {
				var ele = document.getElementById("stream-chat");
				var btn = document.getElementById("stream-chat-button");
				if(ele.style.display == "table-cell") {
						ele.style.display = "none";
						btn.src = "stream-chat.png";
				}
				else {
					ele.style.display = "table-cell";
					btn.src = "stream-chat-active.png";
				}
			} 

			function toggleBcChat() {
				var ele = document.getElementById("bc-chat");
				var btn = document.getElementById("bc-chat-button");
				if(ele.style.display == "table-cell") {
						ele.style.display = "none";
						btn.src = "bc-chat.png";
				}
				else {
					ele.style.display = "table-cell";
					btn.src = "bc-chat-active.png";
				}
			} 
		</script>
	</head>

	<body>

		<!-- GOOGLE ANALYTICS -->
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-39004176-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
		<!-- END GOOGLE ANALYTICS -->


		<div id="content-wrap">

			<div id="header">
				<a href="http://barcraftsthlm.se"><img id="logo" src="barcraft-logo.png" /></a>
				
				<div id="toggle-buttons">
					<img src="stream-chat-active.png" id="stream-chat-button" class="toggle-button" onclick="toggleStreamChat()" />
					<img src="bc-chat-active.png" id="bc-chat-button" class="toggle-button" onclick="toggleBcChat()" />
				</div>
			</div>

			<div id="content">

				<div id="embed">
					<object type="application/x-shockwave-flash" height="100%" width="100%" id="live_embed_player_flash" data="http://www.twitch.tv/widgets/live_embed_player.swf?channel=<?php echo $channel; ?>" bgcolor="#000000"><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><param name="allowNetworking" value="all" /><param name="movie" value="http://www.twitch.tv/widgets/live_embed_player.swf" /><param name="flashvars" value="hostname=www.twitch.tv&channel=<?php echo $channel; ?>&auto_play=true&start_volume=25" /></object>
				</div>

				<div class="chat" id="stream-chat" style="display: table-cell;">
					<iframe frameborder="0" scrolling="no" id="chat_embed" src="http://www.twitch.tv/chat/embed?channel=<?php echo $channel; ?>&amp;default_chat=jtv&popout _chat=true#r=-rid-&s=em" height="100%" width="100%"></iframe>
				</div>
				
				<div class="chat" id="bc-chat" style="display: table-cell;">
					<iframe frameborder="0" scrolling="no" id="chat_embed" src="http://www.twitch.tv/chat/embed?channel=barcraftse&amp;default_chat=jtv&popout _chat=true#r=-rid-&s=em" height="100%" width="100%"></iframe>
				</div>

				<div id="streamlink">
					<!-- <a href="http://www.twitch.tv/chat/embed?channel=<?php echo $channel; ?>&popout_chat=true" onclick="window.open('http://www.twitch.tv/chat/embed?channel=<?php echo $channel; ?>&popout_chat=true', 'newwindow', 'width=350, height=600'); return false;">[popout stream-chatt]</a>
					 &nbsp; 
					<a href="http://www.twitch.tv/chat/embed?channel=barcraftse&popout_chat=true" onclick="window.open('http://www.twitch.tv/chat/embed?channel=barcraftse&popout_chat=true', 'newwindow', 'width=350, height=600'); return false;">[popout BC-chatt]</a>
					 &nbsp; -->
					<a href="http://twitch.tv/<?php echo $channel; ?>">[stream page]</a>
				</div>

			</div>

		</div>


	</body>
</html>