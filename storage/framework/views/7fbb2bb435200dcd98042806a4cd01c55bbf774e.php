
<?php $__env->startSection('content'); ?>
<div class="text-center pt-10 "  >
<div class="flex justify-center  border-b pb-4">
<h1 class="text-2x1">All Todos</h1>
<a href="/Todo/create" class="mx-5 py-2  text-blue-400 cursor-pointer  text-white"><i class="fa fa-plus-circle"></i></a>
</div>
  <?php if (isset($component)) { $__componentOriginal4740823ddc83f319e9f73c46afc164f00725b17a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Upload::class, []); ?>
<?php $component->withName('upload'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal4740823ddc83f319e9f73c46afc164f00725b17a)): ?>
<?php $component = $__componentOriginal4740823ddc83f319e9f73c46afc164f00725b17a; ?>
<?php unset($__componentOriginal4740823ddc83f319e9f73c46afc164f00725b17a); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
 <ul class="my-5">
 <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <li class="flex justify-between p-2"> 
 
    <?php echo $__env->make('Todo.buttons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
 
 <?php if($todo->completed): ?>
 <p class="line-through"><?php echo e($todo->title); ?> </p>
 <?php else: ?> 
 <a  class="cursor-pointer" href="<?php echo e('/Todo/'.$todo->id.'/show'); ?>"><?php echo e($todo->title); ?> </a>
 <?php endif; ?>
 <!--.$todo->id. to passed variable through the url   -->
 <div>
 <a href="<?php echo e('/Todo/'.$todo->id.'/edit'); ?>" class=" py-1 px-1 bg-blue-400 cursor-pointer rounded text-white"><i class="fa fa-edit px-2"></i></a>
<span  class="fa fa-trash text-red-300 px-2" onclick="event.preventDefault();
if(confirm('do you really want to delete this todo')){
document.getElementById('form-delete-<?php echo e($todo->id); ?>').submit()
}
"></span>
 <form style="display:none"  id="<?php echo e('form-delete-'.$todo->id); ?>" method="post" action="<?php echo e(route('Todo.deleteTodo', $todo->id)); ?>"  >
   <?php echo csrf_field(); ?>
    <?php echo method_field('delete'); ?>
  </form>
 </div>
 </li>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </ul>
 </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Todo.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myself\resources\views/Todo/index.blade.php ENDPATH**/ ?>