@extends('layout.master')

    @section('content')

        @if(session('suskses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        
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
						<!-- <div class="alert alert-info fade in">
							<button class="close" data-dismiss="alert">&times;</button>
							<i class="icon ion-information-circled"></i> Try to show/hide column visibility and drag the column to another position to reorder it.
						</div> -->
						@if(session('suskses'))
						<div class="alert alert-success" role="alert">
							{{session('sukses')}}
						</div>
						@endif
						<div>
							<h1><a href="/mrs/forminput" class="btn btn-primary btn-sm">Tambah Data</a></h1>
						</div>

						<div class="table-responsive">
							<table id="datatable-column-interactive" class="table table-sorting table-hover table-bordered colored-header datatable">
								<thead>
									<tr>
										<th>No</th>
										<th>ID MRS</th>
										<th>Spesifikasi</th>
										<th>Tahun Pembuatan</th>
										<th>Jenis Meter</th>
										<th>G Size</th>										
										<th>Tahun Sertifikasi</th>
										<th>Link</th>
										<th>QR</th>
										<th>View</th>
										<th>Material</th>
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
										<td>{{$mrs->spesifikasi}}</td>
										<td>{{$mrs->tahun_pembuatan}}</td>
										<td>{{$mrs->jenis_meter}}</td>
										<td>{{$mrs->g_size}}</td>
										<td>{{$mrs->tahun_akhir_sertifikasi}}</td>
										<td>{{$mrs->link}}</td>
										<td>{{$mrs->qr}}</td>
										<td><a href="/mrs/{{$mrs->id}}/view" class="btn btn-primary btn-sm">View</td>
										<td><a href="/mrs/{{$mrs->id}}/materialmrs" class="btn btn-primary btn-sm">Material</td>
										<td><a href="/mrs/{{$mrs->id}}/edit" class="btn btn-warning btn-sm">Edit</td>
										<td><a href="/mrs/{{$mrs->id}}/delete" class="btn btn-danger btn-sm" OnClick="return confirm('Apakah Sudah Yakin...???)">Delete</td>
									</tr>
								@endforeach
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
				
			 
			
			
			
			
				<!-- <table>
						<tr>
							<th>No</th>
							<th>ID MRS</th>
							<th>Spesifikasi MRS</th>
							<th>Tahun Pembuatan</th>
							<th>Jenis Meter</th>
							<th>G Size</th>                        
							<th>Tahun Akhir Sertifikasi</th>
							<th>Data Material<th>
							<th>Edit</th>
							<th>Dellete</th>
						</tr>
					@foreach($data_mrs as $mrs)
						<tr>
							<td></td>
							<td>{{$mrs->id_mrs}}</td>
							<td>{{$mrs->spesifikasi}}</td>
							<td>{{$mrs->tahun_pembuatan}}</td>
							<td>{{$mrs->jenis_meter}}</td>
							<td>{{$mrs->g_size}}</td>                        
							<td>{{$mrs->tahun_akhir_sertifikasi}}</td>
							<td><a href="/mrs/{{$mrs->id}}/materialmrs" class="btn btn-warning btn-sm">Material</td>
							<td><a href="/mrs/{{$mrs->id}}/edit" class="btn btn-warning btn-sm">Edit</td>
							<td><a href="/mrs/{{$mrs->id}}/delete" class="btn btn-danger btn-sm" OnClick="return confirm('Apakah Sudah Yakin...???)">Delete</td>
						</tr>                
					@endforeach
				</table>-->
        
        </div>
@endsection
