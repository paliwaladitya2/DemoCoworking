@extends('dashboard.dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            <div>
                <h3>Company</h3>
                <p>{{ $issue->company }}</p>
            </div>
            <div>
                <h3>Floor</h3>
                <p>{{ $issue->floor }}</p>
            </div>
            <div>
                <h3>Name</h3>
                <p>{{ $issue->name }}</p>
            </div>
            <div>
                <h3>Seat</h3>
                <p>{{ $issue->seat }}</p>
            </div>
            <div>
                <h3>Department</h3>
                <p>{{ $issue->department }}</p>
            </div>
            <div>
                <h3>Title</h3>
                <p>{{ $issue->title }}</p>
            </div>
            <div>
                <h3>Description</h3>
                <p>{{ $issue->description }}</p>
            </div>
            @if($issue->image)
            <div>
                <h3>Image</h3>
                <img src="../images/issues/{{ $issue->image }}">
            </div>
            @endif
            <div>
                <h3>Email</h3>
                <p>{{ $issue->email }}</p>
            </div>
            <div>
                <h3>Number</h3>
                <p>{{ $issue->number }}</p>
            </div>
            <div>
                <h3>Date</h3>
                <p>{{ $issue->date }}</p>
            </div>
            <div>
                <h3>Priority</h3>
                <p>{{ $issue->priority }}</p>
            </div>
            <div>
                <h3>Status</h3>
                <p>{{ $issue->status }}</p>
            </div>
        </div>
    </div>
@endsection