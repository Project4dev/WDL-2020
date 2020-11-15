@extends('layouts.base')
@section('contents')
<div id="header-hero-container">
        
        
        <section id="hero">
            <div class="fade"></div>
            <div class="hero-text">
                <h1>Sweet Homes </h1>
                <h3>Buy and sell real estate properties</h3>
                <p>Owning a home is a keystone of wealth - both financial affluence and emotional security.</p>
            </div>
        </section>
    </div>

    <section id="how-it-works">
        <div class="container">
            <h2>How It Works</h2>
            <div class="flex">
                <div>
                    <span class="fas fa-home"></span>
                    <h4>Find a Property.</h4>
                    <p>We are providing search option in our health
                      You can easily find rented house as well as sale house .</p>
                </div>

                <div>
                    <span class="fas fa-dollar-sign"></span>
                    <h4>Buy a Property.</h4>
                    <p>We  provide a  very  secured properties flats , house , apartment ect . After login you have more option to choice.
                     Please read all document carefully</p>
                </div>

                <div>
                    <span class="fas fa-chart-line"></span>
                    <h4>Investing.</h4>
                    <p>Investment in house is a lifetime settlement 😎</p>
                </div>
            </div>
        </div>
    </section>

    <section id="properties">
        <div class="container">
            <h2>Properties</h2>
            <P>In our website we have the list of all the properties.<p>
<p>And different section for different standard of properties.</p>
<p>The website is for the   both  the seller and buyer we are providing the same platformWe have three faces for searching property selling and buying property in rate or on house. </p>
            <div id="properties-slider" class="slick">
                <div>
                   
                </div>

                <div>
                    
                </div>

                <div>
                    
                </div>

                <div>
                    
                </div>

                <div>
                   
                </div>
                </div>
            </div>

            <a href="{{url('all-post')}}" ><button class="rounded">View All Property Listings</button>
        </div>
    </section>

    <section id="agents">
        <div class="container">
            <!-- <h2>service provider</h2>
            <p class="large-paragraph"></p>

            <div class="flex">
                <div class="card">
                    
                    <img src="photo.jpeg" alt="HTML5 Icon" style="width:360px;height:350px;">
                    <h3>Asraf</h3>
                    <p>Web management , database, service provider , Buying department manager,Customer contact servicer,selling department head,All services .</p>
                    <p>He is expert in many areas he is very helpful , and good listener , and good in nature, he is one of the main contributor of of the website</p>
                    <p>...A Good laugh is sunshine in the house...</p>
                </div>

                <div class="card">
                    <img src="amaan.jpg"alt="HTML5 Icon" style="width:360px;height:350px;">
                   
                    <h3>Amaan</h3>
                    <p>Buying department manager, Web management , database, service provider , selling department head</p>
                    <p>He is excellent smart worker and also has excellent leader skill , good communication skills, and have a convincing power. </p>
                    <p>...House is made of brick and mortar but home is made by people who leave there...</p>
                </div>


                <div class="card">
                    <img src="shaid.jpg" alt="HTML5 Icon" style="width:360px;height:350px;" />
                    <h3>Shaid Raja </h3>
                    <p>Web management ,database, Buying department manager , Customer contact servicer ,service provider , selling department head</p>
                    <p>He is a master of all his areas of work , he is one of the mean developer of our website ,  you also manage the database of our website. Happiest person</p>
                    <p>...House is made of walls and 
Beams : house is built with love and dreams...</p>
                </div>

                <div class="card">
                    <img src= "rahim.jpg"alt="HTML5 Icon" style="width:360px;height:300px;"/>
                    <p> All services , general manager,Web management , database, service provider , Customer contact servicer ,  head of all management , selling department head , Buying department manager.</p>
                    <h3>Abdul Rahim Akbar Ali </h3>
                    <p>He is the master of creativity   and ideas , one of the excellent developer and contributor of ourwebsite , good listening and convincing skills ,  good marketing , and expert in customer service area .</p>
                    <p>...Home is where love Paradise memories and created friends and family belong and laughter never end...</p>
                </div>

            </div> -->
        </div>
    </section>

    <section id="the-best">
        <div class="flex container">
            <img src="https://images.unsplash.com/photo-1490644658840-3f2e3f8c5625?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Property 1" />
            <div>
                <h2>We Are the Best Real Estate Company</h2>
                <p class="large-paragraph">Sweet home is idea to service</p>
                <p>SWEET HOMES is an online platform where real estate trade is taking place in a much faster and newer manner. We not just help you with finding the ideal real estate, but also ensure that your buying journey is as smooth as it can be. We understand that while buying or renting a property, there are a lot of factors to be taken into consideration, like the locality, preferred area, budget, amenities, and a lot more. SWEET HOME  is the destination where you will end up finding the best suitable property available across India. Whether you are looking for a rented property or planning to build your dream abode, you can find anything and everything in real estate at our portal. We offer residential and commercial property listings for both sale and rent across the country. If you wish to make property investment in top cities, we present detailed information of various properties on sale, upcoming projects by renowned builders, budget residential apartments, commercial spaces, shops, etc. across cities like Bangalore, Pune, Mumbai, New Delhi, Chennai, Hyderabad, Kolkata, Noida, Gurgaon and many more. A wide variety of listing that is advertised here gives you an excellent overview of all property available in the area you are considering. Whether you are hunting for residential property, agricultural property, your next business set up, or an office space, SWEET HOME  aims at providing you the largest number of listing options in your preferred area to choose from.. </p>
                <ul> <h2><li>We providing</li></h2>
                    <li>Lifetime customer service</li>
                    <li>Secured and  right property</li>
                    <li>Value for money property</li>
                    <li>Customer is boun of a website</li>
                </ul>
                <button class="rounded">Know more</button>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Services</h2>
            <div class="flex">
                <div>
                    <div class="fas fa-home"></div>
                    <div class="services-card-right">
                        <h3>Search Property</h3>
                        <p>We have all the property list in separate pages such as rent sale property and heavy deposit property , we have all the data in our database it can be searchable we have this option in our website</p>
                        <a href="{{ url('search') }}">Learn More</a>
                    </div>
                </div>

                <div>
                    <div class="fas fa-dollar-sign"></div>
                    <div class="services-card-right">
                        <h3>Buy Property</h3>
                        <p>Buying property by this website is very easy because we have all verified properties and it is very secure.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>

                <div>
                    <div class="fas fa-chart-line"></div>
                    <div class="services-card-right">
                        <h3>Investing</h3>
                        <p>It is always right to invest in home or property and which is sustainable in all time.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>

                <div>
                    <div class="fas fa-building"></div>
                    <div class="services-card-right">
                        <h3>List a Property</h3>
                        <p>Yes we have the list of property of sale ,rent etc.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>

                <div>
                    <div class="fas fa-search"></div>
                    <div class="services-card-right">
                        <h3>Property Locator</h3>
                        <p>We have connected with with Google map where we show the exact location of our properties.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>

                <div>
                    <div class="fas fa-mobile-alt"></div>
                    <div class="services-card-right">
                        <h3>Stated Apps</h3>
                        <p>In future we also create app for the further use of this web site and this creative idea.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials">
        <div class="container">
            <h2>What Our Clients Are Saying</h2>
            <div id="testimonials-slider">
                <div>
                    <blockquote>
                        <p>"We are using this website and we are recommended to This website is one of the best website of real estate what we can define as a user of this website we are very profit full .  As a user we understand that this website is very e secure to invest"</p>
                    </blockquote>
                    <div class="testimonials-caption">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/48/Outdoors-man-portrait_%28cropped%29.jpg" />
                        <p> &nbsp; Abdur rauf</p>
                    </div>
                </div>
<br>
                <div>
                    <blockquote>
                        <p>One of the greatest user of this website as seller of properties I have earn more profit without any commission. And as a buyer I buy very secure property ❤️ ❤️</p>
                    </blockquote>
                    <div class="testimonials-caption">
                        <img src="https://images.unsplash.com/photo-1503443207922-dff7d543fd0e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" />
                        <p> &nbsp;Shadik</p>
                    </div>
                </div>
<br>
                <div>
                    <blockquote><br>
                        <p> &nbsp;  &nbsp;I am using website from last one year ❤️ I am satisfied by this website . And I have great experience for this website 🙏 🙏 🎉 </p>
                    </blockquote>
                    <div class="testimonials-caption">
                        <img src= "https://img3.goodfon.com/wallpaper/nbig/7/47/natalya-poklonskaya-krasivaya-6800.jpg"/>
                        <p> &nbsp;Asiya Khan</p>
                    </div>
                </div><br><br>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>

            <div class="flex">
                <div id="form-container">
                    <h3>Contact Form</h3>
                    @if(session('message'))
                        <div class="alert alert-info  fade show" role="alert">
                             {{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                     @endif
                    <form method="post" action="{{ route('contact') }}">
                       @csrf
                        <label for="name">Name</label>
                        <input type="text" id="username" name="name" placeholder="like Abdul Rahim" tabindex="1" required />
                         <h5 id = "usercheck"></h5>

                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="rahimabdul@gmail.com" tabindex="1" required/>
                         <h5 id = "emailcheck"></h5>

                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder="What is !" tabindex="1" required />
                         <h5 id = "subjectcheck"></h5>

                        <label for="message">Message</label>
                        <textarea type="text" id="messag" name="message" placeholder="Write your message here.." tabindex="1" required></textarea>
                         <h5 id = "messagcheck"></h5>

                        <button  type="submit" class="rounded">Send Message</button>
                    </form>
                </div>
                
                <div id="address-container">
                    <label>Address</label>
                    <address>
                        <h3>Anjuman-I-Islam's Kalsekar Technical Campus</h3>
                        Plot No. 2 & 3, Sector - 16, Near Thana Naka, Khandagao, New Panvel, Navi Mumbai, Maharashtra 410206
                    </address>

                    <label>Phone no </label>
                    <a href="#">232-232-2323</a>

                    <label>Email Address</label>
                    <a href="#">sweethome@gamil.com</a>
                </div>
            </div>
        </div>
    </section>


    
 <script>
        $(function () {
            let headerElem = $('header');
            let logo = $('#logo');
            let navMenu = $('#nav-menu');
            let navToggle = $('#nav-toggle');

           $('#properties-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                prevArrow: '<a href="#" class="slick-arrow slick-prev">previous</a>',
                nextArrow: '<a href="#" class="slick-arrow slick-next">next</a>',
                responsive: [
                    {
                        breakpoint: 1100,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 530,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    }
                ]
           });

           $('#testimonials-slider').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                prevArrow: '<a href="#" class="slick-arrow slick-prev"><</a>',
                nextArrow: '<a href="#" class="slick-arrow slick-next">></a>'
           });

           navToggle.on('click', () => {
               navMenu.css('right', '0');
           });

           $('#close-flyout').on('click', () => {
                navMenu.css('right', '-100%');
           });

           $(document).on('click', (e) => {
               let target = $(e.target);
               if (!(target.closest('#nav-toggle').length > 0 || target.closest('#nav-menu').length > 0)) {
                   navMenu.css('right', '-100%');
               }
           });

           $(document).scroll(() => {
               let scrollTop = $(document).scrollTop();

               if (scrollTop > 0) {
                   navMenu.addClass('is-sticky');
                   logo.css('color', '#000');
                   headerElem.css('background', '#fff');
                   navToggle.css('border-color', '#000');
                   navToggle.find('.strip').css('background-color', '#000');
               } else {
                   navMenu.removeClass('is-sticky');
                   logo.css('color', '#fff');
                   headerElem.css('background', 'transparent');
                   navToggle.css('bordre-color', '#fff');
                   navToggle.find('.strip').css('background-color', '#fff');
               }

               headerElem.css(scrollTop >= 200 ? {'padding': '0.5rem', 'box-shadow': '0 -4px 10px 1px #999'} : {'padding': '1rem 0', 'box-shadow': 'none' });
           });

           $(document).trigger('scroll');
        });
    </script>
    <script type="text/javascript">

  $(document).ready(function(){
    $('#usercheck').hide();
    $('#emailcheck').hide();
    $('#subjectcheck').hide();
    $('#messagecheck').hide();

    var user_err = true;
    var email_err = true;
    var sub_err = true;
    var  messag_err = true;

    $('#usernames').keyup(function(){
      username_check();
     });


    function username_check(){
      var firstname_val = $('#usernames').val();
       if(firstname_val.length == '')
       {
        $('#usercheck').show();
        $('#usercheck').html("**Pleace Fill The Firstname");
        $('#usercheck').css("color","red");
        user_err = false;
        return false;

      }else{
        $('#usercheck').hide();
           }

       if((firstname_val.length <3 )||(firstname_val.length>20))
       {
        $('#usercheck').show();
        $('#usercheck').html("**user name length is between 3 to 20");
        $('#usercheck').css("color","red");
        user_err = false;
        return false;

       }else{
        $('#usercheck').hide();
            }
      }


      

      

      //-----------------------------------------------------------------------------------------------------------------------

       $('#email').keyup(function(){
      validateEmail();
       });

     function validateEmail()
     {
    // get value of input email
    var email1=$("#email").val();
    // use reular expression
     var reg = /^\w+([-+.']\w+)+@\w+([-.]\w+)\.\w+([-.]\w+)*$/
     if(reg.test(email1)){
      return false;
     }else{
      return true;
     }
     }

      $("#email").keyup(function()
      {
      if(validateEmail())
      {
        $("#email").css("border","2px solid green");
        // and set label 
        $("#emailcheck").html("<p class='text-success'>Validated</p>");
      }else{
        $("#email").css("border","2px solid red");
        $("#emailcheck").html("<p class='text-danger'>Un-validated</p>");
      }
      });

    function subject_check(){
      var subject_val = $('#subject').val();
       if(subject_val.length == '')
       {
        $('#subjectcheck').show();
        $('#subjectcheck').html("**Pleace Fill The Firstname");
        $('#subjectcheck').css("color","red");
        subject_err = false;
        return false;

      }else{
        $('#subjectcheck').hide();
           return true:}

       if((subject_val.length <10 )||(subject_val.length>50))
       {
        $('#subjectcheck').show();
        $('#subjectcheck').html("**user name length is between 10 to 50");
        $('#subjectcheck').css("color","red");
        subject_err = false;
        return false;

       }else{
        $('#subjectcheck').hide();
            } return true:
      }



function message_check(){
      var messag_val = $('#messag').val();
       if(messag_val.length == '')
       {
        $('#messagcheck').show();
        $('#messagcheck').html("**Pleace Fill The Firstname");
        $('#messagcheck').css("color","red");
        messag_err = false;
        return false;

      }else{
        $('#messagcheck').hide();
           return true:}

       if((messag_val.length <20 )||(messag_val.length>50))
       {
        $('#messagcheck').show();
        $('#messagcheck').html("**user name length is between 10 to 50");
        $('#messagcheck').css("color","red");
        messag_err = false;
        return false;

       }else{
        $('#messagcheck').hide();
            } return true:
      }

      
      
      }
  );
 </script>
@endsection