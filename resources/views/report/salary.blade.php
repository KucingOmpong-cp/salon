@extends('report.report')

@section('report')
<form>
    <div class="form-check form-check-radio form-check-inline">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Tahunan
          <span class="circle">
              <span class="check"></span>
          </span>
        </label>
      </div>
      <div class="form-check form-check-radio form-check-inline">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Bulanan
          <span class="circle">
              <span class="check"></span>
          </span>
        </label>
      </div>
</form>
<div id="year">
    <h4 class="card-title text-center">Laporan Pendapatan Tahun 2021</h4>
    <table class="table">
        <thead>
            <tr>
                <th width="1">No</th>
                <th>Bulan</th>
                <th>Jumlah Transaksi</th>
                <th class="text-right">Jumlah Pemasukan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Januari</td>
                <td>80</td>
                <td align="right">1.300.000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Februari</td>
                <td>40</td>
                <td align="right">1.300.000</td>
            </tr>
            <tr>
                <td>3</td>
                <td>maret</td>
                <td>70</td>
                <td align="right">1.300.000</td>
            </tr>
            <tr>
                <td colspan="3">TOTAL PENGHASILAN</td>
                <td align="right">1.300.000</td>
            </tr>
        </tbody>
    </table>
</div>
<div id="month" class="d-none">
    <h4 class="card-title text-center">Laporan Pendapatan Januari 2021</h4>
    <table class="table">
        <thead>
            <tr>
                <th width="1">No</th>
                <th>Bulan</th>
                <th>Jumlah Transaksi</th>
                <th class="text-right">Jumlah Pemasukan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1 Januari 2021</td>
                <td>83</td>
                <td align="right">1.300.000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2 Januari 2021</td>
                <td>83</td>
                <td align="right">1.300.000</td>
            </tr>
            <tr>
                <td>3</td>
                <td>3 Januari 2021</td>
                <td>83</td>
                <td align="right">1.300.000</td>
            </tr>
            <tr>
                <td colspan="3">TOTAL PENGHASILAN</td>
                <td align="right">1.300.000</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection