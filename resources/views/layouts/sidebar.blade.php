<aside class="main-sidebar">
     <!-- sidebar: style can be found in sidebar.less -->
     <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
               <div class="pull-left image">
                    <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
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
                    <a href="{{ url('admin') }}">
                         <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                         <span class="pull-right-container">
                         </span>
                    </a>
               </li>

               <li class="treeview">
                    <a href="{{ url('/admin/kategori') }}">
                         <i class="fa fa-adjust"></i> <span>Kategori</span>
                         <span class="pull-right-container">
                         </span>
                    </a>
               </li>
               <li class="treeview">
                    <a href="{{ url('admin/artikel') }}">
                         <i class="fa fa-pencil"></i> <span>Artikel</span>
                         <span class="pull-right-container">
                         </span>
                    </a>
               </li>
               


          </ul>
     </section>
    <!-- /.sidebar -->
</aside>