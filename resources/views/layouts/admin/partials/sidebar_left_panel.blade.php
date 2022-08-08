<!-- ########## START: LEFT PANEL ########## -->
@php
    $segment2 = Request::segment(2);
    $segment3 = Request::segment(3);
   

@endphp
    <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> starlight</a></div>
    <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group -->

      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="{{route('admin.dashboard')}}" class="sl-menu-link @if($segment2==='dashboard') active show-sub @else  @endif">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="widgets.html" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Cards &amp; Widgets</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="javascript: void(0);" class="sl-menu-link @if($segment2==='charts') active show-sub @else  @endif">

         
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Charts</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('admin.dashboard.charts.Morris')}}" class="nav-link @if($segment3==='chartsMorris') active @else  @endif">Morris Charts</a></li>
          <li class="nav-item"><a href="{{route('admin.dashboard.charts.Flot')}}" class="nav-link @if($segment3==='chartsFlot') active @else  @endif">Flot Charts</a></li>
          <li class="nav-item"><a href="{{route('admin.dashboard.charts.JS')}}" class="nav-link @if($segment3==='chartsJS') active @else  @endif">Chart JS</a></li>
          <li class="nav-item"><a href="{{route('admin.dashboard.charts.Rickshaw')}}" class="nav-link @if($segment3==='chartsRickshaw') active @else  @endif">Rickshaw</a></li>
          <li class="nav-item"><a href="{{route('admin.dashboard.charts.Sparkline')}}" class="nav-link @if($segment3==='chartsSparkline') active @else  @endif">Sparkline</a></li>
        </ul>
        <a href="javascript: void(0);" class="sl-menu-link @if($segment2==='form') active show-sub @else  @endif">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
            <span class="menu-item-label">Forms</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('admin.form.elements')}}" class="nav-link @if($segment3==='formElements') active @else  @endif">Form Elements</a></li>
          <li class="nav-item"><a href="{{route('admin.form.layouts')}}" class="nav-link @if($segment3==='formLayouts') active @else  @endif">Form Layouts</a></li>
          <li class="nav-item"><a href="{{route('admin.form.validation')}}" class="nav-link @if($segment3==='formValidation') active @else  @endif">Form Validation</a></li>
          <li class="nav-item"><a href="{{route('admin.form.wizards')}}" class="nav-link @if($segment3==='formWizards') active @else  @endif">Form Wizards</a></li>
          <li class="nav-item"><a href="{{route('admin.form.editor')}}" class="nav-link @if($segment3==='formEditor') active @else  @endif">Text Editor</a></li>
        </ul>
        <a href="#" class="sl-menu-link">
        <a href="javascript: void(0);" class="sl-menu-link @if($segment2==='UI_element') active show-sub @else  @endif">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">UI Elements</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('admin.eI_element.accordion')}}" class="nav-link @if($segment3==='accordion') active @else  @endif">Accordion</a></li>
          <li class="nav-item"><a href="{{route('admin.eI_element.alerts')}}" class="nav-link @if($segment3==='alerts') active @else  @endif">Alerts</a></li>
          <li class="nav-item"><a href="{{route('admin.eI_element.buttons')}}" class="nav-link @if($segment3==='buttons') active @else  @endif">Buttons</a></li>
          <li class="nav-item"><a href="{{route('admin.eI_element.cards')}}" class="nav-link @if($segment3==='cards') active @else  @endif">Cards</a></li>
          <li class="nav-item"><a href="{{route('admin.eI_element.icons')}}" class="nav-link @if($segment3==='icons') active @else  @endif">Icons</a></li>
          <li class="nav-item"><a href="{{route('admin.eI_element.modal')}}" class="nav-link @if($segment3==='modal') active @else  @endif">Modal</a></li>
          <li class="nav-item"><a href="{{route('admin.eI_element.navigation')}}" class="nav-link @if($segment3==='navigation') active @else  @endif">Navigation</a></li>
          <li class="nav-item"><a href="{{route('admin.eI_element.pagination')}}" class="nav-link @if($segment3==='pagination') active @else  @endif">Pagination</a></li>
          <li class="nav-item"><a href="{{route('admin.eI_element.tooltipPopover')}}" class="nav-link @if($segment3==='tooltipPopover') active @else  @endif">Tooltip &amp; Popover</a></li>
          <li class="nav-item"><a href="{{route('admin.eI_element.progress')}}" class="nav-link @if($segment3==='progress') active @else  @endif">Progress</a></li>
          <li class="nav-item"><a href="{{route('admin.eI_element.spinners')}}" class="nav-link @if($segment3==='spinners') active @else  @endif">Spinners</a></li>
          <li class="nav-item"><a href="{{route('admin.eI_element.typography')}}" class="nav-link @if($segment3==='typography') active @else  @endif">Typography</a></li>









        </ul>
        <a href="javascript: void(0);" class="sl-menu-link @if($segment2==='table') active show-sub @else  @endif">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Tables</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('admin.table.basic')}}" class="nav-link @if($segment3==='basic') active @else  @endif">Basic Table</a></li>
          <li class="nav-item"><a href="{{route('admin.table.data')}}" class="nav-link @if($segment3==='data') active @else  @endif">Data Table</a></li>
        </ul>
        <a href="javascript: void(0);" class="sl-menu-link @if($segment2==='map') active show-sub @else  @endif">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-navigate-outline tx-24"></i>
            <span class="menu-item-label">Maps</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('admin.map.google')}}" class="nav-link @if($segment3==='google') active @else  @endif">Google Maps</a></li>
          <li class="nav-item"><a href="{{route('admin.map.vector')}}" class="nav-link @if($segment3==='vector') active @else  @endif">Vector Maps</a></li>
        </ul>
        <a href="mailbox.html" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
            <span class="menu-item-label">Mailbox</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="javascript: void(0);" class="sl-menu-link @if($segment2==='page') active show-sub @else  @endif">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">Pages</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('admin.page.blank')}}" class="nav-link @if($segment3==='blank') active @else  @endif">Blank Page</a></li>
          <li class="nav-item"><a href="{{route('admin.page.signin')}}" class="nav-link @if($segment3==='signin') active @else  @endif">Signin Page</a></li>
          <li class="nav-item"><a href="{{route('admin.page.signup')}}" class="nav-link @if($segment3==='signup') active @else  @endif">Signup Page</a></li>
          <li class="nav-item"><a href="{{route('admin.page.404')}}" class="nav-link @if($segment3==='404') active @else  @endif">404 Page Not Found</a></li>
        </ul>
      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->