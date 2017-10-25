///makes the nav apear and disapear
  function toggleSidebar(){
   //classlist accessing an element's list of classes
    document.getElementById("sidebar").classList.toggle('active');
    document.getElementById("content-container").classList.toggle('pushed');
  }
