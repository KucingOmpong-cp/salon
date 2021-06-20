@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-warning">Riwayat Pesanan</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <tr>
                                    <th width="1">No</th>
                                    <th>Tanggal Pesanan</th>
                                    <th>Nama Pemesan</th>
                                    <th>Jenis Layanan/Paket</th>
                                    <th>Total Biaya</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>16 Juni 2021</td>
                                    <td>Salsabila</td>
                                    <td>Potong Rambut</td>
                                    <td>30.000</td>
                                    <td>selesai</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm px-2" data-toggle="modal" data-target="#paymentModal" data-toggle="tooltip" data-placement="bottom" title="Bayar"><i class="material-icons">payment</i></button>
                                        <button class="btn btn-success btn-sm px-2" data-toggle="modal" data-target="#printModal" data-toggle="tooltip" data-placement="bottom" title="Print"><i class="material-icons">print</i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>16 Juni 2021</td>
                                    <td>Nadia</td>
                                    <td>Potong Rambut</td>
                                    <td>30.000</td>
                                    <td>belum bayar</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm px-2" data-toggle="modal" data-target="#paymentModal" data-toggle="tooltip" data-placement="bottom" title="Bayar"><i class="material-icons">payment</i></button>
                                        <button class="btn btn-success btn-sm px-2" data-toggle="modal" data-target="#printModal" data-toggle="tooltip" data-placement="bottom" title="Print"><i class="material-icons">print</i></button>
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

<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background: #1a2035;">
        <div class="modal-header" style="background: linear-gradient(60deg, #f5700c, #ff9800); color: #fff; border-bottom: 0;">
          <strong class="modal-title" id="exampleModalLabel">Metode Pembayaran</strong>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="mb-0" action="POST">
            <div class="form-group">
                <label for="TypePayment">Jenis Pembayaran</label>
                <select class="form-control" id="TypePayment">
                  <option selected>Pilih Jenis Pembayaran</option>
                  <option>Cash</option>
                  <option>Credit Card</option>
                  <option>Transfer</option>
                </select>
              </div>
              <div class="form-group">
                <label for="priceTotal">Total Biaya</label>
                <input type="number" class="form-control" id="priceTotal" placeholder="name@example.com">
              </div>
          </form>
        </div>
        <div class="modal-footer pt-0" style="border-top: 0;">
          <button type="button" class="btn btn-secondary px-3" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-warning px-3"><i class="material-icons mr-1">paid</i>Bayar</button>
        </div>
      </div>
    </div>
</div>
<div class="modal fade" id="printModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center" role="document">
      <div class="modal-content" style="width: 80mm;">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="printThis">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary px-3" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary px-3"><i class="material-icons mr-1">print</i>Print</button>
        </div>
      </div>
    </div>
</div>
@endsection