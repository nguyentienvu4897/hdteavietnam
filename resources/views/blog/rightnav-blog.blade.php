<div class="blog_noibat">
    <h2 class="h2_sidebar_blog">
       <a href="{{route('allListBlog')}}" title="@lang('lang.bloghot')">@lang('lang.bloghot')</a>
    </h2>
    <div class="blog_content">
       @foreach ($bloghot as $item)
          <div class="item clearfix">
             <div class="post-thumb">
                <a class="image-blog scale_hover" href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{languageName($item->title)}}">
                <img class="img_blog lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$item->image}}"  alt="{{languageName($item->title)}}">
                </a>
             </div>
             <div class="contentright">
                <h3><a title="{{languageName($item->title)}}" href="{{route('detailBlog',['slug'=>$item->slug])}}">{{languageName($item->title)}}</a></h3>
             </div>
          </div>
       @endforeach
    </div>
 </div>
 {{-- sp nổi bật --}}
 <div class="blog_noibat">
    <h2 class="h2_sidebar_blog">
       <a href="{{route('allListBlog')}}" title="@lang('lang.producthot')">@lang('lang.producthot')</a>
    </h2>
    <div class="blog_content">
       @foreach ($producthot as $item)
       @php
           $img= json_decode($item->images);
       @endphp
          <div class="item clearfix">
             <div class="post-thumb">
                <a class="image-blog scale_hover" href="{{route('detailProduct',['cate'=>$item->cate_slug,'slug'=>$item->slug])}}" title="{{languageName($item->name)}}">
                <img class="img_blog lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$img[0]}}"  alt="{{languageName($item->name)}}">
                </a>
             </div>
             <div class="contentright">
                <h3><a title="{{languageName($item->name)}}" href="{{route('detailProduct',['cate'=>$item->cate_slug,'slug'=>$item->slug])}}">{{languageName($item->name)}}</a></h3>
             </div>
          </div>
       @endforeach
    </div>
 </div>