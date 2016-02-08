<header class="main-header">
  <!-- Logo -->
  <a href="{{ route('tasks.index') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>QAC</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Admin</b>QAC</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Tasks: style can be found in dropdown.less -->
        <li class="dropdown tasks-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-flag-o"></i>
            <span class="label label-danger">{{ \Auth::user()->tasks()->where('status', '!=', \App\Model\Task::STATUS_FINISH)->count() }}</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have {{ \Auth::user()->tasks()->where('status', '!=', \App\Model\Task::STATUS_FINISH)->count() }} tasks</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                <li><!-- Task item -->
                  <a href="#">
                    <h3>
                      Finished Task
                      <small class="pull-right">{{ (\Auth::user()->tasks->count() > 0) ? \Auth::user()->tasks()->where('status', \App\Model\Task::STATUS_FINISH)->count()/\Auth::user()->tasks->count()*100 : '100' }}%</small>
                    </h3>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-aqua" style="width: {{ (\Auth::user()->tasks->count() > 0) ? \Auth::user()->tasks()->where('status', \App\Model\Task::STATUS_FINISH)->count()/\Auth::user()->tasks->count()*100 : '100' }}%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">{{ (\Auth::user()->tasks->count() > 0) ? \Auth::user()->tasks()->where('status', \App\Model\Task::STATUS_FINISH)->count()/\Auth::user()->tasks->count()*100 : '100' }}% Complete</span>
                      </div>
                    </div>
                  </a>
                </li><!-- end task item -->
              </ul>
            </li>
            <li class="footer">
              <a href="#">View all tasks</a>
            </li>
          </ul>
        </li>
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="http://lorempixel.com/160/160" class="user-image" alt="User Image">
            <span class="hidden-xs">{{ \Auth::user()->username }}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="http://lorempixel.com/160/160" class="img-circle" alt="User Image">
              <p>
                {{ \Auth::user()->username }} - {{ \Auth::user()->group_type }}
                <small>Member since {{ \Auth::user()->created_at->diffForHumans() }}</small>
              </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
              <div class="col-xs-4 text-center">
                <a href="#">Followers</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">Sales</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">Friends</a>
              </div>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-right">
                <a href="{{ route('auth.logout') }}" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>
