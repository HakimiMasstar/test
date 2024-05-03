@extends('layouts.admin-panel')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a type="button" class="btn btn-sm btn-outline-secondary" href="{{route('datas.create')}}">Add New</a>
          </div>
        </div>
      </div>

        @if($message=Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <strong>Success</strong> {{$message}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="table-responsive-md small">
          <table class="table table-striped table-hover text-center table-sm">
          <thead class="table-info">
            <tr>
              <th scope="col">Timestamp</th>
              <th scope="col">Name</th>
              <th scope="col">ShapeColor</th>
              <th scope="col"><i class="bi bi-list"></i></th>
            </tr>
          </thead>
          <tbody>
            @forelse($datas as $data)
            <tr>
                <td>{{$data->updated_at}}</td>
                <td>{{$data->name}}</td>
                <!-- <td>{{$data->shape}} - {{$data->color}}</td> -->
                <td>
                    <svg width="20" height="20">
                        @if ($data->shape === 'triangle')
                            <polygon points="10,2 18,18 2,18" fill="{{ $data->color }}" />
                        @elseif ($data->shape === 'square')
                            <rect x="2" y="2" width="16" height="16" fill="{{ $data->color }}" />
                        @elseif ($data->shape === 'circle')
                            <circle cx="10" cy="10" r="8" fill="{{ $data->color }}" />
                        @endif
                    </svg>
                </td>
                <td>
                    <div class="d-inline-block">
                        <a type="button" class="btn btn-sm" href="{{ route('datas.edit', ['data' => $data->id]) }}">
                            <i class="bi bi-pencil-square" style="color: #01d28e;"></i>
                        </a>
                    </div>
                    <div class="d-inline-block">
                        <form method="post" action="{{ route('datas.destroy', ['data' => $data->id]) }}" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm">
                                <i class="bi bi-trash" style="color: red;"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4">No data available</td>
            </tr>
            @endforelse
          </tbody>
          </table>
        </div>

</main>

@endsection