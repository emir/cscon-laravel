@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Haberler</div>

                    <div class="card-body">
                        <ul>
                            @foreach($haberler as $haber)
                                <li><a href="/haber/{{ $haber->id }}">{{ $haber->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
