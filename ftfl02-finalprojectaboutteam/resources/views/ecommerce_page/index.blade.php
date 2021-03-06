@extends('layouts.ecommerce')

@section('content')
	<div class="page-content">
		<div class="container">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>

				</div>
				<!-- /.modal-dialog -->
			</div>

			<!-- BEGIN PAGE BREADCRUMB -->
			@include('ecommerce_page.partials-ecommerce.breadcrumb')
			<!-- END PAGE BREADCRUMB -->

			<!-- BEGIN PAGE CONTENT INNER -->
	        @include('ecommerce_page.main-content.visual')
			<div class="row">
	        @include('ecommerce_page.main-content.overview')
		    @include('ecommerce_page.main-content.revnue')

			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>


@endsection

