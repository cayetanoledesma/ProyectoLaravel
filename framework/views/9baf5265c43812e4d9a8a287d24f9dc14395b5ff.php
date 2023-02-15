<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php $__env->startSection('content'); ?>
<div class="container">
<h1>listado de alumnos</h1>
<br>
<a href="<?php echo e(url('alumno/create')); ?>">Registrar alumno</a>

<?php if(Session::has('mensaje')): ?>
<br>
<?php echo e(Session::get('mensaje')); ?>

<?php endif; ?>

<hr>


<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>foto</th>
            <th>nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Edad</th>
            <th>Direccion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

    <?php $__currentLoopData = $alumnos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <tr>
            <td><?php echo e($alumno->id); ?> </td>  
            <td><img src="<?php echo e(asset('storage') . '/' . $alumno->foto); ?>" width="200" /></td>
            <td><?php echo e($alumno->foto); ?></td>
            <td><?php echo e($alumno->nombre); ?></td>
            <td><?php echo e($alumno->apellido); ?></td>
            <td><?php echo e($alumno->email); ?></td>
            <td><?php echo e($alumno->edad); ?></td>
            <td><?php echo e($alumno->direccion); ?></td>
            <td> 
            <a href="<?php echo e(url('alumno/' . $alumno->id)); ?>">Ver</a>  
            <a href="<?php echo e(url('/alumno/' . $alumno->id . '/edit')); ?>">Editar </a> | 
                <form action="<?php echo e(url('alumno/' . $alumno->id)); ?>" method="post">
                <?php echo csrf_field(); ?> 
                <?php echo e(method_field('DELETE')); ?>

                <input type="submit" onclick = "return confirm('Se va a eliminar el usuario #<?php echo e($alumno->id); ?>')" value= "Borrar">
                </form>
        </td>
        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
</body>
</div>
<?php $__env->stopSection(); ?>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laratest2/resources/views/alumno/index.blade.php ENDPATH**/ ?>