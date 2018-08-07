<?php
$myDate = date('l, F d, Y g:i A');
switch ($extra) {
	case 'invite':
		$button = '
		<tr>
			<td align="center" valign="top" style="background: rgba(0,0,0,.3); padding-bottom: 30px;">
				<div>
					<a href="' . getServerPath(true) . '?invite=' . $email['inviteCode'] . '" rel="noopener noreferrer" style="background-color: #cc7b19; border-radius: 4px; border: 2px solid #cc7b19; color: #ffffff; display: inline-block; font-family: \'Roboto\', Helvetica, Arial, sans-serif; font-size: 15px; font-weight: bold; line-height: 44px; text-align: center; text-decoration: none; width: 260px; -webkit-text-size-adjust: none; mso-hide: all;">USE INVITE CODE</a>
				</div>
			</td>
		</tr>
        ';
		break;
	case 'reset':
		$button = '
		<tr>
			<td align="center" valign="top" style="background: rgba(0,0,0,.3); padding-bottom: 30px;">
				<div>
					<a href="' . getServerPath(true) . '" rel="noopener noreferrer" style="background-color: #cc7b19; border-radius: 4px; border: 2px solid #cc7b19; color: #ffffff; display: inline-block; font-family: \'Roboto\', Helvetica, Arial, sans-serif; font-size: 15px; font-weight: bold; line-height: 44px; text-align: center; text-decoration: none; width: 260px; -webkit-text-size-adjust: none; mso-hide: all;">LOGIN</a>
				</div>
			</td>
		</tr>
        ';
		break;
	default:
		$button = null;
		break;
}
$email = '
<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Organizr</title>
    <style media="all" type="text/css">
        @media all {
			a {
				color: #FFFFFF;
			}
			a:hover {
				color: #E5A00D;
			}
            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }

        @media all {
			a {
				color: #FFFFFF;
			}
			a:hover {
				color: #E5A00D;
			}
            .btn-secondary a:hover {
                border-color: #34495e !important;
                color: #34495e !important;
            }
        }

        @media only screen and (max-width: 620px) {
			a {
				color: #FFFFFF;
			}
			a:hover {
				color: #E5A00D;
			}
            table[class=body] h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table[class=body] h2 {
                font-size: 22px !important;
                margin-bottom: 10px !important;
            }

            table[class=body] h3 {
                font-size: 16px !important;
                margin-bottom: 10px !important;
            }

            table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
                font-size: 16px !important;
            }

            table[class=body] .wrapper,
            table[class=body] .article {
                padding: 10px !important;
            }

            table[class=body] .content {
                padding: 0 !important;
            }

            table[class=body] .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table[class=body] .header {
                margin-bottom: 10px !important;
            }

            table[class=body] .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table[class=body] .btn table {
                width: 100% !important;
            }

            table[class=body] .btn a {
                width: 100% !important;
            }

            table[class=body] .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }

            table[class=body] .alert td {
                border-radius: 0 !important;
                padding: 10px !important;
            }

            table[class=body] .span-2,
            table[class=body] .span-3 {
                max-width: none !important;
                width: 100% !important;
            }

            table[class=body] .receipt {
                width: 100% !important;
            }
        }

        @media all {
			a {
				color: #FFFFFF;
			}
			a:hover {
				color: #E5A00D;
			}
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }
        }
    </style>
</head>
<body class="" style="font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; margin: 0; padding: 0;">
<table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background:url(https://raw.githubusercontent.com/rg9400/Cloud-Tautulli-Theme/master/Background/blur-light.png) center center/cover no-repeat fixed!important;height:100%;width:100%; border-radius: 3px;" width="100%">
    <tr>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">&nbsp;</td>
        <td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto !important; max-width: 580px; padding: 10px; width: 580px;" width="580" valign="top">
            <div class="content" style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;">

                <!-- START CENTERED WHITE CONTAINER -->
                <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;"></span>
                <table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; border-radius: 3px;" width="100%">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 0px;" valign="top">
                            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; " width="100%">
                                <tr>
                                    <td align="center">
                                        <a href="' . getServerPath(true) . '" rel="noopener noreferrer"><img src="' . $GLOBALS['PHPMAILER-logo'] . '" width="400px" text-align="center" />
                                    </td>
                                </tr>
								
                                <tr>
                                    <td style="font-family: Open Sans Semibold,Helvetica Neue,Helvetica,Arial,sans-serif; font-size: 20x; vertical-align: top; background: rgba(0,0,0,.7); padding: 10px;" valign="top">
                                        <p style="font-family: Open Sans Semibold,Helvetica Neue,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: bold; text-align: center; margin: 10px; color: #fff; margin-top: 15px; Margin-bottom: 15px;">' . $subject . '</p>

                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-family: Open Sans Semibold,Helvetica Neue,Helvetica,Arial,sans-serif; font-size: 16px; vertical-align: top; background: rgba(0,0,0,.3); padding: 10px;" valign="top">
                                        <p style="font-family: Open Sans Semibold,Helvetica Neue,Helvetica,Arial,sans-serif; font-size: 16px; font-weight: normal; text-align: center; margin: 10px; color: #e5a00d; margin-top: 15px; Margin-bottom: 15px;">' . $body . '</p>

                                    </td>
									' . $button . '
                            </table>
                        </td>
                    </tr>

                    <!-- END MAIN CONTENT AREA -->
                </table>

                <!-- START FOOTER -->
                <div class="footer" style="clear: both; padding-top: 10px; text-align: center; width: 100%;">
                    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                        <tr>
                            <td class="content-block powered-by" style="font-family: sans-serif; vertical-align: top; padding-top: 10px; padding-bottom: 10px; font-size: 12px; color: hsla(0,0%,100%,.75); text-align: center;" valign="top" align="center">
                                Powered by <a href="https://organizr.us" style="color: hsla(0,0%,100%,.75);  font-size: 12px; text-align: center; text-decoration: underline;">Organizr</a> ' . $myDate . '
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- END FOOTER -->
                <!-- END CENTERED WHITE CONTAINER -->
            </div>
        </td>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">&nbsp;</td>
    </tr>
</table>
</body>
</html>
';
