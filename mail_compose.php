<?php include "header.php" ?>

            <!-- Compose Sidebar Navigation -->
            <aside class="sidebar-250 offscreen-right bg-default">
                <header class="header navbar clearfix bb pr0 pl0 bg-default">
                    <p class="navbar-text">Inbox</p>
                    <div class="btn-group pull-right mr10">
                        <button type="button" class="btn btn-sm btn-primary navbar-btn">
                            <i class="ti-angle-left"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-primary navbar-btn">
                            <i class="ti-angle-right"></i>
                        </button>
                    </div>
                </header>

                <div class="content-wrap no-p">

                    <div class="wrapper">

                        <div class="m15">
                            <a href="mail.html" class="btn btn-primary btn-block navbar-btn">INBOX</a>
                        </div>

                        <nav role="navigation">
                            <div class="no-padding">
                                <ul class="nav nav-stacked">
                                    <li class="disabled text-uppercase">
                                        <a href="javascript:;">
                                            <b>folders</b>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge pull-right bg-success">14</span>
                                            <i class="ti-import mr5"></i>
                                            Inbox
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="ti-pin-alt mr5"></i>
                                            Important
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="ti-share mr5"></i>
                                            Sent Mail
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge pull-right bg-warning">9</span>
                                            <i class="ti-eraser mr5"></i>
                                            Drafts
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge pull-right bg-danger">2</span>
                                            <i class="ti-trash mr5"></i>
                                            Trash
                                        </a>
                                    </li>
                                </ul>

                                <ul class="nav nav-stacked">
                                    <li class="disabled text-uppercase">
                                        <a href="javascript:;">
                                            <b>Labels</b>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="ti-control-record text-warning pull-right"></i>
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="ti-control-record text-success pull-right"></i>
                                            Work
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="ti-control-record text-danger pull-right"></i>
                                            Family
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>

                    </div>
                </div>
            </aside>
            <!-- /Compose Sidebar Navigation -->

            <!-- main content -->
            <section class="main-content">

                <header class="header navbar clearfix bb pl0 pr0 bg-default">
                    <p class="navbar-text">Compose Message</p>

                    <div class="btn-group pull-right mr10">
                        <button type="button" class="btn btn-sm btn-default navbar-btn">
                            <i class="ti-clip"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-default navbar-btn">
                            <i class="ti-text"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-default navbar-btn">
                            <i class="ti-image"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-default navbar-btn">
                            <i class="ti-bookmark-alt"></i>
                        </button>
                    </div>
                </header>

                <!-- content wrapper -->
                <div class="content-wrap bg-white bl">

                    <!-- inner content wrapper -->
                    <div class="wrapper no-p">
                        <div class="panel">
                            <div class="panel-body">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <label>Recipient:</label>
                                        <input type="email" class="form-control" name="emailto" placeholder="Email to:" />
                                    </div>
                                    <div class="form-group">
                                        <label>Cc:</label>
                                        <input type="email" class="form-control" name="emailto" placeholder="Email to:" />
                                    </div>
                                    <div class="form-group">
                                        <label>Subject:</label>
                                        <input type="text" class="form-control" name="subject" placeholder="Subject" />
                                    </div>
                                    <div>
                                        <label>Message:</label>
                                        <textarea class="textarea form-control" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /inner content wrapper -->

                </div>
                <!-- /content wrapper -->

                <footer class="bl bt">
                    <div class="btn-group pull-left mr10">
                        <button type="button" class="btn btn-sm btn-default navbar-btn">
                            Send Message
                        </button>
                        <button type="button" class="btn btn-sm btn-default navbar-btn">
                            Cancel
                        </button>
                    </div>
                </footer>

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
    <!-- /page script -->

</body>
<!-- /body -->

</html>
