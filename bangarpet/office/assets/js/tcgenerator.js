

  document.onkeyup = function(e) {
    if(e.ctrlKey && e.which == 66) {
        document.getElementById("tcform").submit();
      }
  };