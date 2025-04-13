@extends('layout.master')

    @section('content')

		
        
        	<div class="row">
					<div class="col">
					<h1></h1>					
					</div>  
					<!-- SHOW HIDE COLUMNS 1 -->
					<div class="widget">
						<div class="widget-header clearfix">
							<h3><i class="icon ion-ios-grid-view-outline"></i> <span>History Penggunaan {{$data_id_mrs['id_mrs']}}</span></h3>
							<div class="btn-group widget-header-toolbar visible-lg">
								<a href="#" title="Expand/Collapse" class="btn btn-link btn-toggle-expand"><i class="icon ion-ios-arrow-up"></i></a>
								<a href="#" title="Remove" class="btn btn-link btn-remove"><i class="icon ion-ios-close-empty"></i></a>
							</div>
						</div>
						
						<div class="widget-content">
							<div>
								<!--<h1><a href="/materialmrs/forminput" class="btn btn-primary btn-sm">Tambah Data</a></h1>-->
								<h1><a href="/historymrs/{{$data_id_mrs['id']}}/forminputhistorymrs" class="btn btn-primary btn-sm">Tambah Data</a></h1>
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
											<th>ID Project</th>
											<th>Project</th>
											<th>Tahun Project</th>
											<th>Spesifikasi</th>
											<th>Jenis Meter</th>
											<th>Stream</th>										
											<th>Qty EVC</th>
											<th>Qty PSV/PRV</th>
											<th>Qty Filter</th>
											<th>Tanggal Sertifikasi</th>
											<th>Sertifikat COI-PLO</th>
											<th>Edit</th>
											<th>Delete</th>
										</tr>
									</thead>
									<tbody>
                                        <h8 style="visibility: hidden;">{{$NoUrut=1}}</h8>
                                        @foreach($data_history as $historymrs)
                                        <tr>
                                            <td>{{$NoUrut++}}</td>
                                            <td>{{$historymrs->id_historymrs}}</td>
											<td>{{$historymrs->project}}</td>
                                            <td>{{$historymrs->tahun_project}}</td>
                                            <td>{{$historymrs->spesifikasi}}</td>
                                            <td>{{$historymrs->jenis_meter}}</td>
                                            <td>{{$historymrs->stream}}</td>
											<td>{{$historymrs->qty_evc}}</td>
                                            <td>{{$historymrs->qty_psv_prv}}</td>
											<td>{{$historymrs->qty_filter_pv}}</td>											
											<td>{{$historymrs->tanggal_sertifikasi}}</td>
											<td>
												<a href="{{asset('storage/'.$historymrs['id_mrs'].'/coiplo/' . $historymrs['sertifikat_coiplo']) }}" target="_blank">
                                					<?php
														$data_path_coiplo = $historymrs->sertifikat_coiplo;
														if($data_path_coiplo==''){
														echo "";
														}
														else{
															echo 'COIPLO-'.$historymrs['id_mrs'].'-'.$historymrs['id_historymrs'];
														}               
													?>
												</a>
											</td>
											<td><a href="/historymrs/{{$historymrs->id}}/showhistorymrs" class="btn btn-warning btn-sm">Edit</td>											
                                            <td><a href="/historymrs/{{$historymrs->id}}/deletehistorymrs" class="btn btn-danger btn-sm" OnClick="return confirm('Apakah Sudah Yakin...???')">Delete</td>
                                        </tr>
                                        @endforeach                                        
                                    </tbody>
								</table>
							</div>
						</div>
					</div>        
        	</div>
	@endsection
