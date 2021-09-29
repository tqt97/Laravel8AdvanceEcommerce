@extends('backend.layouts.admin_layouts')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Profile</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Extra</li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-12 col-lg-12 col-xl-12">
                <!-- /.box -->
                <div class="box box-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-black" style="background: linear-gradient(45deg, #0F5EF7, #7a15f7);
                                            color: white;
                                            -webkit-box-shadow: 0px 0px 12px 0px rgb(15 94 247 / 35%);
                                            box-shadow: 0px 0px 12px 0px rgb(15 94 247 / 35%);">
                        <h3 class="widget-user-username">{{ $admin->name }}</h3>
                        <a href="" style="float: right" class="btn btn-rounded btn-success">Edit Profile</a>
                        <h6 class="widget-user-desc">{{ $admin->email }}</h6>
                    </div>
                    <div class="widget-user-image">
                        {{-- <img class="rounded-circle" src="{{ asset('backend/images/avatar/1.jpg') }}" alt="Admin Avatar"> --}}
                        <img class="rounded-circle" src="{{ (!empty($admin->profile_photo_path)) ? url('upload/images/'.$admin->profile_photo_path) : url('upload/images/no_image.jpg')}}" alt="Admin Avatar">
                    </div>
                    <div class="box-footer">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">12K</h5>
                                    <span class="description-text">FOLLOWERS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 br-1 bl-1">
                                <div class="description-block">
                                    <h5 class="description-header">550</h5>
                                    <span class="description-text">FOLLOWERS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">158</h5>
                                    <span class="description-text">TWEETS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>





            </div>

        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->

@endsection
@section('vendor')
    <script src="{{ asset('backend/js/vendors.min.js') }}"></script>
    <script src="{{ asset('backend/assets/icons/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('backend/js/pages/timeline.js') }}"></script>
@endsection
@section('app')

@endsection
