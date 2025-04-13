
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
    <h3><i class="icon ion-compose"></i> <span>Edit Data {{$data_id_mrs['id_mrs']}}</span></h3>
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
                    <div class="form-group" hidden="yes">
                        <label for="id_mrs" class="col-sm-3 control-label">ID MRS</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nm_id_mrs" id="id_mrs" placeholder="Name" value="{{$data_id_mrs['id_mrs']}}" readonly>
                            </div>
                    </div>
                    <div class="form-group">
						<label for="id_status_mrs" class="col-sm-3 control-label">Status MRS</label>
						    <div class="col-sm-9">
								<select id="id_status_mrs" name="nm_status_mrs" class="select-ticket-type" value="{{$data_id_mrs['status_mrs']}}">
                                    <option value="{{$data_id_mrs['status_mrs']}}">{{$data_id_mrs['status_mrs']}}</option>
                                    <option value="Belum Digunakan">Belum Digunakan</option>
									<option value="Sedang Digunakan">Sedang Digunakan</option>
									<option value="Sedang Tidak Digunakan">Sedang Tidak Digunakan</option>
                                    <option value="Tidak Bisa Digunakan">Tidak Bisa Digunakan</option>
								</select>
							</div>
					</div>
                    <div class="form-group" hidden="yes">
						<label for="id__path_qr" class="col-sm-3 control-label">PathP & ID</label>
							<div class="col-sm-9">									
                                <input type="text" class="form-control" name="nm_path_pnid" id="id_path_pnid" placeholder="qr" value="{{$data_id_mrs['path_pnid']}}" readonly>
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
					    <label for="ticket-attachment" class="col-sm-3 control-label">Attachment P & ID</label>
							<div class="col-md-9">
								<input type="file" id="id_pnid" name="nm_pnid" accept="application/pdf" class="form-control @error('file') is-invalid @enderror">
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
