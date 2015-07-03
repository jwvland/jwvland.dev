@extends('layouts.master')
@section('detail')

<body>
<div class="page-nav">
    <div class="container">
        <div class="row">
            <div class="top-nav2">
                <div class="col-md-9 col-sm-9 col-xs-6 jw-animate-gen noOpacity" data-gen="fadeInLeft" data-gen-offset="50%">
                <span class="heading">Landscaping</span>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 text-right jw-animate-gen noOpacity" data-gen="fadeInRight" data-gen-offset="50%">
                <span class="inner-link">
                <a href="{{{action('HomeController@showHome')}}}">Home <i class="fa fa-angle-double-right"></i></a>
               </span>
                <span class="inner-link">Landscaping</span>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="work-details">
    <div class="container">
        <div class="work-detail">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="carousel slide abt-carousel jw-animate-gen noOpacity" data-gen="fadeInRight" data-gen-offset="75%">
                   <div class="carousel-inner">
                    <div class="item active">
                        <div class="bannerImage">
                            <a href="#"><img src="images/work-detail.jpg" alt=""></a>
                        </div>
                    </div><!-- /Slide1 --> 
        
                    <div class="item">
                        <div class="bannerImage">
                            <a href="#"><img src="/images/work-detail2.jpg" alt=""></a>
                        </div>
                                                                 
                    </div><!-- /Slide2 -->             
                                        
                </div>
                
                <div class="control-box">                            
                    <a data-slide="prev" href=".abt-carousel" class="carousel-control left">
                    <i class="fa fa-angle-double-left"></i>
                    </a>
                    <a data-slide="next" href=".abt-carousel" class="carousel-control right">
                    <i class="fa fa-angle-double-right"></i>
                    </a>
                </div><!-- /.control-box -->   
                                      
                </div><!-- /#myCarousel -->
                </div>
            </div><!--ROW-->
            </div> 
        </div> 
</section>
@stop
