<div>
 <?php if($todo->completed): ?>
 <span  class="fa fa-check text-green-300 px-2" onclick="event.preventDefault(); document.getElementById('form-incomplete-<?php echo e($todo->id); ?>').submit()"></span>
 <form style="display:none"  id="<?php echo e('form-incomplete-'.$todo->id); ?>" method="post" action="<?php echo e(route('Todo.incomplete', $todo->id)); ?>"  >
   <?php echo csrf_field(); ?>
    <?php echo method_field('patch'); ?>
  </form>
 <?php else: ?>
  <span class="fa fa-check text-gray-300 cursor-pointer px-2" onclick="event.preventDefault(); document.getElementById('form-complete-<?php echo e($todo->id); ?>').submit()" ></span>
  <form style="display:none"  id="<?php echo e('form-complete-'.$todo->id); ?>" method="post" action="<?php echo e(route('Todo.complete', $todo->id)); ?>"  >
   <?php echo csrf_field(); ?>
    <?php echo method_field('patch'); ?>
  </form>
  <?php endif; ?>
 </div><?php /**PATH C:\xampp\htdocs\myself\resources\views/Todo/buttons.blade.php ENDPATH**/ ?>