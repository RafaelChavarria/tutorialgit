

<?php 

  include('includes/conexion.php');
  include('includes/header.php');
 ?>
 

  <!-- ENCABEZADO -->

  <header class="masthead">

    <div class="container">

      <div class="intro-text">

        <div class="intro-lead-in">¡Bienvenidos a la colección!</div>

        <div class="intro-heading text-uppercase">Estrenos y clásicos de culto</div>

        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio">Ver catálogo</a>

      </div>

    </div>

  </header>



  



  <!-- SECCIÓN PELÍCULAS -->

  <section class="bg-light page-section" id="portfolio">

    <div class="container">



    	<!-- TÍTULO DE LA SECCIÓN -->

      <div class="row">

        <div class="col-lg-12 text-center">

          <h2 class="section-heading text-uppercase">NUEVAS PELÍCULAS</h2>

          <h3 class="section-subheading text-muted">Explora las novedades en nuestra colección.</h3>

        </div>

      </div> <!-- TERMINA TÍTULO DE LA SECCIÓN -->

        

      
      <!-- CONTENEDOR PELÍCULAS -->

      <div class="row">

      <?php 

      $peliculas = mysqli_query($conexion,"SELECT * FROM peliculas ORDER BY anio DESC");

      while ($temp = mysqli_fetch_assoc($peliculas)) {

        echo '


           <div class="col-md-4 col-sm-6 portfolio-item">

          <a class="portfolio-link" href="pelicula.php?id='.$temp['id'].'">

            <div class="portfolio-hover">

              <div class="portfolio-hover-content">

                <i class="fas fa-info-circle fa-3x"></i>

              </div>

            </div>

            <img class="img-fluid" src="../backend/img/'.$temp['poster'].'" alt="">

          </a>

          <div class="portfolio-caption">

            <h4>'.$temp['titulo'].'</h4>

            <p class="text-muted">'.$temp['anio'].'</p>

          </div>

        </div>


        ';
      } 

       ?>

      	<!-- ESTRUCTURA PELÍCULA -->

        <!-- TERMINA ESTRUCTURA PELÍCULA -->



       


      </div> <!-- TERMINA CONTENEDOR PELÍCULAS -->

    </div>

  </section> <!-- TERMINA SECCIÓN PELÍCULAS -->



  <!-- SECCIÓN EQUIPO -->

  <section class="bg-light page-section" id="team">

    <div class="container">

      <div class="row">

        <div class="col-lg-12 text-center">

          <h2 class="section-heading text-uppercase">Our Amazing Team</h2>

          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>

        </div>

      </div>

      <div class="row">

        <div class="col-sm-4">

          <div class="team-member">

            <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">

            <h4>Kay Garland</h4>

            <p class="text-muted">Lead Designer</p>

            <ul class="list-inline social-buttons">

              <li class="list-inline-item">

                <a href="#">

                  <i class="fab fa-twitter"></i>

                </a>

              </li>

              <li class="list-inline-item">

                <a href="#">

                  <i class="fab fa-facebook-f"></i>

                </a>

              </li>

              <li class="list-inline-item">

                <a href="#">

                  <i class="fab fa-linkedin-in"></i>

                </a>

              </li>

            </ul>

          </div>

        </div>

        <div class="col-sm-4">

          <div class="team-member">

            <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">

            <h4>Larry Parker</h4>

            <p class="text-muted">Lead Marketer</p>

            <ul class="list-inline social-buttons">

              <li class="list-inline-item">

                <a href="#">

                  <i class="fab fa-twitter"></i>

                </a>

              </li>

              <li class="list-inline-item">

                <a href="#">

                  <i class="fab fa-facebook-f"></i>

                </a>

              </li>

              <li class="list-inline-item">

                <a href="#">

                  <i class="fab fa-linkedin-in"></i>

                </a>

              </li>

            </ul>

          </div>

        </div>

        <div class="col-sm-4">

          <div class="team-member">

            <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">

            <h4>Diana Pertersen</h4>

            <p class="text-muted">Lead Developer</p>

            <ul class="list-inline social-buttons">

              <li class="list-inline-item">

                <a href="#">

                  <i class="fab fa-twitter"></i>

                </a>

              </li>

              <li class="list-inline-item">

                <a href="#">

                  <i class="fab fa-facebook-f"></i>

                </a>

              </li>

              <li class="list-inline-item">

                <a href="#">

                  <i class="fab fa-linkedin-in"></i>

                </a>

              </li>

            </ul>

          </div>

        </div>

      </div>

      <div class="row">

        <div class="col-lg-8 mx-auto text-center">

          <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>

        </div>

      </div>

    </div>

  </section> <!-- TERMINA SECCIÓN EQUIPO -->



  <!-- SECCIÓN CONTACTO -->

  <section class="page-section" id="contact">

    <div class="container">

      <div class="row">

        <div class="col-lg-12 text-center">

          <h2 class="section-heading text-uppercase">Contáctanos</h2>

          <h3 class="section-subheading text-muted">Queremos saber de tí.</h3>

        </div>

      </div>

      <div class="row">

        <div class="col-lg-12">

          <form id="contactForm" name="sentMessage" novalidate="novalidate">

            <div class="row">

              <div class="col-md-6">

                <div class="form-group">

                  <input class="form-control" id="name" type="text" placeholder="Tu nombre *" required="required" data-validation-required-message="Please enter your name.">

                  <p class="help-block text-danger"></p>

                </div>

                <div class="form-group">

                  <input class="form-control" id="email" type="email" placeholder="Tu e-mail *" required="required" data-validation-required-message="Please enter your email address.">

                  <p class="help-block text-danger"></p>

                </div>

                <div class="form-group">

                  <input class="form-control" id="phone" type="tel" placeholder="Tu teléfono *" required="required" data-validation-required-message="Please enter your phone number.">

                  <p class="help-block text-danger"></p>

                </div>

              </div>

              <div class="col-md-6">

                <div class="form-group">

                  <textarea class="form-control" id="message" placeholder="Tu mensaje *" required="required" data-validation-required-message="Please enter a message."></textarea>

                  <p class="help-block text-danger"></p>

                </div>

              </div>

              <div class="clearfix"></div>

              <div class="col-lg-12 text-center">

                <div id="success"></div>

                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar mensaje</button>

              </div>

            </div>

          </form>

        </div>

      </div>

    </div>

  </section> <!-- TERMINA SECCIÓN CONTACTO -->


<?php 

  include('includes/footer.php');

 ?>
 

