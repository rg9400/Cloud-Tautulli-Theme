# Cloud Theme

<h2>Cloud CSS for Tautulli</h2>
Credits to <a href="https://github.com/Archmonger">Groot</a>, <a href="https://github.com/Burry">Please Clap</a>, and <a href="https://github.com/leram84"> Leram</a> whose work was the base and inspiration for this. 

Tautulli doesn't give you an easy way to add custom css, so you will need to insert it with your reverse proxy. The below is an example that you can inside your NGINX Tau location block to insert the CSS when accessing via your domain (not locally). You need the subfilter module for it to work. If you don't use nginx or don't have that module, I don't know enough to help out.

```nginx		
			proxy_set_header Accept-Encoding "";
			sub_filter
			'</head>'
			'<link rel="stylesheet" type="text/css" href="https://rawgit.com/rg9400/Cloud-Tautulli-Theme/master/CloudTau.css">
			</head>';
			sub_filter_once on;
 ```
 ### Screenshots
<details><summary>Expand</summary>
<p>
<img src="https://rawgit.com/rg9400/Cloud-Tautulli-Theme/master/Screenshots/CloudTauSS1.png"></img>
<img src="https://rawgit.com/rg9400/Cloud-Tautulli-Theme/master/Screenshots/CloudTauSS2.png"></img>
<img src="https://rawgit.com/rg9400/Cloud-Tautulli-Theme/master/Screenshots/CloudTauSS3.png"></img>
<img src="https://rawgit.com/rg9400/Cloud-Tautulli-Theme/master/Screenshots/CloudTauSS4.png"></img>
</p>
</details>

<h2>Cloud Email Theme</h2>

<h3>Tau</h3>
If you send email notifications via Tautulli, you can adapt this email theme. With how email notifications work, unfortunately, it has to be dumped into each notification template separately. This template and theme will be specific to the Newsletter notification, which you can send to link to your newsletter if it is self-hosted.

1. Copy paste the contents of `CloudTauEmail.txt` into a text editor. Ctrl+F `**`. These are the variables you need to adapt for your own domain. 
2. Alter all of the variables to values you see fit (there should be 8). If you do not have a static URL set up, use `{newsletter_url}` for that variable. If you don't have a logo, you can use https://tautulli.com/images/newsletter/newsletter-header.png
3. Go to Tautulli > Settings > Newsletter Agents. In `Saving and Sending` make sure `Send Newsletter as an HTML Formatted Email` is `OFF` and make sure you have an Email Notification Agent set up. If you are using Static URL, make sure you also go to `Configuration` and set a `Unique ID Name`. Now go to `Newsletter Text`.
4. Finally, dump the file contents from your text editor in `Body` (not `Message`). You can use `Recently Added to {server_name}! ({end_date})` for `Subject`. Save, and you should be set to go.

<h4>Screenshots</h4>
<details><summary>Expand</summary>
<p>
<img src="https://rawgit.com/rg9400/Cloud-Tautulli-Theme/master/Screenshots/CloudTauEmailSS.PNG"></img>
</p>
</details>

<h3>Organizr V2</h3>

If you want to use the same theme for Organizr, go into `Other Email Templates` and save `CloudOrganizr.php`
1. Change Organizr values to your domain if you want (in header and footer). The rest is handled inside Organizr itself
2. Drop the file in `organizrDirectory/api/plugins/misc/emailTemplates`
3. Log into Organizr and go to Settings > Plugins > PHP Mailer > Test and Options. Make sure Theme is selected as `CloudOrganizr` and give the URL to any custom logo in `WAN Logo URL` as well as your domain URL in `Domain Link Override`. Save, and you should be set to go. Be aware that any header tags (`<h1>`) in your email templates may not work with this template. You will have to modify the code or remove them.

<h3>Ombi</h3>

If you want to use the same theme for Ombi, go into `Other Email Templates` and save `CloudOmbi.html`. Unfortunately, like Tau, Ombi does not currently have native support for email themes, so you will have to overwrite the email html after every update for now.
1. Change header and footer if you want. You will need to add the URL of your domain as the link to the logo (line `147`). The logo itself is handled in Ombi
2. Copy this file and rename the 2 files so that one is named `Backup.html` and the other is named `BasicTemplate.html`
3. Drop both of thesefiles in `ombiDirectory/Templates`, including overwriting the preexisting `BasicTemplate.html`
4. Go into Ombi,Settings > Configuration. Make sure `Custom Logo` is set to your logo if you want, or else it will use the Ombi logo.
5. After any update, Ombi will overwrite `BasicTemplate.html` to source until the Email Theme feature is added. You just need to delete this new version, copy `Backup.html` and rename it to `BasicTemplate.html`. 
	
<h2>Cloud Newsletter for Tautulli</h2>

1. Download `CloudTauNewsletter.html`
2. Change Newsletter Logo (line `563`) with your custom logo if you want.
3. If you want to display the Media Server name variable from Tau (in case you don't have a logo with the name already in it), add 
`<div class="server-name" style="font-size: 30px;text-align: center;">${parameters['server_name']}</div>` 
between lines `564` and `565`
4. Follow these instructions to add custom newsletters to Tau: https://github.com/Tautulli/Tautulli-Wiki/wiki/Frequently-Asked-Questions#newsletter-custom-template

 ### Screenshots
<details><summary>Expand</summary>
<p>
<img src="https://rawgit.com/rg9400/Cloud-Tautulli-Theme/master/Screenshots/CloudTauNewsletterSS.png"></img>
</p>
</details>





