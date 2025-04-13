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
		<h3><i class="icon ion-compose"></i> <span>Input Data Material MRS</span></h3>
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
			<form action="/mrs/createmrs" method="POST" class="form-horizontal form-ticket" role="form" enctype="multipart/form-data">
            @csrf
				<fieldset>
				    <legend>General Information</legend>
						<div class="form-group" hidden="yes">
							<label for="idmrs" class="col-sm-3 control-label" type="hidden">IDMRS</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_idmrs" id="idmrs" placeholder="Name" value="{{$data_mrs_id}}" readonly >
								</div>
						</div>
                        <div class="form-group">
							<label for="id_mrs" class="col-sm-3 control-label">ID MRS</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_id_mrs" id="id_mrs" placeholder="Name" value="MRS-{{$data_mrs_id}}" readonly>
								</div>
						</div>
                        <div class="form-group" hidden="yes">
							<label for="id_historymrs" class="col-sm-3 control-label">ID History MRS</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_id_historymrs" id="id_historymrs" placeholder="Name" value="History-{{$data_history_id}}" readonly>
								</div>
						</div>
                        <div class="form-group">
							<label for="id_status_mrs" class="col-sm-3 control-label">Status MRS</label>
							<div class="col-sm-9">
								<select id="id_status_mrs" name="nm_status_mrs" class="select-ticket-type">
									<option value="Belum Digunakan">Belum Digunakan</option>
									<option value="Sedang Digunakan">Sedang Digunakan</option>
									<option value="Sedang Tidak Digunakan">Sedang Tidak Digunakan</option>
                                    <option value="Tidak Bisa Digunakan">Tidak Bisa Digunakan</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="id_project" class="col-sm-3 control-label">Project</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_project" id="id_project" placeholder="Project">
								</div>
						</div>
						<div class="form-group">
							<label for="id_tahun_pembuatan" class="col-sm-3 control-label">Tahun Pembuatan / Project</label>
								<div class="col-sm-9">
									<input type="date" class="form-control" name="nm_tahun_pembuatan" id="id_tahun_pembuatan" placeholder="Tahun Pembuatan">
								</div>
						</div>
                        <div class="form-group">
							<label for="id_spesifikasi" class="col-sm-3 control-label">Spesifikasi</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_spesifikasi" id="id_spesifikasi" placeholder="Spesifikasi" required>
								</div>
                        </div>
						<div class="form-group">
							<label for="id_jenis_meter" class="col-sm-3 control-label">Type</label>
							<div class="col-sm-9">
								<select id="id_jenis_meter" name="nm_jenis_meter" class="select-ticket-type">
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
									<option value="Single">Single</option>
									<option value="Double">Double</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="id_qty_evc" class="col-sm-3 control-label">Qty EVC</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_qty_evc" id="id_qty_evc" placeholder="Jumlah EVC">
								</div>
                        </div>
						<div class="form-group">
							<label for="id_qty_psv_prv" class="col-sm-3 control-label">Qty PSV/PRV</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_qty_psv_prv" id="id_qt_psv_prv" placeholder="Jumlah PSV / PRV">
								</div>
                        </div>
						<div class="form-group">
							<label for="id_qty_filter_pv" class="col-sm-3 control-label">Qty Filter</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_qty_filter_pv" id="id_qt_filter_pv" placeholder="Jumlah Filter / PV">
								</div>
                        </div>
						<div class="form-group">
							<label for="ticket-attachment" class="col-sm-3 control-label">Attachment P & ID</label>
								<div class="col-md-9">
									<input type="file" id="id_pnid" name="nm_pnid" accept="application/pdf" class="form-control @error('file') is-invalid @enderror">
										<!-- error message untuk image -->
									<p class="help-block"><em>Valid file type: .pdf. File size max: 25 MB</em></p>
								</div>
						</div>						
                        <div class="form-group" hidden="yes">
							<label for="id_link" class="col-sm-3 control-label">Link</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_link" id="id_link" placeholder="link" value="http://192.168.194.186:8001/mrs/{{$data_mrs_id}}/viewmrs" readonly>
								</div>
                        </div>
                        <div class="form-group" hidden="yes">
							<label for="id_tanggal_sertifikasi" class="col-sm-3 control-label">tanggal_sertifikasi</label>
								<div class="col-sm-9">
									<input type="date" class="form-control" name="nm_tanggal_sertifikasi" id="id_tanggal_sertifikasin" placeholder="tanggal_sertifikasi">
								</div>
						</div>
                        <div class="form-group" hidden="yes">
							<label for="id__path_qr" class="col-sm-3 control-label">Path QR</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_path_qr" id="id_path_qr" placeholder="qr" value="MRS{{$data_mrs_id}}.png" readonly>
								</div>
                        </div>						
                    <legend></legend>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
								<button type="submit" class="btn btn-primary btn-block">Submit</button>
							</div>
									</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>

@endsection
