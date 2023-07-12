$("#btnAdmin").click(function() {
  $("#btnAdmin").css("display","none");
  $("#cst").css("display","block");
  $("#bk").css("display","block");
})







var tabImages = [
    "image/bike1.jpg",
    "image/bike8.jpg",
    "image/bike3.jpg",
    "image/bike4.jpg",
    "image/bike5.jpg"
  ];

  var tabTxt = [
    "Tourisme ? sport ? travail ? Veloco met ses vélos et bicyclettes à votre disposition",
    "Localiser notre stand à vélos le plus proche",
    "Vous devez tout d'abord vous inscrire afin de réserver un vélo",
    "30% de réduction à la première réservation",
    "Découvrez ou redecouvrez Marseille avec Veloco"
  ];


  let position = 0;

  let lastImg = tabImages.length - 1;
  
  let txt = document.getElementById("txt");
  
  txt.innerHTML = tabTxt[position];
  
  //on récupère dans l'élément image l'attribut src à travers lequel on và lire les images du tableau
  document.querySelector("#image").src = tabImages[position];


  var defilement = setInterval(function() {
 
    if (position > lastImg ) {
      position=0;
    }
  
    document.querySelector("#image").src = tabImages[position];
    txt.innerHTML = tabTxt[position];
    position++;
  
  }, 4000);


  





async function dataW() {

    let ville =document.querySelector("#ville");

    let temp =document.querySelector("#temp");

    let wind =document.querySelector("#wind");

    let weather = document.querySelector("#weather");

    



    const keyAPI = 'f98181171a7693ab8085faad4c1181bd';

    let url=`https://api.openweathermap.org/data/2.5/weather?q=Marseille&appid=${keyAPI}&units=metric&lang=fr`;
    
    let data = await fetch(url);

    let response = await data.json();

    console.log(response);

    
    
    ville.innerHTML=response.name;
    temp.innerHTML=response.main.temp;
    wind.innerHTML=response.wind.speed;
    weather.innerHTML=response.weather[0].main;
    if (response.weather[0].main=="Clear") {
      $("#sunlight").css("display","block");
    } else if (response.weather[0].main=="Clouds"){
      $("#sun").css("display","block");
    }else{
      $("#rain").css("display","block");
    }
  
}

dataW();





var mymap = L.map("myMap").setView([43.250903869637334, 5.403244616491982], 12);

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  maxZoom: 19, //zoom max
  attribution:
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors' //les info sur la carte
}).addTo(mymap);





/*
    var greenIcon = new L.Icon({
        iconUrl:
          "https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png",
        shadowUrl:
          "https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png",
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
      });
  
      var redIcon = new L.Icon({
        iconUrl:
          "https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png",
        shadowUrl:
          "https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png",
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
      });
  
      var orangeIcon = new L.Icon({
        iconUrl:
          "https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-orange.png",
        shadowUrl:
          "https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png",
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
      });

*/

    /*for (let index = 0; index < response.length; index++) {
        let mark = response[index];
        console.log(mark.name);

        if (mark.mainStands.availabilities.bikes==1) {
            let marker = new L.marker([mark.position.latitude,mark.position.longitude],{icon: orangeIcon}).bindPopup(mark.name).addTo(mymap);
        }else if(mark.mainStands.availabilities.bikes<1){
            let marker = new L.marker([mark.position.latitude,mark.position.longitude],{icon: redIcon}).bindPopup(mark.name).addTo(mymap);
        }else if(mark.mainStands.availabilities.bikes>1){
            let marker = new L.marker([mark.position.latitude,mark.position.longitude],{icon: greenIcon}).bindPopup(mark.name).addTo(mymap);

        }

       
        
    }*/
    

    var myItems = [
      ["Stand VELOCO 1er", 43.3008, 5.3822],
      ["Stand VELOCO 5e", 43.2923, 5.3959],
      ["Stand VELOCO 8e", 43.2472, 5.3825]
  ];


  for (var i = 0; i < myItems.length; i++) {
    var item = myItems[i];
    marker = new L.marker([item[1],item[2]]).bindPopup(item[0]).addTo(mymap);
}




  