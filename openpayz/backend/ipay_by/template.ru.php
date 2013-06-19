<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>IPAY</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1>IPAY.BY</h1>
			<p><?=$merchant_service; ?></p>
		</div>
		<div id="menu">
			<ul>
				<li><a href="<?=$merchant_url; ?>"><?=$merchant_name; ?></a></li>
			</ul>
		</div>
	</div>
	<!-- end #header -->
	<div id="page" class="container">
		<div id="content">
			<div class="post">
				<h2 class="title">Выберите суму пополнения</h2>
				<div class="entry">
	             <?=$payment_form; ?>
				</div>
			</div>
			
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
                                    <img src="<?= $merchant_logo; ?>">	
				</li>
				
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer-content" class="container">
	<div id="footer-bg">
		<div id="column1">
          Powered by <a href="http://ubilling.net.ua">OpenPayz</a> <br> &copy; by <a href="http://fromgomel.com/">Den1xxx</a>
		</div>
		<div id="column2">
		</div>
		<div id="column3">
		</div>
	</div>
</div>
<div id="footer">
</div>
<!-- end #footer -->
</body>
</html>
