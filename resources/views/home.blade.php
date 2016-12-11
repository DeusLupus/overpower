@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome {{Auth::user()->name}}</div>

                <div class="panel-body">
                    You are logged in!
                </div>

                <h1>OverPower Hub <small>Your base of Operations</small></h1>
            </div>

            <div class="content">
                <div class="row">

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="..." alt="...">
                            <div class="caption">
                                <h3>Collection</h3>
                                <p>Under Construction</p>
                                <p><a href="#" class="btn btn-primary" role="button">View</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="..." alt="...">
                            <div class="caption">
                                <h3>Story</h3>
                                <p>...</p>
                                <p><a href="#" class="btn btn-primary" role="button">Create your Legend</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="..." alt="...">
                            <div class="caption">
                                <h3>Versus</h3>
                                <p>Under Construction</p>
                                <p><a href="#" class="btn btn-primary" role="button">Kick some ...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
