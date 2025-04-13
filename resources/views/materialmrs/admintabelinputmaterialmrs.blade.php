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
		<h3><i class="icon ion-compose"></i> <span>Input Data Material Terpasang Pada {{$data_id_mrs['id_mrs']}}</span></h3>
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
			<form action="/materialmrs/creatematerialmrs" method="POST" class="form-horizontal form-ticket" role="form" enctype="multipart/form-data">
            @csrf
				<fieldset>
				    <legend>General Information</legend>
						<div class="form-group" hidden="yes">
							<label for="idmrs" class="col-sm-3 control-label">IDMRS</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_idmrs" id="idmrs" placeholder="Name" value="{{$data_id_mrs['id']}}"readonly>
								</div>
						</div>
                        <div class="form-group" hidden="yes">
							<label for="id_mrs" class="col-sm-3 control-label">ID MRS</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_id_mrs" id="id_mrs" placeholder="Name" value="{{$data_id_mrs['id_mrs']}}" readonly>
								</div>
						</div>
                        <div class="form-group">
							<label for="id_serial_number" class="col-sm-3 control-label">Serial number</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_serial_number" id="id_serial_number" placeholder="Serial Number" >
								</div>
                        </div>
                        <div class="form-group">
							<label for="id_description" class="col-sm-3 control-label">Description</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_description" id="id_description" placeholder="Description" required>
								</div>
						</div>						
                        <div class="form-group">
							<label for="id_merk" class="col-sm-3 control-label">Merk</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_merk" id="id_merk" placeholder="Merk" required>
								</div>
                        </div>
                        <div class="form-group">
							<label for="id_size" class="col-sm-3 control-label">Size</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_size" id="id_size" placeholder="Size" required>
								</div>
						</div>
						<div class="form-group">
							<label for="id_qty" class="col-sm-3 control-label">Qty</label>
								<div class="col-sm-9">
									<input type="number" class="form-control" name="nm_qty" id="id_qty" placeholder="Qty" required>
								</div>
						</div>    
						<div class="form-group">
							<label for="id_remark" class="col-sm-3 control-label">Remark</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nm_remark" id="id_remark" placeholder="Remark">
								</div>
						</div>                    
                        <div class="form-group">
							<label for="ticket-attachment" class="col-sm-3 control-label">Attachment Sertifikat Material</label>
								<div class="col-md-9">
									<input type="file" id="id_sertifikat" name="nm_sertifikat" accept="application/pdf" class="form-control @error('file') is-invalid @enderror">
											<!-- error message untuk image -->
											<p class="help-block"><em>Valid file type: .pdf. File size max: 25 MB</em></p>
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
