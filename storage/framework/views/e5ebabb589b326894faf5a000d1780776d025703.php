<div class="container">
<div>
    <h2>Lista degli utenti</h2></div>
<div class="row justify-content-center">
    
        <div class="col-md-8">
                <?php $__currentLoopData = $utentiii; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $utente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <li> <a href="/utenti/<?php echo e($utente->id); ?>"><?php echo e($utente->name); ?> </a></li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  <a href="/create">Crea nuovo utente</a>
               
            </div>
        </div>
     </div>    
   
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel/resources/views/utenti.blade.php ENDPATH**/ ?>