<!-- Include SweetAlert library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    let lastActivityTime = '{{ session('lastActivityTime') }}';

    function updateLastActivityTime() {
        lastActivityTime = new Date();
        sessionStorage.setItem('lastActivityTime', lastActivityTime);
    }

    function resetLastActivityTime() {
        lastActivityTime = null;
        sessionStorage.removeItem('lastActivityTime');
    }

    // Update the last activity time on user activity
    document.addEventListener('mousemove', updateLastActivityTime);
    document.addEventListener('keydown', updateLastActivityTime);

    // Reset the last activity time on page load
    window.addEventListener('load', resetLastActivityTime);



    // Check the user's activity every 10 seconds
    setInterval(function() {
        let currentTime = new Date();
        let inactiveDuration = (currentTime - new Date(lastActivityTime)) / 1000;

        if (inactiveDuration > 3600) {
            // Display a Swal dialog
            Swal.fire({
                title: 'Session Expired!',
                text: 'Session expires. You will be logged out soon.',
                icon: 'warning',
                confirmButtonText: 'OK'
            }).then(function() {
                // Redirect to the homepage
                axios.post('{{ route('timeout.logout') }}')
                    .then(response => {
                        window.location.href = "/";
                    })
                    .catch(error => {
                        Swal.fire({
                            title: 'Error Detected',
                            text: error,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    });

            });
        }
    }, 10000);
</script>
