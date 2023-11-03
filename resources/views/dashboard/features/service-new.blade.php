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
                <form method="post" action="{{ route('admin.save.service') }}" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="item form-group">
                        <label for="service_name" class="col-form-label col-md-3 col-sm-3 label-align">service name <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input value="" required id="service_name" class="form-control" type="text" name="service_name">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="image" class="col-form-label col-md-3 col-sm-3 label-align">Image <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input value="" required id="image" class="form-control" type="file" name="image">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="price" class="col-form-label col-md-3 col-sm-3 label-align">price <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input value="" required id="price" class="form-control" type="number" name="price">
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