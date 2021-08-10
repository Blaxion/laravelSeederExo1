@extends('layout.index')
@section('main')
    <p class='text-center mt-5 directory display-4'>Here you can update Membre</p>
    <section>
        <div class="container mt-5">
            <form action="/membre/{{$edit->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" value='{{$edit->name}}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Age</label>
                    <input type="number" name="age" value='{{$edit->age}}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                    <input type="tel" name="phone" pattern="[0-9]{4}/[0-9]{2}.[0-9]{2}.[0-9]{2}" value='{{$edit->phone}}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mail</label>
                    <input type="email" name="mail" value='{{$edit->mail}}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection