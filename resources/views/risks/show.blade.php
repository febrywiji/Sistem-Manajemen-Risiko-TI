@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Risk Details</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row" style="width: 25%;">Title</th>
                        <td>{{ $risk->title }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Description</th>
                        <td>{{ $risk->description }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Severity</th>
                        <td>{{ $risk->severity }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Occurrence</th>
                        <td>{{ $risk->occurrence }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Detection</th>
                        <td>{{ $risk->detection }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Status</th>
                        <td>
                            <span style="
                                font-weight: bold;
                                color: white;
                                padding: 5px 10px;
                                border-radius: 5px;
                                background-color:
                                @switch($risk->status)
                                    @case(1)
                                        #DC3545
                                        @break
                                    @case(2)
                                        #FFC107
                                        @break
                                    @case(3)
                                        #198754
                                        @break
                                    @case(4)
                                        #0DCAF0
                                        @break
                                    @default
                                        black
                                @endswitch
                            ">
                                {{ \App\Models\Risk::$statusDescriptions[$risk->status] }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Risk Priority Number</th>
                        <td>{{ $risk->risk_priority_number }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Time Added</th>
                        <td>{{ $risk->time_added }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('risks.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection
