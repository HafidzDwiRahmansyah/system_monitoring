@extends('template.interface2')

@section('title', 'Testing')

@section('content')
<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card border-0 shadow rounded-2">
                    <div class="card-body">
                        <div class="row justify-content-arround">
                            <div class="col-lg-4">
                                <button class="btn btn-primary mx-auto d-block my-3" name="td"><b>Tes
                                        Dinamo</b></button>
                                <h4 class="text-center text-success bg-primary py-3"><b>Menyala</b></h4>
                            </div>
                            <div class="col-lg-4">
                                <button class="btn btn-primary mx-auto d-block my-3" name="tsa"><b>Tes Servo
                                        Air</b></button>
                                <h4 class="text-center text-success bg-primary py-3"><b>Menyala</b></h4>
                            </div>
                            <div class="col-lg-4">
                                <button class="btn btn-primary mx-auto d-block my-3" name="tss"><b>Tes Servo
                                        Servo</b></button>
                                <h4 class="text-center text-success bg-primary py-3"><b>Menyala</b></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection