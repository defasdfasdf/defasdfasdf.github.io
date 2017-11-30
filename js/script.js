var information;
var hinformation;
var information3;
var where = window.location.pathname;
var algos = ["myr-gr", "x17", "blake2s", "lyra2v2", "scrypt"];

function loadJSON(callback) {
  var xobj = new XMLHttpRequest();
  xobj.overrideMimeType("application/json");
  xobj.open('GET', "../Config.json", true);
  xobj.onreadystatechange = function () {
    if (xobj.readyState == 4 && xobj.status == "200") {
      callback(xobj.responseText);
    }
  }
  xobj.send(null);
}

loadJSON(function(responseText){
  hinformation = information = JSON.parse(responseText).pages;
  header();
  title();
  if (where == "/More%20information/"){
  information = JSON.parse(responseText).miningpools;
   miningpools();
   information = JSON.parse(responseText).coinlists;
   coinlists();
  }

  else if (where == "/Wallets/"){
    information = JSON.parse(responseText).wallets;
    wallets();

  }
  else if (where == "/Roadmap/"){
    information = JSON.parse(responseText).roadmap;
    roadmap();

  }
  else if (where == "/Exchanges/"){
    information = JSON.parse(responseText).exchanges;
    exchanges();
  }
  else if (where == "/Competitions/"){
    information = JSON.parse(responseText).Competition;
    competitions();
  }
});
function roadmap(){
  information.forEach(function(element){
    document.querySelector("#" + element.for).addEventListener('mdl-componentupgraded', function() {
    this.MaterialProgress.setProgress(element.progress);
  });
});
}
function title(){
    hinformation.forEach(function(element){
  element.Name =   element.Name.substring(element.Name.indexOf("%20"));
  if ("/" + element.Name + "/" == where || (element.Name == "More information" && where == "/More%20information/") || (element.Name == "Contact us" && where == "/Contact%20us/") || "/" + element.Name == where){
    document.getElementById("title").innerHTML = "SHIELD "  + element.Name;
  }
});
}
function wallets(){
  information.forEach(function(element){
    if (element.platform.includes("windows")){
      var x = "content1";
    }
    else if (element.platform.includes("linux")){
      var x = "content2";
    }
    else if (element.platform.includes("android")){
      var x = "content3";
    }
    else if (element.platform.includes("other")){
      var x = "content4";
    }
      var wallet = document.createElement("a");
      wallet.classList.add("col-md-2", "col-sm-5","col-xs-12","dwnld");
      wallet.href=element.link;
      var typeh3 = document.createElement("h3");
      typeh3.classList.add("dwnldtxt");
      var type = document.createTextNode(element.type);
      typeh3.appendChild(type);
      var typeh4 = document.createElement("h6");
      typeh4.classList.add("dwnldtxt");
      var type = document.createTextNode(element.Name);
      typeh4.appendChild(type);
      wallet.appendChild(typeh3);
      wallet.appendChild(typeh4);
      var div = document.getElementById(x);
      div.appendChild(wallet);
});}
function miningpools() {

}
function coinlists() {

  }
  function exchanges() {

  }
  function header(){
    information.forEach(function(element){
      if(!(element.Name.includes("#"))){
      if (!(element.Name == "")){
        var li = document.createElement("li");
        var a = document.createElement("a");
        if ("/" + element.Name + "/" == where || (element.Name == "More information" && where == "/More%20information/") || (element.Name == "Contact us" && where == "/Contact%20us/")){
          a.classList.add("here");
        }
        else if( where != "/"){
        a.href= "../" + element.Name;
      }
      else{
          a.href= "../" + element.Name;
        }
      var aname = document.createTextNode(element.Name);
      var primnav = document.getElementById("secondary-nav");
      a.appendChild(aname);
      li.appendChild(a);
      primnav.appendChild(li);
    }}
    if (element.Name.includes("#") && where == "/"){
      var primnav = document.getElementById("primary-nav");
          var li = document.createElement("li");
          var a = document.createElement("a");
          a.href= element.Name;
          var i = element.Name.length;
          element.Name = element.Name.substring(1,i);

          var aname = document.createTextNode(element.Name);
          a.appendChild(aname);
          li.appendChild(a);
          primnav.appendChild(li);

      }
    });
    smoothscrolling();
  }
  function smoothscrolling(){
    $(function() {$("a[href*='#']")
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .not('[href*="#test4"]')
    .not('[href*="#test5"]')
    .not('[href*="#test6"]')
    .not('[href*="#test7"]')
    .click(function (event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, function () {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
              return false;
            } else {
              $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
              $target.focus(); // Set focus again
            };
          });
        }
      }
    });
  });
  }

  }
