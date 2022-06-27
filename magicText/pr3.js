/* FOR DEMO ONLY (NOT NECESSARY TO IMPLEMENT VERTICAL TABS) */

  var $tabSideNav = $('.navbar .navbar-nav');
  var $tabSideToggles = $('a', $tabSideNav);
  var $tabTypeContainer = $('.tabbable');
  var $tabContentContainer = $('.tab-content', $tabTypeContainer);

  if ($tabTypeContainer.hasClass('tabs-left')) {
    $tabSideToggles.filter('[data-target=left]').parent('li').addClass('active');
  } else {
    $tabSideToggles.filter('[data-target=right]').parent('li').addClass('active');
  } 

  $tabSideToggles.on('click', function (e) {
    e && e.preventDefault(); 
    
    $tabSideNav.find('li').removeClass('active');
    $(this).parent('li').addClass('active');
    
    var target = $(this).attr('data-target');
    if (target === 'right') {
      if ($tabTypeContainer.hasClass('tabs-left')) {
        $tabTypeContainer
          .removeClass('tabs-left')
          .addClass('tabs-right');
      }
    }
    if (target === 'left') {
      if ($tabTypeContainer.hasClass('tabs-right')) {
        $tabTypeContainer
          .removeClass('tabs-right')
          .addClass('tabs-left');
      }
    }
  });