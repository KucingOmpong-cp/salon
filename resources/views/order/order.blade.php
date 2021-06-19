@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-warning d-flex justify-content-between">
                    <strong>Daftar Pesanan</strong>
                    <em>Senin, 19 Juni 2021</em>
                </div>

                <div class="card-body">
                    <form>
                        <div class="form-group">
                           <label for="exampleInput1" class="bmd-label-floating">Nama</label>
                           <input type="text" class="form-control" id="exampleInput1">
                           <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInput1" class="bmd-label-floating">Telepon</label>
                            <input type="text" class="form-control" id="exampleInput1">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                         </div>
                         <div class="form-group">
                            <label for="exampleInput1" class="bmd-label-floating">Alamat</label>
                            <input type="text" class="form-control" id="exampleInput1">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                         </div>
                    </form>
                    <div class="d-flex justify-content-between flex-wrap flex-column mt-4">
                        <h4 class="font-weight-bold">Layanan/Paket</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <tr>
                                    <th width="1">No</th>
                                    <th>Nama Layanan</th>
                                    <th>Status</th>
                                    <th>Biaya</th>
                                    <th width="1">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Potong Rambut</td>
                                    <td>ready</td>
                                    <td>30.000</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm px-2"><i class="material-icons">delete_outline</i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Catok Ikal</td>
                                    <td>ready</td>
                                    <td>70.000</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm px-2"><i class="material-icons">delete_outline</i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-warning float-right">Pesan</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card card-nav-tabs">
                <h4 class="card-header card-header-info">Haircut</h4>
                <div class="card-body">
                    <img class="card-img" src="{{ asset('assets/img/haircut.jpg') }}" alt="">
                    <a href="#" class="btn btn-primary w-100 mt-2">Add</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card card-nav-tabs">
                <h4 class="card-header card-header-info">Haircut</h4>
                <div class="card-body">
                    <img class="card-img" src="{{ asset('assets/img/haircut.jpg') }}" alt="">
                    <a href="#" class="btn btn-primary w-100 mt-2">Add</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card card-nav-tabs">
                <h4 class="card-header card-header-info">Facial</h4>
                <div class="card-body">
                    <img class="card-img" src="{{ asset('assets/img/facial.jpg') }}" alt="">
                    <a href="#" class="btn btn-primary w-100 mt-2">Add</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card card-nav-tabs">
                <h4 class="card-header card-header-info">Facial</h4>
                <div class="card-body">
                    <img class="card-img" src="{{ asset('assets/img/facial.jpg') }}" alt="">
                    <a href="#" class="btn btn-primary w-100 mt-2">Add</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection