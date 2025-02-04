<form id="logoutForm" action="{{ route('init.logout', ['id' => Session::get('id')]) }}" method="POST">
    @csrf
    @method('POST')
    <input type="hidden" name="confirmed" id="confirmed" value="0">
    <a href="#" class="dropdown__link" onclick="confirmLogout(event)">
        <i class="ri-logout-box-r-line"></i>Logout
    </a>
</form>

<!-- Include SweetAlert library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    // Script for SweetAlert confirmation dialog
    function confirmLogout() {
        Swal.fire({
            title: "Are you sure?",
            text: "Logging out, ",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Logout",
        }).then((result) => {
            if (result.isConfirmed) {
                // Set the value of the hidden input field to indicate confirmation
                document.getElementById("confirmed").value = "1";
                // Submit the form
                document.getElementById("logoutForm").submit();
            }
        });
    }
</script>
