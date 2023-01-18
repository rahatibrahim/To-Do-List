<link href="{{ asset('css/form.css') }}" rel="stylesheet">

<title>Log in</title>

<div class="header">
    <div class="home-container">
        <a href="/" class="auth-link">Home</a>
    </div>
</div>
<h1 id="title" class="text-center">Log in</h1>
<form id="survey-form" method="post" action="/user/authenticate">
    @csrf
    <fieldset>
        <label id="email-label" for="email">Email
            <input name="email" type="email" class="form-control" placeholder="Enter your email" required
                   value="{{old('email')}}"/>
        </label>
        <label id="password-label" for="password">Password
            <input name="password" type="password" class="form-control" placeholder="Enter your password" required
                   value=""/>
            @if($errors->has('message'))
                <div class="errormessage">
                    {{ $errors->first('message') }}
                </div>
            @endif
        </label>
    </fieldset>
    <input id="submit" type="submit" value="Login"/>
</form>
<p class="text-center">Don't have an account yet! <a href="/register">Register</a> for an account.</p>
