<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
  COMUNE DI TORRICELLA PELIGNA
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel='stylesheet' href="css/stile.css" />
 
</head>
<body>
  
</body>
</html>


<html lang="en">

    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- css delle dimensioni della visualizzazione della mappa -->
  <style>
      .map {
        margin-left: 170px;
        height: 500px;
        width: 1000px;
      }
    </style>
 
 <!-- OpenLayers js -->
   <script src="v6.3.1/build/ol.js" type="text/javascript"></script>

   <!-- ultima versione ol -->
   <!-- <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/build/ol.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/css/ol.css">     -->
 
    
  </head>
  <body>

<br>


<div class="textwidget">
<MARQUEE
  onmouseover="this.stop()"
  onmouseout="this.start()"
  scrollamount="4"
  scrolldelay="1"
  direction="left"
  height="100"
  width="1320"
  align="right"
  style="font-family: "Comic Sans MS", arial, verdana, serif; font-size: "70px"><br>
 <span class="Stile5"><h2><font color="black">BENVENUTO! SEI NELLA SEZIONE DEDICATA AL CLIENTE.</font></h2></span> <br>
  </MARQUEE>


  <div id="footer_bar"> 
     <div id="bar_container">  
       <!-- barra azzurra superiore -->
</div>

<!-- stile css della mappa -->
  <style> 
  .center{
    text-align:center;
    margin-left:center
  }
  </style>

  <div id="center" class="center">
    <h2 >LA TUA POSIZIONE E'...</h2>
  </div>

  <div id="map" class="map">
    <!-- div dove si trova la mappa sul php -->
  </div>
    
 

<!-- come recuperare i dati di geolocalizzazione, tramite il pulsate -->
<!-- CLICCA QUI PER LOCALIZZARTI -->
<script src="/inizio.php"></script>
<br>
<br>

<div id="center" class="center">
    La tua posizione è:
    <br>

  <?php
//Recupero il valore del parametro "lat"
$latidudine = $_GET['lat'];

//Recupero il valore del parametro "lon"
$longitudine = $_GET['lon'];

//Ora stampo semplicemente a video il risultato
echo "latitudine " . $latidudine ." ---- " ." longitudine " . $longitudine;
?>
 </div>


 <script>
 
// la mappa mostra i contenuti del layer, quindi abbiamo creato un layer di tile
//rapprentato dalla classe ol.source.OSM, che carica il progetto openstreetmap 
//usando la classe sorgente ol.source.OSM 
   var baseLayer = new ol.layer.Tile({
        source: new ol.source.OSM()
      });
   
      var lat = <?php echo json_encode($latidudine, JSON_HEX_TAG);?>;
      var lon = <?php echo json_encode($longitudine, JSON_HEX_TAG);?>;
    

   
      var mappa = ol.proj.transform([lon,lat], 'EPSG:4326', 'EPSG:3857'); 

      
//si imposta la posizione iniziale della camera usando la classe ol.view
//con posizione centrale e zoom
      var view = new ol.View({
        center: mappa,
        // var mappa = ol.proj.transform([lon,lat], 'EPSG:4326', 'EPSG:3857'); 
        
        zoom: 12
        // zoom:10
      });
      // la mappa è rappresentata dalla classe ol.Map
      var map = new ol.Map({
        target: 'map',  
        layers: [baseLayer],
        view: view
      });

    
    _myStroke_0 = new ol.style.Stroke({
          color: 'rgba(0,0,255,1.0)',
          width: 3,
          // lineCap: 'round'
        });

      myStyle_0 = new ol.style.Style({
      stroke : _myStroke_0,
      });

      //});
      // use a single feature with a linestring geometry to display our track
      var trackFeature_0 = new ol.Feature({
        geometry: new ol.geom.LineString([])
      
      });
      // we'll need a vector layer to render it
      //la visualizzazione delle mappe avviane usando tre meccanismi differenti:
        //canvas, WebGL, DOM --> noi non utilizziamo i rendered perchè utilizziamo layer vettoriali
      var geoLayer_0= new ol.layer.Vector({
        source: new ol.source.Vector({
          features: [trackFeature_0]
        }),
        style: myStyle_0
      });
     geoLayer_0.setVisible(true);
    map.addLayer(geoLayer_0);
    
// ----------------------------------------------------------------------------------------------
// marker 
 var marker=new ol.Feature({
   geometry:new ol.geom.Point(ol.proj.fromLonLat([lon, lat]))
 });

 marker.setStyle(new ol.style.Style({
        image: new ol.style.Icon(/** @type {olx.style.IconOptions} */ ({
          src:'css/images/seiqui1.png'
        }))
      }));


 var vectorSource=new ol.source.Vector({
   features:[marker]
 });
 var vectorLayer=new ol.layer.Vector({
   source:vectorSource
 });

 map.addLayer(vectorLayer);

//-------------------------------------------------------------------------------------------
 
// elenco delle 3 zone da noi selezionate 
// zona 1 nord

//aggunta di uno stile a un livello vettoriale
     _myStroke_1 = new ol.style.Stroke({
       //colore per definire il perimetro di ogni singola zona
        color : 'rgba(255,0,0)',
        width : 1    
    });

    _myFill_1 = new ol.style.Fill({
      //colore per definire l'area di ogni singola zona
         color: 'rgba(255,0,0,0.3)'
    });

    myStyle_1 = new ol.style.Style({
      stroke : _myStroke_1,
      fill : _myFill_1
    });
    
            //aggiunta di layer vettoriali con source geojeson file 
    var geoLayer_1=new ol.layer.Vector({
      title: 'GeoJSON Layer',
      source: new ol.source.Vector({
              url: "../SPESA_ONLINE/geojeson/zona1.geojson", 
              format: new ol.format.GeoJSON(),
            
             
      }),
      style: myStyle_1
  });
  geoLayer_1.setVisible(true);
   map.addLayer(geoLayer_1);
          // map.addLayer aggiungiamo alla mappa il layer zona1 

  //zona 2 centro
  _myStroke_2 = new ol.style.Stroke({
        color : 'rgba(255,255,0)',
        width : 1    
    });

    _myFill_2 = new ol.style.Fill({
         color: 'rgba(255,255,0,0.3)'
    });

    myStyle_2 = new ol.style.Style({
      stroke : _myStroke_2,
      fill : _myFill_2
    });
    
   
    var geoLayer_2=new ol.layer.Vector({
      title: 'GeoJSON Layer',
      source: new ol.source.Vector({
              url: "../SPESA_ONLINE/geojeson/zona2.geojson",
              format: new ol.format.GeoJSON(),
            
             
      }),
      style: myStyle_2
  });
  geoLayer_2.setVisible(true);
   map.addLayer(geoLayer_2);  




//zona3 sud
_myStroke_3 = new ol.style.Stroke({
        color : 'rgba(0,0,255)',
        width : 1    
    });

    _myFill_3 = new ol.style.Fill({
        color: 'rgba(0,0,255, 0.3)'
    });

    myStyle_3 = new ol.style.Style({
      stroke : _myStroke_3,
      fill : _myFill_3
    });
      
    var geoLayer_3=new ol.layer.Vector({
      title: 'GeoJSON Layer',
      source: new ol.source.Vector({
              url: "../SPESA_ONLINE/geojeson/zona3.geojson",
              format: new ol.format.GeoJSON()
      }),
      style: myStyle_3
  });

    geoLayer_3.setVisible(true);
   map.addLayer(geoLayer_3);
    //map.addLayer(markerVectorLayer);
   
  
    </script>

<br>
<br>

<div id="center" class="center">
<h2 align='center'>CLICCA SUL BOTTONE DEL COLORE CORRISPONDENTE ALLA ZONA DI LOCALIZZAZIONE.  </h2>
<h2 align='center'> POTRAI SCOPRIREI NEGOZI CHE ADERISCONO ALL'INIZIATIVA! </h2>

<br>
<button onclick="location.href='nord.php'"  style="background-color:blue;">
<font color="white" size="7">NORD</font>
</button>

<button onclick="location.href='centro.php'" style="background-color:yellow;">
<font color="black" size="7">CENTRO</font>
</button>

<button onclick="location.href='sud.php'" style="background-color:red;">
<font color="black" size="7">SUD</font>
</button>

</div>
<br>
<br>

  <h3  align="center">Come funziona la spesa online?</h3>

  <hr align="center" size="1" width="800"  noshade > 
<br>
<div class="allinea" align="center"><img src="css/images/pc.jpg" alt="Ordine" style="width: 200px"><p><h4>1. Scrivi il tuo ordine.</h4></p></div>
<div class="allinea" align="center"><img src="css/images/com.jpg" alt="Commercinate" style="width: 200px"><p><h4>2. I commercianti preparano la spesa.</h4></p></div>
<div class="allinea" align="center"><img src="css/images/busta.jpg" alt="Ordine" style="width: 100px" ><p><h4>3. La tua spesa viene consegnata gratis a casa!</h4></p></div>
<br>
<br>
<br>
<br>
<!--Barra piè di pagina-->
  <div id="footer_bar"> 
     <div id="bar_container">   
      <ul>   
         <li><a href="inizio.php">Home</a></li> 
              
                             </ul>  </div></div>
</body>
</html>