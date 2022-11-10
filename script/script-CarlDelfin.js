const passToggler = document.querySelectorAll(".password-toggler");

passToggler.forEach(item => {
    item.addEventListener("click", function() {
        const input = document.getElementById(item.getAttribute("data-password"));
        input.focus();
        item.classList.toggle("fa-eye");
        item.classList.toggle("fa-eye-slash");
        if (item.classList.contains("fa-eye-slash")) {
            input.setAttribute("type", "text");
        } else {
            input.setAttribute("type", "password");
        }
    });
});

// sidenav

const sideToggler = document.querySelectorAll('.sidenav-toggler');
sideToggler.forEach(item => {
    item.addEventListener('click', function() {
        const sidebar = document.getElementById(item.getAttribute('data-toggle'));
        sidebar.classList.toggle('show');
    });
});

const sidebarLayer = document.getElementById('sidebar');
sidebarLayer.addEventListener('click', function(e) {
    if (e.target.matches('.sidenav-layer')) {
        if (sidebarLayer.classList.contains('show')) {
            sidebarLayer.classList.remove('show');
        }
    }
});

const minWidth1024px = window.matchMedia('(min-width: 1024px)');
if (minWidth1024px.matches) {
    sidebarLayer.classList.add('show');
} else {
    sidebarLayer.classList.remove('show');
}
minWidth1024px.addListener(function() {
    if (minWidth1024px.matches) {
        sidebarLayer.classList.add('show');
    } else {
        sidebarLayer.classList.remove('show');
    }
});

// dropdowns function

const dropdown = document.querySelectorAll('.dropdown');

dropdown.forEach(item => {
    item.querySelector('.dropdown-toggler').addEventListener('click', function() {
        dropdown.forEach(d => {
            if (item !== d)
                d.classList.remove('show');
        });
        item.classList.toggle('show');
    });
});

window.addEventListener('click', function(e) {
    if (!e.target.matches('.dropdown, .dropdown *')) {
        dropdown.forEach(item => {
            item.classList.remove('show');
        });
    }
});

// collapsible

const collapsible = document.querySelectorAll('.collapsible');

collapsible.forEach(item => {
    item.querySelector('.collapsible-header').addEventListener('click', function() {
        item.classList.toggle('show');
    });
});

// navlink

const sidenav = document.querySelector('.sidenav-nav');
sidenav.querySelectorAll('a.nav-link').forEach(navlink => {
    navlink.addEventListener('click', function() {
        sidenav.querySelectorAll('.active').forEach(removeActive => {
            removeActive.classList.remove('active');
        });
        navlink.classList.add('active');
        sidenav.querySelectorAll('.collapsible').forEach(item => {
            const active = item.querySelector('.active');
            if (active !== null) {
                item.querySelector('.nav-link').classList.add('active');
            }
        });
    });
});


