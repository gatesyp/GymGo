@extends('master')

@section('content')

    <div class="row">
        <form class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <select>
                        <option value="" disabled selected>Select a client</option>
                        <option value="1">Matt</option>
                        <option value="2">Frank</option>
                        <option value="3">Steve</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select multiple="multiple">
                        <option value="" disabled selected>Select an exercise</option>
                        <option value="1">Leg press</option>
                        <option value="2">Chest press</option>
                        <option value="3">Pull-ups</option>
                    </select>
                </div>
            </div>

            <button type="button" class="btn btn-block btn-warning waves-effect waves-light">Add!</button>
        </form>
    </div>


@endsection