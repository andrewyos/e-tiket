
           
                <h2 class="ml-3 mt-2"><b>Jam : <?php echo date('H.i') ?> WIB</b></h2>
                
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Total Customer</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?= $this->db->count_all('user'); ?></h2>
                                    <p class="text-white mb-0"><?= date('D, d M Y') ?></p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Total Film Tayang</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?= $this->db->count_all('film'); ?></h2>
                                    <p class="text-white mb-0"><?= date('D, d M Y') ?></p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-film"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Total Theater</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">27</h2>
                                    <p class="text-white mb-0"><?= date('D, d M Y') ?></p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Customer Satisfaction</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">99%</h2>
                                    <p class="text-white mb-0"><?= date('D, d M Y') ?></p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>
                        </div>
                    </div> -->
                </div>


                
            </div>
            <!-- #/ container -->