<?php

$Definition['About.DisableStatistics'] = 'If you must disable this data reporting for some business reason, you can do so by adding the following line to your installation\'s configuration file: <code>$Configuration[\'Garden\'][\'Analytics\'][\'Enabled\'] = FALSE;</code>';
$Definition['About.VanillaStatistics'] = 'It is vitally important to the life of this free, open-source software that we accurately measure the reach and effectiveness of Vanilla. We ask that you please do not disable the reporting of this data.';
$Definition['Activity.AnswerAccepted.FullHeadline'] = '%1$s accepted %4$s %8$s.';
$Definition['Activity.BookmarkComment.FullHeadline'] = '%1$s commented on your %8$s.';
$Definition['Activity.BookmarkComment.ProfileHeadline'] = '%1$s commented on your %8$s.';
$Definition['Activity.CommentMention.FullHeadline'] = '%1$s mentioned %3$s in a %8$s.';
$Definition['Activity.CommentMention.ProfileHeadline'] = '%1$s mentioned %3$s in a %8$s.';
$Definition['Activity.QuestionAnswer.FullHeadline'] = '%1$s answered %4$s %8$s.';
$Definition['Applicant Role'] = 'Select the role that should be applied for new applicants. This only applies if you have the <b>approval</b> registration method.';
$Definition['ApplicationHelp'] = 'Applications allow you to add large groups of functionality to your site.<br />Once an application has been added to your %s folder, you can enable or disable it here.';
$Definition['AttemptingSignOut'] = 'You are attempting to sign out. Are you sure you want to %s?';

$Definition['Badge404'] = 'Badge not found.';
$Definition['BadgesModuleTitle'] = 'Badges';
$Definition['BadgesNobody'] = 'Nobody has earned this badge yet.';
$Definition['Ban.Action'] = 'Ban';

$Definition['bookmarked discussion'] = 'bookmarked competition';

$Definition['CategoryID'] = 'Category';
$Definition['Change the look of All Categories'] = 'You can change the look of the <b>All Categories</b> page <a href="%s">here</a>.';
$Definition['Check out these tutorials to get started using Vanilla'] = 'Vanilla is the simplest, most powerful community platform in the world. It\'s super-duper easy to use. Start with this introductory video and continue with the steps below. Enjoy!';
$Definition['Choose md5 if you\'re not sure what to choose.'] = 'You can select a custom hash algorithm to sign your requests. The hash algorithm must also be used in your client library. Choose md5 if you\'re not sure what to choose.';
$Definition['Comment in'] = 'in';
$Definition['Commenting as %1$s (%2$s)'] = 'Commenting as %1$s <span class="SignOutWrap">(%2$s)</span>';
$Definition['ConnectAccountExists'] = 'You already have an account here.';
$Definition['ConnectChooseName'] = 'Choose a name to identify yourself on the site.';
$Definition['ConnectCreateAccount'] = 'Add Info &amp; Create Account';
$Definition['ConnectExistingPassword'] = 'Enter your existing account password.';
$Definition['ConnectLeaveBlank'] = 'Leave blank unless connecting to an exising account.';
$Definition['ConnectRegisteredName'] = 'Your registered username: <strong>%s</strong>';

$Definition['Date.DefaultDateTimeFormat'] = '%B %e, %Y %l:%M%p';
$Definition['Date.DefaultDayFormat'] = '%B %e';
$Definition['Date.DefaultFormat'] = '%B %e, %Y';
$Definition['Date.DefaultTimeFormat'] = '%l:%M%p';
$Definition['Date.DefaultYearFormat'] = '%B %Y';
$Definition['Define who can upload files on the Roles & Permissions page.'] = 'Define who can upload and manage files on the <a href="%s">Roles & Permissions</a> page.';
$Definition['Draft.Delete'] = '×';

$Definition['EmailConfirmEmail'] = 'You need to confirm your email address before you can continue. Please confirm your email address by clicking on the following link: {/entry/emailconfirm,exurl,domain}/{User.UserID,rawurlencode}/{EmailKey,rawurlencode}';
$Definition['EmailInvitation'] = 'Hello!

%1$s has invited you to join %2$s. If you want to join, you can do so by clicking this link:

  %3$s';
$Definition['EmailMembershipApproved'] = 'Hello %1$s,

You have been approved for membership. Sign in now at the following link:

  %2$s';
$Definition['EmailNotification'] = '%1$s

Follow the link below to check it out:
%2$s

Have a great day!';
$Definition['EmailPassword'] = '%2$s has reset your password at %3$s. Your login credentials are now:

  Email: %6$s
  Password: %5$s
  Url: %4$s';
$Definition['EmailStoryNotification'] = '%1$s

%3$s

---
Follow the link below to check it out:
%2$s

Have a great day!';
$Definition['EmailWelcome'] = '%2$s has created an account for you at %3$s. Your login credentials are:

  Email: %6$s
  Password: %5$s
  Url: %4$s';
$Definition['EmailWelcomeConnect'] = 'You have successfully connected to {Title}. Here is your information:

  Username: {User.Name}
  Connected With: {ProviderName}

You can access the site at {/,exurl,domain}.';
$Definition['EmbeddedDiscussionFormat'] = '<div class="EmbeddedContent">{Image}<strong>{Title}</strong>
<p>{Excerpt}</p>
<p><a href="{Url}">Read the full story here</a></p><div class="ClearFix"></div></div>';
$Definition['EmbeddedNoBodyFormat'] = '{Url}';
$Definition['EmbededDiscussionFormat'] = '<div class="EmbeddedContent">{Image}<strong>{Title}</strong>
<p>{Excerpt}</p>
<p><a href="{Url}">Read the full story here</a></p><div class="ClearFix"></div></div>';
$Definition['ErrorCredentials'] = 'Sorry, no account could be found related to the email/username and password you entered.';
$Definition['ErrorPermission'] = 'Sorry, permission denied.';
$Definition['ErrorPluginDisableRequired'] = 'You cannot disable the {0} plugin because the {1} plugin requires it in order to function.';
$Definition['ErrorPluginEnableRequired'] = 'This plugin requires that the {0} plugin be enabled before it can be enabled itself.';
$Definition['ErrorPluginVersionMatch'] = 'The enabled {0} plugin (version {1}) failed to meet the version requirements ({2}).';
$Definition['ErrorRecordNotFound'] = 'The requested record could not be found.';

$Definition['Garden.Email.SupportAddress'] = 'Support email';
$Definition['Garden.Email.SupportName'] = 'Support name';
$Definition['Garden.Import.InputInstructions'] = 'Enter the email and password of the admin user from the data being imported.';
$Definition['Garden.Registration.DefaultRoles'] = 'default role';

$Definition['HeadlineFormat.Badge'] = '{ActivityUserID,You} earned the <a href="{Url,html}">{Data.Name,text}</a> badge.';
$Definition['HeadlineFormat.Ban'] = '{RegardingUserID,You} banned {ActivityUserID,you}.';
$Definition['HeadlineFormat.Comment'] = '{ActivityUserID,user} commented on <a href="{Url,html}">{Data.Name,text}</a>';
$Definition['HeadlineFormat.Discussion'] = '{ActivityUserID,user} Started a new discussion. <a href="{Url,html}">{Data.Name,text}</a>';
$Definition['HeadlineFormat.Mention'] = '{ActivityUserID,user} mentioned you in <a href="{Url,html}">{Data.Name,text}</a>';
$Definition['HeadlineFormat.PictureChange.ForUser'] = '{RegardingUserID,You} changed the profile picture for {ActivityUserID,user}.';
$Definition['HeadlineFormat.Status'] = '{ActivityUserID,user}';
$Definition['HeadlineFormat.Unban'] = '{RegardingUserID,You} unbanned {ActivityUserID,you}.';
$Definition['HeadlineFormat.WallPost'] = '{RegardingUserID,you} &rarr; {ActivityUserID,you}';
$Definition['HeadlineFormat.Warning'] = '{ActivityUserID,You} warned {RegardingUserID,you}.';

$Definition['Invalid password.'] = 'The password you entered was incorrect. Remember that passwords are case-sensitive.';
$Definition['InviteErrorPermission'] = 'Sorry, permission denied.';

$Definition['Locale'] = 'en-CA';
$Definition['Locales are in your %s folder.'] = 'Locales allow you to support other languages on your site. Once a locale has been added to your %s folder, you can enable or disable it here.';

$Definition['Marking as spam cannot be undone.'] = 'Marking something as SPAM will cause it to be deleted forever. Deleting is a good way to keep your forum clean.';
$Definition['MoneyFormat2'] = '$%7.2f';
$Definition['MyBadgesModuleTitle'] = 'My Badges';

$Definition['NoBadgesEarned'] = 'Any minute now&hellip;';
$Definition['Null Date'] = '-';

$Definition['OldPassword'] = 'Old password';
$Definition['Operation By'] = 'By';

$Definition['PageDetailsMessage'] = '%1$s to %2$s';
$Definition['PageDetailsMessageFull'] = '%1$s to %2$s of %3$s';
$Definition['ParticipatedHomepageTitle'] = 'Participated Discussions';
$Definition['PasswordRequest'] = 'Someone has requested to reset your password at %2$s. To reset your password, follow this link:

  %3$s

If you did not make this request, disregard this email.';
$Definition['Permission.Category'] = 'Category';
$Definition['PermissionErrorMessage'] = 'You don\'t have permission to do that.';
$Definition['PermissionErrorTitle'] = 'Permission Problem';
$Definition['PermissionRequired.Garden.Moderation.Manage'] = 'You need to be a moderator to do that.';
$Definition['PermissionRequired.Garden.Settings.Manage'] = 'You need to be an administrator to do that.';
$Definition['PermissionRequired.Javascript'] = 'You need to enable javascript to do that.';
$Definition['PluginHelp'] = 'Plugins allow you to add functionality to your site.<br />Once a plugin has been added to your %s folder, you can enable or disable it here.';
$Definition['Pockets.BetweenDiscussions.Description'] = 'The pocket is displayed between each discussion on the main discussion list. Since discussions are usually in &lt;li&gt;..&lt;/li&gt; tags, you\'ll need to wrap your pocket in those tags too.';
$Definition['Posts.Plural: %s'] = 'Posts: %s';
$Definition['Posts.Singular: %s'] = 'Posts: %s';
$Definition['PreferenceBadgeEmail'] = 'Notify me when I earn a badge.';
$Definition['PreferenceBadgePopup'] = 'Notify me when I earn a badge.';
$Definition['ProfileFieldsCustomDescription'] = 'Use these fields to create custom profile information. You can enter things like "Relationship Status", "Skype", or "Favorite Dinosaur". Be creative!';
$Definition['ProxyConnect.NoAuthenticate'] = 'It doesn\'t seem like we were 
               able to retrieve a logged-in session from the AuthenticateURL you 
               specified. Please make sure you are logged in to your remote application 
               before performing this test.';
$Definition['ProxyConnect.RimBlurb'] = 'If you are using ProxyConnect with an officially supported remote application plugin such as our wordpress-proxyconnect plugin, these values will be available in that plugin\'s configuration screen.';
$Definition['ProxyConnect.TestIntro'] = 'This interface will allow you to test your configuration and ensure that 
   ProxyConnect is working.';
$Definition['ProxyConnect.TestSettings'] = 'Once you have configured ProxyConnect below, <b>and saved your changes</b>, you can test your new settings by pressing \'Test ProxyConnect Settings\'';

$Definition['Q&A Accepted'] = 'Answered ✓';
$Definition['Q&A Answered'] = 'Answered';
$Definition['Q&A Question'] = 'Question';
$Definition['QnA Accepted Answer'] = 'Answer ✓';
$Definition['QnA Rejected Answer'] = 'Rejected Answer';
$Definition['Quote on'] = 'on';
$Definition['Quote wrote'] = 'wrote';

$Definition['Ranks.ActivityFormat'] = '{ActivityUserID,user} {ActivityUserID,plural,was,were} promoted to {Data.Name,plaintext}.';
$Definition['Ranks.NotificationFormat'] = 'Congratulations! You\'ve been promoted to {Data.Name,plaintext}.';
$Definition['RecipientUserID'] = 'recipient';
$Definition['RoleID'] = 'role';

$Definition['Search by user or role.'] = 'Search for users by name or enter the name of a role to see all users with that role.';
$Definition['Search for a tag.'] = 'Search for all or part of a tag.';
$Definition['SearchBoxPlaceHolder'] = 'Search';

$Definition['sep and'] = 'and';

$Definition['Show all possible pocket locations.'] = 'Turn this option on to show all possible pocket locations. Turning on this option will only show the locations to users that can manage pockets.';
$Definition['Sign In or Register to Comment.'] = '<a href="{SignInUrl,html}"{Popup}>Sign In</a> or <a href="{RegisterUrl,html}">Register</a> to comment.';
$Definition['Spend a little time thinking about how you describe your site here.'] = 'Spend a little time thinking about how you describe your site here. Giving your site a meaningful title and concise description could help your position in search engines.';

$Definition['TextEnterEmails'] = 'Type email addresses separated by commas here';
$Definition['The banner title appears on your site\'s banner and in your browser\'s title bar.'] = 'The banner title appears on your site\'s banner and in your browser\'s title bar. It should be less than 20 characters. If a banner logo is uploaded, it will replace the banner title on user-facing forum pages. Also, keep in mind some themes may also hide this title.';
$Definition['The banner title appears on your site\'s banner and in your browswer\'s title bar.'] = 'The banner title appears on your site\'s banner and in your browswer\'s title bar. It should be less than 20 characters. If a banner logo is uploaded, it will replace the banner title on user-facing forum pages. Also, keep in mind some themes may also hide this title.';
$Definition['The basic registration form requires that new users copy text from a "Captcha" image to help prevent spam.'] = '<strong>The basic registration form requires</strong> that new users copy text from a "Captcha" image to keep spammers out of the site. You need an account at <a href="http://recaptcha.net/">recaptcha.net</a>. Signing up is FREE and easy. Once you have signed up, come back here and enter the following settings:';
$Definition['The client ID uniqely identifies the site.'] = 'The client ID uniqely identifies the site. You can generate a new ID with the button at the bottom of this page.';
$Definition['The Disqus plugin allows users to sign in using their Disqus account.'] = 'The Disqus plugin allows users to sign in using their Disqus account. <b>You must register your application with Disqus for this plugin to work.</b>';
$Definition['The homepage title is displayed on your home page.'] = 'The homepage title is displayed on your home page. Pick a title that you would want to see appear in search engines.';
$Definition['The quote had to be converted from %s to %s.'] = 'The quote had to be converted from %s to %s. Some formatting may have been lost.';
$Definition['The secret secures the sign in process.'] = 'The secret secures the sign in process. Do <b>NOT</b> give the secret out to anyone.';
$Definition['The text of the pocket.'] = 'Enter the text of the pocket. This will be output exactly as you type it so make sure that you enter valid HTML.';
$Definition['The Vanilla Statistics plugin turns your forum\'s dashboard into an analytics reporting tool'] = 'Vanilla Statistics turns your forum\'s dashboard into an analytics reporting tool, allowing you to review activity on your forum over specific time periods. You can <a href="http://vanillaforums.org/docs/vanillastatistics">read more about Vanilla Statistics</a> in our documentation.';
$Definition['This option shows/hides the locations where pockets can go.'] = 'This option shows/hides the locations where pockets can go, but only for users that have permission to add/edit pockets. Try showing the locations and then visit your site.';
$Definition['This theme has additional options.'] = 'This theme has additional options on the %s page.';
$Definition['Twitter Connect allows users to sign in using their Twitter account.'] = 'Twitter Connect allows users to sign in using their Twitter account. <b>You must register your application with Twitter for this plugin to work.</b>';

$Definition['Unanswered Questions'] = 'Unanswered';
$Definition['UrlCode'] = 'Url code';
$Definition['Use delta indexes'] = 'Use delta indexes (recommended for massive sites)';
$Definition['Use the content at this url as your homepage.'] = 'Choose the page people should see when they visit: <strong style="white-space: nowrap;">%s</strong>';
$Definition['Use the plugin for WordPress or our universal code for any other platform'] = 'Use the WordPress plugin to set up Vanilla Comments on your blog, or use the universal code to set up Vanilla Comments on any other platform.';
$Definition['User not found.'] = 'Sorry, no account could be found related to the email/username you entered.';
$Definition['UserDeleteMessage'] = 'Delete the user and completely remove all of the user\'s content. This may cause discussions to be disjointed. Best option for removing spam.';
$Definition['UserDeletionPrompt'] = 'Choose how to handle all of the content associated with the user account for %s (comments, messages, etc).';
$Definition['UsernameError'] = 'Username can only contain letters, numbers, underscores, and must be between 3 and 20 characters long.';
$Definition['UserWipe'] = 'Blank User Content';
$Definition['UserWipeMessage'] = 'Delete the user and replace all of the user\'s content with a message stating the user has been deleted. This gives a visual cue that there is missing information.';

$Definition['ValidateBanned'] = 'That %s is not allowed.';
$Definition['ValidateBoolean'] = '%s is not a valid boolean.';
$Definition['ValidateConnection'] = 'The connection parameters you specified failed to open a connection to the database. The database reported the following error: <code>%s</code>';
$Definition['ValidateDate'] = '%s is not a valid date.';
$Definition['ValidateDecimal'] = '%s is not a valid decimal.';
$Definition['ValidateEmail'] = '%s does not appear to be valid.';
$Definition['ValidateEnum'] = '%s is not valid.';
$Definition['ValidateFormat'] = 'You are not allowed to post raw html.';
$Definition['ValidateInteger'] = '%s is not a valid integer.';
$Definition['ValidateIntegerArray'] = '%s must be a comma-delimited list of numbers.';
$Definition['ValidateLength'] = '%1$s is %2$s characters too long.';
$Definition['ValidateMatch'] = 'The %s fields do not match.';
$Definition['ValidateOneOrMoreArrayItemRequired'] = 'You must select at least one %s.';
$Definition['ValidateRegex'] = '%s does not appear to be in the correct format.';
$Definition['ValidateRequired'] = '%s is required.';
$Definition['ValidateRequiredArray'] = 'You must select at least one %s.';
$Definition['ValidateTag'] = 'Tags cannot contain spaces.';
$Definition['ValidateTime'] = '%s is not a valid time.';
$Definition['ValidateTimestamp'] = '%s is not a valid timestamp.';
$Definition['ValidateUrlStringRelaxed'] = '%s can not contain slashes, quotes or tag characters.';
$Definition['ValidateUsername'] = 'Usernames must be 3-20 characters and consist of letters, numbers, and underscores.';
$Definition['ValidateVersion'] = 'The %s field is not a valid version number. See the php version_compare() function for examples of valid version numbers.';
$Definition['Vanilla.Archive.Description'] = 'You can choose to archive forum discussions older than a certain date. Archived discussions are effectively closed, allowing no new posts.';
$Definition['Vanilla.Categories.MaxDisplayDepth'] = 'Place nested categories in a comma-delimited list when they are %1$s';

$Definition['Warning: Loading tables can be slow.'] = '<b>Warning</b>: Your server configuration does not support fast data loading.
If you are importing a very large file (ex. over 200,000 comments) you might want to consider changing your configuration. Click <a href="http://vanillaforums.com/porter">here</a> for more information.';
$Definition['Warning: This is for advanced users.'] = '<b>Warning</b>: This is for advanced users and requires that you make additional changes to your web server. This is usually only available if you have dedicated or vps hosting. Do not attempt this if you do not know what you are doing.';
$Definition['WarningTitleFormat'] = '{InsertUserID,User} warned {WarnUserID,User} for {Points,plural,%s points}.';
$Definition['WarningTitleFormat.Notice'] = '{InsertUserID,User} warned {WarnUserID,User} for {Points,plural,%s points} (just a notice).';
$Definition['Wordpress Source'] = 'Wordpress';

$Definition['You can also ban the users that posted the spam and delete all of their posts.'] = 'Check the box next to the user that posted the spam to also ban them and delete all of their posts. <b>Only do this if you are sure these are spammers.</b>';
$Definition['You can always use your password at<a href="%1$s">%1$s</a>.'] = 'If you are ever locked out of your forum you can always log in using your original Vanilla email and password at <a href="%1$s">%1$s</a>';
$Definition['You can either ask a question or start a discussion.'] = 'You can either ask a question or start a discussion. Choose what you want to do below.';
$Definition['You can make the categories page your homepage.'] = 'You can make your categories page your homepage <a href="%s">here</a>.';
$Definition['You can place files in your /uploads folder.'] = 'If your file is too
		large to upload directly to this page you can place it in your /uploads
		folder. Make sure the filename begins with the word <b>export</b> and ends
		with one of <b>.txt, .gz</b>.';
$Definition['You can use HTML in your signature.'] = 'You can use <b><a href="http://htmlguide.drgrog.com/cheatsheet.php" target="_new">Simple Html</a></b> in your signature.';
$Definition['You need to confirm your email address.'] = 'You need to confirm your email address. Click <a href="{/entry/emailconfirmrequest,url}">here</a> to resend the confirmation email.';
$Definition['You were added to a conversation.'] = '{InsertUserID,user} added {NotifyUserID,you} to a <a href="{Url,htmlencode}">conversation</a>.';
$Definition['YouEarnedBadge'] = 'You earned this badge';
$Definition['Your default locale won\'t display properly'] = 'Your default locale won\'t display properly until it is enabled below. Please enable the following: %s.';
$Definition['Your request has been sent.'] = 'Your request has been sent. Check your email for further instructions.';
