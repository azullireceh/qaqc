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
			<form action="/mrs/CreateMrs" method="POST" class="form-horizontal form-ticket" role="form" enctype="multipart/form-data">
            @csrf
				<fieldset>
				    <legend>General Information</legend>
						<div class="form-group">
							<label for="id" class="col-sm-3 control-label">ID</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_id" id="id" placeholder="Name" value="{{$data_id}}" readonly>
								</div>
						</div>
                        <div class="form-group">
							<label for="id_mrs" class="col-sm-3 control-label">ID MRS</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_id_mrs" id="id_mrs" placeholder="Name" value="MRS-{{$data_id}}" readonly>
								</div>
						</div>
                        <div class="form-group">
							<label for="id_spesifikasi" class="col-sm-3 control-label">Spesifikasi</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_spesifikasi" id="id_spesifikasi" placeholder="Spesifikasi" required>
								</div>
                        </div>
                        <div class="form-group">
							<label for="id_tahun_Pembuatan" class="col-sm-3 control-label">Tahun Pembuatan</label>
								<div class="col-sm-9">
									<input type="date" class="form-control" name="nm_tahun_pembuatan" id="id_tahun_pembuatan" placeholder="Tahun Pembuatan">
								</div>
						</div>
						<div class="form-group">
							<label for="id_jenis_meter" class="col-sm-3 control-label">Type</label>
							<div class="col-sm-9">
								<select id="id_jenis_meter" name="nm_jenis_meter" class="select-ticket-type">
									<option value="diapraghma">Diapraghma</option>
									<option value="rotary">Rotary</option>
									<option value="Turbin">Turbin</option>
								</select>
							</div>
						</div>
                        <div class="form-group">
							<label for="id_g_size" class="col-sm-3 control-label">G_Size</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_g_size" id="id_g_size" placeholder="G_Size" required>
								</div>
                        </div>
                        <div class="form-group">
							<label for="id_tahun_sertifikasi" class="col-sm-3 control-label">Tahun Sertifikasi</label>
								<div class="col-sm-9">
									<input type="date" class="form-control" name="nm_tahun_sertifikasi" id="id_tahun_sertifikasi" placeholder="Tahun Sertifikasi">
								</div>
						</div>
                        <div class="form-group">
							<label for="id_link" class="col-sm-3 control-label">Link</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_link" id="id_link" placeholder="link" value="http://127.0.0.1:8000/mrs/{{$data_id}}/viewmrs" readonly>
								</div>
                        </div>
                        <div class="form-group">
							<label for="id__path_qr" class="col-sm-3 control-label">Path QR</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_path_qr" id="id_path_qr" placeholder="qr" value="qrcodes/MRS{{$data_id}}.png" readonly>
								</div>
                        </div>
						<div class="form-group">
							<label for="id__path_qr" class="col-sm-3 control-label">Path PNID</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_path_pnid" id="id_path_pnid" placeholder="qr" value="pnid/PNID{{$data_id}}.pdf" readonly>
								</div>
                        </div>
										<div class="form-group">
											<label for="ticket-attachment" class="col-sm-3 control-label">P&ID</label>
											<div class="col-md-9">
												<input type="file" id="id_pnid" name="nm_pnid" accept="application/pdf" class="form-control @error('file') is-invalid @enderror">
													<!-- error message untuk image -->
													
												<p class="help-block"><em>Valid file type: .pdf. File size max: 25 MB</em></p>
												<label>Attachments:</label>
												
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
