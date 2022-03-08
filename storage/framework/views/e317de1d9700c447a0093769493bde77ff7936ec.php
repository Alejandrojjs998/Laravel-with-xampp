<?php $__env->startSection('content'); ?>

    <div class="container w-25 border p-4 mt-4">
        <form action="<?php echo e(route('acceso')); ?>" method="POST">
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
              <input type="text" name="nombre"class="form-control">
              <div id="emailHelp" class="form-text">No reveles tu nombre de usuario a nadie.</div>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
          <div>
              <?php $counter=0 ?>

             <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <?php
             $counter++;

             ?>
                <div class="row py-1">
                    <div class="col-md-9 d-flex aling-items-center"><!--Metodo para editar por clave valor-->
                        <a href="<?php echo e(route('acceso-edit', ['id' => $usuario->id])); ?>"><?php echo e($usuario->nombre); ?></a>
                    </div>
                    <div class="col-md-3 d-flex justify-content-end"><!--Metodo para borrar por solamente el valor-->
                    <form action="<?php echo e(route('acceso-destroy', [$usuario->id])); ?>" method="POST">
                    <?php echo method_field('DELETE'); ?><!--Auque no exita en html con este metodo el formulario sera de tipo delete en vez de post-->
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                    </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <h6>El numero total de usuarios es: <?php echo e($counter); ?></h6>
          </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ejemploclases\resources\views/paginas/index.blade.php ENDPATH**/ ?>