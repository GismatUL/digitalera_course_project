@extends('layouts.admin_layout.admin_design')
@section('content')
    <div class="breadcrumbs">
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
                        <li class="active">Advanced</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">

            <div class="row">

                <div class="col-xs-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Masked Input</strong> <small></small>
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="POST">
                                {{csrf_field()}}
                            <div class="form-group">
                                <label class=" form-control-label">Menu_1</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-menu"></i></div>
                                    <input type="text" class="form-control" name="menu_1">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Menu_2</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <input type="text" class="form-control" name="menu_2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Menu_3</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <input type="text" class="form-control" name="menu_3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Location_title</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="text" class="form-control" name="location_title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Location_content</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="text" class="form-control" name="location_content">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Social Icons Title</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="text" class="form-control" name="social_icons_title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Facebook</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="text" class="form-control" name="fb_url">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Twitter</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="text" class="form-control" name="tw_url">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Linkendin</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="text" class="form-control" name="in_url">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Dribbble</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="text" class="form-control" name="db_url">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Footer About title</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="text" class="form-control" name="footer_about_title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Dribbble</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="text" class="form-control" name="footer_about_content">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Logo</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="file" class="form-control" name="logo">
                                </div>
                            </div>
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Primary</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div>
@endsection
