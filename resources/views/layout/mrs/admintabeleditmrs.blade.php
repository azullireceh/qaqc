<form action="/mrs/edit" method="POST">
                                <!-- {{csrf_field()}} -->
                                @csrf
                                <input name="nm_id" type="hidden" class="form-control" id="id" value="{{$data_id['id']}}">
                                <div class="mb-3">
                                    <label for="id_mrs" class="form-label">ID MRS</label>
                                    <input name="nm_id_mrs" type="text" class="form-control" id="id_mrs" value="{{$data_id['id_mrs']}}">                                    
                                </div>
                                <div class="mb-3">
                                    <label for="id_spesifikasi" class="form-label">Spesifikasi</label>
                                    <input name="nm_spesifikasi" type="text" class="form-control" id="id_spesifikasi" value="{{$data_id['spesifikasi']}}">
                                </div>
                                <div class="mb-3">
                                    <label for="id_tahun_pembuatan" class="form-label">Tahun Pembuatan</label>
                                    <input name="nm_tahun_pembuatan" type="date" class="form-control" id="id_tahun_pembuatan" value="{{$data_id['tahun_pembuatan']}}">
                                </div>
                                <div class="mb-3">
                                    <label for="id_jenis_meter" class="form-label">Jenis Meter</label>
                                    <select name="nm_jenis_meter" class="form-select" aria-label="Default select example" value="{{$data_id['jenis_meter']}}">
                                        <option selected>Select</option>
                                        <option value="Diafraghma">Diafraghma</option>
                                        <option value="Rotary">Rotary</option>
                                        <option value="Turbin">Turbin</option>
                                    </select>
                                </div>                                
                               
                                <div class="mb-3">
                                    <label for="id_g_size" class="form-label">G-Size</label>
                                    <input name="nm_g_size" type="text" class="form-control" id="id_g_size" value="{{$data_id['g_size']}}">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="id_th_akhir_sertifikasi" class="form-label">Tahun Akhir Sertifikasi</label>
                                    <input name="nm_th_akhir_sertifikasi" type="date" class="form-control" id="id_th_akhir_sertifikasi" value="{{$data_id['tahun_akhir_sertifikasi']}}">                                    
                                </div>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                        </form>