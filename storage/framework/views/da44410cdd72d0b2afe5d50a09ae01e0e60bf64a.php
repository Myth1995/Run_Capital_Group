

<?php $__env->startSection('title'); ?>General <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/date-picker.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owlcarousel.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/prism.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/whether-icon.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
<style>
        table.dataTable.display tbody tr td:first-child, td:nth-child(5) {
            font-weight: bold;
        }
        table.dataTable.display tbody tr td:nth-child(2) {
            color: #24695C;
        }
        table.dataTable.display tbody tr td:last-child {
            display: flex;
            border-bottom: none;
        }
        table.dataTable.display tbody tr td:last-child img {
            margin: auto;
        }
        .blog-box.blog-list a img {
            width: 80px;
            height: 80px;
            border-radius: 10px;
        }
        .blog-list .blog-details h6:hover {
            transform: scale(1.05);
        }
        .cal-date-widget .blog-box.blog-list {
            display: flex;
            flex-direction: row;
        }
        .more-btn-panel {
            display: flex;
            border-radius: 0 0 10px 10px;
        }
        .more-btn-panel:hover {
            /*background-color: #a4a4a4;*/
        }
        .more-btn {
            margin: auto;
            cursor: default;
        }
        .more-btn:hover {
            /*background-color: #a4a4a4;*/
        }
        .post-preview-title {
            font-weight: bolder;
        }
        .recipient-body {
            display: flex;
            justify-content: space-between;
        }
        .dataTables_length#row-select-multiple_length {
            display: none;
        }
    }
</style>
<?php $__env->stopPush(); ?>
    <?php $__env->startSection('content'); ?>
        <?php
            $totalAry = [
                [
                    "name" => "Tiger Nixon",
                    "position" => "System Architect",
                    "invoiceID" => "#123412451",
                    "startDate" => "2011/04/25",
                    "salary" => "$320,800",
                ],
                [
                    "name" => "Garrett Winters",
                    "position" => "Accountant",
                    "invoiceID" => "#123412451",
                    "startDate" => "2011/07/25",
                    "salary" => "$170,750",
                ],
                [
                    "name" => "Ashton Cox",
                    "position" => "Junior Technical Author",
                    "invoiceID" => "#123412451",
                    "startDate" => "2009/01/12",
                    "salary" => "$86,000",
                ],
                [
                    "name" => "Cedric Kelly",
                    "position" => "Senior Javascript Developer",
                    "invoiceID" => "#123412451",
                    "startDate" => "2012/03/29",
                    "salary" => "$433,060",
                ],
                [
                    "name" => "Airi Satou",
                    "position" => "Accountant",
                    "invoiceID" => "#123412451",
                    "startDate" => "2008/11/28",
                    "salary" => "$162,700",
                ],
                [
                    "name" => "Brielle Williamson",
                    "position" => "Integration Specialist",
                    "invoiceID" => "#123412451",
                    "startDate" => "2012/12/02",
                    "salary" => "$372,000",
                ],
                [
                    "name" => "Haley Kennedy",
                    "position" => "Senior Marketing Designer",
                    "invoiceID" => "#123412451",
                    "startDate" => "2012/12/18",
                    "salary" => "$313,500",
                ],
                [
                    "name" => "Tatyana Fitzpatrick",
                    "position" => "Regional Director",
                    "invoiceID" => "#123412451",
                    "startDate" => "2010/03/17",
                    "salary" => "$385,750",
                ],
                [
                    "name" => "Michael Silva",
                    "position" => "Marketing Designer",
                    "invoiceID" => "#123412451",
                    "startDate" => "2012/11/27",
                    "salary" => "$198,500",
                ]
            ];
            $ary = $totalAry;
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-primary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <!--<div class="align-self-center text-center"><i data-feather="database"></i></div>-->
                                <img src="<?php echo e(asset('assets/images/dashboard/box1.png')); ?>" alt="" height="70px" class="mr-4" />
                                <div class="media-body">
                                    <span class="m-0">Depositos</span>
                                    <h4 class="mb-0">$0.00</h4>
                                    <i class="icon-bg">
                                        <img src="<?php echo e(asset('assets/images/dashboard/box1.png')); ?>" alt="" height="100px" class="mr-4" />
                                    </i>
                                    <!--<i class="icon-bg" data-feather="database"></i>-->
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-secondary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <!--<div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>-->
                                <img src="<?php echo e(asset('assets/images/dashboard/box2.png')); ?>" alt="" height="70px"/>
                                <div class="media-body">
                                    <span class="m-0">Retiros</span>
                                    <h4 class="mb-0">$0.00</h4>
                                    <i class="icon-bg">
                                        <img src="<?php echo e(asset('assets/images/dashboard/box2.png')); ?>" alt="" height="100px" />
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-primary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <!--<div class="align-self-center text-center"><i data-feather="message-circle"></i></div>-->
                                <img src="<?php echo e(asset('assets/images/dashboard/box3.png')); ?>" alt="" height="70px" class="mr-4" />
                                <div class="media-body">
                                    <span class="m-0">Activos</span>
                                    <h4 class="mb-0">$0.00</h4>
                                    <i class="icon-bg">
                                        <img src="<?php echo e(asset('assets/images/dashboard/box3.png')); ?>" alt="" height="100px" />
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-primary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <!--<div class="align-self-center text-center"><i data-feather="user-plus"></i></div>-->
                                <img src="<?php echo e(asset('assets/images/dashboard/box4.png')); ?>" alt="" height="70px" class="mr-4" />
                                <div class="media-body">
                                    <span class="m-0">Pendientes</span>
                                    <h4 class="mb-0">$0.00</h4>
                                    <i class="icon-bg">
                                        <img src="<?php echo e(asset('assets/images/dashboard/box4.png')); ?>" alt="" height="100px" />
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 xl-100 box-col-12">
                    <div class="card">
                        <div class="cal-date-widget card-body">
                            <div class="row">
                                <div class="col-xl-6 col-xs-12 col-md-12 col-sm-12">
                                    <div class="card profile-greeting">
                                        <div class="card-header p-t-10">
                                            <div class="header-top">
                                                <div class="setting-list bg-primary position-unset">
                                                    <ul class="list-unstyled setting-option">
                                                        <li>
                                                            <div class="setting-white"><i class="icon-settings"></i></div>
                                                        </li>
                                                        <li><i class="view-html fa fa-code font-white"></i></li>
                                                        <li><i class="icofont icofont-maximize full-card font-white"></i></li>
                                                        <li><i class="icofont icofont-minus minimize-card font-white"></i></li>
                                                        <li><i class="icofont icofont-refresh reload-card font-white"></i></li>
                                                        <li><i class="icofont icofont-error close-card font-white"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body text-center p-t-0 p-b-10">
                                            <h3 class="font-light">Welcome Back, John!!</h3>
                                            <p>We are glad that you are visite this dashboard. we will be happy to help you grow your business.</p>
                                        </div>
                                        <div class="confetti">
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                        </div>
                                    </div>
                                    <div class="card b-r-10 m-b-0 m-t-55">
                                        <h4 class="post-preview-title m-t-5 m-b-15 m-l-20" style="color: white; ">Run Binary Blog</h4>
                                        <div class="m-b-20" style="height: 3px; background-color: #152731;"></div>
                                        <div class="row m-l-10">
                        	                <div class="col-xl-12 col-md-6 m-b-10">
                    	                        <div class="blog-box blog-list col-md-10">
                    	                            <div class="m-r-20">
                    	                                <div class="blog-wrraper">
                    	                                    <a href="blog-single.html"><img class="img-fluid sm-100-wp p-0" src="<?php echo e(asset('assets/images/blog/blog1.png')); ?>" alt="" /></a>
                    	                                </div>
                    	                            </div>
                    	                            <div class="col-xs-8">
                    	                                <div class="blog-details">
                                                            <a href="learning-detailed.html"> <h6>Maximize risk adjusted returns with IML </h6></a>
                    	                                    <div class="blog-date">02 December 2021</div>
                    	                                </div>
                    	                            </div>
                    	                        </div>
                        	                </div>
                        	                <div class="col-xl-12 col-md-6 m-b-10">
                    	                        <div class="blog-box blog-list col-md-10">
                    	                            <div class="m-r-20">
                    	                                <div class="blog-wrraper">
                    	                                    <a href="blog-single.html"><img class="img-fluid sm-100-w p-0" src="<?php echo e(asset('assets/images/blog/blog2.png')); ?>" alt="" /></a>
                    	                                </div>
                    	                            </div>
                    	                            <div class="col-xs-8">
                    	                                <div class="blog-details">
                                                            <a href="learning-detailed.html"> <h6>Maximize risk adjusted returns with IML</h6></a>
                    	                                    <div class="blog-date">03 December 2021</div>
                    	                                </div>
                    	                            </div>
                    	                        </div>
                        	                </div>
                        	                <div class="col-xl-12 col-md-6 m-b-10">
                    	                        <div class="blog-box blog-list col-md-10">
                    	                            <div class="m-r-20">
                    	                                <div class="blog-wrraper">
                    	                                    <a href="blog-single.html"><img class="img-fluid sm-100-w p-0" src="<?php echo e(asset('assets/images/blog/blog3.png')); ?>" alt="" /></a>
                    	                                </div>
                    	                            </div>
                    	                            <div class="col-xs-8">
                    	                                <div class="blog-details">
                                                            <a href="learning-detailed.html"> <h6>Maximize risk adjusted returns with IML</h6></a>
                    	                                    <div class="blog-date">04 December 2021</div>
                    	                                </div>
                    	                            </div>
                    	                        </div>
                        	                </div>
                        	            </div>
                    	                <div class="col-xl-12 col-xs-12 more-btn-panel" style="justify-content: center; padding: 10px 0;">
                    	                    <span>Leer mas</span>
                    	                </div>
                    	            </div>
                                </div>
                                <div class="col-xl-6 col-xs-12 col-md-12 col-sm-12">
                                    <div class="card m-b-10">
                                        <div class="card-body pb-0">
                                            <h4 class="card-title">Last Month Summary</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Item</th>
                                                                <th scope="col">Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Portable Speaker</td>
                                                                <td class="font-weight-bold text-success">+ $1200</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Portable Headphone</td>
                                                                <td class="text-success">In Stock</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Speaker</td>
                                                                <td class="text-danger">Out of stock</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Watch</td>
                                                                <td class="text-warning">Low stock</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Portable Headphone</td>
                                                                <td class="font-weight-bold">In Stock</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="chart-wrapper">
                                                        <div id="echart_dashboard" style="height: 300px; width: 100%;">
                                                    </div>
                                                    <button class="btn btn-light" style="padding: 0.3rem 1.3rem;position: absolute;right: 10px;bottom: 15px;">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="card m-t-10 m-l-10 p-10">
                                        <h5>Recipients</h4>
                                        <div class="recipient-body">
                                            <div style="display: flex;">
                                                <img class="img-60 rounded-circle" src="<?php echo e(asset('assets/images/user/1.jpg')); ?>" style="height: 60px;" alt="#">
                                                <div class="m-l-10">
                                                    <h6>Samuel Bro</h6>
                                                    <div>info@example.com</div>
                                                </div>
                                            </div>
                                            <div class="p-10 b-r-10" style="display: flex; border: 2px solid #1EAAE7;">
                                                <i class="icofont icofont-telephone m-r-10" style="font-size: 30px; color: #1EAAE7;"></i>
                                                <div style="font-size: 10px; color: #1EAAE7">
                                                    <div>Telepon</div>
                                                    <div>+91 123-456-7890</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <div class="col-xl-12 xl-100 box-col-12">
                    <div class="card">
                        <div class="cal-date-widget card-body">
                                    <div class="col-sm-12">
                        	            <div class="card">
                        	                <div class="card-header">
                        	                    <h5>Payment History</h5>
                        	                </div>
                        	                <div style="display: flex; padding-left: 30px; position: absolute; top: 120px; z-index: 8;">
                	                            <button class="btn btn-primary mb-3 m-r-10" onClick="tableShow(1)">Transacciones Generales</button>
                                                <!-- <a class="btn btn-success" href="<?php echo e(url('table-data/2')); ?>" >Transacciones Generales</a> -->
                	                            <button class="btn btn-secondary mb-3" onClick="tableShow(2)">Mis Propias Transacciones</button>
                	                        </div>
                        	                <div class="card-body table-panel">
                                                <div class="table-responsive">
                        	                       <?php echo $__env->make('admin/dashboard/table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                </div>
                        	                </div>
                        	            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php $__env->startPush('scripts'); ?>    
        <script type="text/javascript">
            // $(document).ready(function() {
            //     tableShow()
            // });
            function tableShow(i) {
                $.get('/table-data/'+i, function(result) {
                    $('div.table-responsive table tbody').empty();
                    $('div.table-responsive table tbody').fadeOut();
                    let data = result;
                    data.map(function(value, index) {
                        let tr = $("<tr><td>"+data[index].name+"</td><td>"+data[index].position+"</td><td>"+data[index].invoiceID+"</td><td>"+data[index].startDate+"</td><td>"+data[index].salary+`</td><td><img src="<?php echo e(asset('assets/images/dashboard/datatable_check.png')); ?>" alt="" height="20px"/></td></tr>`);
                        $('div.table-responsive table tbody').append(tr);
                    });
                    $('div.table-responsive table tbody').fadeIn();
                    console.log(data);
                });
            }
        </script>
        <script src="<?php echo e(asset('assets/js/echart.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/prism/prism.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/clipboard/clipboard.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/counter/jquery.waypoints.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/counter/jquery.counterup.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/counter/counter-custom.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/custom-card/custom-card.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.en.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.custom.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/owlcarousel/owl.carousel.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/general-widget.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/height-equal.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Project12_7\Run Capital Group\resources\views/admin/dashboard/default.blade.php ENDPATH**/ ?>