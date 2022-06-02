
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Football club Barcelona</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Tarifs</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Présentation</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Calendrier</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Présentation Staff</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contacter</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Football Club Barcelona</div>
                <div class="masthead-heading text-uppercase">Bienvenue</div>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Tarifs d'adhésion</h2>
                    <br>
                    <br>
                </div>
                <div class="tableau">
                 <table>
                    <tr>
                        <th> </th>
                        <th>Nombre</th>
                        <th>Coût à l'année</th>
                    </tr>
                    <tr>
                        <th>Adultes</th>
                        <td> <input size="5" onfocus="this.value=''" type="text" id="field1" value="0" onchange="maFonction()" ></td>
                        <td> <input size="5" type="text" id="field11" value="" readonly > </td>
                    </tr> 
                    <tr>
                        <th>Enfants de moins de 8ans</th>
                        <td> <input onfocus="this.value=''" type="number" id="field2" value="0" onchange="maFonction()"></td>
                        <td> <input type="number" id="field22" value="" readonly> </td>
                    </tr> 
                    <tr>
                        <th>Enfants de 8 à 14ans</th>
                        <td> <input onfocus="this.value=''" type="number" id="field3" value="0" onchange="maFonction()"></td>
                        <td> <input type="number" id="field33" value="" readonly> </td>
                    </tr> 
                    <tr>
                        <th>Enfants de 14 à 18ans</th>
                        <td> <input onfocus="this.value=''" type="number" id="field4" value="0" onchange="maFonction()"></td>
                        <td> <input type="number" id="field44" value="" readonly> </td>
                    </tr> 
                    <tr>
                        <th> </th>
                        <th>Total</th>
                        <td> <input type="number" id="fieldsomme" readonly> </td>
                    </tr>
                </table>
                <br>
                <br>
                <script>
                    function maFonction(){
                        document.getElementById("field11").value = parseInt(document.getElementById("field1").value)*120;
                        document.getElementById("field22").value = parseInt(document.getElementById("field2").value)*120*3/10;
                        document.getElementById("field33").value = parseInt(document.getElementById("field3").value)*120*4/10;
                        document.getElementById("field44").value = parseInt(document.getElementById("field4").value)*120*5/10;
                        document.getElementById("fieldsomme").value= parseInt(document.getElementById("field11").value) + parseInt(document.getElementById("field22").value) + parseInt(document.getElementById("field33").value) + parseInt(document.getElementById("field44").value);
                    }
                </script>
            </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Présentation</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/01-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Activité</div>
                                <div class="portfolio-caption-subheading text-muted">Son histoire rapide</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/02-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Club</div>
                                <div class="portfolio-caption-subheading text-muted">Son histoire rapide</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/03-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Trophées </div>
                                <div class="portfolio-caption-subheading text-muted">Trophées obtenue depuis 1899</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Calendrier</h2>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Lundi</h4>
                                <h4 class="subheading">Entrainement</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Entrainement u7-u9-u11-u13 de 10h à 12h<br>
                                                                             Entrainement u15-u17 de 14h à 16h<br>
                                                                             Entrainement sénior de 17h à 19h</p></div>
                        </div>

                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Mercredi</h4>
                                <h4 class="subheading">Entrainement</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Entrainement u7-u9-u11-u13 de 10h à 12h<br>
                                                                             Entrainement u15-u17 de 14h à 16h<br>
                                                                            Entrainement sénior de 17h à 19h</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Vendredi</h4>
                                <h4 class="subheading">Prépa physique</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Prépa physique pour les u15-u17 de 18h30 à 19h30<br>
                                                                             Prépa physique pour les sénior de 20h à 21h<br>
                                                                             Soirée buvette apres la prépa des séniors !</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Samedi</h4>
                                <h4 class="subheading">Jour de match</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Match des u7-u9-u11-u13 à 10h<br>
                                                                             Match des u15-u17 à 16h<br>
                                                                             Match des sénior équipe 1 à 18h<br>
                                                                             Match des sénior équipe 2 à 20h</p></div>
                        </div>
                    </li>
                    
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Présentation des cadres</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="" onclick="window.location.href='assets/img/team/1.jpg'" />
                            <h4>Eric Abidal</h4>
                            <p class="text-muted">Directeur sportif</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="" onclick="window.location.href='assets/img/team/2.jpg'"/>
                            <h4>Josep Maria Bartomeu</h4>
                            <p class="text-muted">Président</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="" onclick="window.location.href='assets/img/team/3.jpg'" />
                            <h4>Ronald Koeman</h4>
                            <p class="text-muted">Entraineur</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class= "displayed">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.6864762013097!2d2.1206311154255966!3d41.38089597926468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a498f576297baf%3A0x44f65330fe1b04b9!2sCamp%20Nou!5e0!3m2!1sfr!2sfr!4v1606810469894!5m2!1sfr!2sfr" width="600" height="450" frameborder="100" style="border:center;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">

                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contacter</h2>
                     <form method ="post" action="traitement.php" >
                        <fieldset class="global">
                            <legend>Formulaire de contact </legend><br><br />
                            <fieldset class="coord">
                                <legend>Formulaire de contact</legend><br>
                                <select name="titre">
                                    <option value ="Msc" selected="selected"> Homme </option>
                                    <option value ="Mme">Femme</option>
                                </select><br><br />
                                Nom (obligatoire) : <input type="text" name ="Nom"  required value="" size =15 onkeyup="onlyNumber();"/> <br><br />
                                Prenom (obligatoire) : <input type="text" name ="Prenom" required value ="" size=15 onkeyup="onlyNumber();"/ ><br><br />
                                Age (obligatoire) : <input type="text" name ="Age" required value="" size =15 onkeyup="onlyNumber();"/> <br><br />
                                 Mail (obligatoire) : <input type ="email" name="mail" required size="30"/><br><br />
                                 Ville (obligatoire) :<input type="text" name ="ville" required value="" size =15  onkeyup="onlyNumber();"/> <br><br />
                                Sport pratiqué avant (falcutatif) : <input type="text" name ="sportAvant" size =15  onkeyup="onlyNumber();"/> <br><br />
                                <input type="submit" value="Soumettre" /><br/>
                                <?php 
                                require_once('selection.php');
                                ?>

                                 <br />
                            </fieldset>

                <!-- <fieldset class="objet">
                    <legend>Niveau de la personne </legend>
                    <select name="titre">
                        <option value="Amateur" selected="selected">Amateur</option>
                        <option value="pro">professionnel</option>
                        <option value="semi-pro">semi-professionnel</option>
                    </select><br><br />
                </fieldset>
                <fieldset class="centre">
                    <legend> Quels est votre poste de prédilection ? </legend>

                    <input type="checkbox" name="categories[]" id="1" />
                    <label for="avant-centre">avant-centre </label>
                    <input type="checkbox" name="categories[]" id="2" />
                    <label for="avant-centre">milieu-droit </label>
                    <input type="checkbox" name="categories[]" id="3" />
                    <label for="avant-centre">milieu-gauche </label>
                    <input type="checkbox" name="categories[]" id="4" />
                    <label for="avant-centre">milieu </label>
                    <input type="checkbox" name="categories[]" id="5" />
                    <label for="avant-centre">défenseur-gauche </label>
                    <input type="checkbox" name="categories[]" id="6" />
                    <label for="avant-centre">défenseur-droit </label>
                    <input type="checkbox" name="categories[]" id="7" />
                    <label for="avant-centre">défenseur-central </label>
                    <input type="checkbox" name="categories[]" id="8" />
                    <label for="avant-centre">gardien </label>
                </fieldset>
                <fieldset class="contact">
                    <legend>Voulez-vous être recontactez ?</legend>
                    <input type="radio" name="question" value="oui" id="oui"/>
                    <label for="oui">oui </label>
                    <input type="radio" name="question" value="non" id="non"/>
                    <label for="non">non </label>
                </fieldset><br />
                <input type ="submit" name="valider" value="Valider" />
                <input type="reset" name="annuler" value="Annuler" /> -->
            </fieldset>
        </form>
        <script>
            function onlyNumber()
            {
             var Nom=document.getElementById('Nom');
             Nom.value=Nom.value.replace(/[^a-z]/,'');
             var Prenom=document.getElementById('Prenom');
             Prenom.value=Prenom.value.replace(/[^a-z]/,'');
             var ville=document.getElementById('ville');
             ville.value=ville.value.replace(/[^a-z]/,'');
            var sportAvant=document.getElementById('sportAvant');
             sportAvant.value=sportAvant.value.replace(/[^a-z]/,'');
            var Age=document.getElementById('Age');
             Age.value=Age.value.replace(/[^0-9]/,'');
             }
        </script>

        </section>
    
        <!-- Portfolio Modals-->
        <!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Football</h2>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/01-full.jpg" alt="" />
                                    <p>L'histoire du football rend compte de la naissance et de l'évolution du football, un sport collectif apparu au milieu du xixe siècle en Grande-Bretagne et devenu au siècle suivant le plus populaire au monde.

Les racines que ce sport partage avec d'autres jeux de « football » remontent au Moyen Âge. Il est l'héritier de la soule médiévale, pratiqué notamment dans le Nord-Ouest de la France et dans les Îles Britanniques, et du Calcio florentin, des jeux caractérisés par leur violence et leur peu de règles.

Au début du xixe siècle, les écoles anglaises intègrent progressivement le sport à leur cursus et impulsent sa formalisation. Les règles de Cambridge sont en octobre 1848 une première tentative d'unification des règles du football. Les premiers clubs indépendants apparaissent à la fin des années 1800 ; en 1863, onze d'entre eux fondent the Football Association, chargée d'organiser la pratique du football en Angleterre. Elle publie peu après les premières « Lois du jeu » (en anglais : Laws of the Game), largement inspirées par celles de Cambridge.

Dès lors, le football connait une progression continue dans sa pratique. En 1885, le professionnalisme est autorisé en Grande-Bretagne, tandis que les premiers clubs sont créés à travers le monde, particulièrement en Europe et en Amérique du Sud. La Fédération internationale de football association (FIFA) est fondée en 1904 à Paris par des représentants de sept pays européens. Encouragée par le succès populaire rencontré par les tournois de football aux Jeux olympiques, la FIFA organise en 1930 la première édition de la Coupe du monde, qui devient un des principaux événements sportifs planétaires.</p>
                                    <ul class="list-inline">
                                        <li>Date: Novembre 2020</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Fermer!
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">FC Barcelona</h2>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/02-full.jpg" alt="" />
                                    <p>En 1899, Joan Gamper, un homme suisse, a décidé de présenter le football à Barcelone en créant une équipe. Le club a été officiellement fondé le 29 novembre 1899.

Il s'est développé de plus en plus fors, en remportant des titres tels que la Coupe Macaya en 1902, la Coupe des Pyrénées en 1910-1912.

Le FC Barcelone a construit son premier stade en 1909 avec une capacité de 6 000 personnes.

Au cours des années 1920, la renommée et le succès de l'équipe ont augmenté. Ils ont remporté la première Ligue du Championnat lors de la saison 1928-1929. Avec la nouvelle popularité du club, il fallait construire un nouveau stade. En 1922, le stade « 'Les Corts » a été construit, avec une capacité de 22 000 personnes.

Il est important de se rappeler que le FC Barcelone a survécu à une guerre civile. En 1936, les soldats de Franco ont tué le président du club, Josep Sunyol, en raison de son appartenance à un parti de gauche.

Tous les fans de Barcelone FC sont fiers de ce qu'on appelle la saison des « cinq coupes ». Il s'agit de la période entre 1951 et 1952, lorsque le FC Barcelone a remporté la Coupe, la Ligue, la Coupe latine, le Martini Rosso et l'Eva Duarte.

En 1957, Camp Nou a été construit, avec une capacité initiale de 90 000 personnes. Le succès de Barcelone n’a cessé de se développer. En 1983, l'équipe a pu s’offrir les services des joueurs tels que Bernd Schuster et Diego Maradona.</p>
                                    <ul class="list-inline">
                                        <li>Date: Novembre 2020</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Fermer!
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Palmares</h2>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/03-full.jpg" alt="" />
                                    <ul class="list-inline">
                                        <li>Ligue des Champions - 5</li>
                                        <li>Mondial des Clubs - 3</li>
                                        <li>Supercoupe d'Europe - 4</li>
                                        <li>Coupe des Villes de Foire - 3</li>
                                        <li>Supercoupe d'Europe - 5</li>
                                        <li>Coupe Latine - 2</li>
                                        <li>Coupe des Pyrénées - 4</li>
                                        <li>Liga - 26</li>
                                        <li>Coupe du Roi - 30</li>
                                        <li>Supercoupe d'Espagne - 13</li>
                                        <li>Coupe de la Liga - 2</li>
                                        <li>Ligue Méditerranéenne - 1</li>
                                        <li>Liga Catalane - 1</li>
                                        <li>Championnat de Catalogne - 23</li>
                                        <li>Supercoupe de Catalogne - 2</li>
                                        <li>Coupe de Catalogne - 8</li>
                                        <li>Coupe Eva Duarte - 3</li>
                                        <br>
                                    <ul class="list-inline">
                                        <li>Date: Novembre 2020</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Fermer!
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
