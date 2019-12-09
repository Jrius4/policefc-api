<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ Auth::user()->gravatar() }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li>
        <a href="{{ url('/home') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-pencil"></i>
          <span>Blog</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('backend.blog.index') }}"><i class="fa fa-circle-o"></i> All Posts</a></li>
            @if (check_user_permissions(request(), "Categories@index"))
          <li><a href="{{ route('backend.categories.index') }}"><i class="fa fa-circle-o"></i>Categories</a></li>
            @endif
          <li><a href="{{ route('backend.blog.create') }}"><i class="fa fa-circle-o"></i> Add New</a></li>
        </ul>
      </li>
      @if (check_user_permissions(request(), "Users@index"))
        <li><a href="{{ route('backend.users.index') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
      @endif

      <li class="treeview">
          <a href="#">
              <i class="fa fa-pencil"></i>
              <span>Players</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('backend.players.index') }}"><i class="fa fa-circle-o"></i>View Players</a></li>
              <li><a href="{{ route('backend.player-categories.index') }}"><i class="fa fa-circle-o"></i>Player Category</a></li>
              <li><a href="{{ route('backend.player-feet.index') }}"><i class="fa fa-circle-o"></i>Player Feet</a></li>
              <li><a href="{{ route('backend.player-positions.index') }}"><i class="fa fa-circle-o"></i>Player Positions</a></li>
              <li><a href="{{ route('backend.players.create') }}"><i class="fa fa-circle-o"></i>Add New Player</a></li>
              <li><a href="{{ route('backend.player-social-media.index') }}"><i class="fa fa-users"></i> <span>Player Social Media Links</span></a></li>
            </ul>
      </li>
      <li class="treeview">
          <a href="#">
              <i class="fa fa-pencil"></i>
              <span>Support Team</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('backend.support-members.index') }}"><i class="fa fa-circle-o"></i>View Members</a></li>
              <li><a href="{{ route('backend.support-member-positions.index') }}"><i class="fa fa-circle-o"></i>Member Positions</a></li>
              <li><a href="{{ route('backend.support-members.create') }}"><i class="fa fa-circle-o"></i>Add New Member</a></li>
              <li><a href="{{ route('backend.support-member-social-media.index') }}"><i class="fa fa-users"></i> <span>Social Media Links</span></a></li>
            </ul>
      </li>

      <li class="treeview">
          <a href="#">
              <i class="fa fa-pencil"></i>
              <span>Products</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i>View Products</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Shops</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Product Category</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Add New Product</a></li>
            </ul>
      </li>
      <li class="treeview">
          <a href="#">
              <i class="fa fa-pencil"></i>
              <span>Eras</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="{{route('backend.backend-eras.index')}}"><i class="fa fa-circle-o"></i>View Eras</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Era Category</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Add New Era</a></li>
            </ul>
      </li>
      <li class="treeview">
          <a href="#">
              <i class="fa fa-pencil"></i>
              <span>Videos</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i>View Videos</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Video Category</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Add New Video</a></li>
            </ul>
      </li>
      <li class="treeview">
          <a href="#">
              <i class="fa fa-pencil"></i>
              <span>Teams</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('backend.teams.index') }}"><i class="fa fa-circle-o"></i>View Teams</a></li>
              <li><a href="{{ route('backend.teams.create') }}"><i class="fa fa-circle-o"></i>Add New Team</a></li>
            </ul>
      </li>
      <li class="treeview">
          <a href="#">
              <i class="fa fa-pencil"></i>
              <span>Matches</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('backend.matches.index') }}"><i class="fa fa-circle-o"></i>View Matches</a></li>
              <li><a href="{{ route('backend.match-reports.index') }}"><i class="fa fa-circle-o"></i>Manage Matches Reports</a></li>
              <li><a href="{{ route('backend.matches.create') }}"><i class="fa fa-circle-o"></i>Add New Match</a></li>
            </ul>
      </li>
      <li class="treeview">
          <a href="#">
              <i class="fa fa-pencil"></i>
              <span>Achievements</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i>View Achievements</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Achievements Categories</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Add New Achievement</a></li>
            </ul>
      </li>
    <li><a href="{{route('backend.partners.index')}}"><i class="fa fa-users"></i> <span>Partners</span></a></li>
      <li class="treeview">
          <a href="#">
              <i class="fa fa-pencil"></i>
              <span>Wall of Fames</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i>View Fames</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Fame Categories</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Add New Fame</a></li>
            </ul>
      </li>
    <li><a href="{{route('backend.social-media-names.index')}}"><i class="fa fa-users"></i> <span>Social Media Names</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
