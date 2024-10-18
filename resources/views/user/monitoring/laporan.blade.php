@extends('template.interface2')

@section('title','Laporan')

@section('content')
<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card border-0 shadow rounded-2">
                    <div class="card-body">
                        <h4 class="text-center py-3">Laporan Kerusakan</h4>
                        <form action="/report_ms_adm" method="post">
                            @csrf
                            <input type="number" name="id_mesin" id="id_mesin" hidden value="1">
                            <label class="form-label" for="title">Title</label>
                            <input class="form-control" type="text" name="title" id="title" required><br>
                            <label class="form-label" for="keterangan">Keterangan</label>
                            <input class="form-control" type="text" name="keterangan" id="keterangan" required><br>
                            <button class="btn btn-primary mx-auto d-block w-50" type="submit">Kirim Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection