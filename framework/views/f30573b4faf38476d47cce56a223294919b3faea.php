<?php $__env->startSection('content'); ?>
<div class="container">
Formulario de creación de alumno
<form action="<?php echo e(url('/alumno')); ?>" method="Post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
   <?php echo $__env->make('alumno._field', ['modo'=> 'Crear'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</form>


</div>
<?php $__env->stopSection(); ?>
<!-- 
  
 -->

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laratest2/resources/views/alumno/create.blade.php ENDPATH**/ ?>