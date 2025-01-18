// toggle
const sidebar = document.querySelector('.sidebar');
const master = document.querySelector('.master');
const toggleButton = document.getElementById('toggleSidebar');

// تحقق من حالة الشريط الجانبي عند تحميل الصفحة
if (localStorage.getItem('sidebarState') === 'opened') {
    sidebar.classList.add('show');
    master.classList.add('show');
} else {
    sidebar.classList.remove('show');
    master.classList.remove('show');
}

toggleButton.addEventListener('click', function(event) {
    event.preventDefault();
    sidebar.classList.toggle('show');
    master.classList.toggle('show');

    // حفظ حالة الشريط الجانبي في localStorage
    if (sidebar.classList.contains('show')) {
        localStorage.setItem('sidebarState', 'opened');
    } else {
        localStorage.setItem('sidebarState', 'closed');
    }
});