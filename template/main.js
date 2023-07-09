const handleDropdownClicked = (event) => {
    event.stopPropagation();
    const dropdownMenu = document.getElementById("dropdown-menu");
    toggleDropdownMenu(!dropdownMenu.classList.contains("open"));
  };
  
  const toggleDropdownMenu = (isOpen) => {
    const dropdownMenu = document.getElementById("dropdown-menu");
    const dropdownIcon = document.getElementById("dropdown-icon");
  
    if (isOpen) {
      dropdownMenu.classList.add("open");
    } else {
      dropdownMenu.classList.remove("open");
    }
  
    dropdownIcon.innerText = dropdownMenu.classList.contains("open")
      ? "close"
      : "expand_more";
  };
  
  document.body.addEventListener("click", () => toggleDropdownMenu());
  