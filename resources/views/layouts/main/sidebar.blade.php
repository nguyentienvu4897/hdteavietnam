<aside class="dqdt-sidebar sidebar left-content col-xl-3 col-lg-3 col-md-4 col-sm-4">
   <div class="wrap_background_aside asidecollection">
      <aside class="aside-item sidebar-category collection-category">
      <div class="aside-title">
         <h2 class="title-head margin-top-0 cate"><span>Danh mục</span></h2>
      </div>
      <div class="aside-content">
         <nav class="nav-category navbar-toggleable-md">
               <ul class="nav navbar-pills">
                  <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"><span>Trang chủ</span>
                  </a>
                  </li>
                  <li class="nav-item ">
                  <a href="{{ route('allProduct') }}" class="nav-link"><span>Siêu thị</span></a>
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="fa-plus svg-inline--fa fa-angle-down fa-w-10">
                     <path fill="currentColor" d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z" class=""></path>
                  </svg>
                  <ul class="dropdown-menu">
                     @foreach ($categoryhome as $category)
                           <li class="nav-item">
                              <a class="nav-link" href="{{ route('allListProCate', ['danhmuc'=>$category->slug])}}"><span>{{ languageName($category->name) }}</span>
                              </a>
                           </li>
                     @endforeach
                  </ul>
                  </li>
                  <li class="nav-item ">
                  <a href="{{ route('listAllService') }}" class="nav-link"><span>Dịch vụ</span></a>
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="fa-plus svg-inline--fa fa-angle-down fa-w-10">
                     <path fill="currentColor" d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z" class=""></path>
                  </svg>
                  <ul class="dropdown-menu">
                     @foreach ($serviceCategory as $category)
                           <li class="dropdown-submenu nav-item">
                              <a class="nav-link" href="{{ route('listServiceCate', ['cate'=>$category->slug])}}"><span>{{ languageName($category->name) }}</span>
                              </a>
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="fa-plus svg-inline--fa fa-angle-down fa-w-10">
                              <path fill="currentColor" d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z" class=""></path>
                              </svg>
                              <ul class="dropdown-menu">
                              @foreach ($category->types as $type)
                                 <li class="nav-item lv3">
                                       <a class="nav-link" href="{{ route('listServiceType', ['cate'=>$category->slug, 'type'=>$type->slug])}}"><span>{{ languageName($type->name) }}</span>
                                       </a>
                                 </li>
                              @endforeach
                              </ul>
                           </li>
                     @endforeach
                  </ul>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('allListBlog') }}"><span>Tin thú cưng</span>
                  </a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('emergency') }}"><span>Cấp cứu</span>
                  </a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('lienHe') }}"><span>Liên hệ</span>
                  </a>
                  </li>
               </ul>
         </nav>
      </div>
      </aside>
   </div>
</aside>
