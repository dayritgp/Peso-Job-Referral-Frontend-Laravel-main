 $(document).ready(function () {
                              var minDate = new DateTime('#min', {
                                  format:'MMMM Do YYYY'
                              });
                              var maxDate = new DateTime('#max', {
                                  format:'MMMM Do YYYY'
                              });

                              var table = $('#auditlogs').DataTable({
                                  dom:'Bfrtip',
                                  buttons: [{
                                          extend:'copyHtml5',
                                          exportOptions: {
                                              columns: [0, 1, 2, 3, 4]
                                          }
                                      },
                                      {
                                          extend:'excelHtml5',
                                          exportOptions: {
                                              columns:':visible'
                                          }
                                      },
                                      {
                                          extend:'pdfHtml5',
                                          exportOptions: {
                                              columns: [0, 1, 2, 3, 4]
                                          }
                                      },
                                     'colvis',
                                      {
                                          extend:'pageLength',
                                      }
                                  ]
                              });

                              $.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
                                  var min = minDate.val();
                                  var max = maxDate.val();
                                  var date = new Date(data[4]);

                                  if (min && max) {
                                      return (min <= date && date <= max);
                                  } else {
                                      return true; // Display all rows when date range is not specified
                                  }
                              });

                              $('#min, #max').on('change', function () {
                                  table.draw();
                              });
                          });

