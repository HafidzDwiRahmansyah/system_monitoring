@extends('template.interface2')

@section('title','Page Monitoring')

@section('content')
<div class="container">
    <div class="row g-0 justify-content-center">
        <div class="col-lg-3 my-2">
            <div class="card border-0 shadow rounded-2">
                <div class="card-body">
                    <h3>Suhu Air</h3>
                    <div id="chart1" style="width: 100%; height: 280px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 my-2">
            <div class="card border-0 shadow rounded-2">
                <div class="card-body">
                    <h3>Suhu Mesin</h3>
                    <div id="chart2" style="width: 100%; height: 280px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 my-2">
            <div class="card border-0 shadow rounded-2">
                <div class="card-body">
                    <h3>Waterflow 1</h3>
                    <div class="informasi1 my-5"></div>
                    <h5 class="py-3">Mengalir</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-3 my-2">
            <div class="card border-0 shadow rounded-2">
                <div class="card-body">
                    <h3>Waterflow 2</h3>
                    <div class="informasi2 my-5"></div>
                    <h5 class="py-3">Tidak Mengalir</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-6 my-2">
            <div class="card border-0 shadow rounded-2">
                <div class="card-body">
                    <h3><b>Servo</b></h3>
                    <div id="loadcellChart" style="width: 500px; height: 300px;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 my-2">
            <div class="card border-0 shadow rounded-2">
                <div class="card-body">
                    <h3><b>Loadcell</b></h3>
                    <div id="servoChart" style="width: 500px; height: 300px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection