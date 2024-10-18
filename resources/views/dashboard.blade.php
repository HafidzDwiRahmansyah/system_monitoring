@extends('template.interface2')
@section('title','Dashboard')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-arround">
        @if (auth()->user()->role == 'monitoring' or 'admin')
        <div class="col-lg-6">
            <div class="card border-0 shadow rounded-2">
                <div class="card-body">
                    <h3>Posisi Mesin</h3>
                    <iframe class="shadow"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5826513045026!2d106.82013277355378!3d-6.186566060611926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f428a74c279b%3A0x3a906017d0fc8502!2sGedung%20JAYA!5e0!3m2!1sid!2sid!4v1722916674364!5m2!1sid!2sid"
                        width="100%" height="265" style="border-radius: 15px; border: 0;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card border-0 shadow rounded-2">
                <div class="card-body">
                    <h4 class="text-center">Suhu Air</h4>
                    <div id="chart1" style="width: 100%; height: 280px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card border-0 shadow rounded-2">
                <div class="card-body">
                    <h4 class="text-center">Suhu Mesin</h4>
                    <div id="chart2" style="width: 100%; height: 280px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card mt-3 border-0 shadow rounded-2">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Mesin</th>
                                <th>Posisi</th>
                                <th>Banyak Penjualan</th>
                                <th>Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>M-1234</td>
                                <td>Jakarta</td>
                                <td>50</td>
                                <td>Good condition</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>M-5678</td>
                                <td>Bandung</td>
                                <td>75</td>
                                <td>Needs maintenance</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>M-9101</td>
                                <td>Surabaya</td>
                                <td>30</td>
                                <td>Excellent performance</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>M-1121</td>
                                <td>Medan</td>
                                <td>45</td>
                                <td>Average performance</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>M-3141</td>
                                <td>Yogyakarta</td>
                                <td>60</td>
                                <td>Good condition</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
        @if (auth()->user()->role == 'owner')
        <div class="col-lg-12">
            <div class="card border-0 shadow rounded-2">
                <div class="card-body rounded-2">
                    <h5 class="py-3">POSITION MACHINE</h5>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5826513045026!2d106.82013277355378!3d-6.186566060611926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f428a74c279b%3A0x3a906017d0fc8502!2sGedung%20JAYA!5e0!3m2!1sid!2sid!4v1722916674364!5m2!1sid!2sid"
                        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection