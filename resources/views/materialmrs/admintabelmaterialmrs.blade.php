@extends('layout.master')

    @section('content')

		
        
        	<div class="row">
					<div class="col">
					<h1></h1>					
					</div>  
					<!-- SHOW HIDE COLUMNS 1 -->
					<div class="widget">
						<div class="widget-header clearfix">
							<h3><i class="icon ion-ios-grid-view-outline"></i> <span>Data Material Terpasang Pada {{$data_id_mrs['id_mrs']}}</span></h3>
							<div class="btn-group widget-header-toolbar visible-lg">
								<a href="#" title="Expand/Collapse" class="btn btn-link btn-toggle-expand"><i class="icon ion-ios-arrow-up"></i></a>
								<a href="#" title="Remove" class="btn btn-link btn-remove"><i class="icon ion-ios-close-empty"></i></a>
							</div>
						</div>
						
						<div class="widget-content">
							<div>
								<!--<h1><a href="/materialmrs/forminput" class="btn btn-primary btn-sm">Tambah Data</a></h1>-->
								<h1><a href="/materialmrs/{{$data_id_mrs['id']}}/forminputmaterialmrs" class="btn btn-primary btn-sm">Tambah Data</a></h1>
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
											<th>Serial Number</th>
											<th>Description</th>
											<th>Merk</th>
											<th>Size</th>
											<th>qty</th>										
											<th>Remark</th>
											<th>Sertifikat</th>
											<th>Edit</th>
											<th>Delete</th>
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
                                            <td><a href="/materialmrs/{{$materialmrs->id}}/showmaterialmrs" class="btn btn-warning btn-sm">Edit</td>											
                                            <td><a href="/materialmrs/{{$materialmrs->id}}/deletematerialmrs" class="btn btn-danger btn-sm" OnClick="return confirm('Apakah Sudah Yakin...???')">Delete</td>
                                        </tr>
                                        @endforeach                                        
                                    </tbody>
								</table>
							</div>
						</div>
					</div>        
        	</div>
	@endsection
