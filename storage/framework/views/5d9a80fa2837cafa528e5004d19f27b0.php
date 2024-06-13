<?php $__env->startSection('content'); ?>
<div style="height: 94px;"></div>

<div class="unit-5 overlay" style="background-image: url(<?php echo e(asset('external/images/hero_2.jpg')); ?>);">
  <div class="container text-center">
    <h1 class="mb-0" style="    color: #fff;
    font-size: 2.5rem;">Отклики</h1>
    <p class="mb-0 unit-6"><a href="/">На главную</a> <span class="sep"> > <a href="<?php echo e(route('alljobs')); ?>">Вакансии</a> </span> <span><span class="sep m-0"> ></span> Сохранённые вакансии</span></p>
  </div>
</div>

<div class="site-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <?php if(Auth::user()->user_type=='seeker'): ?>
                    <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card mb-3">
                            <div class="card-header"><h5>название: <?php echo e($job->title); ?></h5></div>

                            <div class="card-body">
                                <small class="badge bg-secondary badge-primary mb-2">Должность: <?php echo e($job->position); ?></small>
                                <p>Описание: <?php echo e($job->description); ?></p>
                            </div>
                            <div class="card-footer">
                                <span><a href="<?php echo e(route('job.show', [$job->id, $job->slug])); ?>" class="btn-sm btn btn-primary">Вакансия</a></span>
                                <span class="float-end">Последняя дата : <?php echo e($job->last_date); ?></span>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\OSPanel\domains\JobFinder-Job-Portal-Laravel-Vue-Script-main\resources\views/home.blade.php ENDPATH**/ ?>