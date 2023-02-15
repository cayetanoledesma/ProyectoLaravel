<?php $__env->startSection('content'); ?>
<div class="container">
 <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="<?php echo e($alumno->nombre ?? ''); ?>">
    <br>
    <label for="apellido">Apellidos</label>
    <input type="text" name="apellido" id="apellido" value="<?php echo e($alumno->apellido ?? ''); ?>">
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="<?php echo e($alumno->email ?? ''); ?>">
    <br>
    <label for="edad">Edad</label>
    <input type="number" name="edad" id="edad" value="<?php echo e($alumno->edad ?? ''); ?>">
    <br>
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" id="direccion" value="<?php echo e($alumno->direccion ?? ''); ?>">
    <br>
    <?php if(isset($alumno->foto)): ?>
    <img src="<?php echo e(asset('storage') . '/' . $alumno->foto); ?>" width="200" >
    <br/>
    <?php endif; ?>
    <label for="foto">Foto</label>
    <input type="file" name="foto" id="foto">
    <br>
    <input type="submit" value="<?php echo e($modo); ?> alumno " >
    <a href="<?php echo e(url('alumno')); ?>">Volver</a>

</div>
<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laratest2/resources/views/alumno/_field.blade.php ENDPATH**/ ?>