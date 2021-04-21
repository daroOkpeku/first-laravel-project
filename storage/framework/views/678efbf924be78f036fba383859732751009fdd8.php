
    
   
    


<?php $__env->startSection('content'); ?>
<div class="text-center pt-10">
<h2 class="text-2xl"><?php echo e($todo->title); ?></h2>
   <div><?php echo e($todo->description); ?></div>
</div>
<?php if($todo->steps->count() > 0): ?>
<div>
<?php $__currentLoopData = $todo->steps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p><?php echo e($step->step); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>
<div class="p-4">
<a href="<?php echo e(route('Todo.index')); ?>" class=" py-2 py-1 bg-blue-400 cursor-pointer rounded text-white"> <button type="button">Todos</button></a>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('Todo.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myself\resources\views/Todo/show.blade.php ENDPATH**/ ?>