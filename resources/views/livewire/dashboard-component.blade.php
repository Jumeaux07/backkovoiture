@extends('components.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">{{$menu??''}}</h3>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">Tableau de bord</li>
                              {{-- <li class="breadcrumb-item active" aria-current="page">Blank page</li> --}}
                          </ol>
                      </nav>
                  </div>
              </div>

          </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="box pull-up">
                <div class="box-body bg-img bg-primary-light">
                    <div class="d-lg-flex align-items-center justify-content-between">
                        <div class="d-lg-flex align-items-center mb-30 mb-xl-0 w-p100">
                            <img src="https://eduadmin-template.multipurposethemes.com/bs4/images/svg-icon/color-svg/custom-14.svg" class="img-fluid max-w-250" alt="" />
                            <div class="ml-30">
                                <h2 class="mb-10">Take Advance Courses to Achive Your Goal !</h2>
                                <p class="mb-0 text-fade font-size-18">It is a long established fact that a reader will be distracted <br>of a page when looking at its layout. </p>
                            </div>
                        </div>
                        <div>
                            <button type="button" class="waves-effect waves-light btn-block btn btn-primary btn-lg" style="white-space: nowrap;">Start Now!</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-xl-8 col-lg-6 col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Your Progress</h4>
                        <ul class="box-controls pull-right d-md-flex d-none">
                          <li>
                            <button class="btn btn-primary-light px-10">View All</button>
                          </li>
                        </ul>
                    </div>
                    <div class="box-body">
                        <div class="mb-25 pb-25 bb-1">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h5 class="mb-0">Computer Science</h5>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="w-150 mx-20">
                                        <div class="progress progress-sm mb-0">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="mb-0">40%</h5>
                                </div>
                            </div>
                        </div>

                        <div class="mb-25 pb-25 bb-1">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h5 class="mb-0">Mathematics</h5>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="w-150 mx-20">
                                        <div class="progress progress-sm mb-0">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="mb-0">75%</h5>
                                </div>
                            </div>
                        </div>

                        <div class="mb-25 pb-25 bb-1">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h5 class="mb-0">Information Techno.</h5>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="w-150 mx-20">
                                        <div class="progress progress-sm mb-0">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="mb-0">95%</h5>
                                </div>
                            </div>
                        </div>
                        <div class="mb-25 pb-25 bb-1">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h5 class="mb-0">Data Science</h5>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="w-150 mx-20">
                                        <div class="progress progress-sm mb-0">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 19%">
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="mb-0">19%</h5>
                                </div>
                            </div>
                        </div>
                        <div class="mb-10">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h5 class="mb-0">Business</h5>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="w-150 mx-20">
                                        <div class="progress progress-sm mb-0">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="mb-0">35%</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Resent Notifications</h4>
                    </div>
                    <div class="box-body px-0 pt-0 pb-10">
                      <div class="media-list media-list-hover">
                        <a class="media media-single" href="#">
                          <h4 class="w-50 text-gray font-weight-500">10:10</h4>
                          <div class="media-body pl-15 bl-5 rounded border-primary">
                            <p>Morbi quis ex eu arcu.</p>
                            <span class="text-fade">by Johne</span>
                          </div>
                        </a>

                        <a class="media media-single" href="#">
                          <h4 class="w-50 text-gray font-weight-500">08:40</h4>
                          <div class="media-body pl-15 bl-5 rounded border-success">
                            <p>Proin iacul eros no odi.</p>
                            <span class="text-fade">by Amla</span>
                          </div>
                        </a>

                        <a class="media media-single" href="#">
                          <h4 class="w-50 text-gray font-weight-500">07:10</h4>
                          <div class="media-body pl-15 bl-5 rounded border-info">
                            <p>In mattis mi posuere.</p>
                            <span class="text-fade">by Josef</span>
                          </div>
                        </a>

                        <a class="media media-single" href="#">
                          <h4 class="w-50 text-gray font-weight-500">01:15</h4>
                          <div class="media-body pl-15 bl-5 rounded border-danger">
                            <p>Morbi quis ex eu arcu.</p>
                            <span class="text-fade">by Rima</span>
                          </div>
                        </a>

                        <a class="media media-single" href="#">
                          <h4 class="w-50 text-gray font-weight-500">23:12</h4>
                          <div class="media-body pl-15 bl-5 rounded border-warning">
                            <p>Morbi quis ex eu arcu.</p>
                            <span class="text-fade">by Alaxa</span>
                          </div>
                        </a>

                      </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-12">
                <livewire:bar-chart-component :titre="$titre"/>
          </div>
        </div>
      </section>
      <!-- /.content -->

    </div>
</div>


@endsection

