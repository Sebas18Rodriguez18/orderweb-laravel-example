<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <link href="<?php echo e(asset('css/sb-admin-2.min.css')); ?>" rel="stylesheet"> 
    <link href="<?php echo e(asset('datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

</head>
<body id="page-top">
    <div id="wrapper">
        <?php echo $__env->make('templates/nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                        
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?php echo $__env->make('templates/topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Bienvenido </h1>                            
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"><?php echo $__env->yieldContent('header'); ?></h6>
                                </div>

                                <div class="card-body">
                                    <!-- aqui se insertan las paginas que heredan de este template -->
                                    <?php echo $__env->yieldContent('content'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->                    

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php echo $__env->make('templates/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->


    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="<?php echo e(asset('jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('jquery-easing/jquery.easing.min.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
    <script src="<?php echo e(asset('js/sb-admin-2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('datatables/dataTables.bootstrap4.min.js')); ?>"></script>     
    
    <?php echo $__env->yieldContent('scripts'); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\orderweb-laravel-example\orderweb\resources\views/templates/base.blade.php ENDPATH**/ ?>