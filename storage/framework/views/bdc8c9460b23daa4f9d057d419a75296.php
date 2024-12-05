

<?php $__env->startSection('title', 'Editar Empleado'); ?>

<?php $__env->startSection('body'); ?>
    <h1>Editar Empleado</h1>
    <form action="<?php echo e(route('empleados.update', $empleados->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="<?php echo e($empleados->nombre); ?>" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
            <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" value="<?php echo e($empleados->apellidos); ?>" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
            <input type="text" name="telefono" class="form-control" placeholder="Teléfono" value="<?php echo e($empleados->telefono); ?>" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
            <input type="email" name="email" class="form-control" placeholder="Correo Electrónico" value="<?php echo e($empleados->email); ?>" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
            <select name="puesto_id" class="form-control" required>
                <option value="">Seleccione un puesto</option>
                <?php $__currentLoopData = $puestos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $puesto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($puesto->id); ?>" <?php echo e($empleados->puesto_id == $puesto->id ? 'selected' : ''); ?>>
                        <?php echo e($puesto->puesto); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="<?php echo e(route('empleados.index')); ?>" class="btn btn-secondary">Cancelar</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ordinario\resources\views/empleados/edit.blade.php ENDPATH**/ ?>