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
                                    <th style="width: 92px">Aksi</th>
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
<style>
  .print-body table {
    width: 100%;
    white-space: nowrap;
    font-size: 12px;
    border-collapse: collapse;
  }
  /* .print-body .detail tr td {
    padding-bottom: 5px;
  }
  .print-body .detail tr:last-child td {
    padding-bottom: 10px;
  } */
  .print-body .detail td:first-child {
    font-size: 11px;
  }
  .print-body .detail td:last-child {
    font-weight: 600;
  }
  .print-body .detail td:first-child div:first-child {
    font-weight: 500;
    height: 14px;
  }
  @media screen {
    #printSection {
        display: none;
        width: 75mm;
        max-width: 8cm;
    }
  }

  @media print {
    body * {
      visibility:hidden;
    }
    #printSection, #printSection * {
      visibility:visible;
    }
    #printSection {
      position:absolute;
      left:50%;
      top:0;
    }
    #printThis {
      position: relative;
      left: -50%;
    }
  }
</style>
<div class="modal fade" id="printModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center" role="document">
      <div class="modal-content" style="width: 8cm;">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="printThis">
          <div class="print-header">
            <div style="float: left">
              <strong>SALON APP</strong>
              <div style="font-size: 11px; height: 16px;">Jl. xxxx xxxx No.xx</div>
              <div style="font-size: 11px">08xx-xxxx-xxxx</div>
            </div>
            <div style="float: right; border: 1px solid #000; text-align: center;">
              <div style="font-size: 10px; padding: 0 5px; border-bottom: 1px solid #000">No Antrian</div>
              <div style="font-weight: 700; font-size: 20px; padding: 5px 0;">01</div>
            </div>
          </div>
          <div class="print-body">
            <table style="border-bottom: 1px solid #ccc">
              <tr>
                <td>Tanggal</td>
                <td align="right">16/06/2021 10:21</td>
              </tr>
              <tr>
                <td>Pelanggan</td>
                <td align="right">Salsabila</td>
              </tr>
            </table>
            <table class="detail" style="border-bottom: 1px solid #ccc">
              <tr>
                <td>
                  <div>Potong Rambut</div>
                  <div>1 x 30.000</div>
                </td>
                <td align="right">30.000</td>
              </tr>
              <tr>
                <td>
                  <div>Potong Rambut</div>
                  <div>1 x 30.000</div>
                </td>
                <td align="right">30.000</td>
              </tr>
            </table>
            <table class="detail" style="border-bottom: 1px solid #ccc">
              <tr>
                <td style="font-weight: 600">JUMLAH TOTAL</td>
                <td align="right">60.000</td>
              </tr>
            </table>
            <div style="text-align:center; margin-top: 5px; font-size: 12px;">TERIMA KASIH</div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary px-3" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary px-3" id="btnPrint"><i class="material-icons mr-1">print</i>Print</button>
        </div>
      </div>
    </div>
</div>
<script>
  document.getElementById("btnPrint").onclick = function () {
    printElement(document.getElementById("printThis"));
  }

  function printElement(elem) {
    var domClone = elem.cloneNode(true);
    
    var $printSection = document.getElementById("printSection");
    
    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }
    
    $printSection.innerHTML = "";
    $printSection.appendChild(domClone);
    window.print();
  }
</script>
@endsection