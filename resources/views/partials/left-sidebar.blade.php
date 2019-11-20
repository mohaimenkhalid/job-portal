 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel mb-5">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info mb-5">
          <p>Mohaimen Khalid</p>
          
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN MENU</li>
        
        
        <li class="">
           <a href="{{ route('dashboard') }}">
            <i class="fa fa-laptop"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <li class="">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Profile</span>
          </a>
        </li>

      <li >
          <a href="{{ route('job.create') }}">
            <i class="fa fa-laptop"></i>
            <span>Post New Job</span>
          </a>
          
        </li>

    <li class="treeview">
      <a style=""  href="{{ route('logout') }}"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
      <i class="fas fa-sign-out-alt"></i>
      <span>Logout</span>
      
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
   
    </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>