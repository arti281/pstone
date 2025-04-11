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
          <li><a href="index.html">Home</a></li>         
          <li class="active">Contact</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->
  <!-- Cart view section -->
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              <div class="col-md-6">
                <div class="aa-myaccount-login">
                <h4>User Registration</h4>
                 <form action="{{ route('user.register') }}" method="POST" class="aa-login-form">
                 @csrf
                 <label for="">Name<span>*</span></label>
                 <input type="text" name="name" placeholder="User Name">
                  <label for="">Email<span>*</span></label>
                   <input type="text" name="email" placeholder="User Email">
                   <label for="">Password<span>*</span></label>
                    <input type="password" name="password" placeholder="Password">
                    <button type="submit" value="" class="aa-browse-btn">Login</button>
                    <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
                    <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                  </form>
                </div>
              </div>
            </div>          
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->

   
@endsection