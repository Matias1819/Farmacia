
<!DOCTYPE html>
<html>
<head>
  <title> scs</title>
</head>
<body>
  Hola que tal
<!-- Load Facebook SDK for JavaScript -->
<a href="https://api.whatsapp.com/send?phone=51936763606&text=Hola, &nbsp;¿Podrían&nbsp;ayudarme?" data-action="share/whatsapp/share" target="_blank" class="fab fa-whatsapp">
  Texto para seleccionar
</a>
<style type="text/css">
  #fb-root{
    background: red;
  }
</style>
      <div id="fb-root">s</div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v6.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="459365931199386"
  theme_color="#0070c0"
  logged_in_greeting="Hola, somos FIXBLUE, ¿En qué podemos ayudarte?"
  logged_out_greeting="Hola, somos FIXBLUE, ¿En qué podemos ayudarte?">
      </div>
  <footer>FOOTER</footer>
</body>
</html>