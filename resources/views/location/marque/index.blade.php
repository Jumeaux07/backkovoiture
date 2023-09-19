@extends('layouts.template')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">

            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title">{{ $menu ?? '' }}</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">{{ $menu }}</li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $module }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--Section-->
                <div class="row">
                    <div class="col-12 mt-20">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">{{ $section }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Section-->

                <!--voiture liste-->
                    <livewire:marquelist/>
                <!--/voiture liste-->

            </div>
        </div>
    </div>
@endsection
