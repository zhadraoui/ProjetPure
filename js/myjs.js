function openMenu() {
  document.getElementById("mySidenav_").style.width = "250px";
}

function closeMenu() {
  document.getElementById("mySidenav_").style.width = "0";
}


function openNav() {
  document.getElementById("mySidebar").style.width = "400px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
}




function destroySession() {
  fetch('destroy.php')
    .then(function () {
      console.log('Session détruite !');
    });
	window.location.reload();
}

