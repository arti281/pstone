@extends('frontend/layouts.header')
@section('content')

  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="{{asset('pstone_assets/img/banners/contactus.jpg')}}" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Contact</h2>
        <ol class="breadcrumb">
          <li><a href="/home">Home</a></li>         
          <li class="active">Contact</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->
<!-- start contact section -->
 <section id="aa-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="aa-contact-area">
           <div class="aa-contact-top">
             <h2>Let's Chat with Us</h2>
             <p>Instant chat and always available.</p>
           </div>
           <!-- contact map -->
           <div class="aa-contact-map">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.484284067765!2d77.23589027455165!3d28.49507389031124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce1ce7a12e09d%3A0x310ac2ef78b0e98e!2sPstone%20Arts%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1743939483502!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>
           <!-- Contact address -->
           <div class="aa-contact-address">
             <div class="row">
               <div class="col-md-8">
                 <div class="aa-contact-address-left">
                   <form class="comments-form contact-form" action="">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="text" placeholder="Your Name" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="email" placeholder="Email" class="form-control">
                        </div>
                      </div>
           </div>
                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="num" placeholder="Mobile" class="form-control">
                        </div>
                      </div>
                    </div>
                  <div class="row">
                   <div class="col-md-6">
                    <div class="form-group">                        
                      <textarea class="form-control" type="textarea" placeholder="Message"></textarea>
                    </div>
                   </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">  
                  <button class="aa-secondary-btn">Submit</button>
           </div>
           </div>
           </div>
                  </form>
                 </div>
           </div>
           
              <div class="row">
               <div class="col-md-4">
                 <div class="aa-contact-address-right">
                   <address>
                     <h4>Pstone Arts</h4>
                     <p>PStone Arts is a Doorstep for all white stone statues."</p>
                     <p><span class="fa fa-home"></span>Govindgard Road, Sikri,Deeg (Rajasthan) - 321024</p>
                     <p><span class="fa fa-phone"></span>+91-9828331730</p>
                     <p><span class="fa fa-envelope"></span>Email: support@pstonearts.com</p>
                   </address>
                 </div>
               </div>
             </div>

           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

   
@endsection