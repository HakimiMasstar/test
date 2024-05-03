<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alphv - Assignment</title>

<!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

<!-- JavaScript (order matters, jQuery first then Bootstrap JS) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  </head>
  <body>

    <main>

      <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
          <div class="col-md-3 mb-2 mb-md-0">
            <a href="{{route('/')}}" class="d-inline-flex link-body-emphasis text-decoration-none">
              <i class="bi bi-hexagon-half"></i>
            </a>
          </div>

          @if(Auth::user()->is_admin == 1)
          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{route('datas.index')}}" class="nav-link px-2">Dashboard</a></li>
          </ul>
          @endif

          <div class="col-md-3 text-end">
            <form method="post" action="{{route('logout')}}">
            @csrf
              <button type="submit" class="btn btn-outline-primary me-2">Logout</button>
            </form>
          </div>
        </header>
      </div>

      <div class="p-5">
        <div class="table-responsive-md small">
          <table class="table table-striped table-hover text-center table-sm">
          <thead class="table-info">
            <tr>
              <th scope="col">Timestamp</th>
              <th scope="col">Name</th>
              <th scope="col">ShapeColor</th>
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
            </tr>
            @empty
            <tr>
                <td colspan="4">No data available</td>
            </tr>
            @endforelse
          </tbody>
          </table>
        </div>
      </div>

    </main>

    </body>
</html>
