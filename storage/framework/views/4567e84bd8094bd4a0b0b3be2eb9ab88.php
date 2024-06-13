
<!--====== Start Left Sidebar Section======-->
<section id="left-sidebar-area">
  <!--   Left Sidebar  -->
        <div id="left-sidebar-section">

          
            <aside>
              <div class="left-sidebar" id="wrapper-sidebar">
                <ul>
                  <li><a class="<?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>" href="<?php echo e(url('/dashboard')); ?>"><i class="material-icons">home</i>Панель</a></li>
                  <li><a  class="<?php echo e(request()->routeIs('adminEmployers') || request()->routeIs('adminEditEmp') ? 'active' : ''); ?>" href="<?php echo e(url('/dashboard/employers')); ?>"><i class="material-icons">supervisor_account</i>Компании</a></li>
                  <li><a  class="<?php echo e(request()->routeIs('adminCanTrash') || request()->routeIs('adminEditCan') || request()->routeIs('adminCandidates') ? 'active' : ''); ?>" href="<?php echo e(url('/dashboard/candidates')); ?>"><i class="material-icons">person</i>Кандидаты</a></li>
                  <li><a class="<?php echo e(request()->routeIs('adminEditCat') || request()->routeIs('adminCategory')? 'active' : ''); ?>" href="<?php echo e(route('adminCategory')); ?>"><i class="material-icons">format_align_center</i>Категории</a></li>
                  <li><a class="<?php echo e(request()->routeIs('adminShow') || request()->routeIs('adminEdit') || request()->routeIs('adminJobTrash') || request()->routeIs('adminJobs') || request()->routeIs('adminEdit') || request()->routeIs('adminShow') || request()->routeIs('adminCreate')   ? 'active' : ''); ?>" href="<?php echo e(url('/dashboard/jobs')); ?>"><i class="material-icons">business_center</i>Вакансии</a></li>
         
                  </ul>
              </div>  
            </aside>
        </div>
  <!--   Left Sidebar  -->
  </section>
<!--====== End Left Sidebar Section======-->
<?php /**PATH O:\OSPanel\domains\JobFinder-Job-Portal-Laravel-Vue-Script-main\resources\views////admin/partials/sidebar.blade.php ENDPATH**/ ?>