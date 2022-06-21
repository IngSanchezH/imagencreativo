@extends('layouts.principal')

@section('content')

  <!-- ***** Main Banner Area Start ***** -->
  <section class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h6>Sabemos lo que necesitas</h6>
            <h2>¡Creatividad, Producción y <em>Diseño Grafico!</em></h2>
            <div class="main-button-gradient">
              <div class="scroll-to-section"><a href="#contact-section">Escribenos</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="{{ asset('images/banner-right-image.png')}}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>algunas servicios</h6>
            <h4>Nuestros <em>Servicios</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset('images/service-icon-01.png')}}" alt="">
                </div>
                <h4>Desarrollo de App</h4>
                <p>EduWell is the professional HTML5 template for your school or university websites.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset('images/service-icon-02.png')}}" alt="">
                </div>
                <h4>Ideas Creativas</h4>
                <p>You can download and use this EduWell Template for your teaching and learning stuffs.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset('images/service-icon-03.png')}}" alt="">
                </div>
                <h4>Diseño Grafico</h4>
                <p>Please tell your friends about the best CSS template website that is TemplateMo.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset('images/service-icon-04.png')}}" alt="">
                </div>
                <h4>Tecnologias</h4>
                <p>Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset('images/service-icon-01.png')}}" alt="">
                </div>
                <h4>Trucos Utiles</h4>
                <p>In non nisi eget magna efficitur ultricies non quis sapien. Pellentesque tellus.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset('images/service-icon-02.png')}}" alt="">
                </div>
                <h4>Redes Sociales</h4>
                <p>Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset('images/service-icon-03.png')}}" alt="">
                </div>
                <h4>Multimedia</h4>
                <p>In non nisi eget magna efficitur ultricies non quis sapien. Pellentesque tellus.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset('images/service-icon-04.png')}}" alt="">
                </div>
                <h4>Comunicación</h4>
                <p>Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset('images/service-icon-01.png')}}" alt="">
                </div>
                <h4>Sericios Web</h4>
                <p>In non nisi eget magna efficitur ultricies non quis sapien. Pellentesque tellus.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset('images/service-icon-02.png')}}" alt="">
                </div>
                <h4>Ideas Creativas</h4>
                <p>Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset('images/service-icon-03.png')}}" alt="">
                </div>
                <h4>Cursos de Diseño</h4>
                <p>In non nisi eget magna efficitur ultricies non quis sapien. Pellentesque tellus.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset('images/service-icon-04.png')}}" alt="">
                </div>
                <h4>Tecnologia</h4>
                <p>Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>Portafolio</h6>
            <h4>Lo que puedes conseguir <em>Encontrar</em></h4>
            <p>Estos son algunos de nuestros diseños y trabajos realizados</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-3">
                  <div class="menu">
                    <div class="active gradient-border"><span>Desarrollo de Apps</span></div>
                    <div class="gradient-border"><span>Diseño Grafico</span></div>
                    <div class="gradient-border"><span>Diseños Web</span></div>
                    <div class="gradient-border"><span>WordPress</span></div>
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="left-image">
                          <img src="{{ asset('images/courses-01.jpg')}}" alt="">
                          <div class="price"><h6>$128</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>Desarrollo de Apps</h4>
                          <p>Did you know that you can visit <a rel="nofollow" href="https://www.toocss.com/" target="_blank">TooCSS website</a> for latest listing of HTML templates and a variety of useful templates.
                          <br><br>You just need to go and visit that website right now. IF you have any suggestion or comment about this template, you can feel free to go to contact page for our email address.</p>
                          <span>36 Hours</span>
                          <span>4 Weeks</span>
                          <span class="last-span">3 Certificates</span>
                          <div class="text-button">
                            <a href="contact-us.html">Subscribe Course</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="{{ asset('images/courses-02.jpg')}}" alt="">
                          <div class="price"><h6>$156</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>Diseño Grafico</h4>
                          <p>You are not allowed to redistribute this template ZIP file on any other website without a permission from us.<br><br>There are some unethical people on this world copied and reposted our templates without any permission from us. Their Karma will hit them really hard. Yeah!</p>
                          <span>48 Hours</span>
                          <span>6 Weeks</span>
                          <span class="last-span">1 Certificate</span>
                          <div class="text-button">
                            <a href="contact-us.html">Subscribe Course</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="{{ asset('images/courses-03.jpg')}}" alt="">
                          <div class="price"><h6>$184</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>Diseños Web</h4>
                          <p>Quinoa roof party squid prism sustainable letterpress cray hammock tumeric man bun mixtape tofu subway tile cronut. Deep v ennui subway tile organic seitan.<br><br>Kogi VHS freegan bicycle rights try-hard green juice probably haven't heard of them cliche la croix af chillwave.</p>
                          <span>28 Hours</span>
                          <span>4 Weeks</span>
                          <span class="last-span">1 Certificate</span>
                          <div class="text-button">
                            <a href="contact-us.html">Subscribe Course</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="{{ asset('images/courses-04.jpg')}}" alt="">
                          <div class="price"><h6>$76</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>WordPress Introduction</h4>
                          <p>Quinoa roof party squid prism sustainable letterpress cray hammock tumeric man bun mixtape tofu subway tile cronut. Deep v ennui subway tile organic seitan.<br><br>Kogi VHS freegan bicycle rights try-hard green juice probably haven't heard of them cliche la croix af chillwave.</p>
                          <span>48 Hours</span>
                          <span>4 Weeks</span>
                          <span class="last-span">2 Certificates</span>
                          <div class="text-button">
                            <a href="contact-us.html">Subscribe Course</a>
                          </div>
                        </div>
                      </div>
                      </li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 offset-lg-1">
          <div class="left-image">
            <img src="{{ asset('images/cta-left-image.png')}}" alt="">
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <h6>¡Consigue la venta ahora mismo!</h6>
          <h4>Hasta un 50% de descuento en la contracion de un servicio</h4>
          <p>Kogi VHS freegan bicycle rights try-hard green juice probably haven't heard of them cliche la croix af chillwave.</p>
          <div class="white-button">
            <a href="contact-us.html">Ver mas</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="testimonials" id="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>Opiniones</h6>
            <h4>lo que <em>piensan</em> de nosotros</h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
            <div class="item">
              <p>“just think about TemplateMo if you need free CSS templates for your website”</p>
                <h4>Catherine Walk</h4>
                <span>CEO &amp; Founder</span>
                <img src="{{ asset('images/quote.png')}}" alt="">
            </div>
            <div class="item">
              <p>“think about our website first when you need free HTML templates for your website”</p>
                <h4>David Martin</h4>
                <span>CTO of Tech Company</span>
                <img src="{{ asset('images/quote.png')}}" alt="">
            </div>
            <div class="item">
              <p>“just think about our website wherever you need free templates for your website”</p>
                <h4>Sophia Whity</h4>
                <span>CEO and Co-Founder</span>
                <img src="{{ asset('images/quote.png')}}" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Helen Shiny</h4>
                <span>Tech Officer</span>
                <img src="{{ asset('images/quote.png')}}" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>George Soft</h4>
                <span>Gadget Reviewer</span>
                <img src="{{ asset('images/quote.png')}}" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Andrew Hall</h4>
                <span>Marketing Manager</span>
                <img src="{{ asset('images/quote.png')}}" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Maxi Power</h4>
                <span>Fashion Designer</span>
                <img src="{{ asset('images/quote.png')}}" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Olivia Too</h4>
                <span>Creative Designer</span>
                <img src="{{ asset('images/quote.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  @endsection



