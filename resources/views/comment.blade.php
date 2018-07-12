@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add comment for: {{ $user->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['action' => 'UserCommentController@save']); !!}
					{!! Form::hidden('user_id', $user->id); !!}
						{!! Form::label('title', 'Comment Title: '); !!}						
						{!! Form::text('title'); !!}
						</br>
						{!! Form::label('title', 'Comment Body: '); !!}						
						{!! Form::textarea('body',null,['class'=>'form-control', 'rows' => 4, 'cols' => 20]); !!}
						</br>
						{!! Form::submit('Save', null, ['class'=>'btn-default']); !!}
   
					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
