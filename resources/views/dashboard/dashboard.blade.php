@extends('layouts.admin-panel')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Users</h1>
      </div>

        <div class="table-responsive-md small">
          <table class="table table-striped table-hover text-center table-sm">
          <thead class="table-info">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Email verified at</th>
            </tr>
          </thead>
          <tbody>
            @forelse($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->email_verified_at}}</td>
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