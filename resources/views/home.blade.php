@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Welcome, {{ Auth::user()->name }}!</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <h5 class="mt-4 mb-2 ">Risk Cycle</h5>
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>10</h3>

                                <p>Risk!</p>
                            </div>
                            <div class="icon"
                                style="display: flex; justify-content: center; align-items: center; height: 15vh; margin: -100px 0px 0 100px;">
                                <img src="{{ asset('img') }}/grim-reaper.png" alt=""
                                    style="width: 100px; height: 100px;">
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->

                    <div class="col-lg-3 col-6">
                        <!-- small box -->

                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>10</h3>

                                <p style="margin: -4px">Risk Are <br> Being Corrected</p>
                            </div>
                            <div class="icon"
                                style="display: flex; justify-content: center; align-items: center; height: 15vh; margin: -100px 0px 0 100px;">
                                <img src="{{ asset('img') }}/hard-work2.png" alt=""
                                    style="width: 100px; height: 100px;">
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->

                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>10</h3>

                                <p>Risks Resolved</p>
                            </div>
                            <div class="icon"
                                style="display: flex; justify-content: center; align-items: center; height: 15vh; margin: -100px 0px 0 100px;">
                                <img src="{{ asset('img') }}/relaxing.png" alt=""
                                    style="width: 100px; height: 100px;">
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->

                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>15</h3>

                                <p>Residual Risk</p>
                            </div>
                            <div class="icon"
                                style="display: flex; justify-content: center; align-items: center; height: 15vh; margin: -100px 0px 0 100px;">
                                <img src="{{ asset('img') }}/pollution.png" alt=""
                                    style="width: 100px; height: 100px;">
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->


                    <!-- =========================================================== -->
                    <h5 class="mt-4 mb-2 ">Total Risk Based on RPN Level: 1 - 1000</h5>
                    <div class="row center">
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box bg-success">
                                <span class="info-box-icon"><img src="{{ asset('img') }}/skull3.png"
                                        alt=""></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Low Risk (1-200)</span>
                                    <span class="info-box-number">40</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 80%"></div>
                                    </div>
                                    <span class="progress-description">
                                        80% Increase/Quartal
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box bg-info">
                                <span class="info-box-icon"><img src="{{ asset('img') }}/hacker.png"
                                        alt=""></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Moderate Risk (201-400)</span>
                                    <span class="info-box-number">4</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 10%"></div>
                                    </div>
                                    <span class="progress-description">
                                        10% Increase/Quartal
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box bg-warning">
                                <span class="info-box-icon"><img src="{{ asset('img') }}/skull2.png"
                                        alt=""></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">High Risk (401-700)</span>
                                    <span class="info-box-number">2</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                    <span class="progress-description">
                                        50% Increase/Quartal
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box bg-danger">
                                <span class="info-box-icon"><img src="{{ asset('img') }}/skull.png"
                                        alt=""></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Critical Risk (701-1000)</span>
                                    <span class="info-box-number">5</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                    <span class="progress-description">
                                        70% Increase/Quartal
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.row -->


                <footer class="footer">
                    <hr />
                    <strong>Copyright &copy; 2024-2025 <a href="#">Astra Phalanx</a>.</strong>
                    All rights reserved.
                    <div class="float-right d-none d-sm-inline-block">
                        <b>Version</b> 1.0
                    </div>
                </footer>
            </div>
        @endsection
