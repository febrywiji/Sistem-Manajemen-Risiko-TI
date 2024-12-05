@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="text-primary mb-4">{{ Auth::user()->name }} Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

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
        </section>
        

        <section class="content">
            <div class="container-fluid">
                <a href="{{ route('risks.create') }}" class="btn btn-success mb-4">
                    <i class="fas fa-plus"></i> Add New Risk
                </a>

                <!-- Menampilkan pesan sukses setelah membuat post -->
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Tabel untuk menampilkan daftar risk -->
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead class="table-dark text-center">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Severity</th>
                                <th>Occurrence</th>
                                <th>Detection</th>
                                <th>Status</th>
                                <th>Risk Priority Number</th>
                                <th>Time Added</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($risks as $data)
                                <tr>
                                    <td class="text-center">{{ $data->id }}</td>
                                    <td>{{ $data->title }}</td>
                                    <td class="text-truncate" style="max-width: 200px;">{{ $data->description }}</td>
                                    <td class="text-center">
                                        <span class="badge bg-danger">{{ $data->severity }}</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-warning text-dark">{{ $data->occurrence }}</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-info text-dark">{{ $data->detection }}</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge text-uppercase" style="
                                            font-weight: bold;
                                            color: white;
                                            background-color:
                                                @switch($data->status)
                                                    @case(1)
                                                        #DC3545; /* High Risk */
                                                        @break
                                                    @case(2)
                                                        #FFC107; /* Medium Risk */
                                                        @break
                                                    @case(3)
                                                        #198754; /* Low Risk */
                                                        @break
                                                    @case(4)
                                                        #0DCAF0; /* Resolved */
                                                        @break
                                                    @default
                                                        black;
                                                @endswitch
                                        ">
                                            {{ $data->status_text }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <strong>{{ $data->risk_priority_number }}</strong>
                                    </td>
                                    <td class="text-center">{{ $data->time_added }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('risks.show', $data->id) }}" class="btn btn-sm btn-info">
                                            <i class="fas fa-eye"></i> View
                                        </a>
                                        <a href="{{ route('risks.edit', $data->id) }}" class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('risks.destroy', $data->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>


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
