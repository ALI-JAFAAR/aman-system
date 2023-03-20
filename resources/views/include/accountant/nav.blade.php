{{-- ADMIN --}}
 
  {{-- STOCK --}}

  <li class="nav-item has-treeview">

    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-institution"></i>
      <p>
        المخزن والحسابات
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>

    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{route('accountant.stock')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>اضافة مخزن عام</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{route('accountant.stock-show')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>عرض المخزن العام</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{route('accountant.stockitem')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>اضافة  مشتريات</p>
        </a>
      </li>


      <li class="nav-item">
        <a href="{{route('accountant.stockitem-show')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>عرض  المشتريات</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{route('accountant.cardstock')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>اضافة الهويات (بلانكات)</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{route('accountant.cardstock-show')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>عرض مخزن البلانكات</p>
        </a>
      </li>
      
    </ul>
  </li>

  {{-- END STOCK --}}

  <hr>

  {{-- REPORTS --}}
    <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-list"></i>
      <p>
        التقارير
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{route('accountant.record')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p> السجل العام</p>
        </a>
      </li>
    </ul>
  </li>
  {{-- END REPORTS --}}

{{-- END ADMIN --}}