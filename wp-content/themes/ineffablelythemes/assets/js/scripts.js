function showSearchModal() {
  const searchModal = document.getElementById("search-modal");
  const searchBtn = document.getElementById("search-btn").children[0];

  if (hasActiveClass(searchModal)) {
    searchModal.classList.remove("active");
    searchBtn.classList.remove("fa-times");
    searchBtn.classList.add("fa-search");
  } else {
    searchModal.classList.add("active");
    searchBtn.classList.remove("fa-search");
    searchBtn.classList.add("fa-times");
  }
}

function hasActiveClass(e) {
  for (let index = 0; index < e.classList.length; index++) {
    if (e.classList[index] == "active") {
      return true;
    }
  }
  return false;
}
