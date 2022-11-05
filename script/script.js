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

for (let i = 0; i < dropdown.length; i++) {
    const d = dropdown[i];
    d.addEventListener('click', function(e) {
        for (let j = 0; j < dropdown.length; j++) {
            const e = dropdown[j];
            if (i === j) continue;
            e.classList.remove('show');
        }
        if (e.target.matches('.dropdown-toggler, .dropdown-toggler > *')) {
            d.classList.toggle('show');
        }
    });
}

window.addEventListener('click', function(e) {
    if (!e.target.matches('.dropdown-toggler, .dropdown-toggler > *, input, .dropdown-content')) {
        console.log(e.target);
        dropdown.forEach(item => {
            item.classList.remove('show');
        });
    }
});
