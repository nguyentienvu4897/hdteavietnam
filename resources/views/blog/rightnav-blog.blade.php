<div class="blog-aside aside-item blog-aside-article">
<div class="aside-title">
    <h2 class="title-head"><span><a href="" title="Bài viết nổi bật">Dịch vụ nổi bật</a></span></h2>
</div>
<div class="aside-content-article aside-content margin-top-0">
    <div class="blog-list blog-image-list">
        @foreach ($serviceBest as $service)
            <div class="loop-blog clearfix">
            <div class="thumb-left">
                <a href="{{ route('serviceDetail', ['cate'=>$service->category_slug, 'type'=>$service->type_slug, 'slug'=>$service->slug]) }}">
                <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ $service->image }}" title="{{ $service->name }}" alt="{{ $service->name }}">
                </a>
            </div>
            <div class="name-right">
                <h3><a href="{{ route('serviceDetail', ['cate'=>$service->category_slug, 'type'=>$service->type_slug, 'slug'=>$service->slug]) }}" title="{{ $service->name }}">{{ $service->name }}</a></h3>
            </div>
            </div>
        @endforeach
    </div>
</div>
</div>