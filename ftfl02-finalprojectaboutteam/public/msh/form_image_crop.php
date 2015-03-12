<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
<title>Image Cropping</title>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL STYLES -->
<link href="/assets/global/plugins/jcrop/css/jquery.Jcrop.min.css" rel="stylesheet"/>
<link href="/assets/admin/pages/css/image-crop.css" rel="stylesheet"/>
<!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN THEME STYLES -->
<link href="/assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css">
<link href="/assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css">
<!-- END THEME STYLES -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">
					<div class="tabbable tabbable-custom tabbable-noborder">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#tab_1" data-toggle="tab">
								Basic </a>
							</li>
							<li>
								<a href="#tab_2" data-toggle="tab">
								Form Integration </a>
							</li>
							<li>
								<a href="#tab_3" data-toggle="tab">
								Visual Effects </a>
							</li>
							<li>
								<a href="#tab_4" data-toggle="tab">
								Animation Demo </a>
							</li>
							<li>
								<a href="#tab_5" data-toggle="tab">
								Realtime API </a>
							</li>
							<li>
								<a href="#tab_6" data-toggle="tab">
								Cusrom Style </a>
							</li>
							<li>
								<a href="#tab_7" data-toggle="tab">
								Non-Image </a>
							</li>
							<li>
								<a href="#tab_8" data-toggle="tab">
								PHP Cropping </a>
							</li>
						</ul>
						<div class="tab-content">

							<?php include_once('cropBasic.php');?>

							<?php include_once('cropIntegration.php');?>

							<?php include_once('cropVisualEffect.php');?>

							<?php include_once('cropAnimation.php');?>

							<?php include_once('cropRealTimeAPI.php');?>

							<?php include_once('cropCustomStyle.php');?>

							<?php include_once('cropNonImage.php');?>

							<?php include_once('cropPHP.php');?>
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->


<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/assets/global/plugins/jcrop/js/jquery.color.js"></script>
<script src="/assets/global/plugins/jcrop/js/jquery.Jcrop.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="/assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="/assets/admin/pages/scripts/form-image-crop.js"></script>
<script>
jQuery(document).ready(function() {
// initiate layout and plugins
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
FormImageCrop.init();
});
</script>
<!-- END PAGE LEVEL SCRIPTS -->
</body>
<!-- END BODY -->
</html>