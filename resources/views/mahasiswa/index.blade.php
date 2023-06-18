@extends('mahasiswa.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row">
        <div class="col-md-5">
            <form action="{{ route('mahasiswa.index') }}" method="GET">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search..." value="{{request('search')}}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-info" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>No_Handphone</th>
            <th width="290px">Action</th>
        </tr>
        @foreach ($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs->Nim }}</td>
            <td>{{ $mhs->Nama }}</td>
            <td>{{ $mhs->kelas->nama_kelas }}</td>
            <td>{{ $mhs->Jurusan }}</td>
            <td>{{ $mhs->No_Handphone }}</td>
            <td>
            <form action="{{ route('mahasiswa.destroy',$mhs->Nim) }}" method="POST">

                <a class="btn btn-info" href="{{ route('mahasiswa.show',$mhs->Nim) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$mhs->Nim) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                <a class="btn btn-warning" href="{{ route('mahasiswa.nilai', $mhs->Nim) }}">Nilai</a>
            </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $mahasiswa->links() }}
@endsection
