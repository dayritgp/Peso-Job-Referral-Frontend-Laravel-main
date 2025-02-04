                    // JavaScript to handle page navigation
                    document.querySelectorAll('.sidebar ul li a').forEach(link => {
                        link.addEventListener('click', function(event) {
                          event.preventDefault();
                          const targetId = this.getAttribute('href').substring(1);
                          document.querySelectorAll('.content > div').forEach(page => {
                            page.style.display = 'none';
                          });
                          document.getElementById(targetId).style.display = 'block';
                          // Store the active section in local storage
                          localStorage.setItem("activeSection", targetId);
                        });
                      });

                      Swal.zIndex = 10000;
