document.addEventListener("DOMContentLoaded", function() {
    var menuLinks = document.querySelectorAll(".sidebar-link");
    var contents = document.querySelectorAll(".content");

    menuLinks.forEach(function(link) {
        link.addEventListener("click", function(e) {
            e.preventDefault();
            var target = this.getAttribute("data-target");

            contents.forEach(function(content) {
                content.style.display = "none";
            });

            var selectedContent = document.getElementById(target);
            if (selectedContent) {
                selectedContent.style.display = "block";
            }
        });
    });
});
