document.addEventListener("DOMContentLoaded", function (e) {
  //Fonction de scroll pour l'affichage du header
  function scrollHandler(e) {
    var modals = document.querySelectorAll(".modal.active");
    var nav = document.querySelector(".menuheader");
    if (window.scrollY >= 500 && modals.length == 0) {
      nav.classList.add("active");
    } else {
      nav.classList.remove("active");
    }
  }

  // Fonction pour n'afficher que les artistes qui matchent la date
  // filter = date

  function filterSelection(filter) {
    var artistes_figures = document.querySelectorAll(".filter_div");

    if (filter == "all") {
      for (var artiste of artistes_figures) {
        artiste.classList.add("show");
      }
    } else {
      for (var artiste of artistes_figures) {
        if (artiste.dataset.filtervalue == filter) {
          artiste.classList.add("show");
        } else {
          artiste.classList.remove("show");
        }
      }
      document.querySelector("#prog_anchor").scrollIntoView();
    }
  }
  filterSelection("all");

  // Add active class to the current control button (highlight it)
  var btnContainer = document.getElementById("filters");
  var btns = btnContainer.getElementsByClassName("btn");
  for (var btn of btns) {
    btn.addEventListener("click", (e) => {
      filterSelection(e.target.dataset.filtertarget);
      var btnContainer = document.getElementById("filters");
      var active_button = btnContainer.querySelector(".active");
      active_button.classList.remove("active");
      e.target.classList.add("active");
    });
  }

  //MODAL
  var openModelsButtons = document.querySelectorAll(".filter_div");
  const closeButton = document.querySelectorAll("#prog .exit_button");
  const modal_container = document.querySelector(".modal_control");
  openModelsButtons.forEach((element) => {
    element.addEventListener("click", () => {
      const modal = document.querySelector(element.dataset.modalTarget);
      openModal(modal);
    });
  });

  var modal = document.querySelectorAll(".modal");
  modal.forEach((mod) => {
    mod.addEventListener("click", function (e) {
      if (e.target !== this) {
        return;
      }
      closeModal(e.target);
    });
  });
  closeButton.forEach((e) => {
    e.addEventListener("click", () => {
      const modals = document.querySelectorAll(".modal.active");
      modals.forEach((element) => {
        closeModal(element);
      });
    });
  });

  function openModal(modal) {
    if (modal == null) return;
    modal.classList.add("active");
    const header = document.querySelector("menuheader");
    document.querySelector(".menuheader").classList.add("hidden");
    modal_container.classList.add("active");
    modal.scrollIntoView();
  }

  function closeModal(modal) {
    if (modal == null) return;
    modal.classList.remove("active");
    document.querySelector(".menuheader").classList.remove("hidden");
    modal_container.classList.remove("active");
    document.querySelector("#prog_anchor").scrollIntoView();
  }
  /* Vidéo carrousel */
  var carrousel_container = document.querySelector(
    ".video_caroussel_container"
  );
  var video_index = 0;
  var nav_dots = document.querySelectorAll(".nav_dot");
  var videos = carrousel_container.querySelectorAll(".iframe_container");
  nav_dots[video_index].classList.add("active");

  function swap_video(index) {
    for (var video of videos) {
      video.classList.add("hidden");
    }
    for (var nav_dot of nav_dots) {
      nav_dot.classList.remove("active");
    }
    videos[index].classList.remove("hidden");
    nav_dots[index].classList.add("active");
  }
  function next() {
    if (video_index < videos.length - 1) {
      video_index++;
    } else {
      video_index = 0;
    }
    swap_video(video_index);
  }
  function previous() {
    if (video_index > 0) {
      video_index--;
    } else {
      video_index = videos.length - 1;
    }
    swap_video(video_index);
  }
  document.querySelector("#next_video").addEventListener("click", next);
  document.querySelector("#previous_video").addEventListener("click", previous);
  swap_video(0);
  /* Partenaires
   */
  var partenairesButtons = document.querySelectorAll(".partenaire_button");
  var partenaireContainer = document.querySelectorAll(".partenaire_container");
  //Billeterie

  for (var partenaireButton of partenairesButtons) {
    partenaireButton.addEventListener("click", function (e) {
      var foundElement = document.getElementById(
        e.target.dataset.targetpartenaire
      );
      if (foundElement.classList.contains("hidden")) {
        foundElement.classList.remove("hidden");
        e.target.classList.add("active");
      } else {
        foundElement.classList.add("hidden");
        e.target.classList.remove("active");
      }
    });
  }
  var billet_container = document.querySelector(".billeterie_wrapper");
  var billets = billet_container.getElementsByClassName("billet");
  for (var billet of billets) {
    billet.addEventListener("click", function (e) {
      e.currentTarget.classList.add("active");
      document.querySelector(".billeterie_wrapper").classList.add("active");
    });
  }
  function Remove_active_billet() {
    var billet_container = document.querySelector(".billeterie_wrapper");
    var active_billet = document.querySelector(".billet.active");
    active_billet.classList.remove("active");
    billet_container.classList.remove("active");
  }
  var exit_button = billet_container.querySelector("#billeterie .exit_button");
  exit_button.addEventListener("click", Remove_active_billet);

  //Gestion des animations :
});
