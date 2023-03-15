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
                <a href="{{route('gov')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة محافظة</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('gov-show')}}" class="nav-link">
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
                <a href="{{route('partner')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة شريك</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('partner-show')}}" class="nav-link">
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
                <a href="{{route('stock')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة مخزن عام</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('stock-show')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض المخزن العام</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('stockitem')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة  مشتريات</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{route('stockitem-show')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض  المشتريات</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('cardstock')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة الهويات (بلانكات)</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('cardstock-show')}}" class="nav-link">
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
                <a href="{{route('card')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة نوع هوية</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('card-show')}}" class="nav-link">
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
                <a href="{{route('package')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة باقة</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('package-show')}}" class="nav-link">
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
                <a href="{{route('record')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> السجل العام</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- END REPORTS --}}
          <hr>

        @endif


        @if(Auth::user()->type ==1 && Auth::user()->org_id ==1)
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
        @endif






          {{-- END ADMIN --}}