@extends('master')
@section('content')
{{-- nav-breadcrumb --}}
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- nav-breadcrumb --}}
{{-- content --}}
<div class="content">
    <div class="animated fadeIn">


        <div class="row">
            

            <div class="col-lg-12">
                <div class="card">
                    
                    <div class="card-body card-block">
                        <form action="{{route('domain.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="name" name="name" placeholder="Name" class="form-control">
                                    
                                <small class="form-text text-muted">This is a help text</small>
                            
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Loai</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="select" id="select" class="form-control">
                                        <option value="Link">Link</option>
                                        <option value="Tool">Tool</option>
                                        
                                    </select>
                                                                  
                            
                                </div>
                            </div>

                            
                            

                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                        </form>
                    </div>
                    <div class="card-footer">
                        
                    </div>
                </div>
               
            </div>

        </div>

        

    </div>


</div><!-- .animated -->
</div>
{{-- content --}}
@endsection