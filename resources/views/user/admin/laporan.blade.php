@extends('template.interface2')

@section('title', 'Laporan Mesin')

@section('content')
<section class="content1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card border-0 shadow rounded-2">
                    <div class="card-body">
                        <h3>Silahkan upload file disini</h3>
                        <form action="/component_report" method="post" enctype="multipart/form-data">
                            @csrf
                            <label class="form-label" for="">Masukan file disini</label>
                            <input class="form-control" type="file" name="report" id="report" accept=".pdf, .docx, .doc, .xlsx" required><br>
                            <button class="btn btn-primary mx-auto d-block px-3 py-1 rounded-2" type="submit">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection