<?php $__env->startSection('content'); ?>

    <div class="container w-25 border p-4 mt-4">
        <form action="<?php echo e(route('acceso-update', ['id'=> $usuario->id])); ?>" method="POST">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?> <!--toquen para seguridad de laravel-->
            <?php if(session('success')): ?>
                <h6 class="alert alert-success"><?php echo e(session('success')); ?></h6>
            <?php endif; ?>

            <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <h6 class="alert alert-danger"><?php echo e($message); ?></h6>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <div class="mb-3">
              <label for="name" class="form-label">Usuario</label>
              <input type="text" name="nombre"class="form-control" value="<?php echo e($usuario->nombre); ?>">
              <div id="emailHelp" class="form-text">No reveles tu nombre de usuario a nadie.</div>
            </div>

            <button type="submit" class="btn btn-primary">actualizar</button>
          </form>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ejemploclases\resources\views/paginas/show.blade.php ENDPATH**/ ?>