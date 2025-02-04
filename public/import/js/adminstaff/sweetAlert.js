

            // Function to show SweetAlert confirmation for approval
            function confirmApprove() {
                Swal.fire({
                    title:'Are you sure?',
                    text: "Do you want to approve this application?",
                    icon:'question',
                    showCancelButton: true,
                    confirmButtonColor:'#3085d6',
                    cancelButtonColor:'#d33',
                    confirmButtonText:'Yes, approve it!',
                    cancelButtonText:'No, cancel'
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
              function confirmReject() {
                Swal.fire({
                    title:'Are you sure?',
                    text: "Do you want to reject this application?",
                    icon:'warning',
                    showCancelButton: true,
                    confirmButtonColor:'#d33',
                    cancelButtonColor:'#3085d6',
                    confirmButtonText:'Yes, reject it!',
                    cancelButtonText:'No, cancel'
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

             // Function to show SweetAlert confirmation for approval
             function confirmApproveEmployer() {
                Swal.fire({
                    title:'Are you sure?',
                    text: "Do you want to approve this application?",
                    icon:'question',
                    showCancelButton: true,
                    confirmButtonColor:'#3085d6',
                    cancelButtonColor:'#d33',
                    confirmButtonText:'Yes, approve it!',
                    cancelButtonText:'No, cancel'
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
                    title:'Are you sure?',
                    text: "Do you want to reject this application?",
                    icon:'warning',
                    showCancelButton: true,
                    confirmButtonColor:'#d33',
                    cancelButtonColor:'#3085d6',
                    confirmButtonText:'Yes, reject it!',
                    cancelButtonText:'No, cancel'
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
               // Function to show SweetAlert confirmation for approval
             function confirmApproveAdmin() {
                Swal.fire({
                    title:'Are you sure?',
                    text: "Do you want to approve this new account?",
                    icon:'question',
                    showCancelButton: true,
                    confirmButtonColor:'#3085d6',
                    cancelButtonColor:'#d33',
                    confirmButtonText:'Yes, approve it!',
                    cancelButtonText:'No, cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If user clicks "Yes", perform the desired action
                        Swal.fire(
                           'Approved!',
                           'User has been approved.',
                           'success'
                        );
                        // You can add your action here, e.g., redirecting to another page or performing an AJAX request
                    }
                });
            }


                 // Function to show SweetAlert confirmation for rejecting
              function confirmRejectAdmin() {
                Swal.fire({
                    title:'Are you sure?',
                    text: "Do you want to reject this application?",
                    icon:'warning',
                    showCancelButton: true,
                    confirmButtonColor:'#d33',
                    cancelButtonColor:'#3085d6',
                    confirmButtonText:'Yes, reject it!',
                    cancelButtonText:'No, cancel'
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
                  // Function to show SweetAlert confirmation for rejecting
                  function confirmCancel() {
                Swal.fire({
                    title:'Are you sure?',
                    text: "Do you want to deactivate this account?",
                    icon:'warning',
                    showCancelButton: true,
                    confirmButtonColor:'#d33',
                    cancelButtonColor:'#3085d6',
                    confirmButtonText:'Deactivate!',
                    cancelButtonText:'No, cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If user clicks "Yes", perform the desired action
                        Swal.fire(
                           'Deactivated!',
                           'Account has been Deactivated',
                           'success'
                        );
                        // You can add your action here, e.g., redirecting to another page or performing an AJAX request
                    }
                });
            }
       
                            function confirmEnableAccount() {
                              Swal.fire({
                                      title: "Enable Account",
                                      text: "Are you sure you want to enable this account?",
                                      icon: "warning",
                                      showCancelButton: true,
                                      confirmButtonColor:'#d33',
                                      cancelButtonColor:'#3085d6',
                                      confirmButtonText:'Yes, disable this account!',
                                      cancelButtonText:'No, keep it'
                                  }).then((result) => {
                                      if (result.isConfirmed) {
                                          // If user clicks "Yes", perform the desired action
                                          Swal.fire(
                                             'Account Successfully Enabled!',
                                             'Your action has been confirmed.',
                                             'success'
                                          );
                                          // You can add your action here, e.g., redirecting to another page or performing an AJAX request
                                      } else{
                                        Swal.fire(
                                         'Account enabling cancelled.',
                                         '',
                                         'error'
                                        )
                                      }
                                  }); 
                            }
        