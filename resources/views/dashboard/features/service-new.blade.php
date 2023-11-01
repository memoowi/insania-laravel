@extends('dashboard.apps')

@section('title')
New Service
@endsection

@section('content')
<h1>Welcome ,<span>{{ Auth::user()->name }}</span></h1>
<h1>New Service</h1>
<div class="row mt-3">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Pilih Kelas<small>Sesuai arahan mentor</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link ml-3 mr-2"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br>
                <form method="post" action="https://task.febryann.my.id/m/class/select/save">
                    <input type="hidden" name="_token" value="SWG0jDrVnLCvkWfxVZpZlisuAq7sDcYJ4ImyKLxJ">                    <div class="item form-group">
                        <label for="kelas_id" class="col-form-label col-md-3 col-sm-3 label-align">Kelas <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <select id="kelas_id" required class="form-control " name="kelas_id">
                                <option value="">-- Pilih Kelas --</option>
                                                                                                        <option value="1" disabled>IKH-WEB-TRPL-A (Febryan)</option>
                                                                                                        <option value="2" >IKH-WEB-TRPL-B (Naufal Aziz)</option>
                                                                                                        <option value="3" >AKH-WEB-TRPL-A (Dila Nur Sakinah)</option>
                                                                                                        <option value="4" >IKH-TRMG (Muhammad derry oktaviandi)</option>
                                                                                                        <option value="5" >IKH-TRKJ (Ari Ramadhan)</option>
                                                                                                        <option value="6" >AKH-TRKJ (Sandra Murcia Sani)</option>
                                                                                                        <option value="7" >AKH-TRMG (Rosalina Saputri)</option>
                                                            </select>
                                                    </div>
                    </div>
                    <div class="item form-group">
                        <label for="kode_akses" class="col-form-label col-md-3 col-sm-3 label-align">Kode Akses <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <input value="" required id="kode_akses" class="form-control " name="kode_akses">
                                                    </div>
                    </div> 
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3 text-center">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection