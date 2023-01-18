<link href="{{ asset('css/form.css') }}" rel="stylesheet">

<title>Log in</title>
<h1 id="title" class="text-center">Log in</h1>
<form id="survey-form">
    @csrf
    <fieldset>
        <label id="email-label" for="email">Email
            <input id="email" type="email" class="form-control" placeholder="Enter your email" required value="{{old('email')}}"/>
        </label>
        <label id="password-label" for="password">Password
            <input id="password" type="password" class="form-control" placeholder="Enter your password" required value=""/>
        </label>
    </fieldset>
    <input id="submit" type="submit" value="Login" />
</form>
