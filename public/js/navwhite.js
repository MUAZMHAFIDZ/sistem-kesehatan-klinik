const activeMenu = (menu) => {
    var nav1 = document.querySelectorAll('.navbar li a')
    nav1.forEach(nav => {
        nav.classList.remove('active')
    })

    const klikMenu = document.getElementById(menu)
    klikMenu.classList.add('active')
}