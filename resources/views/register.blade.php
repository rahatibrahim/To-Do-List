<link href="{{ asset('css/form.css') }}" rel="stylesheet">

<title>Register</title>
<h1 id="title" class="text-center">Register</h1>
<form id="survey-form" method="post" action="/user/create">
    @csrf
    <fieldset>
        <label id="name-label" for="name">Name
            <input name="name" type="text" class="form-control" placeholder="Enter your name" required
                   value="{{old('name')}}"/>
            @error('name')
            <p class="errormessage">{{ $message }}</p>
            @enderror
        </label>
        <label id="email-label" for="email">Email
            <input name="email" type="email" class="form-control" placeholder="Enter your email" required
                   value="{{old('email')}}"/>
            @error('email')
            <p class="errormessage">{{ $message }}</p>
            @enderror
        </label>
        <label id="password-label" for="password">Password
            <input name="password" type="password" class="form-control" placeholder="Enter your password"
                   required/>
            @error('password')
            <p class="errormessage">{{ $message }}</p>
            @enderror
        </label>
        <label id="password_confirmation-label" for="password_confirmation">Re-enter Password
            <input name="password_confirmation" type="password" class="form-control"
                   placeholder="Enter your password again"
                   required/>
            @error('password_confirmation')
            <p class="errormessage">{{ $message }}</p>
            @enderror
        </label>
    </fieldset>
    <input id="submit" type="submit" value="Register"/>
</form>
<p class="text-center">Already have an account? <a href="/login">Log in</a></p>
