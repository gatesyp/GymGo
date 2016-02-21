@extends('master')

@section('content')

    <form class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <legend>Add CapitalOne Bank</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">First name</label>
                <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="John" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Last Name</label>
                <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="Smith" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Address</label>
                <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="3910 Kent Road" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">City</label>
                <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="Stow" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">State</label>
                <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="Ohio" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Zip</label>
                <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="44224" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Bank Account Number</label>
                <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="290190875" class="form-control input-md">

                </div>
            </div>

            <button type="submit" class="btn btn-block btn-warning waves-effect waves-light">Add my bank!</button>
        </fieldset>
    </form>

@endsection