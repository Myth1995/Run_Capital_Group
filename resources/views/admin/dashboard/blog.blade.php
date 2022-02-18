@extends('layouts.admin.master')

@section('title')Blog Details
 {{ $title }}
@endsection

@push('css')
    <style>
        .dashboard .blog-page .blg-tag {
            border-radius: 8px;
            margin-top: 10px;
            background-color: #81c483 !important;
        }

        
        .dashboard .blog-page .blg-footer {
            display: flex;
            justify-content: space-between;
        }
    </style>
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Blog Details</h3>
		@endslot
		<li class="breadcrumb-item">Blog</li>
		<li class="breadcrumb-item active">Blog Details</li>
	@endcomponent
	
	<div class="container-fluid dashboard">
	    <div class="row blog-page">
	        <!--<div class="col-xxl-6 set-col-12 box-col-12 xl-40">-->
	        <!--    <div class="card">-->
	        <!--        <div class="blog-box blog-shadow">-->
	        <!--            <img class="img-fluid bg-img-cover" src="{{asset('assets/images/blog/blog.jpg')}}" alt="" />-->
	        <!--            <div class="blog-details">-->
	        <!--                <p>25 July 2018</p>-->
	        <!--                <h4>Accusamus et iusto odio dignissimos ducimus qui blanditiis.</h4>-->
	        <!--                <ul class="blog-social">-->
	        <!--                    <li><i class="icofont icofont-user"></i>Mark Jecno</li>-->
	        <!--                    <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>-->
	        <!--                    <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>-->
	        <!--                </ul>-->
	        <!--            </div>-->
	        <!--        </div>-->
	        <!--    </div>-->
	        <!--</div>-->
	        <!--<div class="col-xxl-6 set-col-12 box-col-12 xl-60">-->
	        <!--    <div class="row">-->
	        <!--        <div class="col-xl-12 col-md-6">-->
	        <!--            <div class="card">-->
	        <!--                <div class="blog-box blog-list row">-->
	        <!--                    <div class="col-xl-6 col-12">-->
	        <!--                        <div class="blog-wrraper">-->
	        <!--                            <a href="blog-single.html"><img class="img-fluid sm-100-wp p-0" src="{{asset('assets/images/blog/blog-2.jpg')}}" alt="" /></a>-->
	        <!--                        </div>-->
	        <!--                    </div>-->
	        <!--                    <div class="col-xl-6 col-12">-->
	        <!--                        <div class="blog-details">-->
	        <!--                            <div class="blog-date"><span>02</span> January 2021</div>-->
	        <!--                            <a href="learning-detailed.html"> <h6>Perspiciatis unde omnis iste natus</h6></a>-->
	        <!--                            <div class="blog-bottom-content">-->
	        <!--                                <ul class="blog-social">-->
	        <!--                                    <li>by: Admin</li>-->
	        <!--                                    <li>12 Hits</li>-->
	        <!--                                </ul>-->
	        <!--                                <hr />-->
	        <!--                                <p class="mt-0">inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>-->
	        <!--                            </div>-->
	        <!--                        </div>-->
	        <!--                    </div>-->
	        <!--                </div>-->
	        <!--            </div>-->
	        <!--        </div>-->
	        <!--        <div class="col-xl-12 col-md-6">-->
	        <!--            <div class="card">-->
	        <!--                <div class="blog-box blog-list row">-->
	        <!--                    <div class="col-xl-6 col-12">-->
	        <!--                        <div class="blog-wrraper">-->
	        <!--                            <a href="blog-single.html"><img class="img-fluid sm-100-w p-0" src="{{asset('assets/images/blog/blog-3.jpg')}}" alt="" /></a>-->
	        <!--                        </div>-->
	        <!--                    </div>-->
	        <!--                    <div class="col-xl-6 col-12">-->
	        <!--                        <div class="blog-details">-->
	        <!--                            <div class="blog-date"><span>03</span> January 2021</div>-->
	        <!--                            <a href="learning-detailed.html"> <h6>Perspiciatis unde omnis iste natus</h6></a>-->
	        <!--                            <div class="blog-bottom-content">-->
	        <!--                                <ul class="blog-social">-->
	        <!--                                    <li>by: Admin</li>-->
	        <!--                                    <li>5 Hits</li>-->
	        <!--                                </ul>-->
	        <!--                                <hr />-->
	        <!--                                <p class="mt-0">inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>-->
	        <!--                            </div>-->
	        <!--                        </div>-->
	        <!--                    </div>-->
	        <!--                </div>-->
	        <!--            </div>-->
	        <!--        </div>-->
	        <!--    </div>-->
	        <!--</div>-->
    	    <div class="row col-sm-12">
    	        <div class="col-sm-4 box-col-6 des-xl-50">
    	            <div class="card">
    	                <div class="blog-box blog-grid">
    	                    <div class="p-10 f-12">
	                            <a href="#">Tatyana Scherbakova</a>.4 days ago
	                        </div>
	                        <a href="blog-single.html"> <h6 class="blog-bottom-details p-l-10">Perspiciatis unde omnis.</h6></a>
    	                    <div class="blog-wrraper">
    	                        <a href="blog-single.html"><img class="img-fluid top-radius-blog" src="{{asset('assets/images/dashboard/blog/1.jpg')}}" alt="" /></a>
    	                    </div>
    	                    <div class="blog-details-second">
    	                        <div class="blog-post-date"><span class="blg-month blg-tag">forex</span></div>
    	                        <p>It is here: a brand new trading engine that allows for a new way of Forex trading. How does Forex….</p>
    	                        <div class="blg-footer">
	                                <div><a href="#">Read More<i class="fa fa-angle-right m-l-10"></i></a></div>
	                                <div><i class="fa fa-comments-o m-r-10"></i>5</div>
    	                        </div>
    	                    </div>
    	                </div>
    	            </div>
    	        </div>
    	        <div class="col-sm-4 box-col-6 des-xl-50">
    	            <div class="card">
    	                <div class="blog-box blog-grid">
    	                    <div class="p-10 f-12">
	                            <a href="#">Tatyana Scherbakova</a>.4 days ago
	                        </div>
	                        <a href="blog-single.html"> <h6 class="blog-bottom-details p-l-10">Perspiciatis unde omnis.</h6></a>
    	                    <div class="blog-wrraper">
    	                        <a href="blog-single.html"><img class="img-fluid top-radius-blog" src="{{asset('assets/images/dashboard/blog/1.jpg')}}" alt="" /></a>
    	                    </div>
    	                    <div class="blog-details-second">
    	                        <div class="blog-post-date"><span class="blg-month blg-tag">forex</span></div>
    	                        <p>It is here: a brand new trading engine that allows for a new way of Forex trading. How does Forex….</p>
    	                        <div class="blg-footer">
	                                <div><a href="#">Read More<i class="fa fa-angle-right m-l-10"></i></a></div>
	                                <div><i class="fa fa-comments-o m-r-10"></i>5</div>
    	                        </div>
    	                    </div>
    	                </div>
    	            </div>
    	        </div>
    	        <div class="col-sm-4 box-col-6 des-xl-50">
    	            <div class="card">
    	                <div class="blog-box blog-grid">
    	                    <div class="p-10 f-12">
	                            <a href="#">Tatyana Scherbakova</a>.4 days ago
	                        </div>
	                        <a href="blog-single.html"> <h6 class="blog-bottom-details p-l-10">Perspiciatis unde omnis.</h6></a>
    	                    <div class="blog-wrraper">
    	                        <a href="blog-single.html"><img class="img-fluid top-radius-blog" src="{{asset('assets/images/dashboard/blog/1.jpg')}}" alt="" /></a>
    	                    </div>
    	                    <div class="blog-details-second">
    	                        <div class="blog-post-date"><span class="blg-month blg-tag">forex</span></div>
    	                        <p>It is here: a brand new trading engine that allows for a new way of Forex trading. How does Forex….</p>
    	                        <div class="blg-footer">
	                                <div><a href="#">Read More<i class="fa fa-angle-right m-l-10"></i></a></div>
	                                <div><i class="fa fa-comments-o m-r-10"></i>5</div>
    	                        </div>
    	                    </div>
    	                </div>
    	            </div>
    	        </div>
    	        <div class="col-sm-4 box-col-6 des-xl-50">
    	            <div class="card">
    	                <div class="blog-box blog-grid">
    	                    <div class="p-10 f-12">
	                            <a href="#">Tatyana Scherbakova</a>.4 days ago
	                        </div>
	                        <a href="blog-single.html"> <h6 class="blog-bottom-details p-l-10">Perspiciatis unde omnis.</h6></a>
    	                    <div class="blog-wrraper">
    	                        <a href="blog-single.html"><img class="img-fluid top-radius-blog" src="{{asset('assets/images/dashboard/blog/1.jpg')}}" alt="" /></a>
    	                    </div>
    	                    <div class="blog-details-second">
    	                        <div class="blog-post-date"><span class="blg-month blg-tag">forex</span></div>
    	                        <p>It is here: a brand new trading engine that allows for a new way of Forex trading. How does Forex….</p>
    	                        <div class="blg-footer">
	                                <div><a href="#">Read More<i class="fa fa-angle-right m-l-10"></i></a></div>
	                                <div><i class="fa fa-comments-o m-r-10"></i>5</div>
    	                        </div>
    	                    </div>
    	                </div>
    	            </div>
    	        </div>
    	        <!--<div class="col-sm-6 box-col-6 des-xl-50">-->
    	        <!--    <div class="card">-->
    	        <!--        <div class="blog-box blog-grid">-->
    	        <!--            <div class="blog-wrraper">-->
    	        <!--                <a href="blog-single.html"><img class="img-fluid top-radius-blog" src="{{asset('assets/images/blog/blog-6.jpg')}}" alt="" /></a>-->
    	        <!--            </div>-->
    	        <!--            <div class="blog-details-second">-->
    	        <!--                <div class="blog-post-date"><span class="blg-month">apr</span><span class="blg-date">10</span></div>-->
    	        <!--                <a href="blog-single.html"> <h6 class="blog-bottom-details">Perspiciatis unde omnis.</h6></a>-->
    	        <!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>-->
    	        <!--                <div class="detail-footer">-->
    	        <!--                    <ul class="sociyal-list">-->
    	        <!--                        <li><i class="fa fa-user-o"></i>admin</li>-->
    	        <!--                        <li><i class="fa fa-comments-o"></i>5</li>-->
    	        <!--                        <li><i class="fa fa-thumbs-o-up"></i>2 like</li>-->
    	        <!--                    </ul>-->
    	        <!--                </div>-->
    	        <!--            </div>-->
    	        <!--        </div>-->
    	        <!--    </div>-->
    	        <!--</div>-->
    	    </div>
    	    <!--<div class="col-sm-4">-->
    	    <!--    <div class="pop-list">-->
    	    <!--        <h4>Popular Posts</h4>-->
    	    <!--        <ul>-->
    	    <!--            <li style="display: flex;">-->
    	    <!--                <span>1</span>-->
    	    <!--                <div>-->
    	    <!--                    <p>“How do I withdraw to the card?”</p>-->
    	    <!--                    <div><i class="fa fa-comments-o m-r-10"></i>5</div>-->
    	    <!--                </div>-->
    	    <!--            </li>-->
    	    <!--        </ul>-->
    	    <!--    </div>-->
    	    <!--</div>-->
	    </div>
	</div>

	
	@push('scripts')
	@endpush

@endsection