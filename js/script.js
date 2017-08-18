$( document ).ready(function() {


  var countPerformanceCheckAll = $('#Performance input[type=checkbox]').length,
      countSEOCheckAll = $('#SEO input[type=checkbox]').length,
      countSecurityCheckAll = $('#Security input[type=checkbox]').length,
      countPerformanceCheck = $('#Performance input[type=checkbox]:checked').length,
      countSEOCheck = $('#SEO input[type=checkbox]:checked').length;
      countSecurityCheck = $('#Security input[type=checkbox]:checked').length;

  $('input[type=checkbox]').on('click',function () {
    var percentPerformance,
        percentSEO,
        percentSecurity,
        thisChek = $(this).attr('name');
    if(this.checked) {
      switch($(this).closest('.checklist').attr('id')){
        case 'Performance':
          countPerformanceCheck++;
          localStorage.setItem(thisChek, 'true');
          percentPerformance = (100/6/countPerformanceCheckAll)*countPerformanceCheck;
          $('#progress-Performance').animate({
              width: percentPerformance+'%'
          });
          break;
        case 'SEO':
          countSEOCheck++;
          localStorage.setItem(thisChek, 'true');
          percentSEO = (100/6/countSEOCheckAll)*countSEOCheck;
          $('#progress-SEO').animate({
              width: percentSEO+'%'
          });
          break;
        case 'Security':
          countSecurityCheck++;
          localStorage.setItem(thisChek, 'true');
          percentSecurity = (100/6/countSecurityCheckAll)*countSecurityCheck;
          $('#progress-Security').animate({
              width: percentSecurity+'%'
          });
          break;
      }
    } else {
      switch($(this).closest('.checklist').attr('id')){
        case 'Performance':
          countPerformanceCheck--;
          localStorage.removeItem(thisChek);
          percentPerformance = (100/6/countPerformanceCheckAll)*countPerformanceCheck;
          $('#progress-Performance').animate({
            width: percentPerformance+'%'
          });
          break;
        case 'SEO':
          countSEOCheck--;
          localStorage.removeItem(thisChek);
          percentSEO = (100/6/countSEOCheckAll)*countSEOCheck;
          $('#progress-SEO').animate({
            width: percentSEO+'%'
          });
          break;
        case 'Security':
          countSecurityCheck--;
          localStorage.removeItem(thisChek);
          percentSecurity = (100/6/countSecurityCheckAll)*countSecurityCheck;
          $('#progress-Security').animate({
            width: percentSecurity+'%'
          });
          break;
      }
    }

  });



});

$(window).on('load', function(){
  $('input[type=checkbox]').each(function () {
    var thisname = $(this).attr('name');
    if(localStorage.getItem(thisname)) {
      $(this).prop('checked', true);
    }
  });
  var countPerformanceCheckAll = $('#Performance input[type=checkbox]').length,
      countSEOCheckAll = $('#SEO input[type=checkbox]').length,
      countSecurityCheckAll = $('#Security input[type=checkbox]').length,
      countPerformanceCheck = $('#Performance input[type=checkbox]:checked').length,
      countSEOCheck = $('#SEO input[type=checkbox]:checked').length,
      countSecurityCheck = $('#Security input[type=checkbox]:checked').length,
      percentPerformance = (100/6/countPerformanceCheckAll)*countPerformanceCheck;
      $('#progress-Performance').animate({
        width: percentPerformance+'%'
      });
      percentSEO = (100/6/countSEOCheckAll)*countSEOCheck;
      $('#progress-SEO').animate({
        width: percentSEO+'%'
      });
      percentSecurity = (100/6/countSecurityCheckAll)*countSecurityCheck;
      $('#progress-Security').animate({
        width: percentSecurity+'%'
      });
});