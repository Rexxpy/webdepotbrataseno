@extends('dashboard.layouts.main')

@section('container')
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My produk</h1>
   </div>   

   <div class="table-responsive col-lg-8">
     <a class="tambah, text-decoration-none" href="{{route( 'menu.create')}}">
      <button class="btn btn-primary btn-sm btn-dark"><i class="bi bi-file-earmark-plus"></i> Tambah data</button>
     </a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Harga</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; ?>
          @foreach ($menus as $men)
              
          <tr>
              <td>{{$no++}}</td>
              <td>{{$men->nama}}</td>
              <td>Rp. {{$men->harga}}</td>
              <td>{{$men->deskripsi}}</td>
              <td>
                <a href="{{route(
                  'menu.edit', [$men->id])}}" class="badge bg-info"><span data-feather="edit"></span>
                </a>
                
                <a href="{{route(
                    'menu.show', [$men->id])}}" class="badge bg-warning"><span data-feather="eye"></span>
                </a>

                <form action="/dashboard/menu/{{ $men->id }}" method="POST" class="d-inline">
                   @csrf
                   @method('delete')
                   <button class="badge bg-danger border-0"><span data-feather="trash-2"></span>
                 </form>
                </td>
                </tr>
            </tr>
            @endforeach
      </tbody>
    </table>
  </div>

@endsection