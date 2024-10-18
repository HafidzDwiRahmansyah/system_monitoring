@extends('template.interface')

@section('title','Page Coffe')

@section('content')
<section class="content">
    <div class="container">
        <div class="row my-5 g-3 gap-3 justify-content-center">
            <div class="col-md-6 my-3">
                <div class="card border-0 shadow rounded-2">
                    <img src="/img/tes_kopi.jpg" alt="" width="100%" height="auto">
                    <div class="card-body">
                        <h2 class="my-3">Coffe Tes</h2>
                        <p></p>
                        <form action="{{ url('/trigger-servo') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">Pesan kopi</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-3">
                <div class="card border-0 shadow rounded-2">
                    <div class="card-body">
                        <h5>Coffe data</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-3">
                <div class="card border-0 shadow rounded-2">
                    <div class="card-body">
                        <h5>Coffe data</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-3">
                <div class="card border-0 shadow rounded-2">
                    <div class="card-body">
                        <h5>Coffe data</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection