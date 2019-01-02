
<?php require_once("modelo.php");
 include("modal_tweet.html");?>
<div class="card" id="twitter" style="top:90px; left:40px;">
  <div class="card-body">
   <h5 class="card-title ">
      <ul class="nav">
        <div class="logotwitter" style="top:0px; left:0px;">
          .
        </div>
        <div class="twitterInput" style="top:15px; left:200px;">
          <li class="nav-item" >
            <img id="imgPhoto" src="twitterS.png" alt="logo" height="20px" width="20px"> Inicio 
          </li>
        </div>
        <div class="twitterInput" style="top:15px; left:300px;">
          <li class="nav-item" >
            Momentos
          </li>
        </div>
        <div class="twitterInput" style="top:15px; left:800px;">
          <li class="nav-item" >
            <input type="text" placeholder="   Buscar en Twitter" name="" size="40" style="border-radius: 12px;">
          </li>
        </div>
        <div class="twitterInput" style="top:5px; left:1300px;">
          <li class="nav-item" >
            <button data-toggle="modal" data-target="#tweet_form" type="button" class="btn btn-outline-primary" style="border-radius: 12px; border: 1px;"><strong>Tweet</strong></button>
          </li>
        </div>


      </ul>
    </h5>

    <div class="abs" style="top:300px; left:0px;">
      <nav class="navbar navbar-light ">
        <div class="abs" style=" left:380px;">
          <table class="table_c"  >
            <tr>
              <th class="th_c">Tweets</th>
              <th class="th_c">Siguiendo</th> 
              <th class="th_c">Seguidores</th>
            </tr>
            <tr>
              <td class="td_c"><?php getNumeroTweets(); ?></td>
              <td class="td_c">0</td>
              <td class="td_c">0</td>
            </tr>
          </table>
        </div>
        <div class="absol"  style="top: 25px; left:1000px;">
          <button >Seguir</button>
        </div>
      </nav>
    </div> 

    <div id="portadatwitter" style="top:50px; left:0px;">
      <div id="fotoPeril">
        <img id="imgPhoto" src="fotoTweeter.jpg" alt="Enrique Canales" height="150px" width="150px" class="fotoTwitter">
      </div>
    </div>
    
  <div id="contenidoPerfil" class="absol"  style="top:370px; left:0px;">
    <div  id="cardPerfil">
        <h5 class="card-title"><strong>Quique Oliveros</strong></h5>
        <p class="card-text arroba">@OliverosQuique</p>
        <h6 class="card-text">Los errores de la vida son los mejores maestros</h6>
        <p class="card-text arroba">Se unio en junio de 2017</p>
    </div> 
  </div>

  <div class="card absol" style="width: 18rem; top:350px; left:1100px;">
  <div class="card-body">
    <h5 class="card-title "> <strong>Tendencias: Globales</strong> </h5>
    <p class="card-title hasth"><a href="#"><strong>#OT18GalaFinal</strong> </a></p>
    <h6 class="card-subtitle mb-2 text-muted tweets">524 mil Tweets</h6>
    <p class="card-title hasth"><a href="#"><strong>#Survivo</strong>r</a></p>
    <h6 class="card-subtitle mb-2 text-muted tweets">18,8 mil Tweets</h6>
    <p class="card-title hasth"><a href="#"><strong>#EuphoriaWentGold</strong></a></p>
    <h6 class="card-subtitle mb-2 text-muted tweets">50,4 mil Tweets</h6>
  </div>
</div>


 <div class="ex1 absol" style="width: 40rem; top:380px; left:450px;">
  <div id="TweetsR" >
      <?php  echo getTweet();?> 
  </div>
</div>

 


  </div>
</div>

</div>