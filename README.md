# Cloud-Tautulli-Theme

Tautulli doesn't give you an easy way to add custom css, so you will need to insert it with your reverse proxy. The below is an example that you can inside your NGINX Tau location block to insert the CSS when accessing via your domain (not locally). You need the subfilter module for it to work. If you don't use nginx or don't have that module, I don't know enough to help out.

```		
			proxy_set_header Accept-Encoding "";
			sub_filter
			'</head>'
			'<link rel="stylesheet" type="text/css" href="https://raw.githubusercontent.com/rg9400/Cloud-Tautulli-Theme/master/CloudTau.css">
			</head>';
			sub_filter_once on;
 ```

<img src="https://github.com/rg9400/Cloud-Tautulli-Theme/blob/master/screenshot1.png?raw=true"></img>
<img src="https://github.com/rg9400/Cloud-Tautulli-Theme/blob/master/screenshot2.png?raw=true"></img>
<img src="https://github.com/rg9400/Cloud-Tautulli-Theme/blob/master/screenshot3.png?raw=true"></img>
<img src="https://github.com/rg9400/Cloud-Tautulli-Theme/blob/master/screenshot4.png?raw=true"></img>
