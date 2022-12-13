<?php include 'includes.php'; ?>
<?=template_header("SmartHR Dashboard");?>


                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Users</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <!-- <a class="small text-white stretched-link" href="#">View Details</a> -->
                                        <div class="small text-white">5</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Positions</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <!-- <a class="small text-white stretched-link" href="#">View Details</a> -->
                                        <div class="small text-white">10</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Employees</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <!-- <a class="small text-white stretched-link" href="#">View Details</a> -->
                                        <div class="small text-white">50</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">Departments</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <!-- <a class="small text-white stretched-link" href="#">View Details</a> -->
                                        <div class="small text-white">5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                             
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Employees By Departments
                                    </div>
                                    <div class="card-body">
                                       
                        <div id="container" width="100%" height="40"></div>
                                </div>
                            </div>
                        </div>
                             </div>
                        </div>
<?=template_footer();?>