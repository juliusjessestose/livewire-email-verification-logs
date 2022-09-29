@extends('base')

@section('content')
    
<div class="container">
    <div class="card-body">
        <div class="card-header text-center">
            <h1>Activity Log</h1>
        </div>

        <div class="card-body">
            <table class="table table-striped text-center">
                <thead class="bg-info text-dark">
                    <tr>
                        <th>Timestamp</th>
                        <th>Log Entry</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($logs as $log)
                        <tr>
                            <td>{{$log->created_at}}</td>
                            <td>{{$log->log_entry}}</td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection