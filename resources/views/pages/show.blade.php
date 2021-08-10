@extends('layout.index')
@section('main')
    <p class='text-center mt-5 directory display-4'>Here is Member's preview</p>
    <section>
        <div class="container mt-5">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">
                            <p class="card-text">Name: {{$show->name}}</p>
                            <p class="card-text">Age: {{$show->age}}</p>
                            <p class="card-text">Mail: {{$show->mail}}</p>
                            <p class="card-text">Phone: {{$show->phone}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection