(() => {
    // navbar mobile responsive functionalities.
    const menuButton = document.getElementById("menu-button");
    const mainNav = document.getElementById("main-nav");
  
    menuButton.addEventListener("click", () => {
      if (!mainNav.classList.contains("active")) {
        mainNav.classList.add("active");
        mainNav.style.height = `100vh`;
      } else {
        mainNav.classList.remove("active");
        mainNav.style.height = `5rem`;
      }
    });
  
    // search icon functionalities
    const searchIcon1 = document.getElementById("search-btn-1");
    const searchIcon2 = document.getElementById("search-btn-2");
    const searchCancel = document.getElementById("search-btn-cancel");
    const searchBar = document.getElementById("search-section");
  
    const searchIconEvent = () => {
      if (!searchBar.classList.contains("active")) {
        searchBar.style.height = "100vh";
        searchBar.classList.add("active");
      } else {
        searchBar.style.height = "0";
        searchBar.classList.remove("active");
      }
    };
  
    searchIcon1.addEventListener("click", searchIconEvent);
    searchIcon2.addEventListener("click", searchIconEvent);
    searchCancel.addEventListener("click", () => {
      searchBar.style.height = "0";
      searchBar.classList.remove("active");
    });
  })();
  