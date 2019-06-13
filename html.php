 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>CRUD Project</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <!-- DataTables -->
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
     <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 </head>

 <body>
     <?php include("tableData.php") ?>
     <?php include("form.1.php") ?>
     <button class="btn btn-success" id="modal-btn" data-toggle="modal" data-target="#my-modal">Add Game To Database</button>
     <script>
         var myTable = $("body > table");
         myTable.addClass("table table-striped");

         var myTableHead = $("body > table > thead");
         myTableHead.addClass("thead-dark");
     </script>
     <script>
         //  $('#my-modal').modal(options)
         // Modal
         // Get DOM Elements
         const modal = document.querySelector('#my-modal');
         const modalBtn = document.querySelector('#modal-btn');
         const closeBtn = document.querySelector('.close');
         // Events
         modalBtn.addEventListener('click', openModal);
         // Open
         function openModal() {
             modal.style.display = 'block';
         }
         // Close
         function closeModal() {
             modal.style.display = 'none';
         }
         // Close If Outside Click
         function outsideClick(e) {
             if (e.target == modal) {
                 modal.style.display = 'none';
             }
         }

         $(document).ready(function() {
             $('#myTable').DataTable();
         });
     </script>
 </body>

 </html>