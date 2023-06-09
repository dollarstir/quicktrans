<?php
mainchecker('admin', 'login');

involve('stafffunctions');

begin('App Settings'); ?>

<body class="crm_body_bg">



<?php staffsidebar(); ?>


    <section class="main_content dashboard_part">

    <?php staffheader(); ?>

        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_box mb_30">
                            <div class="box_header ">
                                <div class="main-title">
                                    <h3 class="mb-0">Site Settings</h3>
                                </div>
                            </div>
                            <form class="editapp">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Site Name </label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="appname" value="<?php app('appname'); ?>">
                                </div>

                                    <img src="yolkassets/upload/<?php  app('applogo'); ?>" alt="" style="width:200px;height:100px;">

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Site Logo</label>
                                    <input type="file" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="applogo">
                                </div>



                                <img src="yolkassets/upload/<?php app('favicon'); ?>" alt="" style="width:200px;height:100px;">

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Favicon (png only)</label>
                                    <input type="file" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="favicon">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Footer text</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="appfooter" value="<?php app('appfooter'); ?>">
                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Contact Number</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="appcontact" value="<?php app('appcontact'); ?>"> 
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Contact Email</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="appemail" value="<?php app('appemail'); ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Contact Adress </label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="appaddress" value="<?php app('appaddress'); ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">About App </label>
                                    <textarea  class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="appabout"><?php app('appabout'); ?></textarea>
                                </div>
                                


                                <button type="submit" class="btn btn-primary"> Save </button>
                                
                            </form>
                        </div>
                    </div>
                    
                    
                </div>
            </div>

            <div class="footer_part">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer_iner text-center">
                            <p>2020 © Moveit <a href="#"> <i class="ti-heart"></i> </a><a href="#">
                                    Admin</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>



    <script src="back/js/jquery1-3.4.1.min.js"></script>

    <script src="back/js/popper1.min.js"></script>

    <script src="back/js/bootstrap1.min.js"></script>

    <script src="back/js/metisMenu.js"></script>

    <script src="back/vendors/count_up/jquery.waypoints.min.js"></script>

    <script src="back/vendors/chartlist/Chart.min.js"></script>

    <script src="back/vendors/count_up/jquery.counterup.min.js"></script>

    <script src="back/vendors/swiper_slider/js/swiper.min.js"></script>

    <script src="back/vendors/niceselect/js/jquery.nice-select.min.js"></script>

    <script src="back/vendors/owl_carousel/js/owl.carousel.min.js"></script>

    <script src="back/vendors/gijgo/gijgo.min.js"></script>

    <script src="back/vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="back/vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="back/vendors/datatable/js/dataTables.buttons.min.js"></script>
    <script src="back/vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="back/vendors/datatable/js/jszip.min.js"></script>
    <script src="back/vendors/datatable/js/pdfmake.min.js"></script>
    <script src="back/vendors/datatable/js/vfs_fonts.js"></script>
    <script src="back/vendors/datatable/js/buttons.html5.min.js"></script>
    <script src="back/vendors/datatable/js/buttons.print.min.js"></script>
    <script src="back/js/chart.min.js"></script>

    <script src="back/vendors/progressbar/jquery.barfiller.js"></script>

    <script src="back/vendors/tagsinput/tagsinput.js"></script>

    <script src="back/vendors/text_editor/summernote-bs4.js"></script>
    <script src="back/vendors/apex_chart/apexcharts.js"></script>
    
    <?php echo Yolk::uicore('jsa'); ?>
    <script src="back/js/custom.js"></script>
    <script src="processor/processor.js"></script>
</body>

</html>