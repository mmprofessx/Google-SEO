<?php

/**
 * Settings language file generated by PluginLibrary.
 *
 */

$l['setting_google_seo_404'] = "Enable Google SEO 404";
$l['setting_google_seo_404_debug'] = "Debug 404 error labels";
$l['setting_google_seo_404_debug_desc'] = "Setting this to Yes will show an error label on error pages. The labels can then be used to configure custom error codes for that page.";
$l['setting_google_seo_404_desc'] = "This module replaces the <i>HTTP 200 OK</i> response with <i>HTTP 404 Not Found</i> for invalid thread / forum / etc error pages and provides additional functionality for 404 error pages. You can also do custom 404 error pages by adding an ErrorPage directive to your .htaccess. Please see the <a href=\"../inc/plugins/google_seo.html\">documentation</a> for details.<br /><br />Set to YES to enable Google SEO 404. Setting this to NO also disables all other settings in the Google SEO 404 settings group.";
$l['setting_google_seo_404_status'] = "Customize HTTP status codes";
$l['setting_google_seo_404_status_desc'] = "Specify which <a href=\"http://en.wikipedia.org/wiki/List_of_HTTP_status_codes\" target=\"_blank\">HTTP status code</a> should be returned for specific error pages. You can specify one status code per line followed by = and a comma-separated list of error labels, which may include wildcards. By default, the returned status code is 404 Not Found.";
$l['setting_google_seo_404_widget'] = "404 widget";
$l['setting_google_seo_404_widget_desc'] = "Add the Google 404 widget for 404/403 error pages.<br /><i>This widget is no longer supported by Google</i> so this setting defaults to NO. Set to YES to enable anyway.";
$l['setting_google_seo_404_wol_show'] = "Show 404 errors in Who's Online";
$l['setting_google_seo_404_wol_show_desc'] = "Specify if you want to show that users are seeing the 404 error page in the Who's Online list. This is not recommended. Enabling this can cause problems such as spambots showing up as guests, or users showing up as seeing error pages if your forum e.g. tries to include an image that does not exist.";
$l['setting_google_seo_meta'] = "Enable Google SEO Meta";
$l['setting_google_seo_meta_archive'] = "Meta for Archive Mode";
$l['setting_google_seo_meta_archive_desc'] = "Enable this option if you want tags to be added to MyBB's Lite (Archive) Mode pages. If this setting is disabled, Google SEO Meta will ignore the Archive mode altogether.";
$l['setting_google_seo_meta_canonical'] = "Canonical Page";
$l['setting_google_seo_meta_canonical_desc'] = "Specify a canonical page. This helps avoid Google indexing the same page under several different names. Please see <a href=\"http://www.google.com/support/webmasters/bin/answer.py?hl=en&amp;answer=139394\">About rel=\"canonical\"</a> for details.";
$l['setting_google_seo_meta_desc'] = "This module generates meta tags for the current page. Please see the <a href=\"../inc/plugins/google_seo.html\">documentation</a> for details.<br /><br />Set to YES to enable Google SEO Meta. Setting this to NO also disables all other settings in the Google SEO Meta settings group.";
$l['setting_google_seo_meta_length'] = "Meta description";
$l['setting_google_seo_meta_length_desc'] = "Generate Meta description tags based on the contents of the current page (description of a forum, first posting of a thread, ...). Set to the maximum description length you want to allow or to 0 to disable.";
$l['setting_google_seo_meta_nofollow'] = "Nofollow links";
$l['setting_google_seo_meta_nofollow_desc'] = "Give recently posted links the <a href=\"http://en.wikipedia.org/wiki/Nofollow\" target=\"_blank\">Nofollow</a> attribute. If your forum gets spammed, this will give you time to moderate, while still giving reputation to outgoing links in the long run. The default value is 7.0 days (one week). Set to 0 to disable, or -1 for infinite duration (not recommended).";
$l['setting_google_seo_meta_noindex_fids'] = "Noindex forums";
$l['setting_google_seo_meta_noindex_fids_desc'] = "If you want to prevent one or more forums and its threads from being indexed by search engines altogether, enter a comma separated list of forum IDs here. This is not recommended but might be useful for trashcan or duplicate content forums.";
$l['setting_google_seo_meta_page'] = "Provide page number for forum and thread titles";
$l['setting_google_seo_meta_page_desc'] = "If set, initialize a variable for forum and thread pages &gt; 1. {page} stands for Page (translatable in googleseo.lang.php), {number} for the actual page number. Edit your <i>forumdisplay</i> and <i>showthread</i> templates to include <i>{\$google_seo_page}</i> in the &lt;title&gt; tag.";
$l['setting_google_seo_redirect'] = "Enable Google SEO Redirect";
$l['setting_google_seo_redirect_debug'] = "Debug Redirect";
$l['setting_google_seo_redirect_debug_desc'] = "If you experience infinite redirection loops due to Google SEO Redirect, please enable this option to obtain more information about what is going wrong with your redirect and then report a bug to the plugin author. The debug information is ugly and therefore shown only to board admins.";
$l['setting_google_seo_redirect_desc'] = "This module redirects old and invalid URLs to their current proper names. This can be used for all sorts of redirections: redirect to the main site if your forum is available under several domain names, redirect stock MyBB URLs to Google SEO URLs (or the other way around). This prevents your users and Google from seeing the same page under several different names. Please see the <a href=\"../inc/plugins/google_seo.html\">documentation</a> for details.<br /><br />Set to YES to enable Google SEO Redirect. Setting this to NO also disables all other settings in the Google SEO Redirect settings group.";
$l['setting_google_seo_redirect_https'] = "HTTP <-> HTTPS Redirection";
$l['setting_google_seo_redirect_https_desc'] = "By default, this is disabled since HTTP <-> HTTPS redirection should be handled globally by your webserver, and it is not trivial to reliably do so in PHP as HTTPS may be provided via various proxy settings.";
$l['setting_google_seo_redirect_litespeed'] = "LiteSpeed Bug workaround";
$l['setting_google_seo_redirect_litespeed_desc'] = "If your server is running LiteSpeed &lt;= 4.0.10 instead of Apache, and you see redirection loops on member profile / send mail or calendar event / edit event pages, you are suffering from a bug in LiteSpeed's mod_rewrite replacement. Set to YES to work around this bug - Google SEO Redirect will then leave the problematic pages alone. Apache / Nginx / lighttpd users can leave this at NO.";
$l['setting_google_seo_redirect_permission'] = "Permission Checks";
$l['setting_google_seo_redirect_permission_desc'] = "Should Redirect let permission checks run first? Enabling this option will prevent Redirect from redirecting URLs for items that the user is not allowed to access anyway. This is probably only necessary if you're also using SEO URLs and you're concerned about users getting redirected to the SEO URL of a forum / thread they're not allowed to read, which would give away the subject in the SEO URL.";
$l['setting_google_seo_redirect_posts'] = "Redirect Post Links";
$l['setting_google_seo_redirect_posts_desc'] = "MyBB allows linking to specific posts by specifying the post ID (pid) in the URL. Redirect can trust the thread ID (tid) it tid was given and query it if it was not (default MyBB behaviour), or it can verify the tid (by making a query) in order to redirect links to posts that were moved to another thread, or it can ignore these links completely (avoiding the tid query altogether).";
$l['setting_google_seo_sitemap'] = "Enable Google SEO Sitemap";
$l['setting_google_seo_sitemap_additional'] = "Additional Pages";
$l['setting_google_seo_sitemap_additional_desc'] = "List of additional URLs relative to your site that should be included in the XML Sitemap. If you have any custom pages you can include them here, one page per line. Entries must be relative to your site, i.e. they must not contain http://, and must not start with .. or /.";
$l['setting_google_seo_sitemap_announcements'] = "Announcements";
$l['setting_google_seo_sitemap_announcements_desc'] = "Include Announcements in the XML Sitemap.";
$l['setting_google_seo_sitemap_calendars'] = "Calendars";
$l['setting_google_seo_sitemap_calendars_desc'] = "Include Calendars in the XML Sitemap.";
$l['setting_google_seo_sitemap_desc'] = "This module provides <a href=\"https://www.sitemaps.org\">XML Sitemap</a> for your forum. This makes it easier for Google to discover pages on your site. Please see the <a href=\"../inc/plugins/google_seo.html\">documentation</a> for details.<br /><br />Set to YES to enable Google SEO Sitemap. Setting this to NO also disables all other settings in the Google SEO Sitemap settings group.";
$l['setting_google_seo_sitemap_events'] = "Events";
$l['setting_google_seo_sitemap_events_desc'] = "Include Events in the XML Sitemap.";
$l['setting_google_seo_sitemap_forums'] = "Forums";
$l['setting_google_seo_sitemap_forums_desc'] = "Include Forums in the XML Sitemap.";
$l['setting_google_seo_sitemap_pagination'] = "Sitemap Pagination";
$l['setting_google_seo_sitemap_pagination_desc'] = "Set the maximum number of items that may appear in a single XML Sitemap before it is split (not counting optional forum/thread pages). Setting it too low will result in too many sitemaps, setting it too high may cause server load every time the sitemap is generated. If unsure, leave at 1000.";
$l['setting_google_seo_sitemap_threads'] = "Threads";
$l['setting_google_seo_sitemap_threads_desc'] = "Include Threads in the XML Sitemap.";
$l['setting_google_seo_sitemap_url'] = "Sitemap URL scheme";
$l['setting_google_seo_sitemap_url_desc'] = "This is the URL scheme used for the XML Sitemap pages. By default, this is <i>sitemap-{url}.xml</i> and your sitemap will be called <i>sitemap-index.xml</i>. Please note that if you change this, you will also need to add a new rewrite rule to your .htaccess. If your host does not support mod_rewrite, leave this empty. Your sitemap will then be called <i>misc.php?google_seo_sitemap=index</i>.";
$l['setting_google_seo_sitemap_users'] = "Users";
$l['setting_google_seo_sitemap_users_desc'] = "Include Users in the XML Sitemap.";
$l['setting_google_seo_tweak_index_fid'] = "Use specific forum as index page";
$l['setting_google_seo_tweak_index_fid_desc'] = "Make a specific forum your index page (empty URL). Enter the forum ID to enable, leave empty or set to 0 to disable. You can find the forum ID by clicking 'New Thread' and looking at the URL bar (newthread.php?fid=<b>123</b>).";
$l['setting_google_seo_url'] = "Enable Google SEO URL";
$l['setting_google_seo_url_announcements'] = "Announcement URL scheme";
$l['setting_google_seo_url_announcements_desc'] = "Enter the Announcement URL scheme. By default this is <i>Announcement-{url}</i>. Please note that if you change this, you will also need to add a new rewrite rule in your .htaccess file. Leave empty to disable Google SEO URLs for Announcements.";
$l['setting_google_seo_url_cache'] = "Use MyBB's Cache system for SEO URLs";
$l['setting_google_seo_url_cache_desc'] = "If set, the cache will be populated with the URLs used on the specified pages (by default, index.php and portal.php). Under ideal conditions this will reduce the need for additional queries as the required URLs will already be available from the cache. If the setting starts with a number, the cache will be flushed every x minutes (otherwise it defaults to 15 minutes). Set to empty to disable.<p>Warning: Do not include pages which contain unlimited/all URLs like forumdisplay/showthread. They would make the cache grow too large to be useful.</p>";
$l['setting_google_seo_url_calendars'] = "Calendar URL scheme";
$l['setting_google_seo_url_calendars_desc'] = "Enter the Calendar URL scheme. By default this is <i>Calendar-{url}</i>. Please note that if you change this, you will also need to add a new rewrite rule in your .htaccess file. Leave empty to disable Google SEO URLs for Calendars.";
$l['setting_google_seo_url_desc'] = "This module replaces the stock MyBB URLs with descriptive URLs that use words (thread subject, forum title, user name, etc) instead of random numeric IDs. Please see the <a href=\"../inc/plugins/google_seo.html\">documentation</a> for details.<br /><br />Set to YES to enable Google SEO URL. Setting this to NO also disables all other settings in the Google SEO URL settings group.";
$l['setting_google_seo_url_events'] = "Event URL scheme";
$l['setting_google_seo_url_events_desc'] = "Enter the Event URL scheme. By default this is <i>Event-{url}</i>. Please note that if you change this, you will also need to add a new rewrite rule in your .htaccess file. Leave empty to disable Google SEO URLs for Events.";
$l['setting_google_seo_url_forums'] = "Forum URL scheme";
$l['setting_google_seo_url_forums_desc'] = "Enter the Forum URL scheme. By default this is <i>Forum-{url}</i>. Please note that if you change this, you will also need to add a new rewrite rule in your .htaccess file. Leave empty to disable Google SEO URLs for Forums.";
$l['setting_google_seo_url_length_hard'] = "URL length hard limit";
$l['setting_google_seo_url_length_hard_desc'] = "URLs can be shortened after a hard limit by truncating it regardless of word separators. Set to 0 to disable.";
$l['setting_google_seo_url_length_soft'] = "URL length soft limit";
$l['setting_google_seo_url_length_soft_desc'] = "URLs can be shortened after a soft limit by truncating it after a word (punctuation separator). Set to 0 to disable.";
$l['setting_google_seo_url_lowercase'] = "lowercase words";
$l['setting_google_seo_url_lowercase_desc'] = "If you prefer lower case URLs, you can set this to YES. This will not affect the way URLs are stored in the database so you can go back to the original case letters any time. Please note that if you set this to YES, you will also have to make sure that your forum URL, as well as scheme and uniqufier are all lowercase too for the URL to be completely in lower case.";
$l['setting_google_seo_url_mode'] = "Evaluation Mode";
$l['setting_google_seo_url_mode_desc'] = "In Full Mode (which is the default), Google SEO will query and return SEO URLs directly at the time they are requested. This is the most reliable method but it will probably use more than just one database query, depending on how well Google SEO can predict which links will show up on a page. In Lazy Mode, Google SEO will first collect all links created on a page, and only at the very end obtain all SEO URLs in a single query and replace their stock URL counterparts in the output. This reduces queries to a minimum, at the cost of PHP processing time and reliability.";
$l['setting_google_seo_url_multipage'] = "Handle multipage links";
$l['setting_google_seo_url_multipage_desc'] = "MyBB uses a special multipage() function to produce pagination links for all sorts of things, including forum and thread pages. Set this to Yes to allow Google SEO to attempt replacing these with their SEO URL counterparts, otherwise no.";
$l['setting_google_seo_url_parent_announcement'] = "Include parent forum in announcement URLs?";
$l['setting_google_seo_url_parent_announcement_desc'] = "Set the scheme that should be used to include parent forum in the announcement URL. {parent} is the Google SEO URL of the parent forum, {url} the URL of the announcement itself. Enabling this option is not recommended and costs an extra query in the URL creation / verification step for announcement URLs.";
$l['setting_google_seo_url_parent_event'] = "Include parent calendar in event URLs?";
$l['setting_google_seo_url_parent_event_desc'] = "Set the scheme that should be used to include parent calendar in the event URL. {parent} is the Google SEO URL of the parent calendar, {url} the URL of the event itself. Enabling this option is not recommended and costs an extra query in the URL creation / verification step for event URLs.";
$l['setting_google_seo_url_parent_forum'] = "Include parent forum in forum URLs?";
$l['setting_google_seo_url_parent_forum_desc'] = "Set the scheme that should be used to include the parent forum in the forum URL. {parent} is the Google SEO URL of the parent forum, {url} the URL of the forum itself. Enabling this option is not recommended and costs an extra query in the URL creation / verification step for forum URLs.";
$l['setting_google_seo_url_parent_thread'] = "Include parent forum in thread URLs?";
$l['setting_google_seo_url_parent_thread_desc'] = "Set the scheme that should be used to include the parent forum in the thread URL. {parent} is the Google SEO URL of the parent forum, {url} the URL of the thread itself. Enabling this option is not recommended and costs an extra query in the URL creation / verification step for thread URLs.";
$l['setting_google_seo_url_posts'] = "Handle Post Links";
$l['setting_google_seo_url_posts_desc'] = "MyBB allows linking to specific posts by specifying the post ID (pid) in the URL. URL can trust the thread ID (tid) it tid was given and query it if it was not (default), or it can verify the tid (by making a query) in order to show correct links to posts at all times, or it can ignore these links completely (avoiding the tid query altogether by showing a stock post URL).";
$l['setting_google_seo_url_punctuation'] = "Punctuation characters";
$l['setting_google_seo_url_punctuation_desc'] = "Punctuation and other special characters are filtered from the URL string and replaced by the separator. By default, this string contains all special ASCII characters including space. If you are running an international forum with non-ASCII script, you might want to add unwanted punctuation characters of those scripts here.";
$l['setting_google_seo_url_query_limit'] = "Query Limit";
$l['setting_google_seo_url_query_limit_desc'] = "Google SEO uses the database to store, and subsequently query, unique SEO URLs for every forum, thread, etc. While these queries are fast and usually low in number, in some cases the total number of queries per request may exceed sane values. Possible causes for this are new installs in large forums when lots of SEO URLs have to be created for the first time, as well as plugins that add lots of unexpected links on a page. Limiting the total number of queries per request helps to avoid load spikes. Stock URLs will appear for the links that couldn't be queried due to this limit.<p>Set the total number of queries URL is allowed to use in a single request. Default is 50. Set to 0 for no limit.</p>";
$l['setting_google_seo_url_separator'] = "URL separator";
$l['setting_google_seo_url_separator_desc'] = "Enter the separator that should be used to separate words in the URLs. By default this is - which is a good choice as it is easy to type in most keyboard layouts (single keypress without shift/alt modifier). If you want some other character or string as a separator, you can enter it here. Please note that special characters like :&amp;?@/ or space could render your URLs unuseable or hard to work with.";
$l['setting_google_seo_url_threadprefix'] = "Thread Prefixes";
$l['setting_google_seo_url_threadprefix_desc'] = "Include thread prefixes in thread URLs?";
$l['setting_google_seo_url_threads'] = "Thread URL scheme";
$l['setting_google_seo_url_threads_desc'] = "Enter the Thread URL scheme. By default this is <i>Thread-{url}</i>. Please note that if you change this, you will also need to add a new rewrite rule in your .htaccess file. Leave empty to disable Google SEO URLs for Threads.";
$l['setting_google_seo_url_translation'] = "Character Translation";
$l['setting_google_seo_url_translation_desc'] = "If you want to replace some characters (German umlaut example: ??bergr????entr??ger -&gt; Uebergroessentraeger) or words in your URLs, please add your translations here. You can specify one character per line followed by = and the replacement character. Please see the <a href=\"../inc/plugins/google_seo.html\">documentation</a> for details.";
$l['setting_google_seo_url_uniquifier'] = "URL uniquifier";
$l['setting_google_seo_url_uniquifier_desc'] = "In case of URL collisions (for example two threads with the same title), the uniquifier is applied to the URL of the newer thread. To guarantee uniqueness, the uniquifier must incorporate the ID and use punctuation other than a single separator. Please see the <a href=\"../inc/plugins/google_seo.html\">documentation</a> for examples of good and bad uniquifiers.";
$l['setting_google_seo_url_uniquifier_force'] = "URL uniquifier enforcer";
$l['setting_google_seo_url_uniquifier_force_desc'] = "This option is NOT recommended. If you set this to yes, Google SEO will be forced to use the uniquifier for all URLs without exception, even if it's not necessary. Use this only if you absolutely want every URL to contain the ID. If you enable this, a single separator will be sufficient for the uniquifier.";
$l['setting_google_seo_url_users'] = "User URL scheme";
$l['setting_google_seo_url_users_desc'] = "Enter the User URL scheme. By default this is <i>User-{url}</i>. Please note that if you change this, you will also need to add a new rewrite rule in your .htaccess file. Leave empty to disable Google SEO URLs for Users.";
$l['setting_group_google_seo'] = "Google SEO";
$l['setting_group_google_seo_404'] = "Google SEO 404";
$l['setting_group_google_seo_404_desc'] = "(Advanced Users) 404 error page settings for the Google Search Engine Optimization plugin.";
$l['setting_group_google_seo_desc'] = "Enable or disable the main features of Google SEO.";
$l['setting_group_google_seo_meta'] = "Google SEO Meta";
$l['setting_group_google_seo_meta_desc'] = "(Advanced Users) Meta tag settings for the Google Search Engine Optimization plugin.";
$l['setting_group_google_seo_redirect'] = "Google SEO Redirect";
$l['setting_group_google_seo_redirect_desc'] = "(Advanced Users) Redirection settings for the Google Search Engine Optimization plugin.";
$l['setting_group_google_seo_sitemap'] = "Google SEO Sitemap";
$l['setting_group_google_seo_sitemap_desc'] = "(Advanced Users) Sitemap settings for the Google Search Engine Optimization plugin.";
$l['setting_group_google_seo_tweak'] = "Google SEO Tweaks";
$l['setting_group_google_seo_tweak_desc'] = "(Advanced Users) Tweaks that change Google SEO's default behaviour.";
$l['setting_group_google_seo_url'] = "Google SEO URL";
$l['setting_group_google_seo_url_desc'] = "(Advanced Users) URL settings for the Google Search Engine Optimization plugin.";
