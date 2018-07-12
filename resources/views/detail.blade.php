@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Detail for {{ $user->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                          <tr>
                              <th>Comments &nbsp; <a href="../comment/{{ $user->id }}" class="btn btn-info" role="button" >Add Comment</a>
                          </tr>
                          @foreach($comments as $key => $value)
                            <tr>
                              <td> {{ $value->title }}: {{ $value->body }}</td>
                            </tr>
                          @endforeach
                      
						<tr>
                              <th>Files &nbsp; <a href="../file/{{ $user->id }}" class="btn btn-info" role="button">Add File</a></th>
                          </tr>
                          @foreach($files as $key => $value)
                            <tr>
                              <td><a href="../download/{{ $value->filename }}" > {{ $value->filename }}</a></td>
                            </tr>
                          @endforeach
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
