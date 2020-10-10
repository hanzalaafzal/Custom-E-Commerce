
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30 in">
                        <li class="sidebar-item selected"> <a class="sidebar-link waves-effect waves-dark sidebar-link active" href="<?php echo base_url()."Admin" ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

                          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url()."Admin/Home_content" ?>" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu"> Home Template</span></a></li>
                       
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Pages </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                
                                <li class="sidebar-item"><a href="<?php echo base_url()."Admin/AboutUs" ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> About Us </span></a></li>
                                 <li class="sidebar-item"><a href="<?php echo base_url()."Admin/showFaqs" ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Faqs </span></a></li>
                            </ul>
                        </li>
                       
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-animation"></i><span class="hide-menu">Categories </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo base_url()."Admin/showCategories"?>" class="sidebar-link"><i class="mdi mdi-application"></i><span class="hide-menu"> Main Categories </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url()."Admin/showSubCategories" ?>" class="sidebar-link"><i class="mdi mdi-application"></i><span class="hide-menu"> Sub Categories </span></a></li>  
                            </ul>
                        </li>
                         <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url()."Admin/showProducts" ?>" aria-expanded="false"><i class="mdi mdi-kodi"></i><span class="hide-menu">Products</span></a></li>

                           <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url()."Admin/showOrders" ?>" aria-expanded="false"><i class="mdi mdi-truck-delivery"></i><span class="hide-menu">Orders</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url()."Admin/addAdmin" ?>" aria-expanded="false"><i class="mdi mdi-worker"></i><span class="hide-menu">Add Admin</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url()."Admin/Queries" ?>" aria-expanded="false"><i class="mdi mdi-email-alert"></i><span class="hide-menu">Queries</span></a></li>
                     
                  
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>