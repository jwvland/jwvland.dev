@extends('layouts.master')
@section('title')Home
@stop
@section('home')
 <!--ROOFERS-->
<section class="roofers-bg"> 
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <a name="about"></a><h1>About Us</h1>
                <hr class="center">
                <p class="jw-animate-gen noOpacity" data-gen-offset="75%" data-gen="fadeInDown">
                Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed varius at, adipiscing vitae est<br>. Sed nec felis pellentesque, lacinia dui sed, ultricies sapien. 

                </p>
            </div>
        </div>
        
        <div class="row">

        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="roofers text-center jw-animate-gen noOpacity" data-gen-offset="85%" data-gen="fadeInUp">
            <img src="images/professional.png" alt="">
            <p>Expert and Professional</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="roofers text-center jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeInUp">
            <img src="images/satisfaction.png" alt="">
            <p>Satisfaction Guarantee</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="roofers text-center jw-animate-gen noOpacity" data-gen-offset="75%" data-gen="fadeInUp">
            <img src="images/inspiration.png" alt="">
            <p>Free Estimates</p>
            </div>
        </div>
        
        </div>
    </div>
</section>


 <!-- FEATURED WORK -->
<section class="feature">

<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
          <h1 class="jw-animate-gen noOpacity" data-gen-offset="85%" data-gen="fadeInDown"><a name="featured"></a>Our Featured Work</h1>
            <hr class="center">          
        </div>       
    </div>
    
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="mosaicflow clearfix" data-item-height-calculation="attribute">
    <div class="mosaicflow__item jw-animate-gen noOpacity" data-gen-offset="90%" data-gen="fadeIn">
    <img src="/images/feature-work1.png"  alt="" class="img-responsive">
      <span class="hover text-center">
            <a href="{{{action('HomeController@showWorkDetail')}}}"><i class=" fa fa-external-link"></i></a>
            </span>
    </div>

    <div class="mosaicflow__item jw-animate-gen noOpacity" data-gen-offset="85%" data-gen="fadeIn">
    <img src="/images/feature-work2.png"  alt="" class="img-responsive">
      <span class="hover text-center">
            <a href="{{{action('HomeController@showWorkDetail')}}}"><i class=" fa fa-external-link"></i></a>
            </span>
    </div>

    <div class="mosaicflow__item jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeIn">
    <img src="images/feature-work3.png"  alt="" class="img-responsive">
      <span class="hover text-center">
            <a href="{{{action('HomeController@showWorkDetail')}}}"><i class=" fa fa-external-link"></i></a>
            </span>
    </div>

    <div class="mosaicflow__item jw-animate-gen noOpacity" data-gen-offset="75%" data-gen="fadeIn">
    <img src="images/gallery5.png"  alt="" class="img-responsive">
      <span class="hover text-center">
            <a href="{{{action('HomeController@showWorkDetail')}}}"><i class=" fa fa-external-link"></i></a>
            </span>
    </div>
        
        <div class="mosaicflow__item jw-animate-gen noOpacity" data-gen-offset="75%" data-gen="fadeIn">
    <img src="images/gallery1.png"  alt="" class="img-responsive">
      <span class="hover text-center">
            <a href="{{{action('HomeController@showWorkDetail')}}}"><i class=" fa fa-external-link"></i></a>
            </span>
    </div>
        
        <div class="mosaicflow__item jw-animate-gen noOpacity" data-gen-offset="75%" data-gen="fadeIn">
    <img src="images/gallery2.png"  alt="" class="img-responsive">
      <span class="hover text-center">
            <a href="{{{action('HomeController@showWorkDetail')}}}"><i class=" fa fa-external-link"></i></a>
            </span>
    </div>
        
        <div class="mosaicflow__item jw-animate-gen noOpacity" data-gen-offset="75%" data-gen="fadeIn">
    <img src="images/gallery3.png"  alt="" class="img-responsive">
      <span class="hover text-center">
            <a href="{{{action('HomeController@showWorkDetail')}}}"><i class=" fa fa-external-link"></i></a>
            </span>
    </div>
        
        <div class="mosaicflow__item jw-animate-gen noOpacity" data-gen-offset="75%" data-gen="fadeIn">
    <img src="images/gallery4.png"  alt="" class="img-responsive">
      <span class="hover text-center">
            <a href="{{{action('HomeController@showWorkDetail')}}}"><i class=" fa fa-external-link"></i></a>
            </span>
    </div>

  </div>                          
    </div>
  </div>
</div>
</section>

<!-- news-letter -->
  <section class="news-letter module parallax parallax-1">
    <div class="container">
      <div class="row text-center jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeInDown">
        <h1>Get our Daily News and Offers</h1>
        <p>Nunc lorem mi, pulvinar quis Class aptent taciti molestie tincidunt</p>
      </div>
      <div class="row news-letter-form jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeInDown">
        <div class="col-sm-9 col-sm-offset-0 col-lg-7 col-lg-offset-2 col-xs-12 col-xs-offset-0 wow fadeInUp" data-wow-duration="2s">
          <form class="form-inline col-xs-12">
            <div class="form-group">
            
            <div class="col-xs-11 form-input">
              <label class="sr-only" for="userEmail">Email Address</label>
              <input type="email" class="form-control" id="userEmail" placeholder="Email Adrress" required>
            </div>  
            <div class="col-xs-1 form-input">
              <button type="submit" class="btn btn-default submit-button">
                Join us Now!
              </button>
            </div>  
              
            </div>
          </form>
        </div>
      </div>
    </div>
    
  </section>
@stop

