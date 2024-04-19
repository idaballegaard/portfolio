function filterProjects(categoryId) {
    var elements = document.getElementsByClassName("project-container");
    for(var i = 0; i < elements.length; i++) {
        elements[i].classList.remove("d-none");
        if(categoryId > 0 && !elements[i].classList.contains("project-category-" + categoryId)) {
            elements[i].classList.add("d-none");
        }
    }
}

