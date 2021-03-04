@php
use App\Settings;
    $counter = Settings::count();
    if ($counter)
        $settings = Settings::first();
@endphp

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
                            <form action="" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                            <div class="form-group">
                                <label class=" form-control-label">Menu_1</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-menu"></i></div>
                                    <input type="text" class="form-control" name="menu_1" @if($counter) value="{{$settings->menu_1}}" @endif>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Menu_2</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <input type="text" class="form-control" name="menu_2" @if($counter) value="{{$settings->menu_2}}" @endif>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Menu_3</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <input type="text" class="form-control" name="menu_3" @if($counter) value="{{$settings->menu_3}}" @endif>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Location_title</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="text" class="form-control" name="location_title" @if($counter) value="{{$settings->location_title}}" @endif>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Location_content</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="text" class="form-control" name="location_content" @if($counter) value="{{$settings->location_content}}" @endif>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Social Icons Title</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="text" class="form-control" name="social_icons_title" @if($counter) value="{{$settings->social_icons_title}}" @endif>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Facebook</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="text" class="form-control" name="fb_url" @if($counter) value="{{$settings->fb_url}}" @endif >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Twitter</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="text" class="form-control" name="tw_url" @if($counter) value="{{$settings->fb_url}}" @endif >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Linkendin</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="text" class="form-control" name="in_url" @if($counter) value="{{$settings->fb_url}}" @endif >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Dribbble</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="text" class="form-control" name="db_url" @if($counter) value="{{$settings->fb_url}}" @endif >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Footer About title</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="text" class="form-control" name="footer_about_title" @if($counter) value="{{$settings->fb_url}}" @endif >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Footer About Content</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="text" class="form-control" name="footer_about_content" @if($counter) value="{{$settings->fb_url}}" @endif >
                                </div>
                            </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Footer Content</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input type="text" class="form-control" name="footer_content" @if($counter) value="{{$settings->fb_url}}" @endif >
                                    </div>
                                </div>
                            <div class="form-group">
                                <label class=" form-control-label">Logo</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="file" class="form-control" name="image">
                                    <input type="hidden" class="form-control" name="current_image" @if($counter) value="{{$settings->logo}}" @endif>
                                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" @if($counter) src="{{$settings->logo}}" @endif >
                                </div>
                            </div>
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">UPDATE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div>
@endsection
