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
    <h4 class="card-title">Laporan Layanan/Paket Tahun 2021</h4>
    <table class="table text-center">
        <thead>
            <tr>
                <th width="1" rowspan="2">No</th>
                <th rowspan="2" align="left">Bulan</th>
                <th colspan="3">Jenis Jasa</th>
            </tr>
            <tr>
                <th>PR</th>
                <th>CB</th>
                <th>CR</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td align="left">Januari</td>
                <td>50</td>
                <td>70</td>
                <td>20</td>
            </tr>
            <tr>
                <td>2</td>
                <td align="left">Februari</td>
                <td>50</td>
                <td>70</td>
                <td>20</td>
            </tr>
            <tr>
                <td>3</td>
                <td align="left">Maret</td>
                <td>50</td>
                <td>70</td>
                <td>20</td>
            </tr>
            <tr>
                <td colspan="2">TOTAL PENGHASILAN</td>
                <td>50</td>
                <td>70</td>
                <td>20</td>
            </tr>
        </tbody>
    </table>
</div>
<div id="month" class="d-none">
    <h4 class="card-title">Laporan Layanan/Paket Tahun 2021</h4>
    <table class="table text-center">
        <thead>
            <tr>
                <th width="1" rowspan="2">No</th>
                <th rowspan="2" align="left">Bulan</th>
                <th colspan="3">Jenis Jasa</th>
            </tr>
            <tr>
                <th>PR</th>
                <th>CB</th>
                <th>CR</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td align="left">Januari</td>
                <td>50</td>
                <td>70</td>
                <td>20</td>
            </tr>
            <tr>
                <td>2</td>
                <td align="left">Februari</td>
                <td>50</td>
                <td>70</td>
                <td>20</td>
            </tr>
            <tr>
                <td>3</td>
                <td align="left">Maret</td>
                <td>50</td>
                <td>70</td>
                <td>20</td>
            </tr>
            <tr>
                <td colspan="2">TOTAL PENGHASILAN</td>
                <td>50</td>
                <td>70</td>
                <td>20</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="note">
    <p>PR : <em>Potong Rambut</em></p>
    <p>CB : <em>Creambath</em></p>
    <p>CR : <em>Cat Rambut</em></p>
    <p>PR : <em>Potong Rambut</em></p>
    <p>CB : <em>Creambath</em></p>
    <p>CR : <em>Cat Rambut</em></p>
</div>
@endsection