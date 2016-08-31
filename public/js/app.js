var api_url = "http://localhost:8000/";

$(document).ready(function () {

	$('#add_list').click(function(){

      var div = document.createElement('div');
      $(div).attr('class', 'form-group');
      var select = document.createElement('select');
      var option = document.createElement('option');

      $(option).attr('value', '');
      $(option).text('Select Contact List');
      $(option).appendTo(select);

    $.get(api_url+ 'api/list', function(data){

      for (var i = 0; i < data.length; i++) {

        var id = data[i].id;
        var option = document.createElement('option');

        $(option).attr('value', id);
        $(option).text(data[i].name);
        $(option).appendTo(select);
      }
      $(select).attr('name', 'list_id[]');
      $(select).attr('class', 'form-control');
      $(select).appendTo(div);
    });


    $(div).appendTo('#more-lists');


  });
});