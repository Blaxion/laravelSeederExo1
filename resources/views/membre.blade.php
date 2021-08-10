@extends('layout.index')
@section('main')
    <a class="btn btn-success" href="membre/create">CREATE</a>
    <form action="membre/wipe" method='POST'>
        @csrf
        @method('DELETE')
        <button class="btn btn-danger ">Delete All</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Age</th>
                <th scope="col">Email</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Utilities</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($membres as $membre)
                <tr>
                    <th scope="row">{{ $membre->id }}</th>
                    <td>{{ $membre->name }}</td>
                    <td>{{ $membre->age }}</td>
                    <td>{{ $membre->mail }}</td>
                    <td>{{ $membre->phone }}</td>
                    <td>
                        <a class="btn btn-info " href="membre/{{ $membre->id }}">SHOW</a>
                        <form action="membre/{{ $membre->id }}" method='POST'>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger ">DELETE</button>
                        </form>
                        <a class="btn btn-warning " href="membre/{{ $membre->id }}/edit">EDIT</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
