<div>
    @livewire('partials.pageheader', ['pageTitle' => $pageTitle])
    @php
        use League\CommonMark\CommonMarkConverter;

        $converter = new CommonMarkConverter();
        $convertedHtml = $converter->convert($page->content)->getContent();
    @endphp
    <div class="blog-details-section section-padding fix">
        <div class="container">
            <div class="blog-details-area">
                <div class="row g-5">
                    <div class="col-12 col-lg-12">
                        <div class="blog-post-details">
                            <div class="single-blog-post">
                                @isset($page->image)
                                    <div class="post-featured-thumb background-image"
                                        style="background-image: url({{ url('storage', $page->image) }});"></div>
                                @endisset
                                <div class="post-content">
                                    {!! $convertedHtml !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
