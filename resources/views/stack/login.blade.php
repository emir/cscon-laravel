@extends('stack.app')

@section('content')
<div class="container pos-vertical-center">
    <div class="row">
        <div class="col-md-7 col-lg-5">
            <h2>Giriş Yap</h2>

            <form>
                <div class="row">
                    <div class="col-md-12">
                        <input name="email" type="text" placeholder="Email" />
                    </div>
                    <div class="col-md-12">
                        <input name="password" type="password" placeholder="Password" />
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn--primary type--uppercase" type="submit">Login</button>
                    </div>
                </div>
                <!--end of row-->
            </form>
        </div>
    </div>
    <!--end of row-->
</div>
@endsection
