const $ = require('jquery');
const Handlebars = require("handlebars");

$(document).ready(function() {
  var value = '';
  // carico gli input dal database
  makeInput();
  // stampo tutto il database
  printResult(value);

  $('.author').change(function() {
    var value = $(this).val();
    console.log(value);
    printResult(value);
  });





});


function makeInput() {
  $.ajax({
    url:'http://localhost/php-ajax-dischi/api/index_bonus.php',
    method:'GET',
    success: function (data) {
      var source = $("#template_input").html();
      var template = Handlebars.compile(source);
      console.log(data);
      for (var i = 0; i < data.length; i++) {
        var context = {
          value: data[i].author,
        };
        var html = template(context);
        $('header .author').append(html);
      }

    },
    error: function (richiesta, stato, error) {
      alert('è avvenuto un errore di collegamento per il caricamento degli artisti' + ' ' +error)
    }
  });
}

function printResult(value) {
  $('main .wrapper').html('');
  $.ajax({
    url:'http://localhost/php-ajax-dischi/api/index_bonus.php?author='+value,
    method:'GET',
    success: function (data) {
      console.log(data);
      var source = $("#template").html();
      var template = Handlebars.compile(source);
      for (var i = 0; i < data.length; i++) {
        var context = {
          cd_title: data[i].title,
          cd_author: data[i].author,
          cd_year: data[i].year,
          img_path: data[i].poster
        };
        var html = template(context);
        $('main .wrapper').append(html);
      }

    },
    error: function (richiesta, stato, error) {
      alert('è avvenuto un errore di collegamento' + ' ' +error)
    }
  });
}
function authorSearch() {

}
