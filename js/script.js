$( document ).ready(function() {


  var countPerformanceCheckAll = $('#Performance input[type=checkbox]').length;
  //alert(countPerformanceCheckAll);
  var countPerformanceCheck = 0;
  $('input[type=checkbox]').on('click',function () {
    var percentPerformance;
    if(this.checked) {
      countPerformanceCheck++;
      percentPerformance = (100/6/countPerformanceCheckAll)*countPerformanceCheck;

      $('#progress-Performance').animate({
        width: percentPerformance+'%'
      });
    } else {
      countPerformanceCheck--;
      percentPerformance = (100/6/countPerformanceCheckAll)*countPerformanceCheck;

      $('#progress-Performance').animate({
        width: percentPerformance+'%'
      });
    }

  });



});