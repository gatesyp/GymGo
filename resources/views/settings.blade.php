@extends('master')

@section('content')

    <div class="row">
        {{ Form::open(array('action' => 'WorkoutController@store', 'method' => 'post')) }}
            <div class="row">
                <div class="col-md-6">
                    <select name="user_id">
                        <option value="" disabled selected>Select a client</option>
                        @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->user }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <select name="exercise_name">
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

            <button type="submit" class="btn btn-block btn-warning waves-effect waves-light">Add!</button>
        {{ Form::close() }}
    </div>


@endsection