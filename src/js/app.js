const $ = require('jquery');
const Handlebars = require("handlebars");


function callAlbum () {
  $.ajax(
    {
      url: "http://localhost/php-ajax-dischi/server.php",
      method: "GET",
      success: function (data, stato) {
        renderAlbum(data);
        renderSelection(data);
      },

      error: function (richiesta, stato, errori) {
        alert("E' avvenuto un errore. " + errore);
      }
    }
  );

};

function renderAlbum(ele) {
  var source = $("#album-template").html();
  var template = Handlebars.compile(source);

  for(var i = 0; i< ele.length; i++){
    var context = {
      "author": ele[i].author,
      "poster": ele[i].poster,
      "title": ele[i].title ,
      "year": ele[i].year
    };
    var html = template(context);
    $("#album_stamp").append(html);
  };
};

function renderSelection(ele) {
  var source = $("#options-template").html();
  var template = Handlebars.compile(source);

  for(var i = 0; i< ele.length; i++){
    var context = {
      "selectAuthor": ele[i].author
    };
    var html = template(context);
    $(".header_selection").append(html);
  };
}

$(document).ready(
  function(){
    callAlbum();
    renderSelection();

  $( ".header_selection" ).child(".option_author").on( "click", function() {
    alert();
  });

  });
