$( document ).ready(function() {
  
  function newDatepicker ( e, a, d ) {

    $(":input").inputmask({
      placeholder: 'JJJJ.MM.TT',
      showMaskOnHover: false,
      showMaskOnFocus: true
    });
    
    $(e).datepicker({
      format: 'yyyy-mm-dd',
      weekStart: '1',
      language: "fr",
      daysOfWeekHighlighted: "0,6",
      autoclose: true,
      calendarWeeks: true,
      todayHighlight: true,
      startDate: '-50d'
    });

    $(e).datepicker()
    .on('changeDate hide', function(e) {
      var d1 = $(a).datepicker('getDate');
      var d2 = $(d).datepicker('getDate');
      var checkDate = moment(d2).isSameOrBefore(d1);

      if(d2 == null || checkDate == true) {
        $(d).datepicker('setDate', setDepartureDate());
        $(d).datepicker('show');
        //$(d).focus();  
      }
      
    });
    
    function setDepartureDate() {
      var v1 = $(a).datepicker('getDate');
      var v2 = moment(v1).add(1, 'days').format('YYYY-MM-DD');
      return v2;
    }
      
  };

  if ( $( ".datepicker" ).length ) {
    newDatepicker('.datepicker', '.date-arrive', '.date-departure');
  };
  
});