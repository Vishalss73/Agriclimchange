<?php 
include('component/header.php');
?>
<section>
    <div class="container">
      <?php 
      if(count($result) > 0) {
        foreach($result as $row) {
?>
<div class="pt-4 row mb-4">
<div class=" col-md-2 col-sm-6 col-xs-12 col-xl-8 ">
    <div class=" sitesshow-container post-container ">
<h1 class="ml-2"> 
<?php echo $row['title']; ?>

</h1>
<div class= "post-meta mb-3">
<div class="post-meta-material d-flex flex-row bd-highlight">
  <div class="p-2 bd-highlight">
  <i class="bi bi-person"></i> <span> Vishal </span>
  </div>
  <div class="p-2 bd-highlight">
  <i class="bi bi-alarm"></i><span> 20/07/2002 </span>
</div>
  <div class="p-2 bd-highlight">
    <i class="bi bi-bookmark"></i>
    <span>Agriculture News </span>
</div>
</div>
</div>
<p class="post-desc">
<?php echo $row['description']; ?>
        </p>
        </div>
        <?php
        }
      } ?>
        <div class="mt-4 comment-container">
          <h4 class=""> Comment Section </h4>
          <form action="">
            <textarea class="sitesshow-container post-container com-text-area" id="w3review" placeholder="Leave a Comment" name="w3review" rows="5" ></textarea>
            <br>
            <input class="comment-btn" type="submit" value="Submit">
          </form>
        </div>
        <div class="row">
          <div class="col-12">
              <div class="card card-white post">
                  <div class="d-flex post-heading">
                      <div class="float-left image">
                          <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                      </div>
                      <div class="float-left meta">
                          <div class="title h5">
                              <a href="#"><b>Ryan Haywood</b></a>
                              made a post.
                          </div>
                          <h6 class="text-muted time">1 minute ago</h6>
                      </div>
                  </div> 
                  <div class="post-description"> 
                      <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>
  
                  </div>
              </div>
          </div>
          
      </div>
      <div class="row">
        <div class="col-12">
            <div class="card card-white post">
                <div class="d-flex post-heading">
                    <div class="float-left image">
                        <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                    </div>
                    <div class="float-left meta">
                        <div class="title h5">
                            <a href="#"><b>Ryan Haywood</b></a>
                            made a post.
                        </div>
                        <h6 class="text-muted time">1 minute ago</h6>
                    </div>
                </div> 
                <div class="post-description"> 
                    <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>

                </div>
            </div>
        </div>
        
    </div>
    <div class="row">
      <div class="col-12">
          <div class="card card-white post">
              <div class="d-flex post-heading">
                  <div class="float-left image">
                      <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                  </div>
                  <div class="float-left meta">
                      <div class="title h5">
                          <a href="#"><b>Ryan Haywood</b></a>
                          made a post.
                      </div>
                      <h6 class="text-muted time">1 minute ago</h6>
                  </div>
              </div> 
              <div class="post-description"> 
                  <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>

              </div>
          </div>
      </div>
      
  </div>
</div>

<div class="sidebar col-md-2 col-sm-6 col-xs-3 col-xl-4 ">
    <div class="sitesshow-container sidebar-container">
<h4 class=""> Popular Tutorial Similar Subject  </h4>
<div class="post-show-container row">
    <div class="p-0 post-show  col-xl-2">
<img src="https://static.ambitionbox.com/alpha/company/photos/logos/ntt-data.jpg"></img>
    
    </div>
    <div class="post-show col-xl-10">
<p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
            
            </div>

</div>
<div class="post-show-container row">
    <div class=" p-0 post-show  col-xl-2">
<img src="https://static.ambitionbox.com/alpha/company/photos/logos/ntt-data.jpg"></img>
    
    </div>
    <div class="post-show col-xl-10">
<p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
            
            </div>

</div>
<div class="post-show-container row">
    <div class="p-0 post-show  col-xl-2">
<img src="https://static.ambitionbox.com/alpha/company/photos/logos/ntt-data.jpg"></img>
    
    </div>
    <div class="post-show col-xl-10">
<p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
            
            </div>

</div>
<div class="post-show-container row">
    <div class="p-0 post-show  col-xl-2">
<img src="https://static.ambitionbox.com/alpha/company/photos/logos/ntt-data.jpg"></img>
    
    </div>
    <div class="post-show col-xl-10">
<p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
            
            </div>

</div>
    </div>
    <div class="mt-4 sitesshow-container sidebar-container">
      <h4 class=""> Recommended Jobs </h4>
      <div class="post-show-container row">
          <div class="p-0 post-show  col-xl-2">
      <img src="https://static.ambitionbox.com/alpha/company/photos/logos/ntt-data.jpg"></img>
          
          </div>
          <div class="post-show col-xl-10">
      <p class="m-0">Agriclimchange India Pvt Ltd.</p>
        <div class="company-l"  >
          <i class="bi bi-geo-alt"></i>
          Delhi
        </div>   
        <div class="p-0 row">
          <div class="col-4">
            <i class="bi bi-wallet"></i>
            4-10 Year
          </div>
          <div class="col-8">
            <i class="bi bi-cash"></i>
            10 LPA
          </div>
        </div>     
                  </div>
                  

      
      </div>
     
          </div>
          <div class="mt-4 sitesshow-container sidebar-container">
            <h4 class=""> Know About Companies </h4>
            <div class="post-show-container row">
                   
              <div class="mb-2 col-md-6 col-sm-6 col-xs-12">
                <div class="company-show-container sitesshow-container">
                  <div class="img-show">
                 <img src="assets/images/godrej.jpg">
                </div> 
                <div class="mt-2 title-col-company">
                
               </div>
           
             </div>
           </div>
           <div class="mb-2 col-md-6 col-sm-6 col-xs-12">
            <div class="company-show-container sitesshow-container">
              <div class="img-show">
             <img src="assets/images/godrej.jpg">
            </div> 
            <div class="mt-2 title-col-company">
            
           </div>
       
        
       </div> 
                        </div>
                        <div class="mb-2 col-md-6 col-sm-6 col-xs-12">
                          <div class="company-show-container sitesshow-container">
                            <div class="img-show">
                           <img src="assets/images/godrej.jpg">
                          </div> 
                          <div class="mt-2 title-col-company">
                          
                         </div>
                     
                      
                     </div> 
                                      </div><div class="mb-2 col-md-6 col-sm-6 col-xs-12">
                                        <div class="company-show-container sitesshow-container">
                                          <div class="img-show">
                                         <img src="assets/images/godrej.jpg">
                                        </div> 
                                        <div class="mt-2 title-col-company">
                                        
                                       </div>
                                   
                                    
                                   </div> 
                                                    </div>
                        
      
            
            </div>
           
                </div>
                <div class="mt-4 sitesshow-container sidebar-container">
                  <h4 class=""> Know About Sites  </h4>
                  <div class="post-show-container row">
                      <div class="p-0 post-show  col-xl-2">
                  <img src="https://static.ambitionbox.com/alpha/company/photos/logos/ntt-data.jpg"></img>
                      
                      </div>
                      <div class="post-show col-xl-10">
                  <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                              
                              </div>
                  
                  </div>
                  <div class="post-show-container row">
                      <div class=" p-0 post-show  col-xl-2">
                  <img src="https://static.ambitionbox.com/alpha/company/photos/logos/ntt-data.jpg"></img>
                      
                      </div>
                      <div class="post-show col-xl-10">
                  <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                              
                              </div>
                  
                  </div>
                  <div class="post-show-container row">
                      <div class="p-0 post-show  col-xl-2">
                  <img src="https://static.ambitionbox.com/alpha/company/photos/logos/ntt-data.jpg"></img>
                      
                      </div>
                      <div class="post-show col-xl-10">
                  <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                              
                              </div>
                  
                  </div>
                  <div class="post-show-container row">
                      <div class="p-0 post-show  col-xl-2">
                  <img src="https://static.ambitionbox.com/alpha/company/photos/logos/ntt-data.jpg"></img>
                      
                      </div>
                      <div class="post-show col-xl-10">
                  <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                              
                              </div>
                  
                  </div>
                      </div>
                 
                      </div>
</div>
</div>

</div>

</section>
<!-- Footer -->
<footer class="text-center text-lg-start bg-light footer-design">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-8 mx-auto mb-4 footer-web-dsc">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Agriclimchange
          </h6>
          <p>
           We help users Find Agriculture Study Material, Prepare for jobs, know about Companies and Jobs Availability. 
           Agriclimchange mission is agriculture student can find all about on here to make career.
          </p>
          <div class="row">
          <div class="col-md-3 col-lg-4 col-xl-2 mx-auto mb-4">
            <div class="studym">
              <p class="mb-0">5000+ </p>
              <span>Notes</span>
            </div>
          </div>
          <div class="col-md-3 col-lg-4 col-xl-2 mx-auto mb-4">
            <div class="studym">
              <p class="mb-0">500 upto </p>
              <span>Companies</span>
            </div>
          </div>
          <div class="col-md-3 col-lg-4 col-xl-2 mx-auto mb-4">
            <div class="studym">
              <p class="mb-0">200+ </p>
              <span>Interview</span>
            </div>
          </div>
          <div class="col-md-3 col-lg-4 col-xl-2 mx-auto mb-4">
            <div class="studym">
              <p class="mb-0">500 Upto </p>
              <span>Review</span>
            </div>
            </div>
          </div>
          <form class="row row-cols-1 row-cols-md-auto align-items-center form-design">
            <div class="col flex-grow-1">
                <input class="form-control form-input form-control-solid" id="inputEmail" type="text" placeholder="Search Jobs, Companies and Study Material">
            </div>
            <div class="col"><button class="search-btn btn btn-teal fw-500" type="submit">Search</button></div>
        </form>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-3 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="row mt-4">
        <div class="col-md-3 col-lg-2 col-xl-3 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-3 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
</html>