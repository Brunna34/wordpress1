
<?php wp_footer(); ?>
<footer class="page-footer black">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Barbearia Brothers</h5>
              <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Menu</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Início</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Quem Somos</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Serviços</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Portfólio</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          © 2014 Copyright Text
          <a class="grey-text text-lighten-4 right" href="#!">Facebook</a>
          </div>
        </div>
      </footer>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="script.js"></script> 
    <!--parallax-->
    <script> 
    $(document).ready(function(){
    $('.parallax').parallax();
    });
      $(document).ready(function(){
    $('.sidenav').sidenav();
    });
    $(document).ready(function(){
    $('.carousel').carousel();
    });
    $('.next').click(function(){
    $('.carousel').carousel('next',3);
    });
     </script>
</body>
</html>