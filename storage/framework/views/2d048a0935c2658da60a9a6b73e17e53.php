
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />

    <style>
      .div_center
      {
        text-align: center;
        padding-top: 40px;
      }
      .font_size
      {
        font-size: 40px;
        padding: 40px;
      }
      .text_colour
      {
        padding-bottom: 20px;
      }
      label{
        display: inline-block;
        width: 200px;
      }
      .div_design
      {
        padding-bottom: 15px;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php echo $__env->make('admin.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <?php echo $__env->make('admin.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <!-- partial -->


        <div class="main-panel">
          <div class="content-wrapper">


            <?php if(session()->has('message')): ?>
            
            <div class="alert alert-success">

              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

              <?php echo e(session()->get('message')); ?>


            </div>

            <?php endif; ?>


            <div class="div_center">
              <h1 class="font_size" >Update Post</h1>

              <form action="<?php echo e(url('/update_post_confirm', $post->id)); ?>" method="POST" enctype="multipart/form-data">

              <?php echo csrf_field(); ?>

                <div class="div_design">
                  <label for="">Post title:</label>
                  <input class="text_colour" type="text" name="title" placeholder="Write a title"  required="" value="<?php echo e($post->title); ?>">
                </div>

                <div class="div_design">
                  <label for="">Post Description:</label>
                  <input class="text_colour" type="text" name="description" placeholder="Write a description"  required="" value="<?php echo e($post->description); ?>">
                </div>
                
                <div class="div_design">
                  <label for="">Post Category:</label>
                  <select class="text_colour" name="category" required="">
                    <option value="<?php echo e($post->category); ?>" selected="" ><?php echo e($post->category); ?></option>

                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value=""><?php echo e($category->category_name); ?></option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

                  </select>
                </div>

                <div class="div_design">
                  <label for="">Current Post Image:</label>
                  <img style="margin:auto;" height="100" width="100" src="/post/<?php echo e($post->image); ?>"                   alt="">             
                </div>

                <div class="div_design">
                  <label for="">Change Post Image:</label>
                  <input class="text_colour" type="file" name="image" placeholder="Write a title">
                </div>

                <div class="div_design">
                  <input type="submit" value="Update Post" class="btn btn-primary" >
                </div>
              
              </form>
            </div>
          </div>
        </div>

        
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html><?php /**PATH C:\Users\USER\OneDrive\Desktop\blog-app\resources\views/admin/update_post.blade.php ENDPATH**/ ?>