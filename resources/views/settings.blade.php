@extends('master')

@section('content')

    <div class="row">
        {{ Form::open() }}
            <div class="row">
                <div class="col-md-6">
                    <select>
                        <option value="" disabled selected>Select a client</option>
                        @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->user }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <select>
                        <option value="" disabled selected>Select an exercise</option>
{{--                        @foreach($exercises as $exercise)--}}
{{--                            <option value="{{ $exercise->id }}">{{ $exercise->exercise_name }}</option>--}}
                        {{--@endforeach--}}
                        <option value="leg press">Leg press</option>
                        <option value="chest press">Chest press</option>
                        <option value="pull ups">Pull-ups</option>
                    </select>
                </div>
            </div>

            <button type="button" class="btn btn-block btn-warning waves-effect waves-light">Add!</button>
        {{ Form::close() }}
    </div>


@endsection