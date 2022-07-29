
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
    <title>Cardoso e Ávila</title>

    <link rel="stylesheet" href="css/custom.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper.min.css">
  </head>

  <body>
  <?php require_once "menu/header.php"; ?>

    <!-- header -->
    <header class="entrada-home interna">
      <h2 class="align-middle">Fale conosco</h2>
    </header>

    
    <section class="conteudo-interno">

      <div class="container">
      
        <div class="row">
          
          <?php /* CONTEUDO DAS PAGINAS INTERNAS */  ?>
          <div class="col-md-8">
              
            <h2>Fale Conosco</h2>
            <p>Preencha o formulário abaixo para falar conosco. Será um prazer atendê-lo.</p>

              <form class="faleconosco" method="POST" action="email/email.php">
                <div class="row">
                <div class="col-sm-6">
                  <label class="sr-only" for="inlineFormInputGroup">Nome</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                      <div class="input-group-addon"><i class="fas fa-user"></i></div>
                      <input type="text" class="form-control" name="name" id="inlineFormInputGroup" placeholder="Nome">
                    </div>
                  </label>
                </div>

                <div class="col-sm-6">
                  <label class="sr-only" for="inlineFormInputGroup">E-mail</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                      <div class="input-group-addon"><i class="fas fa-envelope"></i></div>
                      <input type="text" class="form-control" name="email" id="inlineFormInputGroup" placeholder="E-mail">
                    </div>
                  </label>
                </div>

                <div class="col-sm-6">
                  <label class="sr-only" for="inlineFormInputGroup">Telefone</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                      <div class="input-group-addon"><i class="fas fa-phone"></i></div>
                      <input type="text" class="form-control" name="telefone" id="inlineFormInputGroup" placeholder="Telefone">
                    </div>
                  </label>
                </div>

                <div class="col-sm-6">
                  <label class="sr-only" for="inlineFormInputGroup">Assunto</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                      <div class="input-group-addon"><i class="fas fa-pencil-alt"></i></div>
                      <input type="text" class="form-control" name="assunto" id="inlineFormInputGroup" placeholder="Assunto">
                    </div>
                  </label>
                </div>

                <div class="col-sm-12">
                  <label class="sr-only" for="inlineFormInputGroup">Texto</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                      <div class="input-group-addon"><i class="fas fa-comment"></i></div>
                      <textarea   class="form-control" id="" name="texto" cols="30" rows="10"></textarea>
                    </div>
                  </label>
                </div>
                
                <div class="col-12"> 
                    <div class="submit">  
                        <input class="btn btn-primary" type="submit" value="ENVIAR >">
                        <span>*campos obrigatórios</span>
                    </div>
                </div>


              </div>
              <div class="g-recaptcha" data-sitekey="6LefTxIhAAAAAJOFhm_N_aTcaOilfX75i8hwRkVq"></div>
              </form>  

              
            
          </div>

          


            <div class="col-md-4 col-lg-3 pull-right push-lg-1">
             
              <aside>
                
                <div class="contato">
                  <h3>Contatos</h3>
                  <ul>
                    <li><i class="fas fa-envelope-open"></i>clinica@cardosoeavila.com.br</li>
                    <li><i class="fas fa-phone-square"></i>+55  (81) 3125-5004</li>
                    <li><i class="fas fa-map-marker-alt"></i>
                      Avenida Antônio de Góes, 275, 
                      sala 1201. Empresarial ITC - Pina, 
                      Recife - PE, 51110-000
                    </li>
                  </ul>
                </div>
                <div class="contato">
                  <h3>Redes Sociais</h3>
                  <ul>
                    <li><i class="fab fa-facebook-square"></i>Facebook</li>
                    <li><i class="fab fa-instagram"></i>Instagram</li>
                    <li><i class="fab fa-twitter"></i>Twitter</li>
                    <li><i class="fab fa-linkedin"></i>LinkedIn</li>
                  </ul>
                </div>

              </aside>

            </div><!-- col-sm-3 -->

          </div> <!-- row -->
          <div class="row"> 
              <div class="col-12">
                <div class="mapa">
                <h2>Onde estamos</h2>
                <p><i class="fas fa-map-marker-alt"></i> Avenida Antônio de Goes, 275, Sala 1201. Empresarial ITC. Pina, Recife-PE. CEP:51110-000</p>

                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.1270825596603!2d-34.88641678522004!3d-8.088520394176667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1f47541e2237%3A0xff07523ce2c0efbc!2sAv.+Ant%C3%B4nio+de+Goes%2C+275+-+Pina%2C+Recife+-+PE%2C+51110-000!5e0!3m2!1spt-BR!2sbr!4v1523900004470" allowfullscreen></iframe>
                </div>

             </div>
              </div>
          </div>  
        </div> <!-- container -->
    </section>
    <footer>
    <?php require_once("footer/footer.php"); ?>
    </footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
    <!-- Swiper JS -->
  <script src="js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
   
  </script>
<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>


  </body>
</html>