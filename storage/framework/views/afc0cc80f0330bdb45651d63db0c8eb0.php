

<?php $__env->startSection('tittle'); ?>
    -Lista
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php if(session('error')): ?>
        <div class="alert alert-danger">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>
<div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">EMPELADOS</h1>
        <a href="<?php echo e(route('empleados.create')); ?>" class="btn btn-success">
            <i class="fa-solid fa-plus"></i> Añadir
        </a>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>e-mail</th>
                        <th>Puesto</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e=> $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($e + 1); ?></td>
                            <td><?php echo e($row->nombre); ?></td>
                            <td><?php echo e($row->apellidos); ?></td>
                            <td><?php echo e($row->telefono); ?></td>
                            <td><?php echo e($row->email); ?></td>
                            <td><?php echo e(optional($row->puesto)->puesto); ?></td>
                            <td>
                                <a class="btn btn-primary" href="<?php echo e(route('empleados.edit', $row->id)); ?>">
                                    <i class="fa-solid fa-building"></i>
                                </a>
                            </td>
                            <td>
                                <form action="<?php echo e(route('empleados.destroy', $row->id)); ?>" method="POST" onsubmit="return confirm('¿Eliminar empleado?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ordinario\resources\views/Empleados/index.blade.php ENDPATH**/ ?>