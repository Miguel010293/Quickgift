
<?php include("header.php");
include("../dao/DAOregalo.php");
$resultado = DAOregalo::listarRegalos();
?>

<form action="../controlador/controladorInvitado.php?agrega=0" method="post">
        <section class="pt-5 pb-5 bg-light" >
            <div class="container  ">
                <center><br>
                    <div class="row justify-content-center">
                        <div class="col-md-6" data-aos="fade-up">
                            <h3 class="mb-5 display-4 font-weight-bold" data-aos="fade-up">Bienvenidos</h3>
                            <p class="lead mt-4 aos-init">La idea es que respondan unas preguntas y su asistencia. No se demoran ni 5 minutos</p>
                            <img src="../IMG/flecha.gif" alt="flecha" height="100" width="100">
                        </div>

                    </div>
                </center>
        </section>
        <section class="pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col col-md-8 text-center aos-init" data-aos="fade-up" data-aos-offset="300">
                    <h2 class="font-weight-bold "> ¿Cómo te llamas?</h2>

                    <div class="form-group ">
                        <br><input name="nombre" id="course-name-1" type="text" class="form-control form-control-lg" placeholder="Escribe aquí tu respuesta" required>
                    </div>
                </div>
            </div>

        </section>
        </section>
        <section class="pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col col-md-8 text-center aos-init" data-aos="fade-up" data-aos-offset="300">
                    <h2 class="font-weight-bold "> ¿Algun telefono para llamarte?</h2>

                    <div class="form-group ">
                        <br><input name="telefono" id="course-name-1" type="text" class="form-control form-control-lg" placeholder="Escribe aquí tu respuesta">
                    </div>
                </div>
            </div>

        </section>

        <section class="pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col col-md-8 text-center aos-init" data-aos="fade-up" data-aos-offset="300">
                    <h2 class="font-weight-bold "> ¿Contamos con tu asistencia?</h2>

                    <div class="form-group ">
                        <div class="row">
                            <div class="col-">

                            </div>
                            <div class="col">
                                <div class="form-group rounded bg-white p-2 border">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="course-radio-beginner-1" name="confirmacion" value="si" class="custom-control-input">
                                        <label class="custom-control-label" for="course-radio-beginner-1">SI</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group rounded bg-white p-2 border">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="course-radio-advanced-1" name="confirmacion" value="no" class="custom-control-input">
                                        <label class="custom-control-label " for="course-radio-advanced-1">NO</label>
                                    </div>
                                </div>
                            </div>
                        </div>
        </section>


        <section class="pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col col-md-8 text-center aos-init" data-aos="fade-up" data-aos-offset="300">
                    <h2 class="font-weight-bold  "> Si respondiste SI, en la pregunta anterior, cuéntanos con cuantos más vas a venir.</h2><br>
                    <select name="Npersonas" id="Npersonas" class=" button button2 olanaklar letra box">
                        <option value="1">1 persona más</option>
                        <option value="2">2 personas más</option>
                        <option value="3">3 personas más</option>
                        <option value="4">4 personas más</option>
                        <option value="5">5 personas más</option>
                    </select>
                </div>
            </div>

        </section>



        <section style="display: block;" class="pt-5 pb-5" id="wizard-p-7" role="tabpanel" aria-labelledby="wizard-h-7" aria-hidden="false">
            <div class="col">
                <div class="row justify-content-center">
                    <div class="col col-md-8 text-center aos-init" data-aos="fade-up" data-aos-offset="300">
                        <div class="wrapper_row">


                            <div class="row js_error_placement_parent step_8">
                                <div class="m_header_step" data-step="8">
                                    <h1 class="js_error_placement quizz_question required_field">¿Cuál de los siguientes regalos te gustaria  llevar?</h1> <br><br><br>
                                </div>


                                      
                                <ol class="swiper_m_options_list_content m_options_list_content_no_carrousel" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                <?php foreach($resultado as $data ){  ?>
                                <li class="radio_wrapper li_wrapper only_image  answer_0">
                                        <div class="m_options_list_figure js_ok_ko_class_placement">
                                            
                                                <div class="m_figure_viewport">
                                                    
                                                        
                                                        <img data-id="<?php echo $data[0]?>" src="data:image/jpeg;base64,<?php echo base64_encode($data[2])?>" width="300" height="200" class="m_figure_img">
                                                        <span class="click_to_view" style="display: none;">
                                                            <i class=" fa fa-search-plus  " aria-hidden="true"></i>
                                                            Zoom
                                                        </span>
                                                   
                                                </div>
                                            
                                            <input class="m_option_input js_quizz_radio" data-msg-required="Choose one of the options"  type="radio" name="idimagen" value="<?php echo $data[0]?>" >
                                        </div>
                                    </li>
                                      <?php }?>
                                </ol>

                                <div class="m_options_pagination swiper-pagination-clickable swiper-pagination-bullets">
                                    <span class="m_options_page m_options_page_active"></span>
                                </div>

                            </div><!-- - class=row -->
                        </div><!-- - class=wrapper_row -->
                    </div>

        </section>

  
       


        <section class="pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col col-md-8 text-center aos-init" data-aos="fade-up" data-aos-offset="300">
                    <h2 class="font-weight-bold "> ¿Deseas llevar un regalo secreto? <br> Describelo! :D</h2><br>
                    
                        <textarea name="regopcional" rows="10" cols="30" placeholder="Escribe alguna pregunta o deja algún comentario."></textarea>
                        <br><br>
                        <input class="button button2 olanaklar letra box" type="submit">
                    
                </div>
            </div>

            </div>
            </div>
            </div>
            </div>
        </section>

        </form>
                        <!-- jQuery is required -->
                        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>
                        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
                        <script>
                            AOS.init({
                                duration: 1200,
                            })
                        </script>


    </body>
    <script type="text/javascript">

    </script>
</body>
<