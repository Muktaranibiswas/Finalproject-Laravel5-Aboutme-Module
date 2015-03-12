<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Metronic | System Email Template</title>
<!--IMPORTANT: 
Before deploying this email template into your application make sure you convert all the css code in <style> tag using http://beaker.mailchimp.com/inline-css.
Chrome and other few mail clients do not support <style> tag so the above converter from mailchip will make sure that all the css code will be converted into inline css.
-->
<meta name="viewport" content="width=device-width"/>
@include('partials-system/style')
</head>
<body>
<table class="body">
<tr>
	<td class="center" align="center" valign="top">
		<!-- BEGIN: Header -->
        @include('partials-system/header')
		<!-- END: Header -->
		<!-- BEGIN: Content -->
        @yield('content1')
		<!-- END: Content -->
		<!-- BEGIN: Footer -->
		@include('partials-system/footer')
		<!-- END: Footer -->
	</td>
</tr>
</table>
</body>
</html>