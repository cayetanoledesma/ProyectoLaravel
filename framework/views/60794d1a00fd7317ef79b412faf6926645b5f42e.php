<?php $__env->startSection('content'); ?>
<div class="container">
Editar datos del alumno

<form  action="<?php echo e(url('/alumno/' . $alumno->id )); ?>"  method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <?php echo method_field('PUT'); ?>

    <?php echo $__env->make('alumno._field', ['modo' => 'Editar'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
</form>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laratest2/resources/views/alumno/edit.blade.php ENDPATH**/ ?>