@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-nav-tabs">
                <div class="card-header card-header-warning d-flex justify-content-between align-items-center">
                    <strong>Daftar User</strong>
                    <button class="btn btn-primary btn-sm pl-3" data-toggle="modal" data-target="#addModal"><i class="material-icons mr-1">person_add</i>Tambah</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <tr>
                                    <th width="1">No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Level</th>
                                    <th style="width: 92px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Budi</td>
                                    <td>admin@admin</td>
                                    <td>admin</td>
                                    <td>
                                        <button class="btn btn-success btn-sm px-2" data-toggle="modal" data-target="#editModal" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="material-icons">edit</i></button>
                                        <button class="btn btn-danger btn-sm px-2" data-toggle="tooltip" data-placement="bottom" title="Hapus"><i class="material-icons">delete_outline</i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Susi</td>
                                    <td>susi@gmail.com</td>
                                    <td>kasir</td>
                                    <td>
                                        <button class="btn btn-success btn-sm px-2" data-toggle="modal" data-target="#editModal" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="material-icons">edit</i></button>
                                        <button class="btn btn-danger btn-sm px-2" data-toggle="tooltip" data-placement="bottom" title="Hapus"><i class="material-icons">delete_outline</i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background: #1a2035;">
        <div class="modal-header" style="background: linear-gradient(60deg, #f5700c, #ff9800); color: #fff; border-bottom: 0;">
          <strong class="modal-title" id="exampleModalLabel">Tambah User</strong>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                   <label for="exampleInput1" class="bmd-label-floating">Nama</label>
                   <input type="text" class="form-control" id="exampleInput1">
                </div>
                <div class="form-group">
                    <label for="exampleInput1" class="bmd-label-floating">Email</label>
                    <input type="text" class="form-control" id="exampleInput1">
                 </div>
                 <div class="form-group">
                    <label for="exampleInput1" class="bmd-label-floating">Password</label>
                    <input type="text" class="form-control" id="exampleInput1">
                 </div>
                 <div class="form-group">
                    <label for="exampleInput1" class="bmd-label-floating">Confirm Password</label>
                    <input type="text" class="form-control" id="exampleInput1">
                 </div>
                 <div class="form-group">
                    <label for="exampleFormControlSelect1" class="bmd-label-floating">Level User</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Admin</option>
                        <option>Kasir</option>
                        <option>Owner</option>
                    </select>
                 </div>
            </form>
        </div>
        <div class="modal-footer pt-0" style="border-top: 0;">
          <button type="button" class="btn btn-secondary px-3" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-warning px-3"><i class="material-icons mr-1">save</i>Simpan</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background: #1a2035;">
        <div class="modal-header" style="background: linear-gradient(60deg, #f5700c, #ff9800); color: #fff; border-bottom: 0;">
          <strong class="modal-title" id="exampleModalLabel">Edit User</strong>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                   <label for="exampleInput1" class="bmd-label-floating">Nama</label>
                   <input type="text" class="form-control" id="exampleInput1">
                </div>
                <div class="form-group">
                    <label for="exampleInput1" class="bmd-label-floating">Email</label>
                    <input type="text" class="form-control" id="exampleInput1">
                 </div>
                 <div class="form-group">
                    <label for="exampleInput1" class="bmd-label-floating">Password</label>
                    <input type="text" class="form-control" id="exampleInput1">
                 </div>
                 <div class="form-group">
                    <label for="exampleInput1" class="bmd-label-floating">Confirm Password</label>
                    <input type="text" class="form-control" id="exampleInput1">
                 </div>
                 <div class="form-group">
                    <label for="exampleFormControlSelect1" class="bmd-label-floating">Level User</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Admin</option>
                        <option>Kasir</option>
                        <option>Owner</option>
                    </select>
                 </div>
            </form>
        </div>
        <div class="modal-footer pt-0" style="border-top: 0;">
          <button type="button" class="btn btn-secondary px-3" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-warning px-3"><i class="material-icons mr-1">save</i>Simpan</button>
        </div>
      </div>
    </div>
</div>
@endsection