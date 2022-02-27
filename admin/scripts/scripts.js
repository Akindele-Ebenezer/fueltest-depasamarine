const alertRecordChanges = document.querySelector('.alert');

setTimeout(() => {
    alertRecordChanges.style.display = 'none';
}, 6000);

const adminRecordsNav = document.querySelector('.records-nav');

adminRecordsNav.firstElementChild.textContent = 'VIEW ALL USERS';
adminRecordsNav.firstElementChild.nextElementSibling.textContent = 'CREATE NEW USER';

adminRecordsNav.firstElementChild.setAttribute('href', 'users.php');
adminRecordsNav.firstElementChild.nextElementSibling.setAttribute('href', 'admin.php');
