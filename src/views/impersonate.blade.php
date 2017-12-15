@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Impersonate</div>

                <div class="panel-body">

                    <form action="{{ route('admin.impersonate') }}" method="POST">

                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">Email Address</label>
                            <input id="email" name="email" type="" class="form-control" placeholder="Email address of user you want to impersonate">

                            @if($errors->has('email'))
                            <div class="help-block">
                                {{ $errors->first('email') }}
                            </div>

                            @endif

                        </div>

                        <button type="submit" class="btn btn-primary">Start impersonating</button>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
