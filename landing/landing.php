<!DOCTYPE html> <!--Dichiarazione DOCTYPE-->

<!--Inizio HTML-->

<html lang="en">

	<!--Inizio Head-->

	<head>	
    
      	<!--Inizio Definizione Meta Tags-->

        <meta charset="utf-8" /> <!--Codifica Caratteri-->
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"> <!--Definizione Viewport-->
    
        <!--Titolo-->
        
        <title>
        
        	Progetto A | Laboratorio-a
            
        </title>
        
      	<!--Fine Definizione Meta Tags-->
        
        <!--Inizio Inclusione CSS-->
    	
        <link rel="stylesheet" href="css/style_1.css"> <!--CSS Main-->
        
        <!--Fine Inclusione CSS-->

	</head>
    
	<!--Fine Head-->

	<!--Inizio Body-->

    <body>
        
        <!--Inizio Container-->
    
    	<div id="container">
        
        	<!--Inizio Skip-->
            
            <aside id="skip">
            
            	<!--Titolo-->
            
            	<h3>
                	
                    Skip
                    
                </h3>
                
                <a href="http://www.laboratorio-a.it/index1.php" title="Salta e vai al sito web di Laboratorio-a" tabindex="0"> <!--Link-->
                
                	Vai al sito &#8594;
                    
                </a>	
            
            </aside>
            
            <!--Fine Skip-->
            
            <!--Inizio Logo-->
        
            <aside id="logo">

                <!--Titolo-->
                
                <h3>

                    Logo

                </h3>
                
            </aside>
            
            <!--Fine Logo-->
            
            <!--Inizio Countdown-->
            
            <aside id="counter">

                <!--Titolo-->
                
                <h3>

                    Countdown

                </h3>
                
                <!--Inizio Counter-->
                
                <div class="ce-countdown ce-countdown--theme-9">
                
                    <div class="ce-circle">
        
                        <canvas id="ce-days" width="408" height="408"></canvas>
        
                        <div class="ce-circle__values">
        
                            <span class="ce-digit ce-days"></span>
        
                            <span class="ce-label ce-days-label"></span>
        
                        </div>
        
                    </div>
        
                    <div class="ce-circle">
        
                        <canvas id="ce-hours" width="408" height="408"></canvas>
        
                        <div class="ce-circle__values">
        
                            <span class="ce-digit ce-hours"></span>
        
                            <span class="ce-label ce-hours-label"></span>
        
                        </div>
        
                    </div>
        
                    <div class="ce-circle">
        
                        <canvas id="ce-minutes" width="408" height="408"></canvas>
        
                        <div class="ce-circle__values">
        
                            <span class="ce-digit ce-minutes"></span>
        
                            <span class="ce-label ce-minutes-label"></span>
        
                        </div>
        
                    </div>
        
                    <div class="ce-circle">
        
                        <canvas id="ce-seconds" width="408" height="408"></canvas>
        
                        <div class="ce-circle__values">
        
                            <span class="ce-digit ce-seconds"></span>
        
                            <span class="ce-label ce-seconds-label"></span>
        
                        </div>
        
                    </div>
        
                </div>
                
                <!--Fine Counter-->

            </aside>
            
            <!--Fine Countdown-->
            
            <!--Inizio Summary-->

            <section id="summary">
                
                <!--Inizio Titoli-->

                <hgroup>
                    
                    <!--Titolo-->

                    <h3>

                        Summary

                    </h3>
                    
                    <!--Titolo-->
                    
                    <h1>

                        Progetto A

                    </h1>

                </hgroup>
                
                <!--Fine Titoli-->
                
                <!--Inizio Paragrafo-->

                <article>
                    
                    <!--Inizio Titoli-->

                    <hgroup>
                        
                        <!--Titolo-->

                        <h3>

                            Smmary

                        </h3>
                        
                        <!--Titolo-->
                        
                        <h2>

                            Curioso di scoprire cos'è? Iscriviti ora alla <span class="straniere">newsletter</span>

                        </h2>

                    </hgroup>
                    
                    <!--Fine Titoli-->

                </article>
                
                <!--Fine Summary-->

                <!--Inizio Form-->
                                
                <form action="<?php echo $_SERVER['SELF']; ?>" method="POST" accept-charset="utf-8" autocomplete="on" id="mailing_list" enctype="application/x-www-form-urlencoded" title="Resta Aggiornato">

                    <input type="email" id="email" name="email" tabindex="1" title="Inserisci la tua E-Mail" placeholder="Inserisci la tua E-Mail (es. mariorossi@email.it)" required>  
                    
                    <label for="accettazione">
                    
	                    <input type="checkbox" id="accettazione" name="accettazione" tabindex="2" required>
    					
                        Desidero ricevere aggiornamenti su Progetto A<br /><a id="privacy" href="#accettazione" title="Informativa sulla Privacy" tabindex="2">Privacy</a>
    
                    </label>
                    
                    <div id="tooltip">
                    
                    	Autorizzo al trattamento dei dati personali ai sensi del DLgs. 196/03.
                    
                    </div>
                    
                    <button type="submit" id="invia" title="Invia una notifica al mio indirizzo e-mail" tabindex="3">

						Iscriviti

                    </button>
                    
                       <?php
				
						  include "include/form.php"; // Inclusione Script Form
				
					   ?>

                </form>             
                
                <!--Fine Form-->

            </section>
            
            <!--Fine Summary-->
        
        </div>
        
        <!--Fine Container-->
    
    </body>
    
	<!--Fine Body-->
    
    <!--Inizio Inclusione Librerie JavaScript-->
    
    <script type="text/javascript" defer src="js/jquery-3.1.0.min.js"> <!--jQuery-->
    </script>
    <script type="text/javascript" defer src="js/jquery.counteverest.min.js"> <!--Countdown-->
    </script>
    <script type="text/javascript" defer src="js/template.js"> <!--Template-->
    </script>
    
    <!--TypeKit-->
   	
	<script src="https://use.typekit.net/owz7awq.js">
    </script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
    
    <!--Fine Inclusione Librerie JavaScript-->
    
</html>

<!--Fine HTML-->