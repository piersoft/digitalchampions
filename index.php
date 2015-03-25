<?php
  $out = shell_exec('curl -s "http://www.digitalchampions.it/?geo_mashup_content=geo-query&map_name=gm-map" | in2csv -k objects | csvjson --lat lat --lon lng | jq . > dc.json');
  echo "<pre>$out</pre>";


//getContent  ('http://www.digitalchampions.it/?geo_mashup_content=geo-query&map_name=gm-map');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Mappa DigitalChampions - uMap</title>
    <meta charset="utf-8">
    <meta property="og:image" content="http://www.piersoft.it/digitalchampions/dc.png"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
</head>
<body>
  <iframe width="100%" height="650px" frameBorder="0" src="http://umap.openstreetmap.fr/it/map/mappa-digitalchampions_34111?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&datalayersControl=true&onLoadPanel=databrowser&captionBar=false"></iframe><p><a href="http://umap.openstreetmap.fr/it/map/mappa-digitalchampions_34111">Visualliza schermo intero</a></p></body>
</html>
