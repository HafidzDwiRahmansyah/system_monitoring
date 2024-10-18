@extends('template.interface2')
@section('title', 'Tambah User')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="container">
                        <h4 class="text-center py-2">Add Coffe</h4>
                        <form action="/user_add_new" method="post">
                            <table class="table">
                                <thead>
                                    <th>No</th>
                                    <th>Nama Coffe</th>
                                    <th></th>
                                    <th>No</th>
                                </thead>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection