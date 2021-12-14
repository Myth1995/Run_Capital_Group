

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
            background-color: #a4a4a4;
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
    }
</style>
<?php $__env->stopPush(); ?>
    <?php $__env->startSection('content'); ?>        
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
                        	                    <!--<div class="card">-->
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
                        	                    <!--</div>-->
                        	                </div>
                        	                <div class="col-xl-12 col-md-6 m-b-10">
                        	                    <!--<div class="card">-->
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
                        	                    <!--</div>-->
                        	                </div>
                        	                <div class="col-xl-12 col-md-6 m-b-10">
                        	                    <!--<div class="card">-->
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
                        	                    <!--</div>-->
                        	                </div>
                        	            </div>
                    	                <div class="col-xl-12 col-xs-12 more-btn-panel">
                    	                    <button class="btn more-btn col-xl-5" style="font-size: 17px; color: white;">Leer mas</button>
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
                <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-sm-12">
        	            <div class="card">
        	                <div class="card-header">
        	                    <h5>Payment History</h5>
        	                    <span style="display: none;">
        	                        It can be useful to provide the user with the option to select rows in a DataTable. This can be done by using a click event to add / remove a class on the table rows. The
        	                        <code class="api" title="DataTables API method">rows().data()</code>method can then be used to get the data for the selected rows. In this case it is simply counting the number of selected rows, but much more complex
        	                        interactions can easily be developed.
        	                    </span>
        	                </div>
        	                <div class="card-body">
        	                    <div class="table-responsive">
        	                        <button class="btn btn-primary mb-3" id="multiple-row-select-btn">Row count</button>
        	                        <table class="display" id="row-select-multiple">
        	                            <thead>
        	                                <tr>
        	                                    <th>Name</th>
        	                                    <th>Position</th>
        	                                    <th>Invoicd ID</th>
        	                                    <th>Start date</th>
        	                                    <th>Salary</th>
        	                                    <th></th>
        	                                </tr>
        	                            </thead>
        	                            <tbody>
        	                                <tr>
        	                                    <td>Tiger Nixon</td>
        	                                    <td>System Architect</td>
        	                                    <td>#123412451</td>
        	                                    <td>2011/04/25</td>
        	                                    <td>$320,800</td>
        	                                    <td onClick="checkBoxClick()"><img src="<?php echo e(asset('assets/images/dashboard/datatable_check.png')); ?>" alt="" height="20px" /></td>
        	                                </tr>
        	                                <tr>
        	                                    <td>Garrett Winters</td>
        	                                    <td>Accountant</td>
        	                                    <td>#123412451</td>
        	                                    <td>2011/07/25</td>
        	                                    <td>$170,750</td>
        	                                    <td><img src="<?php echo e(asset('assets/images/dashboard/datatable_check.png')); ?>" alt="" height="20px" /></td>
        	                                </tr>
        	                                <tr>
        	                                    <td>Ashton Cox</td>
        	                                    <td>Junior Technical Author</td>
        	                                    <td>#123412451</td>
        	                                    <td>2009/01/12</td>
        	                                    <td>$86,000</td>
        	                                    <td><img src="<?php echo e(asset('assets/images/dashboard/datatable_check.png')); ?>" alt="" height="20px" /></td>
        	                                </tr>
        	                                <tr>
        	                                    <td>Cedric Kelly</td>
        	                                    <td>Senior Javascript Developer</td>
        	                                    <td>#123412451</td>
        	                                    <td>2012/03/29</td>
        	                                    <td>$433,060</td>
        	                                    <td><img src="<?php echo e(asset('assets/images/dashboard/datatable_check.png')); ?>" alt="" height="20px" /></td>
        	                                </tr>
        	                                <tr>
        	                                    <td>Airi Satou</td>
        	                                    <td>Accountant</td>
        	                                    <td>#123412451</td>
        	                                    <td>2008/11/28</td>
        	                                    <td>$162,700</td>
        	                                    <td><img src="<?php echo e(asset('assets/images/dashboard/datatable_check.png')); ?>" alt="" height="20px" /></td>
        	                                </tr>
        	                                <tr>
        	                                    <td>Brielle Williamson</td>
        	                                    <td>Integration Specialist</td>
        	                                    <td>#123412451</td>
        	                                    <td>2012/12/02</td>
        	                                    <td>$372,000</td>
        	                                    <td><img src="<?php echo e(asset('assets/images/dashboard/datatable_check.png')); ?>" alt="" height="20px" /></td>
        	                                </tr>	                                
        	                                <tr>
        	                                    <td>Haley Kennedy</td>
        	                                    <td>Senior Marketing Designer</td>
        	                                    <td>#123412451</td>
        	                                    <td>2012/12/18</td>
        	                                    <td>$313,500</td>
        	                                    <td><img src="<?php echo e(asset('assets/images/dashboard/datatable_check.png')); ?>" alt="" height="20px" /></td>
        	                                </tr>
        	                                <tr>
        	                                    <td>Tatyana Fitzpatrick</td>
        	                                    <td>Regional Director</td>
        	                                    <td>#123412451</td>
        	                                    <td>2010/03/17</td>
        	                                    <td>$385,750</td>
        	                                    <td><img src="<?php echo e(asset('assets/images/dashboard/datatable_check.png')); ?>" alt="" height="20px" /></td>
        	                                </tr>
        	                                <tr>
        	                                    <td>Michael Silva</td>
        	                                    <td>Marketing Designer</td>
        	                                    <td>#123412451</td>
        	                                    <td>2012/11/27</td>
        	                                    <td>$198,500</td>
        	                                    <td><img src="<?php echo e(asset('assets/images/dashboard/datatable_check.png')); ?>" alt="" height="20px" /></td>
        	                                </tr>
        	                            </tbody>
        	                            <tfoot>
        	                                <tr>
        	                                    <th>Name</th>
        	                                    <th>Position</th>
        	                                    <th>Office</th>
        	                                    <th>Invoice ID</th>
        	                                    <th>Start date</th>
        	                                    <th>Salary</th>
        	                                </tr>
        	                            </tfoot>
        	                        </table>
        	                    </div>
        	                </div>
        	            </div>
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
        <script>
            function checkBoxClick(bool bFlag) {
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