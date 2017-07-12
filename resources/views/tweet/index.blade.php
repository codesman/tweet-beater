@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-1">
            <div class="col-md-12">
                <button>Add A Tweet</button>
                <button>Upload Tweets</button>
                <button>Schedule Tweets</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Tweet List</div>

                    <div class="panel-body">
                        @if (!empty($tweets))
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>{{ $table_headers['subject'] }}</th>
                                    <th>{{ $table_headers['url'] }}</th>
                                    <th>{{ $table_headers['image'] }}</th>
                                </tr>
                                </thead>
                                <tr>
                                    @foreach($tweets as $tweet)
                                        <td>{{ $tweet->subject }}</td>
                                        <td><a href="{{ $tweet->url }}">{{ $tweet->url }}</a></td>
                                        <td><a href=""><img src="http://placehold.it/22/22"></a></td>
                                    @endforeach
                                </tr>
                            </table>
                        @else
                            No Tweets :(
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
