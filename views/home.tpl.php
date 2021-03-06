<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=divice-width, initial-scale=1, maximun-scale=1, user-scalable=no">
        <script src="./public/libs/hammer.min.js"></script>
        <link rel='stylesheet', href='./public/css/style.css'>

        <title><?= $titulo ?></title>

    </head>
<body>
  
  
<header >
<div   class="header black">

  <div id="collapse" class="navbar-collapse  no_active">
        
          <form class="navbar-form navbar-right" method="post" action="login" accept-charset="utf-8">
         
            <div class="form-group">
              <input type="email" name="email" placeholder="Email" class="form-control"  >
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        

        <div class="navbar-header">
           <a class="navbar-brand" href="#">Ghostchat</a>
        </div>
  </div>

  <div class="navbar-toggle  icon-th-menu"></div>
</div>




	
	
	
<section class="Shifter-top ">
  <h1>Ghostchat</h1>
</section>
  <section class="Shifter">
     <div class="Shifter-left">
        <div class="Shifter-ltitle">
        Build software better, together.
        Powerful collaboration, code review, 
        and code management for open source and private projects. 
        Need private repositories?</div>

        <div class="Shifter-limg icon-cloud tempo" id="Shifter-limg">
         <div class="ico-geo display_none" id="ico-geo">Geolocalizando...</div>
          <template id="template--Temp">
           <div data-temp class="temp">
              
           </div>
          </template> 

        </div>

        
     </div>
     <div class="Shifter-right">

        <form  class="main-form" method="post" action="sing_up" accept-charset="utf-8">
            <input name="token" type="hidden" value="<?= $token?>">
            <input type="text" class="form-content username text-form" name="nombre" placeholder="Pick a username"  >
            
            <input type="email" class="form-content email text-form" name="mail" id="email"  placeholder="Your email"  >
           
            <input type="password" class="form-content password text-form" name="password" placeholder="Create password"  >

           
            <input type="password" class="form-content confirm-password text-form" placeholder="Confirm Password"  >
          
            <div class="form-message" >Use at least one lowercase letter, one numeral, and seven characters. </div>
           <button type="submit" class="btn btn-success sing-up">Sign up for Ghostchat</button>

             <p class="error-message off_active" id="error-message">the confirm all fields is required.</p>
        </form>


      </div>
     
  </section>





<section><a href="contactos">Contactos</a></section>


  <?= $vars['confidential']  ?>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="./public/libs/confirm.js"></script>
</body>
</html>
