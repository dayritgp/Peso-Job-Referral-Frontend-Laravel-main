// Function to show SweetAlert confirmation for approval
             function confirmApproveEmployer() {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Do you want to approve this application?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, approve it!',
                    cancelButtonText: 'No, cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If user clicks "Yes", perform the desired action
                        Swal.fire(
                            'Approved!',
                            'Application has been approved.',
                            'success'
                        );
                        // You can add your action here, e.g., redirecting to another page or performing an AJAX request
                    }
                });
            }
                 // Function to show SweetAlert confirmation for rejecting
              function confirmRejectEmployer() {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Do you want to reject this application?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, reject it!',
                    cancelButtonText: 'No, cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If user clicks "Yes", perform the desired action
                        Swal.fire(
                            'Rejected!',
                            'Application has been rejected.',
                            'error'
                        );
                        // You can add your action here, e.g., redirecting to another page or performing an AJAX request
                    }
                });
            }