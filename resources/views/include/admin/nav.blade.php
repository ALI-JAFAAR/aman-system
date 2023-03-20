{{-- ADMIN --}}
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
                <a href="{{route("admin.users")}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة مستخدم</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.users-show')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض المستخدمين</p>
                </a>
              </li>
              <hr>
              <li class="nav-item">
                <a href="{{route('admin.employee')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة موظفين</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.employee-show')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض الموظفين</p>
                </a>
              </li>
              <hr>
              <li class="nav-item">
                <a href="{{route('admin.pos')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة منصب </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.pos-show')}}" class="nav-link">
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
                <a href="{{route(Auth::user()->type.'.union')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة جهة</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route(Auth::user()->type.'.union-show')}}" class="nav-link">
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
                <a href="{{route(Auth::user()->type.'.acitivty')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة نشاط</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route(Auth::user()->type.'.acitivty-show')}}" class="nav-link">
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
                <a href="{{route(Auth::user()->type.'.guild')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة فرع</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route(Auth::user()->type.'.guild-show')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض الفروع</p>
                </a>
              </li>
              <hr>
              <li class="nav-item">
                <a href="{{route(Auth::user()->type.'.guildsub')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة مهنة نقابة</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route(Auth::user()->type.'.guildsub-show')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض المهن النقابية</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- END GUILDS --}}




          {{-- GOVERNORATES --}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                المحافظة
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route(Auth::user()->type.'.gov')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة محافظة</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route(Auth::user()->type.'.gov-show')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض المحافظات</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- END GOVERNORATES --}}


          {{-- PARTNERS --}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-ship"></i>
              <p>
                الشركاء
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route(Auth::user()->type.'.partner')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة شريك</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route(Auth::user()->type.'.partner-show')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض الشركاء</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- END PARTNERS --}}



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
                <a href="{{route(Auth::user()->type.'.stock')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة مخزن عام</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route(Auth::user()->type.'.stock-show')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض المخزن العام</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route(Auth::user()->type.'.stockitem')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة  مشتريات</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{route(Auth::user()->type.'.stockitem-show')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض  المشتريات</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route(Auth::user()->type.'.cardstock')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة الهويات (بلانكات)</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route(Auth::user()->type.'.cardstock-show')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض مخزن البلانكات</p>
                </a>
              </li>
              
            </ul>
          </li>

          {{-- END STOCK --}}








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
                <a href="{{route(Auth::user()->type.'.cus')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة منتسب </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route(Auth::user()->type.'.cus-grid')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض جميع المنتسبين</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- END WORKER --}}
          <hr>







          {{-- CARDS --}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="ion ion-card" style="font-size:18pt;font-weight: bold;"></i>
              <p>
                الهويات
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route(Auth::user()->type.'.card')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة نوع هوية</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route(Auth::user()->type.'.card-show')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض الهويات</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- END CARDS --}}

          {{-- PACKAGE --}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
                الباقات
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route(Auth::user()->type.'.package')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة باقة</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route(Auth::user()->type.'.package-show')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض الباقات</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- END PACKAGE --}}








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
                <a href="{{route(Auth::user()->type.'.record')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> السجل العام</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- END REPORTS --}}
          <hr>

          {{-- END ADMIN --}}