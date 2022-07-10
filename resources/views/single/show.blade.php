<!DOCTYPE html>
<html lang="en">

<head>
  <title>Vision Media</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../../../fonts/icomoon/style.css">

  <link rel="stylesheet" href="../../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../css/jquery-ui.css">
  <link rel="stylesheet" href="../../../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../../../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../../../css/owl.theme.default.min.css">

  <link rel="stylesheet" href="../../../css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="../../../css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="../../../fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="../../../css/aos.css">
  <link href="../../../css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="../../../css/style.css">


  <link rel="shortcut icon" href="../../../images/SAU_logo.png" />
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    
    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-6 d-flex">
            <a href="{{ url('/') }}" class="site-logo">
              <img src="../../../images/SAU_logo.jpg" alt="" style="height: 70px; width: 80px;"> Vision Media
            </a>

            <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>

          </div>
          <div class="col-12 col-lg-6 ml-auto d-flex">
            <div class="ml-md-auto top-social d-none d-lg-inline-block">
              <a href="#" class="d-inline-block p-3"><span class="icon-facebook"></span></a>
                <a href="#" class="d-inline-block p-3"><span class="icon-twitter"></span></a>
                <a href="#" class="d-inline-block p-3"><span class="icon-instagram"></span></a>
            </div>
            <form action="#" class="search-form d-inline-block">

              <div class="d-flex">
                <input type="email" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-secondary" ><span class="icon-search"></span></button>
              </div>
            </form>

            
          </div>
          <div class="col-6 d-block d-lg-none text-right">
            
          </div>
        </div>
      </div>
      


      
      <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          
          <div class="mr-auto">
          <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                <li class="active">
                  <a href="{{ url('/') }}" class="nav-link text-left">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="blog.html"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    Categories
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('/news') }}">News</a>
                    <a class="dropdown-item" href="{{ url('/entertainment') }}"
                      >Entertainment</a
                    >
                    <a class="dropdown-item" href="{{ url('/sports') }}">Sports</a>
                    <a class="dropdown-item" href="{{ url('/investigative') }}">Investigative Reporting</a>
                  </div>
                </li>
               <!--  <li>
                  <a href="categories.html" class="nav-link text-left">Categories</a>
                </li> -->
                <li>
                  <a href="{{ url('/about') }}" class="nav-link text-left">About Us</a>
                </li>
                <li>
                  <a href="{{ url('/editors') }}" class="nav-link text-left">Editors</a>
                </li>
                <!-- <li>
                  <a href="categories.html" class="nav-link text-left">Business</a>
                </li>
                <li>
                    <a href="categories.html" class="nav-link text-left">Health</a>
                </li>
                <li><a href="categories.html" class="nav-link text-left">Design</a></li>
                <li>
                  <a href="categories.html" class="nav-link text-left">Sport</a>
                </li> -->
                <li><a href="{{ url('/contact') }}" class="nav-link text-left">Contact</a></li>
              </ul>                                                                                                                                                                                                                                                                                         
            </nav>

          </div>
         
        </div>
      </div>

    </div>
    
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 single-content">
            
            <p class="mb-8">
              <img src="{{ asset('images/' . $post->image_path) }}" alt="Image" class="img-fluid">
            </p>  
            <h1 class="mb-4">
              {{ $post->title }}
            </h1>
            <div class="post-meta d-flex mb-5">
              <!-- <div class="bio-pic mr-3">
                <img src="../../../images/person_1.jpg" alt="Image" class="img-fluidid">
              </div> -->
              <div class="vcard">
                <span class="d-block"><a href="#">{{$post->user->name}}</a> in <a href="#">{{$post->category}}</a></span>
                <span class="date-read">Created on {{ date('jS M Y', strtotime($post->updated_at))}}<span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
              </div>
            </div>
            
            <p>
            {!! html_entity_decode($post->content) !!}
            </p>

            <div class="pt-5">
                    <p>Categories:  <a href="#">{{$post->category}}</a></p>
                  </div>
      
      
                  <div class="pt-5">
                    <!-- <div class="section-title">
                      <h2 class="mb-5">6 Comments</h2>
                    </div>
                    <ul class="comment-list">
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="images/person_1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>Jean Doe</h3>
                          <div class="meta">January 9, 2018 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>
                      </li>
      
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="images/person_1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>Jean Doe</h3>
                          <div class="meta">January 9, 2018 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>
      
                        <ul class="children">
                          <li class="comment">
                            <div class="vcard bio">
                              <img src="images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                              <h3>Jean Doe</h3>
                              <div class="meta">January 9, 2018 at 2:21pm</div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                              <p><a href="#" class="reply">Reply</a></p>
                            </div>
      
      
                            <ul class="children">
                              <li class="comment">
                                <div class="vcard bio">
                                  <img src="images/person_1.jpg" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                  <h3>Jean Doe</h3>
                                  <div class="meta">January 9, 2018 at 2:21pm</div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                  <p><a href="#" class="reply">Reply</a></p>
                                </div>
      
                                  <ul class="children">
                                    <li class="comment">
                                      <div class="vcard bio">
                                        <img src="images/person_1.jpg" alt="Image placeholder">
                                      </div>
                                      <div class="comment-body">
                                        <h3>Jean Doe</h3>
                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                        <p><a href="#" class="reply">Reply</a></p>
                                      </div>
                                    </li>
                                  </ul>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
      
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="images/person_1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>Jean Doe</h3>
                          <div class="meta">January 9, 2018 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>
                      </li>
                    </ul> -->
                    <!-- END comment-list -->
                    
                    <div class="comment-form-wrap pt-5">
                      <!-- <div class="section-title">
                        <h2 class="mb-5">Leave a comment</h2>
                      </div>
                      <form action="#" class="p-5 bg-light">
                        <div class="form-group">
                          <label for="name">Name *</label>
                          <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                          <label for="email">Email *</label>
                          <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                          <label for="website">Website</label>
                          <input type="url" class="form-control" id="website">
                        </div>
      
                        <div class="form-group">
                          <label for="message">Message</label>
                          <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                          <input type="submit" value="Post Comment" class="btn btn-primary py-3">
                        </div>
      
                      </form> -->
                    </div>
                  </div>
          </div>

          @php
                $posts = DB::table('posts')->orderBy('updated_at', 'DESC')->limit(5)->get();

          @endphp
          <div class="col-lg-3 ml-auto">
            <div class="section-title">
              <h2>Latest Posts</h2>
            </div>
            @foreach ($posts as $key => $post)
            <div class="trend-entry d-flex">
              <div class="number align-self-start">{{ ++$key }}</div>
              <div class="trend-contents">
                <h2><a href="/single/{{ $post->slug }}">{{ $post->title}}</a></h2>
                <div class="post-meta">
                  <!-- <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span> -->
                  <span class="date-read">Created on {{ date('jS M Y', strtotime($post->updated_at))}}  </span><span class="icon-star2"></span> <br>
                  <span>3 mins read</span>
                </div>
              </div>
            </div>
            @endforeach
            
            <!-- <div class="trend-entry d-flex">
              <div class="number align-self-start">02</div>
              <div class="trend-contents">
                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                <div class="post-meta">
                  <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                  <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
              </div>
            </div>

            <div class="trend-entry d-flex">
              <div class="number align-self-start">03</div>
              <div class="trend-contents">
                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                <div class="post-meta">
                  <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                  <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
              </div>
            </div>

            <div class="trend-entry d-flex pl-0">
              <div class="number align-self-start">04</div>
              <div class="trend-contents">
                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                <div class="post-meta">
                  <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                  <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
              </div>
            </div> -->
            
            <p>
              <a href="{{ url('/') }}" class="more">See All Posts <span class="icon-keyboard_arrow_right"></span></a>
            </p>
          </div>


        </div>
        
      </div>
    </div>

    <div class="site-section subscribe bg-light">
      <div class="container">
        <form action="#" class="row align-items-center">
          <div class="col-md-5 mr-auto">
            <h2>Newsletter Subcribe</h2>
            <p>Enter your email to recieve weekly newsletters frome us</p>
          </div>
          <div class="col-md-6 ml-auto">
            <div class="d-flex">
              <input type="email" class="form-control" placeholder="Enter your email">
              <button type="submit" class="btn btn-secondary" ><span class="icon-paper-plane"></span></button>
            </div>
          </div>
        </form>
      </div>
    </div>


    
    <div class="footer">
      <div class="container">
        

        <div class="row">
          <div class="col-12">
            <div class="copyright">
            <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy; All rights reserved | Vision Media
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

  <script src="../../../js/jquery-3.3.1.min.js"></script>
  <script src="../../../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../../../js/jquery-ui.js"></script>
  <script src="../../../js/popper.min.js"></script>
  <script src="../../../js/bootstrap.min.js"></script>
  <script src="../../../js/owl.carousel.min.js"></script>
  <script src="../../../js/jquery.stellar.min.js"></script>
  <script src="../../../js/jquery.countdown.min.js"></script>
  <script src="../../../js/bootstrap-datepicker.min.js"></script>
  <script src="../../../js/jquery.easing.1.3.js"></script>
  <script src="../../../js/aos.js"></script>
  <script src="../../../js/jquery.fancybox.min.js"></script>
  <script src="../../../js/jquery.sticky.js"></script>
  <script src="../../../js/jquery.mb.YTPlayer.min.js"></script>




  <script src="../../../js/main.js"></script>

</body>

</html>