

<?php $__env->startSection('container'); ?>

    <style>
        .img{
            text-align: center;
        }
        a:link {
            color: #fae100;
            background-color: transparent;
            text-decoration: none;
        }
        a:hover {
            color: rgb(66, 66, 66);
            background-color: transparent;
            text-decoration: none;
        }

        a:active {
            color: #fae100;
            background-color: transparent;
            text-decoration: none;
        }
    </style>


    <div class="img mt-5">
        <img class="mb-3" src="../image/Asset 2.png" alt="" width="10%">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <?php if(session()->has('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif; ?>

            <?php if(session()->has('loginError')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo e(session('loginError')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif; ?>

            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center text-light"><strong>Login</strong></h1>
                <form action="/login" method="POST">
                 <?php echo csrf_field(); ?>
                    <div class="form-floating">
                    <input type="email" class="form-control" name="email" <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> id="email" placeholder="name@example.com" autofocus required value="<?php echo e(old('email')); ?>">
                    <label for="email">Email address</label>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    </div>

                    <div class="checkbox mb-3">
                    </div>
                    <button class="w-100 btn btn-lg  btn-outline-warning" type="submit">
                        Log in</button>
                </form>
            </main>
        </div>
    </div>
 
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.mainlogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\andik\Documents\app\proyekeas\resources\views/login/index.blade.php ENDPATH**/ ?>