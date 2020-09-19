@extends('index')
@section('title','Login')
@section('content')
<section class="uk-section uk-section-small">
    <form action="{{ url('/proses-login')}}" method="post">
        @csrf
        <div class="uk-container">
            <div class="uk-grid-medium " uk-grid>
                {{-- login form --}}

                <div class="uk-width-1-1 col-md-6 mx-auto uk-width-expand@m">
                    <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                        <header class="uk-card-header">
                            <h1 class="uk-h2">Login</h1>
                        </header>
                        <div class="uk-card-body">

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $item)
                                    <li>{{$item}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-lg"
                                    placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control input-lg"
                                    placeholder="Password">
                            </div>
                            <span class="button-checkbox">
                                <button type="button" class="btn" data-color="info">Remember Me</button>
                                <input type="checkbox" name="remember_me" id="remember_me" checked="checked"
                                    class="hidden">
                                <a href="" class="btn btn-link pull-right">Forgot Password?</a>
                            </span>
                            <hr class="colorgraph">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="submit" class="btn btn-md btn-primary btn-block" value="Sign In">
                                </div>
                            </div>
                            <br>
                            <div class="row" align="center">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <span>Don't have an account?</span>
                                    <a href="/register" class="Link Link--secondary">Create one</a>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>

            </div>
        </div>
    </form>
</section>

@endsection
