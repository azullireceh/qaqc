@extends('layout.master')

    @section('content')

        <!-- <form action="/mrs/CreateMrs" method="POST"> -->
            <!-- {{csrf_field()}} -->
           
<!-- TICKET FORM -->
<div class="col">
    <h1></h1>
</div>

<div class="widget">
	<div class="widget-header clearfix">
		<h3><i class="icon ion-compose"></i> <span>Edit Data History Pada {{$data_id['id_mrs']}}</span></h3>
			<div class="btn-group widget-header-toolbar visible-lg">
				<a href="#" title="Expand/Collapse" class="btn btn-link btn-toggle-expand"><i class="icon ion-ios-arrow-up"></i></a>
				<a href="#" title="Remove" class="btn btn-link btn-remove"><i class="icon ion-ios-close-empty"></i></a>
			</div>
		</div>
		@if(session('gagal'))
        <div class="alert alert-success" role="alert">
            {{session('gagal')}}
        </div>
        @endif
		
		<div class="widget-content">
			<form action="/historymrs/updatehistorymrs" method="POST" class="form-horizontal form-ticket" role="form" enctype="multipart/form-data">
            @csrf
				<fieldset>
				    <legend>General Information</legend>
                        <div class="form-group" hidden="yes">
							<label for="idmrs" class="col-sm-3 control-label">IDMRS</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_idmrs" id="idmrs" placeholder="Name" value="{{$data_id['idmrs']}}"readonly>
								</div>
						</div>
                        <div class="form-group" hidden="yes">
							<label for="id_mrs" class="col-sm-3 control-label">ID MRS</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_id_mrs" id="id_mrs" placeholder="Name" value="{{$data_id['id_mrs']}}" readonly>
								</div>
						</div>
						<div class="form-group" hidden="yes">
							<label for="idhistorymrs" class="col-sm-3 control-label">IDHistoryMRS</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_idhistorymrs" id="idhistorymrs" placeholder="Name" value="{{$data_id['id']}}"readonly>
								</div>
						</div>						
                        <div class="form-group">
							<label for="id_historymrs" class="col-sm-3 control-label">ID History MRS</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_historymrs" id="id_historymrs" placeholder="ID History" value="{{$data_id['id_historymrs']}}" readonly>
								</div>
                        </div>
                        <div class="form-group">
							<label for="id_project" class="col-sm-3 control-label">Project</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_project" id="id_project" placeholder="Project" value="{{$data_id['project']}}" required>
								</div>
						</div>						
                        <div class="form-group">
							<label for="id_tahun_project" class="col-sm-3 control-label">Tahun Project</label>
								<div class="col-sm-9">
									<input type="date" class="form-control" name="nm_tahun_project" id="id_tahun_project" placeholder="Tahun Project" value="{{$data_id['tahun_project']}}" required>
								</div>
                        </div>
                        <div class="form-group">
							<label for="id_spesifikasi" class="col-sm-3 control-label">Spesifikasi</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_spesifikasi" id="id_spesifikasi" placeholder="Spesifikasi" value="{{$data_id['spesifikasi']}}" required>
								</div>
						</div>
						<div class="form-group">
							<label for="id_jenis_meter" class="col-sm-3 control-label">Jenis Meter</label>
							<div class="col-sm-9">
								<select id="id_jenis_meter" name="nm_jenis_meter" class="select-ticket-type">
                                    <option value="{{$data_id['jenis_meter']}}">{{$data_id['jenis_meter']}}</option>
									<option value="Diapraghma">Diapraghma</option>
									<option value="Rotary">Rotary</option>
									<option value="Turbin">Turbin</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="id_stream" class="col-sm-3 control-label">Stream</label>
							<div class="col-sm-9">
								<select id="id_stream" name="nm_stream" class="select-ticket-type">
                                    <option value="{{$data_id['stream']}}">{{$data_id['stream']}}</option>
									<option value="Single">Single</option>
									<option value="Double">Double</option>
								</select>
							</div>
						</div>						    
						<div class="form-group">
							<label for="id_qty_evc" class="col-sm-3 control-label">Qty EVC</label>
								<div class="col-sm-9">
									<input type="number" class="form-control" name="nm_qty_evc" id="id_qty_evc" placeholder="Qty EVC" value="{{$data_id['qty_evc']}}">
								</div>
						</div> 
						<div class="form-group">
							<label for="id_qty_psv_prv" class="col-sm-3 control-label">Qty PSV / PRV</label>
								<div class="col-sm-9">
									<input type="number" class="form-control" name="nm_qty_psv_prv" id="id_qty_psv_prv" placeholder="Qty PSV / PRV" value="{{$data_id['qty_psv_prv']}}">
								</div>
						</div>
						<div class="form-group">
							<label for="id_qty_filter_pv" class="col-sm-3 control-label">Qty Filter</label>
								<div class="col-sm-9">
									<input type="number" class="form-control" name="nm_qty_filter_pv" id="id_qty_filter_pv" placeholder="Qty Filter / PV" value="{{$data_id['qty_filter_pv']}}">
								</div>
						</div>
						<div class="form-group">
							<label for="id_tanggal_sertifikasi" class="col-sm-3 control-label">Tanggal Sertifikasi</label>
								<div class="col-sm-9">
									<input type="date" class="form-control" name="nm_tanggal_sertifikasi" id="id_tanggal_sertifikasi" placeholder="tanggal Sertifikasi" value="{{$data_id['tanggal_sertifikasi']}}">
								</div>
						</div>
						<div class="form-group" hidden="yes">
							<label for="id_path_coiplo" class="col-sm-3 control-label">Path COI-PLO</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_path_coiplo" id="id_path_coiplo" placeholder="qr" value="{{$data_id['sertifikat_coiplo']}}" readonly>
								</div>
                        </div>
                        <div class="form-group">
							<label for="id_coiplo" class="col-sm-3 control-label">Sertifikat COI-PLO</label>
								<div class="col-sm-9">
                                    <a href="{{ asset('storage/'.$data_id['id_mrs'].'/coiplo/' . $data_id['sertifikat_coiplo']) }}" target="_blank">
                                    
                                        <?php
                                            $data_path_coiplo = $data_id->sertifikat_coiplo;
                                            if($data_path_coiplo==''){
                                            echo "";
                                            }
                                            else{
                                                echo 'Sertifikat COIPLO-'.$data_id->id_mrs.'-'.$data_id->id_historymrs;
                                            }               
                                        ?>
                                    </a>									
                                </div>
                        </div>
						<div class="form-group">
							<label for="ticket-attachment" class="col-sm-3 control-label">Attachment COIPLO</label>
								<div class="col-md-9">
									<input type="file" id="id_coiplo" name="nm_coiplo" accept="application/pdf" class="form-control @error('file') is-invalid @enderror">
									<!-- error message untuk image -->
									<p class="help-block"><em>Valid file type: .pdf. File size max: 25 MB</em></p>
								</div>
						</div>
                    <legend></legend>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
								<button type="submit" class="btn btn-primary btn-block">Update</button>
							</div>
						</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>

@endsection
