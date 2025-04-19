var elite_construction_industry_keyboard_navigation_loop = function (elem) {
  var elite_construction_industry_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');
  var elite_construction_industry_firstTabbable = elite_construction_industry_tabbable.first();
  var elite_construction_industry_lastTabbable = elite_construction_industry_tabbable.last();
  elite_construction_industry_firstTabbable.focus();

  elite_construction_industry_lastTabbable.on('keydown', function (e) {
    if ((e.which === 9 && !e.shiftKey)) {
      e.preventDefault();
      elite_construction_industry_firstTabbable.focus();
    }
  });

  elite_construction_industry_firstTabbable.on('keydown', function (e) {
    if ((e.which === 9 && e.shiftKey)) {
      e.preventDefault();
      elite_construction_industry_lastTabbable.focus();
    }
  });

  elem.on('keyup', function (e) {
    if (e.keyCode === 27) {
      elem.hide();
    };
  });
};