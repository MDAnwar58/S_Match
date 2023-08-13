<aside class="left-sidebar" data-sidebarbg="skin5">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
      <ul id="sidebarnav" class="pt-4">
        <li class="sidebar-item {{ Route('admin.home') ? 'active' : '' }}">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.home') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">হোম</span></a>
        </li>
        <li class="sidebar-item {{ Route('admin.member.index') ? 'active' : '' }}">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.member.index') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">ম্যাচের সদস্য</span></a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.mile.index') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">মিলের হিসাব</span></a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.money.index') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">টাকা জমা হিসাব</span></a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.bajar.index') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">বাজার খরচের হিসাব</span></a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.bibidh.index') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">বিবিধ খরচের হিসাব</span></a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.month.index') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">প্রত্যেক মাসের হিসাব</span></a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">welcome section </span></a>
          <ul aria-expanded="false" class="collapse first-level">
            <li class="sidebar-item">
              <a href="{{ route('logo.create') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Logo Added </span></a>
            </li>
            <li class="sidebar-item">
              <a href="{{ route('logo.index') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Logo List </span></a>
            </li>
            <li class="sidebar-item">
              <a href="{{ route('banner.create') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Banner Added </span></a>
            </li>
            <li class="sidebar-item">
              <a href="{{ route('banner.index') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Banner List </span></a>
            </li>
            <li class="sidebar-item">
              <a href="{{  route('facility.create') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Facility Added </span></a>
            </li>
            <li class="sidebar-item">
              <a href="{{ route('facility.index') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Facility List </span></a>
            </li>
            <li class="sidebar-item">
              <a href="{{ route('learn_about.create') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Learn About Added </span></a>
            </li>
            <li class="sidebar-item">
              <a href="{{ route('learn_about.index') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Learn About List </span></a>
            </li>
            <li class="sidebar-item">
              <a href="{{ route('section.create') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Section Info Added </span></a>
            </li>
            <li class="sidebar-item">
              <a href="{{ route('section.index') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Section Info List </span></a>
            </li>
          </ul>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">ইউজার হোম সেকশন </span></a>
          <ul aria-expanded="false" class="collapse first-level">
            <li class="sidebar-item">
              <a href="{{ route('latest_report.create') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Latest Report Added </span></a>
            </li>
            <li class="sidebar-item">
              <a href="{{ route('latest_report.index') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Latest Report List </span></a>
            </li>
          </ul>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">ম্যাচ সর্ম্পকে জানুন সেকশন </span></a>
          <ul aria-expanded="false" class="collapse first-level">
            <li class="sidebar-item">
              <li class="sidebar-item">
                <a href="{{ route('about.create') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> About Content Added </span></a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('about.index') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> About List </span></a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">ইউজার ছবি সেকশন </span></a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="{{ route('all.category.index') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">All Category List </span></a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('category.index') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Category List </span></a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('gallery.create') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Galleries Added </span></a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('gallery.index') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Galleries List </span></a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('jogajog.index') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">যোগাযোগ</span></a>
          </li>
        </ul>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>