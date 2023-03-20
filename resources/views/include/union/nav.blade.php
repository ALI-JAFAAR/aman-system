{{-- ADMIN --}}
        @if(Auth::user()->type ==0 && Auth::user()->org_id ==1)
          {{-- USERS --}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                المستخدمين
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('users')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة مستخدم</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('users-show')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض المستخدمين</p>
                </a>
              </li>
              <hr>
              <li class="nav-item">
                <a href="{{route('employee')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة موظفين</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('employee-show')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض الموظفين</p>
                </a>
              </li>
              <hr>
              <li class="nav-item">
                <a href="{{route('pos')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة منصب </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('pos-show')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض المناصب</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- ENDUSERS --}}


          {{-- UNION --}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
                الجهات
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('union')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة جهة</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('union-show')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض الجهات</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- END UNION --}}


          {{-- ACTIVITY --}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-random"></i>
              <p>
                النشاطات
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('acitivty')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة نشاط</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('acitivty-show')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض النشاطات</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- END ACTIVITIES --}}


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

          <hr>

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