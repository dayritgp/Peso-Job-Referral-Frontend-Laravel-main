// Mock database
const jobSeekers = [
    { username: 'user1', password: 'password1', name: 'John Doe', email: 'john@example.com' },
    { username: 'user2', password: 'password2', name: 'Jane Smith', email: 'jane@example.com' },
];

const employers = [
    { username: 'employer1', password: 'password1', name: 'Acme Corp', email: 'acme@example.com' },
    { username: 'employer2', password: 'password2', name: 'Tech Solutions', email: 'tech@example.com' },
];

const form = document.getElementById('form');
const usernameInput = document.getElementById('username');
const passwordInput = document.getElementById('password');
const userTypeInputs = document.getElementsByName('userType');

form.addEventListener('submit', function (e) {
    e.preventDefault();
    const username = usernameInput.value.trim();
    const password = passwordInput.value.trim();
    let userType;
    for (const input of userTypeInputs) {
        if (input.checked) {
            userType = input.value;
            break;
        }
    }
    let user;
    if (userType === 'jobseeker') {
        user = jobSeekers.find(user => user.username === username && user.password === password);
        if (user) {
            window.location.href = 'jobseeker.html';
        } else {
            alert('Invalid username or password.');
        }
    } else if (userType === 'employer') {
        user = employers.find(user => user.username === username && user.password === password);
        if (user) {
            window.location.href = 'employer_homepage.html';
        } else {
            alert('Invalid username or password.');
        }
    }
});