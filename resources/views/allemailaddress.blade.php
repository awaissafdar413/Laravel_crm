@extends('layouts.appp')
@section('content')
<div class="container" style="margin-top: 5%">
    <br>
    <br>
    <a href="{{ route('deleteallemailaddress') }}" class="btn btn-danger">Delete All Address</a>
    <a href="{{ route('insertemail') }}" class="btn btn-success">Insert Your address</a>
    <br>
    <br>
    <table class="table">
        <tr>
            <th><strong>ID</strong></th>
            <th><strong>Email</strong></th>

        </tr>
        @foreach ($datas as $data )
        <tr>
            {{-- <td>{{ $data->id }} </td> --}}
            <td>{{ $loop->iteration }} </td>
            <td>{{ $data->email }}</td>
        </tr>
        @endforeach
    </table>
    {{ $datas->links() }}
</div>
@endsection
