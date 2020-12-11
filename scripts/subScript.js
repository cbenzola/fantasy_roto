"use strict";

$(document).ready(function(){


	

	$('.card').click(function(){$('.card').toggleClass('applyflip');}.bind(this));



	function openTab(evt, playerStat) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("stat_view");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(playerStat).style.display = "block";
  evt.currentTarget.className += " active";
}







});

function setCookie(c_name, value, exdays) {
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
    document.cookie = c_name + "=" + c_value;
}

function getCookie(c_name) {
    var i, x, y, ARRcookies = document.cookie.split(";");
    for (i = 0; i < ARRcookies.length; i++) {
        x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
        y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
        x = x.replace(/^\s+|\s+$/g, "");
        if (x == c_name) {
            return unescape(y);
        }
    }
}

//FEATURED HOVER
$(document).ready(function(){
   $(".linkfeat").hover(
     function () {
         $(".textfeat").show(500);
     },
     function () {
         $(".textfeat").hide(500);
     }
 );
});
// JavaScript Document
