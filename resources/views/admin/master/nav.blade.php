<nav class="pcoded-navbar">
  <div class="nav-list">
    <div class="pcoded-inner-navbar main-menu">
      <div class="pcoded-navigation-label">Navigation</div>
      <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu active pcoded-trigger">
          <a href="javascript:void(0)" class="waves-effect waves-dark">
            <span class="pcoded-micon">
              <i class="feather icon-home"></i>
            </span>
            <span class="pcoded-mtext">Dashboard</span>
          </a>
        </li>
      </ul>
      <div class="pcoded-navigation-label">Administration</div>
      <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu ">
          <a href="javascript:void(0)" class="waves-effect waves-dark">
            <span class="pcoded-micon">
              <i class="feather icon-list"></i>
            </span>
            <span class="pcoded-mtext">Category</span>
          </a>
          <ul class="pcoded-submenu">
            <li class="">
              <a href="{{route('category.create')}}" class="waves-effect waves-dark">
                <span class="pcoded-mtext">Add Category</span>
              </a>
            </li>
            <li class="">
              <a href="{{route('category.index')}}" class="waves-effect waves-dark">
                <span class="pcoded-mtext">Category List</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- <ul class="pcoded-item pcoded-left-item">
  <li class="pcoded-hasmenu ">
    <a href="javascript:void(0)" class="waves-effect waves-dark">
      <span class="pcoded-micon">
        <i class="feather icon-list"></i>
      </span>
      <span class="pcoded-mtext">Menu Levels</span>
    </a>
    <ul class="pcoded-submenu">
      <li class="">
        <a href="javascript:void(0)" class="waves-effect waves-dark">
          <span class="pcoded-mtext">Menu Level 2.1</span>
        </a>
      </li>
      <li class="pcoded-hasmenu ">
        <a href="javascript:void(0)" class="waves-effect waves-dark">
          <span class="pcoded-mtext">Menu Level 2.2</span>
        </a>
        <ul class="pcoded-submenu">
          <li class="">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
              <span class="pcoded-mtext">Menu Level 3.1</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="">
        <a href="javascript:void(0)" class="waves-effect waves-dark">
          <span class="pcoded-mtext">Menu Level 2.3</span>
        </a>
      </li>
    </ul>
  </li>
</ul> -->