<!doctype html>
<html lang="en">
  <head>
  <?php include 'links.php' ?>
  <?php include 'contactform/contact/contact.css' ?>
  </head>
  <body>
    <ul>
      <li><a href="form.html">Contact Us</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="About.html">About Us</a></li>
        <li><a href="index.html">Home</a></li>
  </ul><br/>
     <h1>CONNECT WITH US</h1> 
     <p><b><i>"There are no traffic jams along the extra mile"</i></b></p>

    <div class="contact_form">
        <div class="container">
           <div class="details_box">
           </div>
           <form>
             <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                <div class="form-group">
                  <label for="name">Your Company Name</label>
                  <input type="text" class="form-control" id="name"  placeholder="">
                </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                <div class="form-group">
                  <label for="email">Your Email</label>
                  <input type="email" class="form-control" id="email"  placeholder="">
                </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                <div class="form-group">
                  <label for="phone">Your Phone No</label>
                  <input type="text" class="form-control" id="phone"  placeholder="">
                </div>
               </div>
               
               <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-4 ">
                <div class="form-group">
                  <label for="vehical">Choose Vehical Type</label> <br/>
                  <select class="form-control" id="vehical">
                    <option selected>select vehical type</option>
                    <option value="1">Van</option>
                    <option value="2">Minivan</option>
                    <option value="3">Car</option>
                    <option value="3">Bus</option>
                </select>
                </div>
               </div>
               <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-4 ">
                <div class="form-group">
                  <label for="date">Select PickUp Date</label>
                  <input type="date" class="form-control" id="date" value="mm/ dd/ yyyy">
                </div>
               </div>
               <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-4 ">
                <div class="form-group">
                  <label for="time">Select PickUp Time</label>
                  <input id="time" class="form-control" type="time" name="time" value="--:-- PM">
                </div>
               </div>
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                <div class="form-group">
                  <label for="address">Your Address</label>
                  <textarea class="form-control" id="address"  placeholder=""></textarea>
                </div>
               </div>
               <div class="col-xl-12 col-lg-12 col-md-0 col-sm-0 col-0">
                <div class="demo">
                  <button type="book" class="form-control" id="book">Book Now</button>
                </div>
               </div>
                  </div>
            
            </form>

    
              <div class="row">
                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                     <div class="single_box">
                          <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                     <h2><b>OUR NUMBER</b></h2>
                     <p><b>124468796</b></p>
                     </div>
                 </div>
                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                  <div class="single_box">
                     <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                          <h2><b>OUR ADDRESS</b></h2>
                          <p><b>124 NewLine, London UK,Nemo enum ipsom</b></p>
                </div>
                 </div>
                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                   <div class="single_box">
                  <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                   <h2><b>OUR EMAIL</b></h2>
                   <p><b>contcall@gmail.com</b></p>
              </div>

                 </div>

             </div>
          
            </div>

          </div>
          
  </body>
</html>
<?php
include ("connection.php");
?>
