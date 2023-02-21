@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('frontend/css/blog_article_style.scss.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/sidebar_style.scss.css')}}">
@endsection
@section('js')
@endsection
@section('content')
<div class="bodywrap">
   <div class="breadcrumb_background">
      <div class="title_full">
         <div class="container a-center">
            <p class="title_page">@lang('lang.blog')</p>
         </div>
      </div>
      <section class="bread-crumb">
         <span class="crumb-border"></span>
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-12 a-left">
                  <ul class="breadcrumb" >
                     <li class="home">
                        <a  href="{{route('home')}}" ><span >@lang('lang.home')</span></a>						
                        <span class="mr_lr">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                              <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                              <path d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"/>
                           </svg>
                        </span>
                     </li>
                     <li >
                        <a  href="{{route('allListBlog')}}"><span >@lang('lang.blog')</span></a>	
                        <span class="mr_lr">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                              <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                              <path d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"/>
                           </svg>
                        </span>
                     </li>
                     <li><strong><span >{{languageName($blog_detail->title)}}
                     </span></strong></li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
   </div>
   <section class="blogpage">
      <div class="container layout-article" itemscope itemtype="https://schema.org/Article">
         <div class="bg_blog">
            <article class="article-main">
               <div class="row">
                  <div class="right-content col-xl-8 col-lg-8 col-12">
                     <div class="article-details">
                        <h1 class="article-title"><a href="{{route('detailBlog',['slug'=>$blog_detail->slug])}}">{{languageName($blog_detail->title)}}</a></h1>
                        <span class="time_post">
                           <span class="name_">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                 <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                 <path d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32C448 382.8 369.2 304 272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 128-128c0-70.69-57.31-128-128-128S96 57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89 80-80 80S144 172.1 144 128C144 83.89 179.9 48 224 48z"/>
                              </svg>
                              &nbsp;HD TEA
                           </span>
                           &nbsp; | &nbsp;
                           <span>
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                 <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                 <path d="M232 120C232 106.7 242.7 96 256 96C269.3 96 280 106.7 280 120V243.2L365.3 300C376.3 307.4 379.3 322.3 371.1 333.3C364.6 344.3 349.7 347.3 338.7 339.1L242.7 275.1C236 271.5 232 264 232 255.1L232 120zM256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0zM48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48C141.1 48 48 141.1 48 256z"/>
                              </svg>
                              &nbsp;@lang('lang.date') {{$blog_detail->created_at->format('d-m-Y')}}
                           </span>
                        </span>
                        <br>
                        <div class="article-content">
                           <div class="rte">
                              {!!languageName($blog_detail->content)!!}
                           </div>
                        </div>
                     </div>
                     <div class="tag-share">
                        <span class="inline">
                           <svg xmlns="http://www.w3.org/2000/svg" width="19" height="21" viewBox="0 0 19 21" fill="none">
                              <path d="M15.3927 7.23665C14.2334 7.23665 13.1998 6.68182 12.5385 5.82448L7.00168 8.93028C7.13148 9.30431 7.2027 9.70774 7.2027 10.1239C7.2027 10.544 7.13148 10.9434 6.99765 11.3215L12.5304 14.423C13.1875 13.5616 14.2253 13.0025 15.3887 13.0025C17.3725 13.0025 18.9919 14.6246 18.9919 16.6207C18.9919 18.6171 17.3766 20.2393 15.3884 20.2393C13.4006 20.2393 11.7852 18.6171 11.7852 16.621C11.7852 16.2008 11.8564 15.7974 11.9903 15.4234L6.46179 12.3216C5.80473 13.1873 4.76686 13.7421 3.6035 13.7421C1.61968 13.7421 0 12.12 0 10.1239C0 8.12772 1.61968 6.5056 3.60753 6.5056C4.77089 6.5056 5.80876 7.06448 6.47012 7.93018L12.0029 4.82465C11.8691 4.44631 11.7935 4.03882 11.7935 3.61838C11.7935 1.62628 13.4089 0.000110626 15.3968 0.000110626C17.3846 0.000110626 19 1.62223 19 3.61838C19.0003 5.61453 17.3806 7.23665 15.3927 7.23665ZM15.3927 19.1005C16.7571 19.1005 17.8662 17.9867 17.8662 16.6167C17.8662 15.2466 16.7571 14.1329 15.3927 14.1329C14.0284 14.1329 12.9193 15.2466 12.9193 16.6167C12.9193 17.9867 14.0327 19.1005 15.3927 19.1005ZM3.60753 7.64009C2.24315 7.64009 1.13407 8.75379 1.13407 10.1239C1.13407 11.4939 2.24315 12.6076 3.60753 12.6076C4.97191 12.6076 6.08099 11.4939 6.08099 10.1239C6.08099 8.75379 4.96761 7.64009 3.60753 7.64009ZM15.3927 1.13865C14.0284 1.13865 12.9193 2.25235 12.9193 3.62243C12.9193 4.9925 14.0284 6.10621 15.3927 6.10621C16.7571 6.10621 17.8662 4.9925 17.8662 3.62243C17.8662 2.25235 16.7571 1.13865 15.3927 1.13865Z" fill="#494949"/>
                           </svg>
                           Chia sẻ bài viết:
                        </span>
                        <div class="social_share_product">
                           <div class="addthis_inline_share_toolbox">
                              <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58589c2252fc2da4"></script>
                              <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                                 <a class="addthis_button_preferred_1"></a>
                                 <a class="addthis_button_preferred_2"></a>
                                 <a class="addthis_button_preferred_3"></a>
                                 <a class="addthis_button_preferred_4"></a>
                                 <a class="addthis_button_compact"></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     {{-- <div class="tag_article margin-bottom-15">
                        <span class="inline">
                           <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                              <path d="M14.6337 7.97021L7.55476 0.900953C7.30368 0.649879 6.9673 0.437299 6.54491 0.262171C6.12218 0.0873904 5.73621 0 5.3863 0H1.26716C0.923841 0 0.626991 0.125537 0.375917 0.376264C0.125537 0.626991 0 0.924188 0 1.26716V5.38595C0 5.73586 0.0873904 6.12183 0.262171 6.54422C0.436952 6.96695 0.649879 7.29987 0.900953 7.54435L7.97992 14.6334C8.22406 14.8775 8.52091 14.9996 8.87116 14.9996C9.21413 14.9996 9.5148 14.8775 9.77211 14.6334L14.6337 9.76206C14.8779 9.51757 14.9999 9.22107 14.9999 8.87116C14.9999 8.52819 14.8779 8.22787 14.6337 7.97021ZM4.06434 4.06434C3.81674 4.31195 3.51816 4.43575 3.16825 4.43575C2.81869 4.43575 2.51976 4.31195 2.27215 4.06434C2.02454 3.81674 1.90074 3.51816 1.90074 3.16825C1.90074 2.81834 2.02454 2.51976 2.27215 2.27215C2.51976 2.02454 2.81834 1.90074 3.16825 1.90074C3.51816 1.90074 3.81674 2.02454 4.06434 2.27215C4.3116 2.51976 4.43575 2.81834 4.43575 3.16825C4.43575 3.51816 4.31195 3.81674 4.06434 4.06434Z" fill="#494949"/>
                           </svg>
                           Tags: 
                        </span>
                        <a href="blogs/all/tagged/hoa-qua" title="hoa quả">hoa quả</a>
                     </div> --}}
                     {{-- <form method="post" action="/posts/nhap-khau-rau-qua-vuot-moc-1-ty-usd-thai-lan-chiem-60-thi-phan/comments" id="article_comments" accept-charset="UTF-8">
                        <input name="FormType" type="hidden" value="article_comments"/><input name="utf8" type="hidden" value="true"/><input type="hidden" id="Token-f424d7f7121548868a875acd95f8d35c" name="Token" /><script src="https://www.google.com/recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK"></script><script>grecaptcha.ready(function() {grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {action: "article_comments"}).then(function(token) {document.getElementById("Token-f424d7f7121548868a875acd95f8d35c").value = token});});</script> 
                        <div class="form-coment">
                           <div class="margin-top-0 margin-bottom-30 w-100">
                              <h5 class="title-form-coment">Viết bình luận của bạn:</h5>
                           </div>
                           <div class="row">
                              <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                 <fieldset class="form-group padding-0">
                                    <input placeholder="Họ và tên:" type="text" class="form-control form-control-lg" value="" id="full-name" name="Author" Required>
                                 </fieldset>
                              </div>
                              <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                 <fieldset class="form-group">
                                    <input type="number" onkeypress="preventNonNumericalInput(event)" placeholder="Số điện thoại:" name="contact[phone]" id="phone" class="form-control form-control-lg" required>
                                 </fieldset>
                              </div>
                              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                 <fieldset class="form-group padding-0">	
                                    <input placeholder="Email:" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" type="email" class="form-control form-control-lg" value="" name="Email" Required>
                                 </fieldset>
                              </div>
                              <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">	
                                 <textarea placeholder="Nội dung tin nhắn:" class="form-control form-control-lg" id="comment" name="Body" rows="6" Required></textarea>
                              </fieldset>
                              <div class="col-12">
                                 <button type="submit" class="btn btn-primary button_45">Gửi bình luận</button>
                              </div>
                           </div>
                        </div>
                        <!-- End form mail -->
                     </form> --}}
                  </div>
                  <div class="blog_left_base col-xl-4 col-lg-4 col-12 order-lg-2">
                   @include('blog.rightnav-blog')
                  </div>
               </div>
            </article>
         </div>
      </div>
   </section>
 
@endsection