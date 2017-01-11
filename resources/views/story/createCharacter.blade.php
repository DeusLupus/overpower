@extends('layouts.app')

@section('content')
<div class="container">

    <div>
        <h3>Create Your Character</h3>
    </div>

    <form>
        <div class="form-group">
            <label for="characterName">Character Name</label>
            <input type="text" class="form-control" id="characterName" placeholder="Character Name">
        </div>

        <form>
            <div class="row">
                <div class="col-xs-4">
                    <input type="radio" name="gender" value="male" checked> Male<br>
                </div>
                <div class="col-xs-4">
                    <input type="radio" name="gender" value="female"> Female<br>
                </div>
                <div class="col-xs-4">
                    <input type="radio" name="gender" value="other"> Other
                </div>
            </div>
        </form>

        <div class="row">
            <div class="col-lg-6">
                <button type="button" class="btn btn-default">Generate Stats</button>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>

</div>

@endsection