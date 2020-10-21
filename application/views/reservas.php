    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->

      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic context-dark">
        <!-- RD Parallax-->
        <div data-on="false" data-md-on="true" class="rd-parallax">
          <div data-speed="0.35" data-type="media" data-url="images/parallax-breadcrumbs.jpg" class="rd-parallax-layer"></div>
          <div data-speed="0.08" data-type="html" class="rd-parallax-layer">
            <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
              <h1 class="veil reveal-sm-block">Reservas</h1>
              <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                  <li><a href="<?php echo site_url()?>">Inicio</a></li>
                  <li>Reservas</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Content-->
      <main class="page-content">
        <section class="section-70 section-md-114">
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-xs-10 cell-md-8 text-md-left">
                <h2 class="text-bold">Organiza tu vista</h2>
                <hr class="divider bg-madison hr-sm-left-0">
                <div class="offset-top-30 offset-md-top-60">
                  <p>Puede contactarnos de cualquier manera que sea conveniente para usted. Estamos disponibles 24/7 por Whatsapp ó correo electrónico. También puede usar un formulario de reserva rápido ó visitar nuestro local personalmente. Estaremos encantados de atenderlo.</p>
                  <div id="resultx"></div>
                </div>
                <div class="offset-top-30">
                  <form  class="text-left" id="form-reservas">
                    <div class="range">
                      <div class="cell-lg-6">
                        <div class="form-group">
                          <label for="nombres" class="form-label form-label-outside">Nombres</label>
                          <input id="nombres" type="text" name="nombres" data-constraints="@Required" class="form-control" autocomplete="off">
                        </div>
                      </div>
                      <div class="cell-lg-6 offset-top-12 offset-lg-top-0">
                        <div class="form-group">
                          <label for="apellidos" class="form-label form-label-outside">Apellidos</label>
                          <input id="apellidos" type="text" name="apellidos" data-constraints="@Required" class="form-control" autocomplete="off">
                        </div>
                      </div>
                      <div class="cell-lg-6 offset-top-12">
                        <div class="form-group">
                          <label for="contact-email" class="form-label form-label-outside">E-mail</label>
                          <input id="contact-email" type="email" name="email" data-constraints="@Required @Email" class="form-control" autocomplete="off">
                        </div>
                      </div>
                      <div class="cell-lg-6 offset-top-12">
                        <div class="form-group">
                          <label for="celular" class="form-label form-label-outside">Celular</label>
                          <input id="celular" type="text" name="celular" data-constraints="@Required @IsNumeric" class="form-control" autocomplete="off">
                        </div>
                      </div>
                      <div class="cell-lg-12 offset-top-12">
                        <div class="form-group">
                          <label for="mensaje" class="form-label form-label-outside">Mensaje</label>
                          <textarea id="mensaje" name="mensaje" data-constraints="@Required" style="height: 220px" class="form-control"></textarea>
                        </div>
                      </div>
                      <div class="cell-lg-12 offset-top-12">
                          <div class="form-group">
                          <div class="g-recaptcha" data-callback="imNotARobot" id="reCaptchaReserva" 
                            data-sitekey="6Le2MfMUAAAAAF7PSzuQXNp7r9nMhgM1T6T8qkru">
                          </div>
                                <span id="recapcha-errors3" style="color: #a94442"></span>
                          </div>
                      </div>

                    </div>
                    <div class="text-center text-lg-left offset-top-20">
                      <button type="submit" class="btn btn-primary" id="btn-reserva">Enviar Reserva</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="cell-xs-10 cell-md-4 offset-top-65 offset-md-top-0 text-left">
                <div class="inset-md-left-30">
                  <h6 class="text-bold">Nuestras Redes Sociales</h6>
                  <div class="hr bg-gray-light offset-top-10"></div>
                  <ul class="list-inline list-inline-sm list-inline-madison offset-top-20">
                    <li><a href="#" class="icon icon-xxs fa-facebook icon-rect icon-gray-light-filled"></a></li>
                    <li><a href="#" class="icon icon-xxs fa-instagram icon-rect icon-gray-light-filled"></a></li>
                  </ul>
                  <div class="offset-top-30 offset-md-top-60">
                    <h6 class="text-bold">Teléfonos</h6>
                    <div>
                      <div class="hr bg-gray-light offset-top-10"></div>
                    </div>
                    <div class="offset-top-15">
                      <ul class="list list-unstyled">
                        <li>
                          <span class="icon icon-xs text-madison fa-whatsapp text-middle"></span>
                          <a href="https://api.whatsapp.com/send?phone=59165768579" class="text-middle inset-left-10 text-dark">65768579</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="offset-top-30 offset-md-top-60">
                    <h6 class="text-bold">E-mail</h6>
                    <div>
                      <div class="hr bg-gray-light offset-top-10"></div>
                    </div>
                    <div class="offset-top-15">
                      <ul class="list list-unstyled">
                        <li><span class="icon icon-xs text-madison mdi mdi-email-outline text-middle"></span>
                        <a href="mailto:curcuma@theromerocorp.com" class="text-primary text-middle inset-left-10">curcuma@theromerocorp.com</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="offset-top-30 offset-md-top-60">
                    <h6 class="text-bold">Dirección</h6>
                    <div>
                      <div class="hr bg-gray-light offset-top-10"></div>
                    </div>
                    <div class="offset-top-15">
                      <div class="unit unit-horizontal unit-spacing-xs">
                        <div class="unit-left"><span class="icon icon-xs mdi mdi-map-marker text-madison"></span></div>
                        <div class="unit-body">
                          <p><a href="#" class="text-dark">Av. Tadeo Haenke y Tocopilla, Cbba-Bol</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="offset-top-30 offset-md-top-65">
                    <h6 class="text-bold">Horarios de Atención</h6>
                    <div>
                      <div class="hr bg-gray-light offset-top-10"></div>
                    </div>
                    <div class="offset-top-15">
                      <div class="unit unit-horizontal unit-spacing-xs">
                        <div class="unit-left"><span class="icon icon-xs mdi mdi-calendar-clock text-madison"></span></div>
                        <div class="unit-body">
                          <div>
                            <p>Lunes a Viernes: 18:00 - 22:30</p>
                          </div>
                          <div>
                            <p>Sabado: 18:00 - 23:00</p>
                          </div>
                          <div>
                            <p>Domingo: 18:00 - 22:30</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="bg-madison">
          <!-- RD Google Map-->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d673.0959454153773!2d-66.17946814719895!3d-17.38269829584336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e375ba236eee69%3A0xcdd6857c6a372588!2sRestaurante%20C%C3%BArcuma!5e0!3m2!1ses!2sbo!4v1591223827007!5m2!1ses!2sbo" width="100%" height="450px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </section>
      </main>
      <!-- Page Footer-->
      <!-- Corporate footer-->
      <footer class="page-footer bg-catskill section-60">
        <div class="shell">
          <div class="range range-xs-center range-sm-middle text-md-left">
            <div class="cell-xs-10 cell-md-6">
              <!--Footer brand-->
              <a href="index.html" class="reveal-inline-block">
                <div class="unit unit-xs-middle unit-md unit-md-horizontal unit-spacing-xxs">
                  <div class="unit-left">
                    <img src="<?php echo base_url()?>images/logo.svg" width="70" height="70" alt="" class="img-responsive reveal-inline-block">
                  </div>
                </div>
              </a>
            </div>
            <div class="cell-xs-10 cell-md-6 text-md-right offset-top-20 offset-md-top-0">
              <p class="text-dark">C&uacute;rcuma &copy; The Romero Corp <span id="copyright-year"></span></p>
              <!-- {%FOOTER_LINK}-->
            </div>
          </div>
        </div>
      </footer>
    </div>
