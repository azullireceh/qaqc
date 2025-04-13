<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<title>Qa Qc</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Sanksi In Quality">
	<meta name="author" content="D-Azulli">
	<!-- CSS -->
	<link href="{{asset('admin/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/assets/css/ionicons.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/assets/css/main.css')}}" rel="stylesheet" type="text/css">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,700' rel='stylesheet' type='text/css'>
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="144x144" href="{{asset('admin/assets/ico/queenadmin-favicon144x144.png')}}">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="114x114" href="{{asset('admin/assets/ico/queenadmin-favicon114x114.png')}}">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="72x72" href="{{asset('admin/assets/ico/queenadmin-favicon72x72.png')}}">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="57x57" href="{{asset('admin/assets/ico/queenadmin-favicon57x57.png')}}">
	<link rel="shortcut icon" href="{{asset('admin/assets/ico/favicon.ico')}}">
</head>

<body class="fixed-top-active dashboard">
	<!-- WRAPPER -->
	<div class="wrapper">
		
		<!-- COLUMN RIGHT -->
		<div class="col-right ">
			<div class="container-fluid primary-content">
				<!-- PRIMARY CONTENT HEADING -->
				<div class="primary-content-heading clearfix">
                    <div class row>
                        <br>
						<div class="text-center">
							<img src="{{asset('admin/assets/img/Sanksi 3.png')}}" width="225" height="75" alt="Sanksi In Quality" align="center"></th>
						</div>	                            
					</div>					
				</div>
				<!-- END PRIMARY CONTENT HEADING -->
				<div class="row">
					<div class="col-md-6">
                        <!-- WIDGET WITH BUTTONS -->
						<div class="widget">
							<div class="widget-header clearfix">
								<h3><i class="icon ion-android-folder"></i> <span>{{$data_id_mrs['id_mrs']}}</span></h3>
								<div class="btn-group widget-header-toolbar">
									<a href="#" title="Expand/Collapse" class="btn btn-link btn-toggle-expand"><i class="icon ion-ios-arrow-up"></i></a>
								</div>								
							</div>
							

							<div class="widget-content">
								<form action="/mrs/updatemrs" method="POST" class="form-horizontal form-ticket" role="form" enctype="multipart/form-data">
								@csrf
									<fieldset>
										<legend>General Information</legend>
											<div class="form-group" hidden="yes">
												<label for="idmrs" class="col-sm-3 control-label">IDMRS</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" name="nm_idmrs" id="idmrs" placeholder="Name" value="{{$data_id_mrs['id']}}" readonly>
													</div>
											</div>
											
											<div class="form-group">
												<label for="id_spesifikasi" class="col-sm-3 control-label">Spesifikasi</label>
													<div class="col-sm-9">	
													{{$data_historymrs['Spesifikasi']}}								
													</div>
											</div>
											<div class="form-group">
												<label for="id_path_pnid" class="col-sm-3 control-label">P & ID</label>
													<div class="col-sm-9">
														<a href="{{ asset('storage/'.$data_id_mrs['id_mrs'].'/pnid/' . $data_id_mrs['path_pnid']) }}" target="_blank">
															<?php
																$data_path_pnid = $data_id_mrs->path_pnid;
																if($data_path_pnid==''){
																	echo "";
																	}
																else{
																		echo 'P&ID-'.$data_id_mrs->id_mrs;
																	}               
															?>
														</a>
													</div>
											</div>  
											<div class="form-group">
												<label for="id_project" class="col-sm-3 control-label">Alokasi</label>
													<div class="col-sm-9">	
													{{$data_historymrs['project']}}								
													</div>
											</div>      
											<div class="form-group">
												<label for="id_tahun_project" class="col-sm-3 control-label">Tahun Project</label>
													<div class="col-sm-9">	
													{{$data_historymrs['tahun_project']}}								
													</div>
											</div>            
											<div class="form-group">
												<label for="id_status_mrs" class="col-sm-3 control-label">Status MRS</label>
													<div class="col-sm-9">	
														{{$data_id_mrs['status_mrs']}}								
													</div>
											</div>
											<div class="form-group">
												<label for="id_tanggal_sertifikasi" class="col-sm-3 control-label">Tanggal Sertifikasi</label>
													<div class="col-sm-9">	
														{{$data_id_mrs['tanggal_sertifikasi']}}								
													</div>
											</div>
											<div class="form-group">
												<label for="id_sertifikat_coiplo" class="col-sm-3 control-label">Sertifikat COIPLO</label>
													<div class="col-sm-9">	
													<a href="{{ asset('storage/'.$data_id_mrs['id_mrs'].'/coiplo/' . $data_id_mrs['sertifikat_coiplo']) }}" target="_blank">
															<?php
																$data_path_coiplo = $data_id_mrs->sertifikat_coiplo;
																if($data_path_coiplo==''){
																	echo "";
																	}
																else{
																		echo 'COIPLO-'.$data_id_mrs->id_mrs;
																	}               
																?>
														</a>								
													</div>
											</div>
											<div class="form-group">
												<label for="id_jenis_meter" class="col-sm-3 control-label">Jenis Meter</label>
													<div class="col-sm-9">	
													{{$data_historymrs['jenis_meter']}}								
													</div>
											</div>
											<div class="form-group">
												<label for="id_stream" class="col-sm-3 control-label">Stream</label>
													<div class="col-sm-9">	
													{{$data_historymrs['stream']}}								
													</div>
											</div>
											<div class="form-group">
												<label for="id_qty_evc" class="col-sm-3 control-label">Qty EVC</label>
													<div class="col-sm-9">	
													{{$data_historymrs['qty_evc']}}								
													</div>
											</div>
											<div class="form-group">
												<label for="id_qty_psv_prv" class="col-sm-3 control-label">Qty PSV/PRV</label>
													<div class="col-sm-9">	
													{{$data_historymrs['qty_psv_prv']}}								
													</div>
											</div>
											<div class="form-group">
												<label for="id_qty_filter_pv" class="col-sm-3 control-label">Qty Filter</label>
													<div class="col-sm-9">	
													{{$data_historymrs['qty_filter_pv']}}								
													</div>
											</div>
											               
															
											<legend></legend>
											
									</fieldset>
								</form>
   							</div>

							
						</div>
						<!-- END WIDGET WITH BUTTONS -->						
						
					</div>
					<div class="col-md-6">						
						<!-- WIDGET WITH BUTTONS -->
						<div class="widget">
							<div class="widget-header clearfix">
								<h3><i class="icon ion-stop"></i> <span>Data Material {{$data_id_mrs['id_mrs']}}</span></h3>
								<div class="btn-group widget-header-toolbar">
									<a href="#" title="Expand/Collapse" class="btn btn-link btn-toggle-expand"><i class="icon ion-ios-arrow-up"></i></a>
								</div>								
							</div>
							<div class="widget-content">
								<div class="table-responsive">							
									<table id="datatable-column-interactive" class="table table-sorting table-hover table-bordered colored-header datatable">
										<thead>
											<tr>
												<th>No</th>
												<th>Serial Number</th>
												<th>Description</th>
												<th>Merk</th>
												<th>Size</th>
												<th>qty</th>										
												<th>Remark</th>
												<th>Sertifikat</th>												
											</tr>
										</thead>
										<tbody>
											<h8 style="visibility: hidden;">{{$NoUrut=1}}</h8>
											@foreach($data_material_mrs as $materialmrs)
											<tr>
												<td>{{$NoUrut++}}</td>
												<td>{{$materialmrs->serial_number}}</td>
												<td>{{$materialmrs->description}}</td>
												<td>{{$materialmrs->merk}}</td>
												<td>{{$materialmrs->size}}</td>
												<td>{{$materialmrs->qty}}</td>
												<td>{{$materialmrs->remark}}</td>
												<td>
													<!--<a href="{{ asset('storage/sertifikat/' . $materialmrs->id_mrs . '/' . $materialmrs->sertifikat) }}" target="_blank">{{$materialmrs->sertifikat}}-->
													<a href="{{asset('storage/'.$materialmrs['id_mrs'].'/sertifikat/' . $materialmrs['sertifikat']) }}" target="_blank">
														<?php
															$data_path_sertifikat = $materialmrs->sertifikat;
															if($data_path_sertifikat==''){
															echo "";
															}
															else{
																echo 'Sertifikat-'.$materialmrs['description'];
															}               
														?>
													</a>
												</td>                                                                                      
											</tr>
											@endforeach                                        
										</tbody>
									</table>
								</div>



							</div>
						</div>
						<!-- END WIDGET WITH BUTTONS -->
										
					</div>					
				</div>				
				<br/>
				<hr />
				<br/>				
			</div>
			
		</div>
		<!-- END COLUMN RIGHT -->
		
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('admin/assets/js/jquery/jquery-2.1.0.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/bootstrap/bootstrap.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/queen-common.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/stat/flot/jquery.flot.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/stat/flot/jquery.flot.resize.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/stat/flot/jquery.flot.time.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/stat/flot/jquery.flot.orderBars.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/stat/flot/jquery.flot.tooltip.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/mapael/raphael/raphael-min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/mapael/jquery.mapael.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/mapael/maps/world_countries.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/moment/moment.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/bootstrap-editable/bootstrap-editable.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/jquery-maskedinput/jquery.masked-input.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/queen-charts.js')}}"></script>
	<script src="{{asset('admin/assets/js/queen-maps.js')}}"></script>
	<script src="{{asset('admin/assets/js/queen-elements.js')}}"></script>
	<!-- Javascript Table -->
    <script src="{{asset('admin/assets/js/plugins/datatable/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/datatable/exts/dataTables.colVis.bootstrap.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/datatable/exts/dataTables.colReorder.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/datatable/exts/dataTables.tableTools.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/datatable/dataTables.bootstrap.js')}}"></script>
	<script src="{{asset('admin/assets/js/queen-table.js')}}"></script>
	<!-- Javascript form -->
	<script src="{{asset('admin/assets/js/plugins/bootstrap-slider/bootstrap-slider.js')}}"></script>
	<script src="{{asset('admin/assets/js/queen-form-layouts.js')}}"></script>




</body>

</html>
