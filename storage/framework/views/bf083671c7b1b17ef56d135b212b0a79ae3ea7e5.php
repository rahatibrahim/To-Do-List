<link href="<?php echo e(asset('css/form.css')); ?>" rel="stylesheet">

<title>Log in</title>

<div class="header">
    <div class="home-container">
        <a href="/" class="home-link">Home</a>
    </div>
</div>
<h1 id="title" class="text-center">Log in</h1>
<form id="survey-form" method="post" action="/user/authenticate">
    <?php echo csrf_field(); ?>
    <fieldset>
        <label id="email-label" for="email">Email
            <input name="email" type="email" class="form-control" placeholder="Enter your email" required
                   value="<?php echo e(old('email')); ?>"/>
        </label>
        <label id="password-label" for="password">Password
            <input name="password" type="password" class="form-control" placeholder="Enter your password" required
                   value=""/>
            <?php if($errors->has('message')): ?>
                <div class="errormessage">
                    <?php echo e($errors->first('message')); ?>

                </div>
            <?php endif; ?>
        </label>
    </fieldset>
    <input id="submit" type="submit" value="Login"/>
</form>
<p class="text-center">Don't have an account yet! <a href="/register">Register</a> for an account.</p>
<?php /**PATH /home/ibrahim/Documents/WorkSpace/To-Do-List/resources/views/login.blade.php ENDPATH**/ ?>