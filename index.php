<?php 
    #PHP INCLUDES
    include "connect.php";
    include "Includes/templates/header.php";
    include "Includes/templates/navbar.php";
?>

<!-- Home Section -->
<head>
  <meta charset="UTF-8">
</head>
<section class = "home_section">
    <div class="section-header">
        <div class="section-title" style = "font-size:50px; color:white">
        Trouver la meilleure voiture et limousine
        </div>
        <hr class="separator">
		<div class="section-tagline">
        À partir d'aussi peu que 10 $ par jour avec des réductions sur les offres à durée limitée
		</div>					
	</div>
</section>

<!-- Our Services Section -->
<section class = "our-services" id = "services">
    <div class = "container">
        <div class="section-header">
            <div class="section-title">
            Quels services nous offrons à nos clients ?
            </div>
            <hr class="separator">
            <div class="section-tagline">
                
                 Qui sont extrêmement amoureux du système écologique ?
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <h4>
                        <span>
                            <i class="far fa-user"></i>
                        </span>
                        Techniciens expert
                    </h4>
                    <p>
                    L’utilisation d’Internet devient de plus en plus courante en raison des progrès rapides de la technologie et de la puissance.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <h4>
                        <span>
                            <i class="fas fa-certificate"></i>
                        </span>
                        Service professionnel
                    </h4>
                    <p>L’utilisation d’Internet devient de plus en plus courante en raison des progrès rapides de la technologie et de la puissance
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <h4>
                        <span>
                            <i class="fas fa-phone-alt"></i>
                        </span>
                        Excellent soutien
                    </h4>
                    <p>
                    L’utilisation d’Internet devient de plus en plus courante en raison des progrès rapides de la technologie et de la puissance.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <h4>
                        <span>
                            <i class="fas fa-rocket"></i>
                        </span>
                        Compétences techniques
                    </h4>
                    <p>
                    L’utilisation d’Internet devient de plus en plus courante en raison des progrès rapides de la technologie et de la puissance.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <h4>
                        <span>
                            <i class="fas fa-gem"></i>
                        </span>
                        Fortement recommandé
                    </h4>
                    <p>L’utilisation d’Internet devient de plus en plus courante en raison des progrès rapides de la technologie et de la puissance.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <h4>
                        <span>
                            <i class="far fa-comments"></i>
                        </span>
                        Avis positifs
                    </h4>
                    <p>
                    L’utilisation d’Internet devient de plus en plus courante en raison des progrès rapides de la technologie et de la puissance.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Area Section -->
<section class = "about-area">
    <div class = "container-fluid">
        <div class = "row">
            <div class = "col-md-6 left-area" style = "padding:0px">
                <img src="Design/images/image1.jpg" alt="Car Rental Image">
            </div>
            <div class = "col-md-6 right-area" style = "padding:50px">
                <h1>
                   Connecté mondialement <br>
                       par Grand Réseau
                </h1>
                <p>
                    <span>
                    Nous sommes là pour vous écouter offrir l'excellence
                    </span>
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                </p>
                <a class="my-btn bttn" href="#">obtenir des détails</a>
            </div>
        </div>
    </div>
</section>

<!-- Our Brands Section -->
<section class = "our-brands" id = "brands">
    <div class = "container">
        <div class="section-header">
            <div class="section-title">
            Services de location de voitures et de limousines de première classe
            </div>
            <hr class="separator">
            <div class="section-tagline">
            Nous proposons des services professionnels de location de voitures et de limousine dans notre gamme de véhicules haut de gamme.
            </div>
        </div>
        <div class = "car-brands">
            <div class = "row">
            <?php

                $stmt = $con->prepare("Select * from car_brands");
                $stmt->execute();
                $car_brands = $stmt->fetchAll();

                foreach($car_brands as $car_brand)
                {
                    $car_brand_img = "admin/Uploads/images/".$car_brand['brand_image'];
                    ?>
                    <div class = "col-md-4">
                        <div class = "car-brand" style = "background-image: url(<?php echo $car_brand_img ?>);">
                            <div class = "brand_name">
                                <h3>
                                    <?php echo $car_brand['brand_name']; ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <?php
                }

            ?>
            </div>
        </div>
    </div>
</section>

<!-- CAR RESERVATION SECTION -->
<section class="reservation_section" style = "padding:50px 0px" id = "reserve">
	<div class="container">
		<div class = "row">
			<div class = "col-md-5"></div>
			<div class = "col-md-7">
				<form method="POST" action = "reserve.php" class = "car-reservation-form" id = "reservation_form" v-on:submit = "checkForm">
					<div class="text_header">
						<span>
                        Trouvez votre voiture
						</span>
					</div>
					<div>
						<div class = "form-group">
							<label for="pickup_location">Lieu de ramassage</label>
							<input type = "text" class = "form-control" name = "pickup_location" placeholder = "34 Mainfield Road" v-model = 'pickup_location'>
							<div class="invalid-feedback" style = "display:block" v-if="pickup_location === null">
                            Le lieu de prise en charge est requis
							</div>
						</div>
						<div class = "form-group">
							<label for="return_location">Lieu de retour</label>
							<input type = "text" class = "form-control" name = "return_location" placeholder = "34 Mainfield Road" v-model = 'return_location'>
							<div class="invalid-feedback" style = "display:block" v-if="return_location === null">
                            Le lieu de retour est requis
							</div>
						</div>
						<div class = "form-group">
							<label for="pickup_date">Date de ramassage</label>
							<input type = "date" min = "<?php echo date('Y-m-d', strtotime("+1 day"))?>" name = "pickup_date" class = "form-control" v-model = 'pickup_date'>
							<div class="invalid-feedback" style = "display:block" v-if="pickup_date === null">
							La date de ramassage est requise
							</div>
						</div>
						<div class = "form-group">
							<label for="return_date">Date de retour</label>
							<input type = "date" min = "<?php echo date('Y-m-d', strtotime("+2 day"))?>" name = "return_date"  class = "form-control" v-model = 'return_date'>
							<div class="invalid-feedback" style = "display:block" v-if="return_date === null">
                            La date de retour est requise
							</div>
						</div>
						<!-- Submit Button -->
						<button type="submit" class="btn sbmt-bttn" name = "reserve_car">Réservez instantanément</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- CONTACT SECTION -->

<section class="contact-section" id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 sm-padding">
                <div class="contact-info">
                    <h2>
                    Prenez contact avec nous &<br>
                        Envoyez-nous un message aujourd'hui !
                    </h2>
                    <p>Se déguiser et voyager avec de bons amis constitue une expérience partagée et inoubliable.
                    </p>
                    <h3>
                        Iga site 2mars 
                        <br>
                        Casablanca , Maroc
                    </h3>
                    <ul>
                        <li>
                            <span style = "font-weight: bold">Email:</span> 
                            contact@KMDCars.com
                        </li>
                        <li>
                            <span style = "font-weight: bold">Téléphone:</span> 
                            +212 0123456789
                        </li>
                        <li>
                            <span style = "font-weight: bold">Fax:</span> 
                            +212 0123456789
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="contact-form">
                    <div id="contact_ajax_form" class="contactForm">
                        <div class="form-group colum-row row">
                            <div class="col-sm-6">
                                <input type="text" id="contact_name" name="name" class="form-control" placeholder="Nom">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" id="contact_email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" id="contact_subject" name="subject" class="form-control" placeholder="Sujet">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea id="contact_message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button id="contact_send" class="contact_send_btn">Envoyer le message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section -->
<section class="widget_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer_widget">
                    <a class="navbar-brand" href="">
                        KMD<span style = "color:#04DBC0">KMD CarRental</span>&nbsp;
                    </a>
                    <p>
                    Se déguiser et voyager avec de bons amis constitue une expérience partagée et inoubliable.
                    </p>
                    <ul class="widget_social">
                        <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="fab fa-twitter fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="LinkedIn"><i class="fab fa-linkedin fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Google+"><i class="fab fa-google-plus-g fa-2x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer_widget">
                    <h3>Informations de contact</h3>
                    <ul class = "contact_info">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>962  Avenue 5 , Casablanca, 2024
                        </li>
                        <li>
                            <i class="far fa-envelope"></i>@morocco.com
                        </li>
                        <li>
                            <i class="fas fa-mobile-alt"></i>+212 0123456789
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer_widget">
                    <h3>Bulletin</h3>
                    <p style = "margin-bottom:0px">Ne manquez rien ! Inscrivez-vous pour recevoir des offres quotidiennes</p>
                    <div class="subscribe_form">
                        <form action="#" class="subscribe_form" novalidate="true">
                            <input type="email" name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address...">
                            <button type="submit" class="submit">S'ABONNER</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BOTTOM FOOTER -->
<?php include "Includes/templates/footer.php"; ?>



<script>

new Vue({
    el: "#reservation_form",
    data: {
        pickup_location: '',
        return_location: '',
        pickup_date: '',
		return_date: ''
    },
    methods:{
        checkForm: function(event){
            if( this.pickup_location && this.return_location && this.pickup_date && this.return_date)
            {
                return true;
            }
            
            if (!this.pickup_location)
            {
                this.pickup_location = null;
            }

            if (!this.return_location)
            {
                this.return_location = null;
            }

            if (!this.pickup_date)
            {
                this.pickup_date = null;
            }

			if (!this.return_date)
            {
                this.return_date = null;
            }
            
            event.preventDefault();
        },
    }
})


</script>