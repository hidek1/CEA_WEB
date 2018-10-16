@extends('layouts.bookingdash')

@section('title')
    View Rooms
@endsection

@section('search')
    <form class="navbar-form navbar-left">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search Room">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
    </form>
@endsection

@section('content')
    <h2><i class="fa fa-bed"></i> View Rooms</h2>
    <hr>
    @include('errors.errors')
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Type Number</th>
            <th>Type Room</th>
            <th>Gender</th>
            <th>Category</th>
            <th>Start Date</th>
            <th>End Date #</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($rooms as $room)
            <tr>
                <td>{{ $room->roomnumber }}</td>
                <td>{{ $room->typeofroom }}</td>
                <td>{{ $room->gender }}</td>
                <td>{{ $room->group }}</td>
                <td>{{ $room->start_date }}</td>
                <td>{{ $room->end_date }}</td>
                <td>
                    @if ($room->status)
                        <span class="label label-primary">Available</span>
                    @else
                        <span class="label label-danger">Not Available</span>
                    @endif
                </td>
                <td>
                    {!! Form::open(['route'=>['rooms.destroy', $room->id], 'method'=>'DELETE']) !!}
                    {!! link_to_route('rooms.edit', '',[$room->id],['class'=>'fa fa-pencil btn btn-primary btn-sm']) !!}
                    {!! link_to_route('rooms.show', '',[$room->id],['class'=>'fa fa-bars btn btn-success btn-sm']) !!}
                    {{ Form::button('', ['type'=>'submit','class'=>'btn btn-danger btn-sm fa fa-trash','onclick'=>'return confirm("Are you sure you want to delete this?")']) }}
                    {!! Form::close() !!}
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
@endsection
