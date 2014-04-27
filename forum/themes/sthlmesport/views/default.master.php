<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-ca">
<head>
   <?php $this->RenderAsset('Head'); ?>
</head>
<body id="<?php echo $BodyIdentifier; ?>" class="<?php echo $this->CssClass; ?>">
   <div id="Frame">
      <div id="Body">


		<header role="banner" class="site-header" id="masthead">
			<div class="site-branding">
				<h1 class="site-title"><a rel="home" href="http://sthlmesport.se/">
					<img alt="STHLM e-sport" src="http://sthlmesport.se/wp-content/themes/sthlmesport/img/top-logo.png">
				</a></h1>
			</div>

			<nav role="navigation" class="main-navigation" id="site-navigation">
				<div class="menu"><ul><li><a href="http://sthlmesport.se/">Home</a></li><li class="page_item page-item-2075"><a href="http://sthlmesport.se/kalender/">Kalender</a></li><li class="page_item page-item-1486"><a href="http://sthlmesport.se/om-sthlm-e-sport/">Om STHLM e-sport</a></li><li class="page_item"><a href="http://sthlmesport.se/forum/">Forum</a></li></ul></div>
			</nav><!-- #site-navigation -->
		</header>


         <div id="Content">
         	<a href="http://sthlmesport.se/forum/?ShowAllCategories=true"><h2>Forum</h2></a>

         	<div class="BreadcrumbsTab"><?php echo Gdn_Theme::Breadcrumbs( $this->Data('Breadcrumbs') ) ?></div>

         	<?php $this->RenderAsset('Content'); ?>

         </div>
         
         <div id="Panel">

				<?php
			      $Session = Gdn::Session();
					if ($this->Menu) {
						$this->Menu->AddLink('Dashboard', T('Dashboard'), '/dashboard/settings', array('Garden.Settings.Manage'), array('class' => 'Dashboard'));
						// $this->Menu->AddLink('Dashboard', T('Users'), '/user/browse', array('Garden.Users.Add', 'Garden.Users.Edit', 'Garden.Users.Delete'),  array('class' => 'Users'));
						$this->Menu->AddLink('Activity', T('Activity'), '/activity', FALSE, array('class' => 'Activity'));
						if ($Session->IsValid()) {
							$Name = $Session->User->Name;
							$CountNotifications = $Session->User->CountNotifications;
							if (is_numeric($CountNotifications) && $CountNotifications > 0)
								$Name .= ' <span class="Alert">'.$CountNotifications.'</span>';

                     if (urlencode($Session->User->Name) == $Session->User->Name)
                        $ProfileSlug = $Session->User->Name;
                     else
                        $ProfileSlug = $Session->UserID.'/'.urlencode($Session->User->Name);
							$this->Menu->AddLink('User', $Name, '/profile/'.$ProfileSlug, array('Garden.SignIn.Allow'), array('class' => 'UserNotifications'));
							$this->Menu->AddLink('SignOut', T('Sign Out'), SignOutUrl(), FALSE, array('class' => 'NonTab SignOut'));
						} else {
							$Attribs = array();
							if (SignInPopup() && strpos(Gdn::Request()->Url(), 'entry') === FALSE)
								$Attribs['class'] = 'SignInPopup';
								
							$this->Menu->AddLink('Entry', T('Sign In'), SignInUrl($this->SelfUrl), FALSE, array('class' => 'NonTab SignIn'), $Attribs);
						}
						echo $this->Menu->ToString();
					}
				?>

         	<?php $this->RenderAsset('Panel'); ?></div>
      </div>
   </div>
	<?php $this->FireEvent('AfterBody'); ?>
</body>
</html>
