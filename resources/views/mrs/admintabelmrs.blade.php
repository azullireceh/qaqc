@extends('layout.master')

    @section('content')

		
        
        	<div class="row">
					<div class="col">
					<h1></h1>					
					</div>  
					<!-- SHOW HIDE COLUMNS 1 -->
					<div class="widget">
						<div class="widget-header clearfix">
							<h3><i class="icon ion-ios-grid-view-outline"></i> <span>Data MRS</span></h3>
							<div class="btn-group widget-header-toolbar visible-lg">
								<a href="#" title="Expand/Collapse" class="btn btn-link btn-toggle-expand"><i class="icon ion-ios-arrow-up"></i></a>
								<a href="#" title="Remove" class="btn btn-link btn-remove"><i class="icon ion-ios-close-empty"></i></a>
							</div>
						</div>
						
						<div class="widget-content">
							<div>
								<h1><a href="/mrs/forminputmrs" class="btn btn-primary btn-sm">Tambah Data</a></h1>
							</div>
								@if(session('sukses'))
									<div class="alert alert-success" role="alert">
										{{session('sukses')}}
									</div>
								@endif
							<div class="table-responsive">							
								<table id="datatable-column-interactive" class="table table-sorting table-hover table-bordered colored-header datatable">
									<thead>
										<tr>
											<th>No</th>
											<th>ID MRS</th>
											<th>Status</th>
											<th>P & ID</th>
											<th>Link</th>
											<th>Path QR</th>
											<th>QR</th>										
											<th>View</th>
											<th>Material</th>
											<th>History</th>
											<th>Edit</th>
											<th>Delete</th>
										</tr>
									</thead>
									<tbody>
										<h8 style="visibility: hidden;">{{$NoUrut=1}}</h8>
										@foreach($data_mrs as $mrs)
										<tr>
											<td>{{$NoUrut++}}</td>
											<td>{{$mrs->id_mrs}}</td>
											<td>{{$mrs->status_mrs}}</td>
											<td><a href="{{ asset('storage/'.$mrs['id_mrs'].'/pnid/' . $mrs['path_pnid']) }}" target="_blank">
                                					<?php
														$data_path_pnid = $mrs->path_pnid;
														if($data_path_pnid==''){
														echo "";
														}
														else{
															echo 'P&ID-'.$mrs->id_mrs;
														}               
													?>
												</a>
											</td>
											<td>{{$mrs->link}}</td>
											<td>{{$mrs->path_qr}}</td>
											<td><img src="{{ asset('storage/'.$mrs->id_mrs.'/qrcode/' . $mrs->path_qr) }}" alt="QR Code MRS" width="100"></td>
											<td><a href="/mrs/{{$mrs->id}}/viewmrs" class="btn btn-primary btn-sm" target="_blank">View</td>
											<td><a href="/materialmrs/{{$mrs->id}}/materialmrs" class="btn btn-primary btn-sm">Material</td>
											<td><a href="/historymrs/{{$mrs->id}}/historymrs" class="btn btn-primary btn-sm">History MRS</td>
											<td><a href="/mrs/{{$mrs->id}}/editmrs" class="btn btn-warning btn-sm">Edit</td>
											<td><a href="/mrs/{{$mrs->id}}/deletemrs" class="btn btn-danger btn-sm" OnClick="return confirm('Apakah Sudah Yakin...???')">Delete</td>
										</tr>
										@endforeach
										
									</tbody>
								</table>
							</div>
						</div>
					</div>        
        	</div>
	@endsection
