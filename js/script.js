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
  else if (where == "/"){
    information = JSON.parse(responseText).wallets;
    wallets();
      information = JSON.parse(responseText).exchanges;
    exchanges();
  }
  else if (where == "/Wallets/"){
    information = JSON.parse(responseText).wallets;
  //  wallets();

  }
  else if (where == "/Roadmap/"){
    information = JSON.parse(responseText).roadmap;
    roadmap();

  }
  else if (where == "/Exchanges/"){
    information = JSON.parse(responseText).exchanges;

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
var w = 0;
var l = 0;
var an = 0;
var o = 0;
function wallets(){
  information.forEach(function(element){
    if (element.platform.includes("windows")){
      var x = "w";
      console.log(w);
      w += 1;
      console.log(w);
    }
    else if (element.platform.includes("linux")){
      var x = "l";
      l++;
    }
    else if (element.platform.includes("android")){
      var x = "a";
      an++;
    }
    else if (element.platform.includes("other")){
      var x = "o";
      o++;
    }
      var wallet = document.createElement("div");
      if (x == "w") {
        console.log(w);
        w = w % 2;
        console.log(w);
        if (w == 0) {
          wallet.classList.add("offset-m1");
        }
      } else if (x == "l") {
        l = l % 2;
        if (l == 0) {
          wallet.classList.add("offset-m1");
        }
      } else if (x == "a") {
        an = an % 2;
        if (an == 0) {
          wallet.classList.add("offset-m1");
        }
      } else if (x == "o") {
        o = o % 2;
        if (o == 0) {
          wallet.classList.add("offset-m1");
        }
      }

      wallet.classList.add("col", "s12","m5","card");
      var typeh3 = document.createElement("div");
      typeh3.classList.add("card-content");
      var span = document.createElement("span");
      span.classList.add("card-title");
      var type = document.createTextNode(element.Name);
      span.appendChild(type);
      var typeh4 = document.createElement("p");
      var type = document.createTextNode("text");
      typeh4.appendChild(type);
      typeh3.appendChild(span);
      typeh3.appendChild(typeh4);
      wallet.appendChild(typeh3);
      var hey = document.createElement("div");
      hey.classList.add("card-action");
      var a = document.createElement("a");
      a.href = element.link;

      var atext = document.createTextNode(element.type);
      a.appendChild(atext);
      hey.appendChild(a);
      wallet.appendChild(hey);
      var div = document.getElementById(x);
      div.appendChild(wallet);
});}
function miningpools() {

}
function coinlists() {

  }
  function exchanges() {
    var s = 0;
    var hm = 0;
    information.forEach(function(element){
          s++;
          hm++;
          s = s % 2;
          var ex = "ex" + hm;
          console.log(ex);
          var sep = document.createElement("div");
          sep.classList.add("exsep");
          var bdiv = document.getElementById("exlist");
          var classs = ex.toString();
          console.log(classs);
          if (s == 0) {

            var div2 = document.createElement("div");
            div2.classList.add(classs, "exchangeinfol","mdl-cell--4-col" , "mdl-cell--3-offset-desktop");
            var p = document.createElement("p");
            /*var pt = document.createTextNode(element.Info);
            p.appendChild(pt);*/
            var a = document.createElement("a");
            a.classList.add("mdl-button","mdl-button--colored","mdl-js-button","mdl-js-ripple-effect");
            a.href=element.linkto;
            var at = document.createTextNode(element.status);
            a.appendChild(at);
            div2.appendChild(p,a);
            bdiv.appendChild(div2);
            var div = document.createElement("div");
            div.classList.add(classs ,"exchange-card-image","mdl-cell","mdl-cell--3-col-desktop","mdl-cell--4-col","mdl-card","mdl-shadow--2dp","eximg");
            div.style="background: url(" + element.logo_path + ") center;"
            var div2 = document.createElement("div");
            div2.classList.add("mdl-card__title","mdl-card--expand");
            div.appendChild(div2);
            var div2 = document.createElement("div");
            div2.classList.add("mdl-card__actions");
            div2.style="padding: 2px 10px;height: auto;";
            var span = document.createElement("span");
            span.classList.add("exchange-card-image__filename");
            var spant = document.createTextNode(element.Name);
            span.appendChild(spant);
            div2.appendChild(span);
            div.appendChild(div2);
            bdiv.appendChild(div);

        }
        else {
          var div = document.createElement("div");
          div.classList.add(classs ,"exchange-card-image","mdl-cell", "mdl-cell--3-col-desktop","mdl-cell--3-offset-desktop", "mdl-cell--4-col" ,"mdl-card" ,"mdl-shadow--2dp" ,"eximg");
          div.style="background: url(" + element.logo_path + ") center;"
          var div2 = document.createElement("div");
          div2.classList.add("mdl-card__title","mdl-card--expand");
          div.appendChild(div2);
          var div2 = document.createElement("div");
          div2.classList.add("mdl-card__actions");
          div2.style="padding: 2px 10px;height: auto;";
          var span = document.createElement("span");
          span.classList.add("exchange-card-image__filename");
          var spant = document.createTextNode(element.Name);
          span.appendChild(spant);
          div2.appendChild(span);
          div.appendChild(div2);
          bdiv.appendChild(div);
          var div = document.createElement("div");
          div.classList.add(classs,"exchangeinfor", "mdl-cell--4-col");
          var p = document.createElement("p");
          /*var pt = document.createTextNode(element.Info);
          p.appendChild(pt);*/
          var a = document.createElement("a");
          a.classList.add("mdl-button","mdl-button--colored","mdl-js-button","mdl-js-ripple-effect");
          a.href=element.linkto;
          var at = document.createTextNode(element.status);
          a.appendChild(at);
          div.appendChild(p,a);
          bdiv.appendChild(div);
          console.log("hello");
        }

        bdiv.appendChild(sep);
  });}
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
    .not('[href*="#other"]')
    .not('[href*="#android"]')
    .not('[href*="#linux"]')
    .not('[href*="#windows"]')
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
