<link href="<?php echo e(asset('css/form.css')); ?>" rel="stylesheet">

<title>Register</title>
<h1 id="title" class="text-center">Register</h1>
<form id="survey-form" method="post" action="/user/create">
    <?php echo csrf_field(); ?>
    <fieldset>
        <label id="name-label" for="name">Name
            <input name="name" type="text" class="form-control" placeholder="Enter your name" required
                   value="<?php echo e(old('name')); ?>"/>
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="errormessage"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </label>
        <label id="email-label" for="email">Email
            <input name="email" type="email" class="form-control" placeholder="Enter your email" required
                   value="<?php echo e(old('email')); ?>"/>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="errormessage"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </label>
        <label id="password-label" for="password">Password
            <input name="password" type="password" class="form-control" placeholder="Enter your password"
                   required/>
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="errormessage"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </label>
        <label id="password_confirmation-label" for="password_confirmation">Re-enter Password
            <input name="password_confirmation" type="password" class="form-control"
                   placeholder="Enter your password again"
                   required/>
            <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="errormessage"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </label>
    </fieldset>
    <input id="submit" type="submit" value="Register"/>
</form>
<p class="text-center">Already have an account? <a href="/login">Log in</a></p>
<?php /**PATH /home/ibrahim/Documents/WorkSpace/To-Do-List/resources/views/register.blade.php ENDPATH**/ ?>