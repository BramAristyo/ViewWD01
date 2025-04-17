@extends('layout') {{-- directive --}}

@section('sidebar')
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('dokter.dashboard') }}" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a href="{{ route('dokter.periksa') }}" class="nav-link">
                    <p>
                        Periksa
                    </p>
                </a>
            </li> --}}
            <li class="nav-item">
                <a href="{{ route('dokter.obat') }}" class="nav-link ">
                    <p>
                        Obat
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </button>
                </form>

            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Hello, {{$namaDokter}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>5</h3>

                            <p>Jumlah Pasien Perlu Diperiksa</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53</h3>

                            <p>Jumlah Obat</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
