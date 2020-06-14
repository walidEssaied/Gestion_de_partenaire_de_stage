@extends('layouts.app')
 @section('title','ISETB-Institut Supérieur des Etudes Technologiques de Bizerte')
@section('content')
<div class="pic" style="height: 380px;">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
                    <img class="d-block w-100" src="http://www.mediafire.com/convkey/0d5f/jhf84024gvjc089zg.jpg " alt="First slide" height="340"/>
                    <div class="carousel-caption d-none d-md-block">
                    <div class="img-title" style="text-align: left;margin-left:-120px;margin-bottom:-20px;display:flex" width="200px">
                        <h5>
                          <b style="background-color: #f4c312;padding: 5px;opacity: 90%"> ISET de Bizerte vous souhaite la bienvenue </b> <br>
                          <span style="margin-top: 10px">
                          <br>
                            <span style="background-color: black;opacity: 70%;padding: 5px;"> Prenons l'initiative ensemble, avançons de notre ISET </span>
                          </span>
                        </h5>
                    </div>
                    </div>
        </div>
        <div class="carousel-item">
                    <img class="d-block w-100" src="http://www.mediafire.com/convkey/7bb0/2eic4vtpqdfj7qszg.jpg" alt="Second slide" height="340"/>
                    <div class="carousel-caption d-none d-md-block">
                    <div class="img-title" style="text-align: left;margin-left:-120px;margin-bottom:-20px;display:flex" width="200px">
                        <div class="espaceetudiant" style="display: flex;padding-top: 10px">
                          <img src="http://www.mediafire.com/convkey/b3b9/s0ubfglnuopuleyzg.jpg" alt="Etudiant avatar" width="70px" height="70px">
                          <div class="desc" style="background-color:  #f4c312 ;opacity: 90%;display: flex;padding-top: 10px" width="100px" height="70px">
                              <ul style="display: block">
                                <li style="list-style: none;font-size: 18px;color: #006daa">
                                Espace Etudiant
                                </li>
                                <br>
                              </ul>
                                <ul style="list-style-type: '⤼';font-size: 16px;color: white">
                                  <li><a style="text-decoration: none" href="" ><b>Clubs</b></a</li>
                                  <li><a style="text-decoration: none" href=""><b>Manifestations</b></li>
                                </ul>
                                <ul style="list-style-type: '⤼';font-size: 16px;">
                                  <li><a style="text-decoration: none" href=""><b>Activités sportives</b></li>
                                  <li><a style="text-decoration: none" href=""><b>Activités culturelles</b></li>
                                </ul>
                          </div>
                        </div>
                    </div>
                    </div>
              </div>
              <div class="carousel-item">
                    <img class="d-block w-100" src="https://www.mediafire.com/convkey/7ecd/31hn2mp93vps81xzg.jpg" alt="3eme slide" height="340"/>
                    <div class="carousel-caption d-none d-md-block">
                    <div class="img-title" style="text-align: left;margin-left:-120px;margin-bottom:-20px;display:flex" width="200px">
                        <div class="espaceentreprise" style="display: flex;padding-top: 10px">
                          <img src="http://www.mediafire.com/convkey/43fc/9q45chof1gyg38dzg.jpg" alt="Etudiant avatar" width="70px" height="70px">
                          <div class="desc" style="background-color:  #f4c312 ;opacity: 90%;display: flex;padding-top: 10px" width="100px" height="70px">
                          <ul style="display: block">
                            <li style="list-style: none;font-size: 18px;color: #006daa">
                            Espace Entreprise
                            </li>
                            <br>
                          </ul>
                            <ul style="list-style-type: '⤼';font-size: 16px;color: white">
                              <li><a style="text-decoration: none" href="" ><b>Stage et PFE</b></a</li>
                              <li><a style="text-decoration: none" href=""><b>Listes des offres d'emploi</b></li>
                            </ul>
                            <ul style="list-style-type: '⤼';font-size: 16px;">
                              <li><a style="text-decoration: none" href=""><b>Recrutement</b></li>
                              <li><a style="text-decoration: none" href=""><b>Liste des débouchés</b></li>
                            </ul>
                          </div>
                        </div>
                    </div>
                    </div>
              </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
</div>
</div>
<div class="event" style="height: 100px;">
    <div class="onoffswitch3">
        <input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked>
        <label class="onoffswitch3-label" for="myonoffswitch3">
            <span class="onoffswitch3-inner">
                <span class="onoffswitch3-active">
                <marquee class="scroll-text" height="200px">Avis aux nouveaux étudiants 09 Octobre 2019 |   
                      <span class="glyphicon glyphicon-forward"></span> 01 Novembre 2019 Changement de l'adresse du site web de l'ISET | 
                      <span class="glyphicon glyphicon-forward"></span> 4ème édition du Digital Learning Hackathon les 20 et 21 Novembre 2019
                </marquee>
                    <span class="onoffswitch3-switch" style="background-color: #f4c312">News<span class="glyphicon glyphicon-remove"></span></span>
                </span>
                <span class="onoffswitch3-inactive"><span class="onoffswitch3-switch">Show news</span></span>
            </span>
        </label>
    </div>
</div>
<div class="contenu" style="display: grid;grid-template-columns: 1fr 3fr 1fr;">
    <div class="lpvc">
        <div class="login" style="height: 130px;background-color:#f0f0f1">
          <div class="boxlog">
          <br>
            <div class="boxei" style="display: flex;padding-top: 10 px">
              <div class="ybox" style="width: 15px;background-color: #f4c312">
              <!-- Yellow box -->
              </div>
              <div class="eibox" style="background-color: #3ea5de;width: 100%;padding-top: 10px;padding-bottom: 10px;color: white">
              <span style="margin-left: 10px">ESPACE INTRANET</span>
              </div>
            </div>
            <br>
            <div class="btnlog" style="padding-left: 50px">
              <a href="{{ route('login') }}" style="background-color: #f4c312;padding: 6px;color: white">Se connecter</a>
            </div>
          </div>
        </div>
        <br>
        <div class="planiset" style="height: auto;background-color: #f0f0f1">
              <br>
                  <div class="boxei" style="display: flex;margin-top: 10 px">
                        <div class="ybox" style="width: 15px;background-color: #f4c312">
                        <!-- Yellow box -->
                        </div>
                        <div class="eibox" style="background-color: #3ea5de;width: 100%;padding-top: 10px;padding-bottom: 10px;color: white">
                        <span style="margin-left: 10px">MAP DE l'INSTITUT</span>
                        </div>
                  </div>
                  <div class="plan">
                          <p>
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3102.0805044402105!2d9.883274994346381!3d37.235120475398794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e31ff1faae6e19%3A0xa4da7162624c5788!2sInstitut%20Sup%C3%A9rieur%20des%20Etudes%20Technologiques%20de%20Bizerte!5e1!3m2!1sfr!2stn!4v1589500694488!5m2!1sfr!2stn" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                          </p>
                  </div>
        </div>
        <br>
        <div class="video" style="height: auto;background-color: #f0f0f1">
            <br>
            <div class="boxei" style="display: flex;margin-top: 10 px">
                  <div class="ybox" style="width: 15px;background-color: #f4c312">
                  <!-- Yellow box -->
                  </div>
                  <div class="eibox" style="background-color: #3ea5de;width: 100%;padding-top: 10px;padding-bottom: 10px;color: white">
                  <span style="margin-left: 10px">VIDEOS</span>
                  </div>          
            </div>
            <div class="video">
                  <p>
                    <video width="100%" height="200" controls>
                    <source src="https://www.facebook.com/I.s.e.t.Biz/videos/10153077335517816/" type="video/mp4">
                    </video>
                  </p>
                  </div> 
        </div>
        <br>
        <div class="clubs" style="height: auto;background-color:#f0f0f1">
          <br>
              <div class="boxei" style="display: flex;margin-top: 10 px">
                    <div class="ybox" style="width: 15px;background-color: #f4c312">
                    <!-- Yellow box -->
                    </div>
                    <div class="eibox" style="background-color: #3ea5de;width: 100%;padding-top: 10px;padding-bottom: 10px;color: white">
                    <span style="margin-left: 10px">CLUBS</span>
                    </div>
              </div>
              <div class="club1">
                          <a href="/" style="text-decoration: none;">Tunivisions</a>
                    </div>
                    <div class="club1">
                          <a href="/" style="text-decoration: none;">AlphaTech</a>
                    </div>         
                    <div class="club1">
                          <a href="/" style="text-decoration: none;">RootSpace</a>
                    </div>   
        </div>
    </div>
    <div class="actualite"style="height: 1000px;background-color: #f5f5f5;">
          <div class="boxei" style="display: flex;padding-top: 10 px">   
            <div class="ybox" style="width: 15px;background-color: #006daa">
            <!-- Yellow box -->
            </div>
            <div class="eibox" style="background-color: #3ea5de;width: 100%;padding-top: 10px;padding-bottom: 10px;color: white">
              <span style="margin-left: 10px">ACTUALITES</span>
            </div>
          </div>
          <br>
          <br>
          <div class="act" style="background-color: #ececf0">
                <div class="actcontenu">
                  <span style="margin-left: 480px">
                    <b>Le</b> 15/05/2020 02:30
                    </span>
                    <div class="contenu-act">
                      <div class="title-act" style="margin-left: 30px">
                        <span><b>4ème édition du Digital Learning Hackathon les 20 et 21 Novembre 2019  </b>  <span class="newact" style="color: red;font-size: 10px">[NEW]</span></span>
                      </div>
                      <div class="cont" style="margin-left: 10px;font-family: Verdana, Geneva, Tahoma, sans-serif;font-size: 12px;">
                      <p>ISET Bizerte vous invite à la 4ème édition du Digital Learning Hackathon les 20 et 21 Novembre 2019. 
                        L'équipe gagnante ira pitcher devant des jury professionnels pendant la 7ème édition du Forum E-learning Tunisie, 
                        organisé par ISET'Com en collaboration avec le Centre pour le Développement des Compétences Professionnelles (CDCP), 
                        qui se tiendra les 15 et 16 janviers 2020.  Les trois meilleurs projets à l'échelle nationale seront récompensés par 
                        des lots intéressants indiqués sur le site.</p>
                      </div>
                    </div>
                </div>
              </div> 
              <div class="act" style="background-color: #ececf0">
                <div class="actcontenu">
                  <span style="margin-left: 480px">
                    <b>Le</b> 15/05/2020 02:30
                    </span>
                    <div class="contenu-act">
                      <div class="title-act" style="margin-left: 30px">
                        <span><b>4ème édition du Digital Learning Hackathon les 20 et 21 Novembre 2019  </b>  <span class="newact" style="color: red;font-size: 10px">[NEW]</span></span>
                      </div>
                      <div class="cont" style="margin-left: 10px;font-family: Verdana, Geneva, Tahoma, sans-serif;font-size: 12px;">
                      <p>ISET Bizerte vous invite à la 4ème édition du Digital Learning Hackathon les 20 et 21 Novembre 2019. 
                        L'équipe gagnante ira pitcher devant des jury professionnels pendant la 7ème édition du Forum E-learning Tunisie, 
                        organisé par ISET'Com en collaboration avec le Centre pour le Développement des Compétences Professionnelles (CDCP), 
                        qui se tiendra les 15 et 16 janviers 2020.  Les trois meilleurs projets à l'échelle nationale seront récompensés par 
                        des lots intéressants indiqués sur le site.</p>
                      </div>
                    </div>
                </div>
              </div>
              <div class="act" style="background-color: #ececf0">
                <div class="actcontenu">
                  <span style="margin-left: 480px">
                    <b>Le</b> 15/05/2020 02:30
                    </span>
                    <div class="contenu-act">
                      <div class="title-act" style="margin-left: 30px">
                        <span><b>4ème édition du Digital Learning Hackathon les 20 et 21 Novembre 2019  </b>  <span class="newact" style="color: red;font-size: 10px">[NEW]</span></span>
                      </div>
                      <div class="cont" style="margin-left: 10px;font-family: Verdana, Geneva, Tahoma, sans-serif;font-size: 12px;">
                      <p>ISET Bizerte vous invite à la 4ème édition du Digital Learning Hackathon les 20 et 21 Novembre 2019. 
                        L'équipe gagnante ira pitcher devant des jury professionnels pendant la 7ème édition du Forum E-learning Tunisie, 
                        organisé par ISET'Com en collaboration avec le Centre pour le Développement des Compétences Professionnelles (CDCP), 
                        qui se tiendra les 15 et 16 janviers 2020.  Les trois meilleurs projets à l'échelle nationale seront récompensés par 
                        des lots intéressants indiqués sur le site.</p>
                      </div>
                    </div>
                </div>
              </div>
              <div class="act" style="background-color: #ececf0">
                <div class="actcontenu">
                  <span style="margin-left: 480px">
                    <b>Le</b> 15/05/2020 02:30
                    </span>
                    <div class="contenu-act">
                      <div class="title-act" style="margin-left: 30px">
                        <span><b>4ème édition du Digital Learning Hackathon les 20 et 21 Novembre 2019  </b>  <span class="newact" style="color: red;font-size: 10px">[NEW]</span></span>
                      </div>
                      <div class="cont" style="margin-left: 10px;font-family: Verdana, Geneva, Tahoma, sans-serif;font-size: 12px;">
                      <p>ISET Bizerte vous invite à la 4ème édition du Digital Learning Hackathon les 20 et 21 Novembre 2019. 
                        L'équipe gagnante ira pitcher devant des jury professionnels pendant la 7ème édition du Forum E-learning Tunisie, 
                        organisé par ISET'Com en collaboration avec le Centre pour le Développement des Compétences Professionnelles (CDCP), 
                        qui se tiendra les 15 et 16 janviers 2020.  Les trois meilleurs projets à l'échelle nationale seront récompensés par 
                        des lots intéressants indiqués sur le site.</p>
                      </div>
                    </div>
                </div>
              </div>
              <div class="act" style="background-color: #ececf0">
                <div class="actcontenu">
                  <span style="margin-left: 480px">
                    <b class="le">Le</b> 15/05/2020 02:30
                    </span>
                    <div class="contenu-act">
                      <div class="title-act" style="margin-left: 30px">
                        <span><b>4ème édition du Digital Learning Hackathon les 20 et 21 Novembre 2019  </b>  <span class="newact" style="color: red;font-size: 10px">[NEW]</span></span>
                      </div>
                      <div class="cont" style="margin-left: 10px;font-family: Verdana, Geneva, Tahoma, sans-serif;font-size: 12px;">
                      <p>ISET Bizerte vous invite à la 4ème édition du Digital Learning Hackathon les 20 et 21 Novembre 2019. 
                        L'équipe gagnante ira pitcher devant des jury professionnels pendant la 7ème édition du Forum E-learning Tunisie, 
                        organisé par ISET'Com en collaboration avec le Centre pour le Développement des Compétences Professionnelles (CDCP), 
                        qui se tiendra les 15 et 16 janviers 2020.  Les trois meilleurs projets à l'échelle nationale seront récompensés par 
                        des lots intéressants indiqués sur le site.</p>
                      </div>
                    </div>
                </div>
              </div>  
                    
    </div>
    <div class="lfa">
        <div class="links" style="height: auto;background-color:#f0f0f1">
          <br>
              <div class="boxei" style="display: flex;padding-top: 10 px">
                <div class="ybox" style="width: 40px;background-color: #3ea5de">
                <!-- Yellow box -->
                </div>
                <div class="eibox" style="background-color: #3ea5de;width: 100%;padding-top: 10px;padding-bottom: 10px;color: white">
                <span style="margin-left: 10px;color: #f4c312;font-size: 18px">LIENS UTILES</span>
                </div>
              </div>
              <br>
              <div class="lu">
                <ul>
                  <li><a href="">Ministère ESRS</a></li>
                  <li><a href="">Université du Sousse</a></li>
                  <li><a href="">Inscription.tn</a></li>
                  <li><a href="">Orientation.tn</a></li>
                </ul>
              </div>
          </div>
        <br>
        <div class="facebook-page" style="height: 252px;background-color: #f0f0f1">
          <br>
              <div class="boxei" style="display: flex;padding-top: 10 px">
                <div class="ybox" style="width: 40px;background-color: #3ea5de">
                <!-- Yellow box -->
                </div>
                <div class="eibox" style="background-color: #3ea5de;width: 100%;padding-top: 10px;padding-bottom: 10px;color: white">
                <span style="margin-left: 10px;color: #f4c312;font-size: 18px">PAGE FACEBOOK</span>
                </div>
              </div>
              <div class="pf">
              <iframe src="https://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/I.s.e.t.Biz/?ref=br_rs" scrolling="no" style="border:none; overflow:hidden; height:258px;" allowtransparency="true" frameborder="0" width="100%"></iframe>
              </div>                
        </div>
        <br>  
        <div class="avis" style="height: auto;background-color:#f0f0f1">
          <br>
            <div class="boxei" style="display: flex;padding-top: 10 px">
                    <div class="ybox" style="width: 40px;background-color: #3ea5de">
                    <!-- Yellow box -->
                    </div>
                    <div class="eibox" style="background-color: #3ea5de;width: 100%;padding-top: 10px;padding-bottom: 10px;color: white">
                    <span style="margin-left: 10px;color: #f4c312;font-size: 18px">VOTRE AVIS</span>
                    </div>
            </div>
            <div class="av" style="margin-left: 20px">
              <span>Comment vous trouvez la nouvelle version du site ?</span><br>
    
              <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="pr" name="example1">
                  <label class="custom-control-label" for="parfaite">Parfaite</label>
              </div>
              <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="bn" name="example2">
                  <label class="custom-control-label" for="bonne">Bonne</label>
              </div>
              <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="my" name="example3">
                  <label class="custom-control-label" for="moyaenne">Moyenne</label>
              </div>
              <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="mv" name="example4">
                  <label class="custom-control-label" for="mauvaise">Mauvaise</label>
              </div>
              <input type="submit" value="Envoyer" style="background-color: #006daa;margin-left: 180px;border: 0;color: white;padding: 4px">
            </div>
        </div>
    </div>
</div>
 @endsection