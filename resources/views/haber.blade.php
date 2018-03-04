@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $haber->title }}</div>

                    <div class="card-body">
                        <p>{{ $haber->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Yorumlar</div>

                    @if(auth()->check())
                    <div class="card-body">
                        <form action="/yorumlar" method="POST">
                            @csrf
                            <textarea name="comment" id="" cols="30" rows="10"></textarea>

                            <input name="news_id" type="hidden" value="{{ $haber->id }}">

                            <button type="submit">Gönder</button>
                        </form>
                    </div>
                    @else
                        <p>@lang('cscon.need_login')</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
