<?php include "header.php" ?>

            <!-- main content -->
            <section class="main-content">

                <!-- content wrapper -->
                <div class="content-wrap">

                    <!-- inner content wrapper -->
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-md-4">
                                <!-- profile information sidebar -->

                                <div class="panel overflow-hidden no-b profile p15">



                                    <div class="row mb25">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-8">
                                                    
                                                    <h4 class="mb0"><?php echo $nickname ?></h4>
                                                    <small></small>

                                                    <h6 class="mt15 mb15"><?php echo $group ?></h6>
                                                    <ul class="user-meta">
                                                        <li>
                                                            <i class="ti-email mr5"></i>
                                                            <span><?php echo $email ?></span>
                                                        </li>
                                                        <li>
                                                            <i class="ti-world mr5"></i>
                                                            <a href="javascript:;">www.example.com</a>
                                                        </li>
                                                        <li>
                                                            <i class="ti-settings mr5"></i>
                                                            <a href="editprofile.php">Edit Profile</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                
                                                <div class="col-xs-12 col-sm-4 text-center">
                                                    <figure>
                                                        <img src="<?php echo $profile_pic; ?>" alt="" class="avatar avatar-lg img-circle avatar-bordered">
                                                        
                                                        <!--<div class="small mt10">Account Usage</div>
                                                        <div class="progress progress-xs mt5 mb5">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                            </div>
                                                        </div>
                                                        <small>234 / 879</small>-->
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 mt25 text-center bt">
                                            <div class="col-xs-12 col-sm-4">
                                                <h2 class="mb0"><b>23,8K</b></h2> 
                                                <small>Followers</small>
                                            </div>
                                            <div class="col-xs-12 col-sm-4">
                                                <h2 class="mb0"><b>569</b></h2> 
                                                <small>Following</small>
                                            </div>
                                            <div class="col-xs-12 col-sm-4">
                                                <h2 class="mb0"><b>67</b></h2> 
                                                <small>Posts</small>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="row mb15">
                                        <div class="col-xs-12">
                                            <h6 class="heading-font">About Gerald Morris</h6>
                                            <p>Gary, a mere mortal man of 25. Likes skipping rope and playing with small fluffy cute toys. Enjoys the occasional UI/UX Design.</p>
                                        </div>

                                        <div class="col-xs-12 mt15">
                                            <h6 class="heading-font">Social Profiles</h6>
                                            <div class="mt10 mb10">
                                                <a class="btn btn-social btn-xs btn-facebook mr5" href="http://www.facebook.com/<?php echo $user_facebook ?>"><i class="fa fa-facebook"></i>Facebook </a>
                                                <a class="btn btn-social btn-xs btn-twitter mr5" href="http://www.twitter.com/<?php echo $user_twitter ?>"><i class="fa fa-twitter"></i>Twitter </a>
                                                <a class="btn btn-social btn-xs btn-github mr5"><i class="fa fa-github"></i>Github </a>
                                            </div>
                                        </div>

                                    </div>

                                    <a href="javascript:;" class="text-muted">
                                        <i class="fa fa-globe mr15"></i>www.garystone.co</a>
                                </div>

                                <!-- /profile information sidebar -->
                            </div>
                            <div class="col-md-4 mb25">

                                <section class="panel bordered">
                                    <form>
                                        <textarea placeholder="What's on your mind" rows="2" class="form-control no-b"></textarea>
                                    </form>

                                    <div class="panel-footer clearfix no-b">
                                        <div class="pull-left">
                                            <button class="btn bg-none btn-sm" type="button">
                                                <i class="ti-camera"></i>
                                            </button>
                                            <button class="btn bg-none btn-sm" type="button">
                                                <i class="ti-video-camera"></i>
                                            </button>
                                            <button class="btn bg-none btn-sm" type="button">
                                                <i class="ti-time"></i>
                                            </button>
                                        </div>
                                        <div class="pull-right">
                                            <button class="btn btn-danger btn-sm">&nbsp;&nbsp;&nbsp;Post&nbsp;&nbsp;&nbsp;</button>
                                        </div>
                                    </div>
                                </section>






                                <section class="panel bordered  post-comments">


                                    <div class="media p15">
                                        <a class="pull-left" href="javascript:;">
                                            <img class="media-object avatar avatar-sm" src="img/faceless.jpg" alt="">
                                        </a>
                                        <div class="comment">
                                            <div class="comment-author h6 no-m">
                                                <a href="javascript:;"><b>Jane Doe</b></a>
                                            </div>
                                            <div class="comment-meta small">MAY 2014, 19:20</div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Frater et T. Sed ad bona praeterita redeamus.
                                            </p>
                                            <p class="small">
                                                <a href="javascript:;" class="text-muted mr10"><i class="ti-comment mr5"></i>Comment</a>
                                                <a href="javascript:;" class="text-muted mr10"><i class="ti-share mr5"></i>Share</a>
                                                <a href="javascript:;" class="mr10 text-danger"><i class="ti-heart mr5"></i>Like</a>
                                                <a href="javascript:;" class="text-muted mr10"><i class="ti-more mr5"></i>More</a>
                                                <i class="ti-bookmark text-warning" data-toggle="tooltip" data-original-title="View tags"></i>
                                            </p>
                                            <hr>

                                            <div class="media">
                                                <a class="pull-left" href="javascript:;">
                                                    <img class="media-object avatar avatar-sm" src="img/faceless.jpg" alt="">
                                                </a>
                                                <div class="comment">
                                                    <div class="comment-author h6 no-m">
                                                        <a href="javascript:;"><b>John Doe</b></a>
                                                    </div>
                                                    <div class="comment-meta small">MAY 2014, 22:04</div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Frater et T. Sed ad bona praeterita redeamus.
                                                    </p>
                                                    <p class="small">
                                                        <a href="javascript:;" class="text-muted mr10"><i class="ti-comment mr5"></i>Comment</a>
                                                        <a href="javascript:;" class="text-muted mr10"><i class="ti-share mr5"></i>Share</a>
                                                        <a href="javascript:;" class="mr10 text-danger"><i class="ti-heart mr5"></i>Like</a>
                                                        <a href="javascript:;" class="text-muted mr10"><i class="ti-more mr5"></i>More</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <!--end media-->
                                            <hr>
                                            <div class="media">
                                                <a class="pull-left" href="javascript:;">
                                                    <img class="media-object avatar avatar-sm" src="img/faceless.jpg" alt="">
                                                </a>
                                                <div class="comment">
                                                    <div class="comment-author h6 no-m">
                                                        <a href="javascript:;"><b>Jane Doe</b></a>
                                                    </div>
                                                    <div class="comment-meta small">10 JUNE 2014, 07:28</div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Frater et T. Sed ad bona praeterita redeamus.
                                                    </p>
                                                    <p class="small">
                                                        <a href="javascript:;" class="text-muted mr10"><i class="ti-comment mr5"></i>Comment</a>
                                                        <a href="javascript:;" class="text-muted mr10"><i class="ti-share mr5"></i>Share</a>
                                                        <a href="javascript:;" class="mr10 text-danger"><i class="ti-heart mr5"></i>Like</a>
                                                        <a href="javascript:;" class="text-muted mr10"><i class="ti-more mr5"></i>More</a>
                                                    </p>
                                                </div>
                                                <hr>
                                                <!--end media-->
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="pull-left" href="javascript:;">
                                                <img class="media-object avatar avatar-sm" src="img/faceless.jpg" alt="">
                                            </a>
                                            <div class="comment">
                                                <div class="comment-author h6 no-m">
                                                    <a href="javascript:;"><b>Jane Doe</b></a>
                                                </div>
                                                <div class="comment-meta small">18 JUNE 2014, 19:20</div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Frater et T. Sed ad bona praeterita redeamus.
                                                </p>
                                                <p class="small">
                                                    <a href="javascript:;" class="text-muted mr10"><i class="ti-comment mr5"></i>Comment</a>
                                                    <a href="javascript:;" class="text-muted mr10"><i class="ti-share mr5"></i>Share</a>
                                                    <a href="javascript:;" class="mr10 text-danger"><i class="ti-heart mr5"></i>Like</a>
                                                    <a href="javascript:;" class="text-muted mr10"><i class="ti-more mr5"></i>More</a>
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="panel-footer">
                                        <form role="form" class="form-horizontal">
                                            <div class="form-group no-m">
                                                <div class="input-group">
                                                    <input type="text" class="form-control input-sm no-border" placeholder="Join the conversation">
                                                    <span class="input-group-btn">
                                                    <button class="btn btn-default btn-sm" type="button">POST</button>
                                                </span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </section>

                            </div>

                            <div class="col-md-4">

                                <section class="panel panel-primary bg-primary">
                                    <div class="panel-body">
                                        <a href="javascript:;" class="pull-left mr15">
                                            <img src="img/faceless.jpg" class="avatar avatar-md bordered img-circle" alt="">
                                        </a>
                                        <div class="overflow-hidden">
                                            <b>Gerald Morris</b>
                                            <small class="pull-right">Yesterday, 13:48</small>
                                            <div class="show small">San Francisco, CA</div>
                                            <div class="mt15"></div>
                                            <blockquote class="small no-m no-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Frater et T. Sed ad bona praeterita redeamus.</blockquote>
                                        </div>
                                    </div>
                                </section>



                                <section class="panel panel-default">
                                    <header class="panel-heading">
                                        <div class="pull-right">
                                            <a class="mr5" href="javascript:;">
                                                <i class="ti-info-alt"></i>
                                            </a>
                                            <a href="javascript:;">
                                                <i class="ti-settings"></i>
                                            </a>
                                        </div>
                                        <span class="small text-uppercase">
                                        Quick Chat
                                    </span>
                                    </header>
                                    <div class="panel-body no-p">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="chat-user">
                                                    <a href="javascript:;" class="user-avatar">
                                                        <img src="img/faceless.jpg" class="avatar avatar-sm img-circle" alt="">
                                                        <div class="status bg-danger"></div>
                                                    </a>
                                                    <div class="user-details">
                                                        <p>Brandon Cruz</p>
                                                        <small class="user-department">Human Resources</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="chat-user">
                                                    <a href="javascript:;" class="user-avatar">
                                                        <img src="img/faceless.jpg" class="avatar avatar-sm img-circle" alt="">
                                                        <div class="status bg-primary"></div>
                                                    </a>
                                                    <div class="user-details">
                                                        <p>Harold Brown</p>
                                                        <small class="user-department">Human Resources</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt15">
                                            <div class="col-sm-6">
                                                <div class="chat-user">
                                                    <a href="javascript:;" class="user-avatar">
                                                        <img src="img/faceless.jpg" class="avatar avatar-sm img-circle" alt="">
                                                        <div class="status bg-color"></div>
                                                    </a>
                                                    <div class="user-details">
                                                        <p>Jason Holmes</p>
                                                        <small class="user-department">Human Resources</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="chat-user">
                                                    <div href="javascript:;" class="user-avatar">
                                                        <img src="img/faceless.jpg" class="img-circle" alt="">
                                                        <div class="status bg-success"></div>
                                                    </div>
                                                    <div class="user-details">
                                                        <p>Robert McCoy</p>
                                                        <small class="user-department">Human Resources</small>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="p15 text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-outline btn-sm">Recent</button>
                                            <button type="button" class="btn btn-default btn-outline btn-sm">Favourite</button>
                                            <button type="button" class="btn btn-default btn-outline btn-sm">Blocked</button>
                                        </div>
                                    </div>
                                </section>

                                <section class="panel panel-primary">
                                    <div class="panel-body">
                                        <a href="javascript:;" class="pull-left mr15">
                                            <img src="img/faceless.jpg" class="avatar avatar-md img-circle" alt="">
                                        </a>
                                        <div class="overflow-hidden">
                                            <b>Gerald Morris</b>
                                            <small class="show">6,387 Followers / 758 Following</small>
                                            <div class="show"></div>
                                            <a href="javascript:;" class="btn btn-primary btn-xs mt5">Send request</a>
                                        </div>
                                    </div>
                                </section>

                            </div>
                        </div>
                    </div>
                    <!-- /inner content wrapper -->

                </div>
                <!-- /content wrapper -->
                <a class="exit-offscreen"></a>
            </section>
            <!-- /main content -->
        </section>

    </div>

    <!-- core scripts -->
    <script src="plugins/jquery-1.11.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="plugins/jquery.slimscroll.min.js"></script>
    <script src="plugins/jquery.easing.min.js"></script>
    <script src="plugins/appear/jquery.appear.js"></script>
    <script src="plugins/jquery.placeholder.js"></script>
    <script src="plugins/fastclick.js"></script>
    <!-- /core scripts -->

    <!-- page level scripts -->
    <!-- /page level scripts -->

    <!-- template scripts -->
    <script src="js/offscreen.js"></script>
    <script src="js/main.js"></script>
    <!-- /template scripts -->

    <!-- page script -->
    <script>
        $("[data-toggle=tooltip]").tooltip();
    </script>
    <!-- /page script -->

</body>
<!-- /body -->

</html>
