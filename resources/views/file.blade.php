@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add file for: {{ $user->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['action' => 'UserFileController@save', 'files' => true]); !!}
					{!! Form::hidden('user_id', $user->id); !!}
						{!! Form::label('filename', 'Select File: '); !!}						
						{!! Form::file('filename'); !!}
						</br>
						</br>
						{!! Form::submit('Save', null, ['class'=>'btn-default']); !!}
   
					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
