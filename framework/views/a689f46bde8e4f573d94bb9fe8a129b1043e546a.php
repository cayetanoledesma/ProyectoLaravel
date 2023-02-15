<?php $__env->startSection('content'); ?>
<div class="container">

datos del alumno <a href="<?php echo e(url('alumno')); ?>">Volver</a>

<hr>
<?php echo e($alumno->nombre . ' ' . $alumno->apellido); ?>

<br>

Edad: <?php echo e($alumno->edad); ?>


<br>

Direccion: <?php echo e($alumno->direccion); ?>


<br>

Email: 
<a href="mailto: <?php echo e($alumno->email); ?>" title="Enviar un mensaje">
    <?php echo e($alumno->email); ?>

</a>

<br>

<img src="<?php echo e(asset('storage') . '/' . $alumno->foto); ?>"/>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laratest2/resources/views/alumno/show.blade.php ENDPATH**/ ?>