// ajax запрос
'use strict';

$('.link_country').on('click', function (event) {
  event.preventDefault(); // убираем стандартный переход по ссылке
  var id = $(this).data('id');

  $.ajax({
    url: 'country/view',
    data: {id: id},
    type: 'GET'
  }).done(function (data) {
    $('#info').html(data).removeClass('hidden');
  });
});