<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $template['title']; ?></title>
		<?php echo $template['metadata']; ?>
		<link rel="stylesheet" href="<?php echo base_url()?>stylesheets/jquery-ui-1.8.16.custom.css" type="text/css" media="all" />
        <link type="text/css" href="<?php echo base_url()?>stylesheets/ui.jqgrid.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo base_url()?>stylesheets/jquery.searchFilter.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo base_url() ?>stylesheets/screen.css"  rel="stylesheet" media="screen" title="default" />
        <link type="text/css" href="<?php echo base_url() ?>stylesheets/css.css"  rel="stylesheet" media="screen" title="default" />
        <script src="<?php echo base_url() ?>javascripts/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>javascripts/jquery-ui.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>javascripts/jqgrid/js/i18n/grid.locale-en.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>javascripts/jqgrid/jquery.jqGrid.min.js"></script>
        <title>Politeknik Kota Malang</title>
				<!--[if IE]>
				<link rel="stylesheet" media="all" type="text/css" href="stylesheets/pro_dropline_ie.css" />
				<![endif]-->
	</head>
	<body >
<!-- Start: page-top-outer -->
<div id="page-top-outer">

<!-- Start: page-top -->
<div id="page-top">

	<!-- start logo -->
	<div id="logo">
	<a href=""><img src="<?php echo base_url() ?>images/shared/logo-trans.png" height="70" alt="" /></a>
	</div>
	<!-- end logo -->
	<div class="clear"></div>

</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->

<div class="clear">&nbsp;</div>

<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat">
<!--  start nav-outer -->
<div class="nav-outer">

		<!-- start nav-right -->
		<div id="nav-right">
			<?php if ($this->ion_auth->logged_in()) {
			echo "
			<div class=\"nav-divider\">&nbsp;</div>
			<div class=\"showhide-account\"><img src=\"".base_url()."images/shared/nav/nav_myaccount.gif\" width=\"93\" height=\"14\" alt=\"\" /></div>
			<div class=\"nav-divider\">&nbsp;</div>
			<a href=\"".site_url()."/auth/logout\" id=\"logout\">
			<img src=\"".base_url()."images/shared/nav/nav_logout.gif\" width=\"64\" height=\"14\" alt=\"\" />
			</a>";
			} ?>
			<div class="clear">&nbsp;</div>
		</div>
		<!-- end nav-right -->


		<!--  start nav -->
		<div class="nav">
		<div class="table">

		<ul class="select">
		<?php if ($this->ion_auth->logged_in()) {
		echo "
		<li><a href=\"".site_url()."/pmb/admin\"><b>Penerimaan Mahasiswa Baru</b><!--[if IE 7]><!--></a><!--<![endif]--></li>
		<div class=\"nav-divider\">&nbsp;</div>
		<li><a href=\"".site_url()."/sekolah\"><b>Daftar Sekolah</b><!--[if IE 7]><!--></a><!--<![endif]--></li>
		<div class=\"nav-divider\">&nbsp;</div>
		";}
		?>
		</ul>
		<div class=\"nav-divider\">&nbsp;</div>
		<div class=\"clear\"></div>
		<div class=\"clear\"></div>
		</div>
		<!--  start nav -->
</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

 <div class="clear"></div>

<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1><?php echo $header?></h1>
	</div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="<?php echo base_url() ?>images/shared/side_shadowleft.jpg" width="20" height="500" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="<?php echo base_url() ?>images/shared/side_shadowright.jpg" width="20" height="500" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">

			<!--  start table-content  -->
			<div id="table-content">
		<?php echo $template['body']; ?>
			</div>
			<!--  end table-content  -->

			<div class="clear"></div>

		</div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->

<div class="clear">&nbsp;</div>

<!-- start footer -->
<div id="footer">
<!-- <div id="footer-pad">&nbsp;</div> -->
	<!--  start footer-left -->
	<div id="footer-left">
	Admin Skin &copy; Copyright Internet Dreams Ltd. <a href="">www.netdreams.co.uk</a>. All rights reserved.</div>
	<!--  end footer-left -->
	<div class="clear">&nbsp;</div>
</div>
<!-- end footer -->

</body>
</html>