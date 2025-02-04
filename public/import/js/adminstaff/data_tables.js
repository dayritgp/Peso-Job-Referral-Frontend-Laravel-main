$(document).ready(function() {
    $('#dashboardjobs, #dashboardemployer').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copyHtml5',
            exportOptions: {
              columns: [0, 1, 2, 3, 4]
            }
          },
          {
            extend: 'excelHtml5',
            exportOptions: {
              columns: ':visible'
            }
          },
          {
            extend: 'pdfHtml5',
            exportOptions: {
              columns: [0, 1, 2, 3, 4]
            }
          },
          'colvis',
          {
            extend: 'pageLength',
          },



        ]
        });
        });