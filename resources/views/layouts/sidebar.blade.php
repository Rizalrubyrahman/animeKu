<aside class="main-sidebar">
     <!-- sidebar: style can be found in sidebar.less -->
     <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
               <div class="pull-left image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
               </div>
               <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
               </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
               <li class="header">MAIN NAVIGATION</li>
               <li class="treeview">
                    <a href="#">
                         <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                         <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                         <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                         <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                    </ul>
               </li>

               <li class="treeview">
                    <a href="#">
                         <i class="fa fa-share"></i> <span>Multilevel</span>
                         <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                         <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                         <li>
                         <a href="#"><i class="fa fa-circle-o"></i> Level One
                              <span class="pull-right-container">
                                   <i class="fa fa-angle-left pull-right"></i>
                              </span>
                         </a>
                         <ul class="treeview-menu">
                              <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                              <li>
                                   <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                        <span class="pull-right-container">
                                             <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                   </a>
                                   <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                   </ul>
                              </li>
                         </ul>
                         </li>
                         <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    </ul>
               </li>

          </ul>
     </section>
    <!-- /.sidebar -->
</aside>