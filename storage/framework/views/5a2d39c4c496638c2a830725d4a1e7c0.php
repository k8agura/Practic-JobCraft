
    <?php echo $__env->make('frontend/partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontend/partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
    <?php echo $__env->make('frontend/partials.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontend/partials.category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    



    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
            <h2 class="mb-5 h3">Последние опубикованные вакансии</h2>
            <div class="rounded border jobs-wrap">

          
              <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            

              <a href="<?php echo e(route('job.show', [$job->id, $job->slug])); ?>" class="job-item d-block d-md-flex align-items-center  border-bottom  
                
                <?php if($job->type =='fulltime'): ?>         
                fulltime
                <?php elseif($job->type =='freelance'): ?> 
                freelance  
                <?php elseif($job->type =='partime'): ?>   
                partime  
                <?php elseif($job->type =='remote'): ?>   
                remote
                <?php endif; ?>

                ">
                <?php if($job->company->logo ?? ''): ?>
                <div class="company-logo blank-logo text-center text-md-left pl-3">
                  <img src="<?php echo e(asset('/uploads/logo')); ?>/<?php echo e($job->company->logo  ?? ''); ?>" alt="Image" class="img-fluid mx-auto">
                </div>
                <?php endif; ?>
                <div class="job-details h-100">
                  <div class="p-3 align-self-center">
                    <h3><?php echo e($job->title); ?></h3>
                    <div class="d-block d-lg-flex">
                      <div class="mr-3"><span class="icon-suitcase mr-1"></span> <?php echo e(Str::limit($job->position, 20)); ?></div>
                      <div class="mr-3"><span class="icon-room mr-1"></span> <?php echo e(Str::limit($job->address, 20)); ?></div>
                      <div><span class="icon-money mr-1"></span> $<?php echo e($job->salary); ?></div>
                      
                    </div>
                  </div>
                </div>
                <div class="job-category align-self-center">
                  <div class="p-3">
                    <span class=" p-2 rounded border 

                    <?php if($job->type =='fulltime'): ?>         
                    text-info  border-info
                    <?php elseif($job->type =='freelance'): ?> 
                    text-warning   border-warning
                    <?php elseif($job->type =='partime'): ?>   
                    text-danger   border-danger
                    
                    <?php elseif($job->type =='remote'): ?>   
                    text-dark   border-dark
                    <?php endif; ?>
                    
                    "><?php echo e(Str::ucfirst($job->type)); ?></span>
                  </div>
                </div>  
              </a>


              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




            </div>

            <div class="col-md-12 text-center mt-5">
              <a href="<?php echo e(route('alljobs')); ?>" class="btn btn-primary rounded py-3 px-5"><span class="icon-plus-circle"></span>Больше вакансий</a>
            </div>
          </div>
    
        </div>
      </div>
    </div>

    <?php echo $__env->make('frontend/partials.testimonial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frontend/partials.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frontend/partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH O:\OSPanel\domains\JobFinder-Job-Portal-Laravel-Vue-Script-main\resources\views/welcome.blade.php ENDPATH**/ ?>