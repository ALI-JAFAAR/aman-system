{{-- ADMIN --}}


  {{-- WORKER --}}
  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-user"></i>
      <p>
        المنتسبين
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{route('cus')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>اضافة منتسب </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('cus-grid')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>عرض جميع المنتسبين</p>
        </a>
      </li>
    </ul>
  </li>
  {{-- END WORKER --}}

{{-- END ADMIN --}}