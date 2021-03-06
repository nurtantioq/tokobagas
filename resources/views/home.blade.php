@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">New Dashboard</div>

                    <div class="panel-body">
                        <div class="row">
                            @foreach($ads as $ad)
                                <div class="col-xs-6 col-lg-4">
                                    <h2>{{ $ad->name }}</h2>
                                    <p>
                                        {{ $ad->category->name }} <br>
                                        {{ $ad->location }} <br>
                                        {{ price($ad->price) }}
                                    </p>
                                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                                </div><!--/.col-xs-6.col-lg-4-->
                            @endforeach
                        </div>
                        <div class="row">
                            {{ $ads->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
