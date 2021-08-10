@extends('layouts.master')

<style>
    .note {
        display: flex;
        flex-wrap: wrap;
        border: 1px solid #666;
        padding: 8px;
    }
    .note p {
        width: 25%;
        margin: 0;
        font-size: 12px;
    }
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary d-flex justify-content-between">
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="cust-report">Pengunjung</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="salary-report">Pendapatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="service-report">Layanan</a>
                    </li>
                  </ul>
                  <button class="btn btn-success btn-sm pl-3"><i class="material-icons mr-1">print</i>Print</button>
                </div>
                <div class="card-body">
                    @yield('report')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection