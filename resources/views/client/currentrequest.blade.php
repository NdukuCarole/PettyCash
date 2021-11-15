@extends('layouts.client')
@section('content')
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th> Name</th>
        <th>Paybill</th>
        <th>Money</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
      <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->paybill }}</td>
      <td>{{ $user->money }}</td>
      <td>{{ (int)$user->approved_at == 0? "In Progess":"Approved" }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection