@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-warning">Layanan/Paket</div>

                <div class="card-body">
                    <form>
                        <div class="form-group">
                           <label for="exampleInput1" class="bmd-label-floating">Nama Layanan/Paket</label>
                           <input type="email" class="form-control" id="exampleInput1">
                           <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInput1" class="bmd-label-floating">Harga</label>
                            <input type="email" class="form-control" id="exampleInput1">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                         </div>
                         <div class="form-group form-file-upload form-file-simple">
                            <input type="text" class="form-control inputFileVisible" placeholder="Gambar Layanan/Paket">
                            <input type="file" class="inputFileHidden">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1" class="bmd-label-floating">Keterangan</label>
                            <textarea class="form-control" id="exampleTextarea1" rows="3"></textarea>
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                         </div>
                         <button type="button" class="btn btn-success float-right" onclick="md.showNotification('top','center')">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card card-nav-tabs">
                <h4 class="card-header card-header-info">Haircut</h4>
                <div class="card-body">
                    <img class="card-img" src="{{ asset('assets/img/default.jpg') }}" alt="">
                    <div class="price mt-1">
                        <strong>Rp. 50.000</strong>
                    </div>
                    <div class="card-desc">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas, expedita excepturi! Quae earum nesciunt eveniet ipsa saepe voluptas sed, possimus sint, perspiciatis officiis architecto molestias odit reiciendis cupiditate placeat veniam!
                    </div>
                    <div class="d-flex w-100">
                        <a href="#" class="btn btn-warning w-50 mt-2">Edit</a>
                        <a href="#" class="btn btn-primary w-50 mt-2">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card card-nav-tabs">
                <h4 class="card-header card-header-info">Haircut</h4>
                <div class="card-body">
                    <img class="card-img" src="{{ asset('assets/img/haircut.jpg') }}" alt="">
                    <div class="price mt-1">
                        <strong>Rp. 50.000</strong>
                    </div>
                    <div class="card-desc">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas, expedita excepturi! Quae earum nesciunt eveniet ipsa saepe voluptas sed, possimus sint, perspiciatis officiis architecto molestias odit reiciendis cupiditate placeat veniam!
                    </div>
                    <div class="d-flex w-100">
                        <a href="#" class="btn btn-warning w-50 mt-2">Edit</a>
                        <a href="#" class="btn btn-primary w-50 mt-2">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card card-nav-tabs">
                <h4 class="card-header card-header-info">Facial</h4>
                <div class="card-body">
                    <img class="card-img" src="{{ asset('assets/img/facial.jpg') }}" alt="">
                    <div class="price mt-1">
                        <strong>Rp. 50.000</strong>
                    </div>
                    <div class="card-desc">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas, expedita excepturi! Quae earum nesciunt eveniet ipsa saepe voluptas sed, possimus sint, perspiciatis officiis architecto molestias odit reiciendis cupiditate placeat veniam!
                    </div>
                    <div class="d-flex w-100">
                        <a href="#" class="btn btn-warning w-50 mt-2">Edit</a>
                        <a href="#" class="btn btn-primary w-50 mt-2">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card card-nav-tabs">
                <h4 class="card-header card-header-info">Facial</h4>
                <div class="card-body">
                    <img class="card-img" src="{{ asset('assets/img/facial.jpg') }}" alt="">
                    <div class="price mt-1">
                        <strong>Rp. 50.000</strong>
                    </div>
                    <div class="card-desc">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, repellendus.
                    </div>
                    <div class="d-flex w-100">
                        <a href="#" class="btn btn-warning w-50 mt-2">Edit</a>
                        <a href="#" class="btn btn-primary w-50 mt-2">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
