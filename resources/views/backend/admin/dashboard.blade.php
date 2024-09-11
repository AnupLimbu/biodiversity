@extends('backend.master')
@section('title')
   Dashboard
@stop

@section('breadcum')
    @include('backend.admin.includes.breadcum',['heading'=>"Dashboard","sub_heading"=>''])
@stop
@section('content')
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fa-solid fa-diagram-project"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Projects</span>
                            <span class="info-box-number">
                              {{\App\Models\Project::all()->count()}}
                              </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-list-check"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Completed Projects</span>
                            <span class="info-box-number">
                              {{\App\Models\Project::where('status','completed')->count()}}
                              </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fa-solid fa-list-check"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Ongoing Projects</span>
                            <span class="info-box-number">
                              {{\App\Models\Project::where('status','on-going')->count()}}
                              </span>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total  Team</span>
                            <span class="info-box-number">
                                    {{\App\Models\Team::where('type','team')->count()}}
                            </span>
                        </div>
                    </div>
                </div>
                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Staffs</span>
                            <span class="info-box-number">
                                 {{\App\Models\Team::where('type','staff')->count()}}
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Advisors</span>
                            <span class="info-box-number">
                             {{\App\Models\Team::where('type','advisor')->count()}}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Volunteer</span>
                            <span class="info-box-number">
                             {{\App\Models\Team::where('type','volunteer')->count()}}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-address-book"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Contacts</span>
                            <span class="info-box-number">
                             {{\App\Models\ContactUs::all()->count()}}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info elevation-1"><i class="fa-solid fa-calendar-days"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total News</span>
                            <span class="info-box-number">
                             {{\App\Models\NewsAndEvents::where('type','news')->count()}}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info elevation-1"><i class="fa-regular fa-calendar-check"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Events</span>
                            <span class="info-box-number">
                             {{\App\Models\NewsAndEvents::where('type','event')->count()}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
@stop

