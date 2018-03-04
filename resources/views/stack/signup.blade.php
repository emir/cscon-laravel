@extends('stack.app')

@section('content')
    <div class="container pos-vertical-center">
        <div class="row">
            <div class="col-md-7 col-lg-5">
                <h2>Kayıt Ol</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/kayit-ol" method="POST">
                    <div class="row">
                        @csrf

                        <div class="col-md-12">
                            <input name="name" type="text" placeholder="Name"/>
                        </div>

                        <div class="col-md-12">
                            <input name="email" type="text" placeholder="Email" />
                        </div>

                        <div class="col-md-12">
                            <input name="password" type="password" placeholder="Password" />
                        </div>

                        <div class="col-md-12">
                            <input name="password_confirmation" type="password" placeholder="Password Confirmation" />
                        </div>

                        <div class="col-md-12">
                            <button class="btn btn--primary type--uppercase" type="submit">Submit</button>
                        </div>
                    </div>
                    <!--end of row-->
                </form>

            </div>
        </div>
        <!--end of row-->
    </div>
@endsection
