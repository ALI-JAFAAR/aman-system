{{-- ADMIN --}}

    {{-- GUILDS --}}
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-city"></i>
        <p>
          فروع الجهات
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('guild')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>اضافة فرع</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('guild-show')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>عرض الفروع</p>
          </a>
        </li>
        <hr>
        <li class="nav-item">
          <a href="{{route('guildsub')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>اضافة مهنة نقابة</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('guildsub-show')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>عرض المهن النقابية</p>
          </a>
        </li>
      </ul>
    </li>

    {{-- END GUILDS --}}


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