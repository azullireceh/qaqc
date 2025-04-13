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
		<h3><i class="icon ion-compose"></i> <span>Input Data MRS</span></h3>
			<div class="btn-group widget-header-toolbar visible-lg">
				<a href="#" title="Expand/Collapse" class="btn btn-link btn-toggle-expand"><i class="icon ion-ios-arrow-up"></i></a>
				<a href="#" title="Remove" class="btn btn-link btn-remove"><i class="icon ion-ios-close-empty"></i></a>
			</div>
		</div>
		<div class="widget-content">
			<form action="/mrs/CreateMrs" method="POST" class="form-horizontal form-ticket" role="form">
            @csrf
				<fieldset>
				    <legend>General Information</legend>
                        <div class="form-group">
							<label for="id_mrs" class="col-sm-3 control-label">ID MRS</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_id_mrs" id="id_mrs" placeholder="Name" value="MRS-{{$data_id}}" readonly>
								</div>
						</div>
                        <div class="form-group">
							<label for="id_spesifikasi" class="col-sm-3 control-label">Spesifikasi</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_spesifikasi" id="id_spesifikasi" placeholder="Spesifikasi">
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
									<input type="text" class="form-control" name="nm_g_size" id="id_g_size" placeholder="G_Size">
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
									<input type="text" class="form-control" name="nm_link" id="id_link" placeholder="link" value="http://127.0.0.1:8000/mrs/{{$data_id}}/view" readonly>
								</div>
                        </div>
                        <div class="form-group">
							<label for="id_qr" class="col-sm-3 control-label">QR Code</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_qr" id="id_qr" placeholder="qr" value="###" readonly>
								</div>
                        </div>
						
										
										
									
										
										<!-- <div class="form-group">
											<label for="ticket-attachment" class="col-sm-3 control-label">Attach File</label>
											<div class="col-md-9">
												<input type="file" id="ticket-attachment">
												<p class="help-block"><em>Valid file type: .jpg, .png, .txt, .pdf. File size max: 1 MB</em></p>
												<label>Attachments:</label>
												<ul class="list-unstyled uploaded-attachment">
													<li><a href="#"><i class="icon ion-image"></i> <em>screenshot.jpg (265 KB)</em></a> <a href="#" class="remove">remove</a></li>
													<li><a href="#"><i class="icon ion-document"></i> <em>error_log.txt (75 KB)</em></a> <a href="#" class="remove">remove</a></li>
												</ul>
											</div>
										</div> -->
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
						<!-- END TICKET FORM -->











                                <!-- <div class="mb-3">
                                    <label for="id_mrs" class="form-label">ID MRS</label>
                                    <input name="nm_id_mrs" type="text" class="form-control" id="id_mrs">                                    
                                </div>
                                <div class="mb-3">
                                    <label for="id_spesifikasi" class="form-label">Spesifikasi</label>
                                    <input name="nm_spesifikasi" type="text" class="form-control" id="id_spesifikasi">
                                </div>
                                <div class="mb-3">
                                    <label for="id_tahun_pembuatan" class="form-label">Tahun Pembuatan</label>
                                    <input name="nm_tahun_pembuatan" type="date" class="form-control" id="id_tahun_pembuatan">
                                </div>
                                <div class="mb-3">
                                    <label for="id_jenis_meter" class="form-label">Jenis Meter</label>
                                    <select name="nm_jenis_meter" class="form-select" aria-label="Default select example">
                                        <option selected>Select</option>
                                        <option value="Diafraghma">Diafraghma</option>
                                        <option value="Rotary">Rotary</option>
                                        <option value="Turbin">Turbin</option>
                                    </select>
                                </div>                                
                               
                                <div class="mb-3">
                                    <label for="id_g_size" class="form-label">G-Size</label>
                                    <input name="nm_g_size" type="text" class="form-control" id="id_g_size">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="id_th_akhir_sertifikasi" class="form-label">Tahun Akhir Sertifikasi</label>
                                    <input name="nm_th_akhir_sertifikasi" type="date" class="form-control" id="id_th_akhir_sertifikasi">                                    
                                </div>


                                


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
</form> -->

@endsection
