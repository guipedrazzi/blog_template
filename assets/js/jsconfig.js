$(function () {
  $(".dropdown-trigger").dropdown();
  $('.tabs').tabs();
  $('.carousel').carousel();
  $('.parallax').parallax();
  $('.materialboxed').materialbox();
  $('.modal').modal();
  $('.tooltipped').tooltip({delay: 50});
  $('.collapsible').collapsible();
  
  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });

  //função para passar o carrocel sozinho a cada 4 segundos
  setInterval(function(){$('.carousel').carousel('next');},4000);



});


// <script>$.confirm 
//               ({
//                   useBootstrap: false,
//                   title: '<?php echo $msgTitulo; ?>',
//                   content: '<?php echo $msgConteudo; ?>',
//                   buttons: {
//                       OK: function (){
//                           <?php echo $msgFuncao; ?>
//                        }
                      
//                   }
//               });
//     </script>
var diaSemana = [ 'Domingo', 'Segunda-Feira', 'Terca-Feira', 'Quarta-Feira', 'Quinta-Feira', 'Sexta-Feira', 'Sabado' ];
  var mesAno = [ 'Janeiro', 'Fevereiro', 'Marco', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro'           , 'Dezembro' ];
  var data = new Date();
  var hoje = diaSemana[data.getDay()] + ', ' + mesAno[data.getMonth()] + ' de ' + data.getFullYear();
    $('.datepicker').datepicker();
  $("#dataPesquisa").attr("value", hoje);
  // $(".datepicker").pickadate({
  //   monthsFull: mesAno,
  //   monthsShort: [ 'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez' ],
  //   weekdaysFull: diaSemana,
  //   weekdaysShort: [ 'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab' ],
  //   weekdaysLetter: [ 'D', 'S', 'T', 'Q', 'Q', 'S', 'S' ],
  //   selectMonths: true,
  //   selectYears: true,
  //   clear: false,
  //   format: 'dddd/mm/yyyy',
  //   today: "Hoje",
  //   close: "OK",
  //   min: new Date(data.getFullYear() - 1, 0, 1),
  //   max: new Date(data.getFullYear() + 1, 11, 31),
  //   closeOnSelect: true
  // });
