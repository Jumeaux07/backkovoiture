@extends('layouts.template')
@section('content')
  <!-- Content Wrapper. Contains page content -->
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
                              <li class="breadcrumb-item" aria-current="page">{{$menu}}</li>
                              <li class="breadcrumb-item active" aria-current="page">{{$module}}</li>
                          </ol>
                      </nav>
                  </div>
              </div>

          </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="row">
        <div class="box bg-primary-light">
            <div class="box-body d-flex px-0">
                <div class="flex-grow-1 p-30 flex-grow-1 bg-img dask-bg bg-none-md" style="background-position: right bottom; background-size: auto 100%; background-image: url(https://eduadmin-template.multipurposethemes.com/bs4/images/svg-icon/color-svg/custom-1.svg)">
                    <div class="row">
                        <div class="col-12 col-xl-7">
                            <h2>Bienvenue, <strong>{{Auth::user()->nom}} !</strong></h2>

                            <p class="text-dark my-10 font-size-16">
                                Your students complated <strong class="text-warning">80%</strong> of the tasks.
                            </p>
                            <p class="text-dark my-10 font-size-16">
                                Progress is <strong class="text-warning">very good!</strong>
                            </p>
                        </div>
                        <div class="col-12 col-xl-5"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="box">
                  <div class="box-header">
                      <h4 class="box-title">{{$utilisateurs->count()}} UTILISATEUR(S)</h4>
                  </div>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-12">
                <div class="box box-body bg-primary">
                    <h6 class="text-uppercase">Aujourd'hui</h6>
                    <div class="flexbox mt-2">
                    <span class=" font-size-30">{{$utilisateurstoday->count()}}</span>
                    <span class="icon-User font-size-40"><span class="path1"></span><span class="path2"></span></span>
                    </div>
                </div>
            </div>
            <!-- /.col -->

            <div class="col-xl-4 col-12">
                <div class="box box-body bg-success">
                    <h6 class="text-uppercase">Cette semaine</h6>
                    <div class="flexbox mt-2">
                    <span class=" font-size-30">{{$utilisateursweek->count()}}</span>
                    <span class="icon-Like font-size-40"><span class="path1"></span><span class="path2"></span></span>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xl-4 col-12">
                <div class="box box-body bg-info">
                    <h6 class="text-uppercase">Ce mois</h6>
                    <div class="flexbox mt-2">
                    <span class="icon-Group-chat font-size-40"><span class="path1"></span><span class="path2"></span></span>
                    <span class=" font-size-30">{{$utilisateursmonth->count()}}</span>
                    </div>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-12">
                <div class="box">
                  <div class="box-header">
                      <h4 class="box-title">{{$demandes->count()}} DEMANDE(S)</h4>
                  </div>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-12">
                <div class="box box-body bg-primary">
                    <h6 class="text-uppercase">Aujourd'hui</h6>
                    <div class="flexbox mt-2">
                    <span class=" font-size-30">{{$demandestodays->count()}}</span>
                    <span class="icon-User font-size-40"><span class="path1"></span><span class="path2"></span></span>
                    </div>
                </div>
            </div>
            <!-- /.col -->

            <div class="col-xl-4 col-12">
                <div class="box box-body bg-success">
                    <h6 class="text-uppercase">Cette semaine</h6>
                    <div class="flexbox mt-2">
                    <span class=" font-size-30">{{$demandesweek->count()}}</span>
                    <span class="icon-Like font-size-40"><span class="path1"></span><span class="path2"></span></span>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xl-4 col-12">
                <div class="box box-body bg-info">
                    <h6 class="text-uppercase">Ce mois</h6>
                    <div class="flexbox mt-2">
                    <span class="icon-Group-chat font-size-40"><span class="path1"></span><span class="path2"></span></span>
                    <span class=" font-size-30">{{$demandesmonth->count()}}</span>
                    </div>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title align-items-start flex-column">
                            Agents Stats
                            <small class="subtitle">More than 400+ new members</small>
                        </h4>
                    </div>
                    <div class="box-body py-0">
                        <div class="table-responsive">
                            <table class="table no-border">
                                <thead>
                                    <tr class="text-left">
                                        <th style="width: 50px">Authors</th>
                                        <th style="min-width: 200px"></th>
                                        <th style="min-width: 150px">Company</th>
                                        <th style="min-width: 150px">Progress</th>
                                        <th class="text-right" style="min-width: 150px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                <img src="../images/avatar/avatar-1.png" class="h-50 align-self-end" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark font-weight-600 hover-primary font-size-16">Vivamus consectetur</a>
                                            <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                        </td>
                                        <td>
                                            <span class="text-dark font-weight-600 d-block font-size-16">
                                                Intertico
                                            </span>
                                            <span class="text-fade d-block">
                                                Web, UI/UX Design
                                            </span>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column w-p100">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <span class="text-fade">
                                                        65%
                                                    </span>
                                                    <span class="text-fade">
                                                        Progress
                                                    </span>
                                                </div>
                                                <div class="progress progress-xs w-p100">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
                                            <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                            <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                <img src="../images/avatar/avatar-2.png" class="h-50 align-self-end" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark font-weight-600 hover-primary font-size-16">Vivamus consectetur</a>
                                            <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                        </td>
                                        <td>
                                            <span class="text-dark font-weight-600 d-block font-size-16">
                                                Intertico
                                            </span>
                                            <span class="text-fade d-block">
                                                Web, UI/UX Design
                                            </span>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column w-p100">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <span class="text-fade">
                                                        83%
                                                    </span>
                                                    <span class="text-fade">
                                                        Progress
                                                    </span>
                                                </div>
                                                <div class="progress progress-xs w-p100">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
                                            <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                            <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                <img src="../images/avatar/avatar-3.png" class="h-50 align-self-end" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark font-weight-600 hover-primary font-size-16">Vivamus consectetur</a>
                                            <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                        </td>
                                        <td>
                                            <span class="text-dark font-weight-600 d-block font-size-16">
                                                Intertico
                                            </span>
                                            <span class="text-fade d-block">
                                                Web, UI/UX Design
                                            </span>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column w-p100">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <span class="text-fade">
                                                        47%
                                                    </span>
                                                    <span class="text-fade">
                                                        Progress
                                                    </span>
                                                </div>
                                                <div class="progress progress-xs w-p100">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 83%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
                                            <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                            <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                <img src="../images/avatar/avatar-4.png" class="h-50 align-self-end" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark font-weight-600 hover-primary font-size-16">Vivamus consectetur</a>
                                            <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                        </td>
                                        <td>
                                            <span class="text-dark font-weight-600 d-block font-size-16">
                                                Intertico
                                            </span>
                                            <span class="text-fade d-block">
                                                Web, UI/UX Design
                                            </span>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column w-p100">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <span class="text-fade">
                                                        71%
                                                    </span>
                                                    <span class="text-fade">
                                                        Progress
                                                    </span>
                                                </div>
                                                <div class="progress progress-xs w-p100">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 71%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
                                            <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                            <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      </section>
      <!-- /.content -->

    </div>
</div>
<!-- /.content-wrapper -->

@endsection
