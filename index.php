<?php
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="accect/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
  <link rel="shortcut icon" href="accect/images/ncc1-nobg.png" type="image/x-icon">
  <link rel="stylesheet" href="accect/css/style.css">
  <style>
  body
  {
	  background-color:yellow green;
  }
  </style>
 
  <script src="accect/js/bootstrap.bundle.js"></script>
  <title>Home</title>
</head>

<body>

  <div class="container-fluid">
    <!-- wrapper container start-->
    <!-- top bar start -->
    <div class="row p-1 bg-danger text-white">
      <div class="col-sm-4"><i class="fa-solid fa-phone-flip"></i>Call Us :<a href="tel:9876543210" class="text-light">9876543210</a>  </div>
      <div class="col-sm-3"><i class="fa-solid fa-envelope"></i>Mail Us:<a href="mailto: gpl@gmail.com" class="text-light">gpl@gmail.com</a></div>
      <div class="col-sm-5 text-end"> <i class="fa-solid fa-location-pin"></i>Ram Krishna College Madhubani,Bihar
        </div>
    </div>
    <!-- top bar end -->

    <!--college logo name and social media icon start  -->
    <div class="container">
      <div class="row">
        <div class="col-sm-3 my-logo" align="left">
          <img src="accect/images/logo.jpg" height="120px" width="120px" alt="">
        </div>

        <div class="col-sm-6 pt-4" align="center">
          <h3>Ram Krishna College Madhubani,Bihar</h3>
          <p><u>Affiliated with Lalit Narayan Mithila University,Darbhanga</u></p>
          <p>Bihar</p>
		  <hr color="red"/>
        </div>
        <div class="col-sm-3 ps-1">
          <ul class="s-icon">
            <li><i class="fa-brands fa-facebook"></i></li>
            <li> <i class="fa-brands fa-whatsapp"></i></li>
            <li><i class="fa-brands fa-instagram"></i></li>
            <li><i class="fa-brands fa-twitter"></i></li>
          </ul>
        </div>
      </div>
    </div>
    <!--college logo name and social media icon end -->

    <!--nav bar start  -->
  <div class="row mt-5">
    <div class="col-sm-12">
      <nav class="navbar navbar-expand-lg bg-info">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
			
			  
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button"
			  data-bs-toggle="dropdown"
                  aria-expanded="false">
                  STAFF
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="teach.php">Teacher</a></li>
                  <li><a class="dropdown-item" href="nonteach.php">Non-Teacher</a></li>
                  
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Academic
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="acal.php">Academic calender</a></li>
                  <li><a class="dropdown-item" href="fee.php">Fee Structure</a></li>
                  <li>
                    
                    <hr class="dropdown-divider">
                  </li>
                  </li>
                  <li><a class="dropdown-item" href="t_table.php">Time Table</a></li>
                </ul>
              </li>
			 
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button"
			  data-bs-toggle="dropdown"
                  aria-expanded="false">
                  NAAC
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="aqar.php">AQAR</a></li>
                  <li><a class="dropdown-item" href="ssr.php">SSR</a></li>
                  
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
			   <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
			   <li class="nav-item">
                <a class="nav-link" href="gallary.php">Gallery</a>
              </li>
			   <li class="nav-item">
                <a class="nav-link" href="com.php">Commities</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <!--nav bar end  -->

  <!-- slider image start -->
  <div class="row">
    <div class="col-sm-12">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="accect/images/slider/slider1.jpg" class="d-block w-100  Aman-ka-slider" alt="...">
          </div>
          <div class="carousel-item">
            <img src="accect/images/slider/slider2.jpg" class="d-block w-100  Aman-ka-slider" alt="...">
          </div>
          <div class="carousel-item">
            <img src="accect/images/slider/slider3.jpg" class="d-block w-100  Aman-ka-slider" alt="...">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- slider image end ---

  <!-- about RK College and image start -->
  <div class="container-fluit mt-5">
    <div class="row" style="min-height:90px;">
      <div class="col-sm-2"><img src="accect/images/mentor/cm_nitish_kumar.jpg" class="w-100 h-75" alt="photo nahi a rahi"></div>
      <div class="col-sm-2"><img src="accect/images/mentor/principal.png"class="w-100 mb-4">
        <img src="accect/images/mentor/spsingh.jpg" class="w-100 mb-4 icon-image" alt="">
        <img src="accect/images/mentor/p.png" class="w-100 icon-image" alt="">
      </div>

      <div class="col-sm-8">
        <h3>About Ram Krishna College,Madhubani :</h3>
        <p>Ram Krishna college, Madhubani, a Co-educational constituent college of Lalit Narayan Mithila University, Darbhanga situated at the foothills of the Himalaya and in the heartland of Mithila, 
		was established in 1940 by Baboo Ram Krishna
		Purbey. He envisioned a high class educational
		institution; an institution that will mould and guide future generations to enlightment. This dream has come a long way in the last seven decades. </p>
        <p>This premier college was established as an Under Graduate college in August, 1940 and was affiliated to Patna University in 1941. Thenceforth, it started teaching in Arts, Science and Commerce catering to the academic needs of the people of this border district and parts of Nepal. This college became a constituent unit of Lalit Narayan Mithila University, Darbhanga in 1975.
On account of excellent academic performances Post Graduate Studies started here in 1983. At present, the college imparts Post Graduate education to students across all the three faculties Arts, Science and Commerce.
</p>
<p>Keeping in pace with the demand of globalization, Ram Krishna College provides education related to skill development in Healthy Care and Retail under the community college scheme. Under UGC scheme the college provides PG diploma, PG Degree course in Human Rights Education, self financing degree courses in Bio-Technology and B.Ed., add on certificate courses in Medical Lab Technology and Entrepreneurship. In addition to the above courses Ram Krishna College has study centres of Indira Gandhi National Open University (IGNOU) and Nalanda Open University (NOU) in distance mode of learning.
Spread over 39 acres of land, this college has more than 10,000 students on rolls. We are privileged to have vibrant, committed and inspiring faculty members in the college. Besides imparting knowledge through their classes our teachers are also engaged in research works that contribute to the University as well as to the society.
The college is administered with the help of devoted and efficient office staffs that delivers prompt assistance to all students. The college boasts of sprawling campus, huge l, social engineering, painting, drama and literature.
The college has the privilege of having two of its alumni as the Vice-Chancellor of L.N. Mithila University, Darbhanga.


</p>
      </div>
    </div>
  </div>
  <!-- about Gpl and image start -->

  <!-- Profile images start -->
  <div class="container-fluit mt-5">
    <div class="row">
      <div class="col-sm-3 h-100">
        <div class="card">
          <img src="accect/images/mentor/principal.png" class="card-img-top card-image" alt="...">
          <div class="card-body">
            <h5 class="card-title">A.K. sir </h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>

          </div>
        </div>
      </div>

      <div class="col-sm-3 h-100">
        <div class="card">
          <img src="accect/images/mentor/governor.jpg" class="card-img-top card-image" alt="...">
          <div class="card-body">
            <h5 class="card-title">B.K. Sir</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>

          </div>
        </div>
      </div>

      <div class="col-sm-3 h-100">
        <div class="card">
          <img src="accect/images/mentor/spsingh.jpg" class="card-img-top card-image" alt="...">
          <div class="card-body">
            <h5 class="card-title">S.P Singh Sir (Chairman)</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>

          </div>
        </div>
      </div>

      <div class="col-sm-3 h-100">
        <div class="card">
          <img src="accect/images/mentor/cm_nitish_kumar.jpg" class="card-img-top card-image" alt="...">
          <div class="card-body">
            <h5 class="card-title">Mr.Nitish Kumar(C.M)</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Profile images start -->

  <!--principal Section start  -->
  <div class="container mt-3">
    <div class="row">
      <div class="col-sm-9">
        <h3>Principal's Message :</h3>
        <p>Welcome to R.K. College- one of the largest constituent Colleges of Lalit Narayan Mithila University- a premier institution, with highly qualified academicians imparting education in arts, science and Commerce from Inter to PG level. The college enjoys a reputation for outstanding performance in academics, sports and extra-curricular activities.
My sincere advice to all the admission seekers to the college is to be disciplined, honest, hardworking and sincere in their studies to reach the pinnacle of success. Our mission is to help our students to grow intellectually, personally and professionally so that they feel internally empowered and compelled to make significant positive contribution to the organizations they serve and to the Nation as a whole.
Rightly Einstein said “Genius is 1% talent and 99% hard work”
</p>
<p>The college ensures complete development of the body the mind and the soul. According to Swami Vivekananda, “Any thing that makes you weak physically, intellectually and spiritually is to be rejected as poison” We have declared our campus “PAAN MASALA, GUTKA and TOBACCO FREE”. No one is allowed to use these banned items within our premises in case of violation, necessary action would be taken.
While we take pride in the infrastructural facilities that we have succeeded in providing to our students in recent past, we always strive to do better. we are very much aware of the expectations that our students have from us. I personally assure you that we will do our utmost to make your stay in R.K. College a rewarding and memorable one. I believe in non-close door-friendly and congenial atmosphere among all sections of R.K. College community, be it the teaching Faculty the Non-Teaching Staff or the Students. All problems & issues are openly discussed and reached to a healthy solution.
</p>
      </div>
      <div class="col-sm-3">
        <div class="card">
        <img src="accect/images/mentor/principal.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">R.K.Verma Sir (Principal)</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          
        </div>
      </div>
    </div>
  </div>
  </div>
  <!--principal Section end  -->

  <!-- FAQ section start-->
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-2">
        <img src="accect/images/gallery/gal2.jpg" class="w-100 h-100" alt="">
      </div>
      <div class="col-sm-2 mb-1">
        <img src="accect/images/gallery/gal10.jpg" class="w-100 h-75 mb-1" alt="">
        <img src="accect/images/gallery/gal4.jpg" class="w-100 h-25" alt="">
      </div>
      <div class="col-sm-8">
        <h3>FAQ :</h3>
        <div class="accordion" id="accordionPanelsStayOpenExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                Accordion Item #1
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
              <div class="accordion-body">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                Accordion Item #2
              </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                Accordion Item #3
              </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                Accordion Item #4
              </button>
            </h2>
            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- FAQ section end-->

  <!-- gallert start -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-3"><img src="accect/images/gallery/gal14.jpg " class="w-100 gallery-pic" alt=""></div>
      <div class="col-sm-3"><img src="accect/images/gallery/gal13.jpg " class="w-100 gallery-pic"alt=""></div>
      <div class="col-sm-3"><img src="accect/images/gallery/gal12.jpg " class="w-100 gallery-pic"alt=""></div>
      <div class="col-sm-3"><img src="accect/images/slider/slider1.jpg " class="w-100 h-100 gallery-pic"alt=""></div>
    </div>
  </div>
  <!-- gallery end -->

  <!-- footer start -->
  <div class="row mt-5">
    <div class="col-sm-12 bg-dark">
      <div class="container-fluit">
        <div class="row text-white">
          <div class="col-sm-6">
            <h4>Address</h4>
            <ul>
              <li>Ram krishan College Madhubani Bihar </li>
            </ul>
			<h4>Contact Details</h4>
			<ul>
			<li>Phone No. & Fax – 06276-222264 
Address : R.K. College Madhubani
Pupri - Madhubani Rd, Baingra, Madhubani, Bihar 847211
</li>
			</ul>
			
          </div>
          <div class="col-sm-6">
            <h4>Useful links</h4>
            <ul>
             <a href="#"> <li>Contact Us</li></a>
             <a href="#"> <li>College</li></a>
              <a href="#"><li>Branch</li></a>
              <a href="#"><li>Semester</li></a>
              <a href="#"><li>Books</li></a>
            </ul>
          </div>
          <div class="col-sm-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7151.474396095454!2d86.060814!3d26.335008!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9b68ef8379f6fe87!2sR.K.%20College%20Madhubani!5e0!3m2!1sen!2sus!4v1662382907195!5m2!1sen!2sus" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
   <!-- footer end -->

 <!-- wrapper container end -->
  </div>
<a href="aman.php">
<h2>
<span style="color:red">Desigend & Developed By Aman Somvanshi</span>
</h2>
</a>
&copy;
</body>

</html>