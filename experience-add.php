<?php
session_start();
require_once('koneksi/database.php');
require_once('koneksi/auth.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- bOOStap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <!-- FOnt Google -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <!-- VENDOR -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"> -->
  <link href="assets/boostrap/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/503704af2c.js" crossorigin="anonymous"></script>
  <!-- Main css -->
  <link rel="stylesheet" href="assets/styles/main.css">

  </head>

<body>

<?php include('layout/navbar.php'); ?>


<div class="admin-container py-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Tambah <span class="text-primary"> Experience</span></h3>
                    <a href="manajemen-pengalaman.php" class="btn btn-outline-primary">kembali</a>
                    
                    <form
                        autocomplete="off"
                        action="experience-save.php"
                        method="post"
                        class="needs-validation mt-4"
                        novalidate
                      >
                        <div class="row mb-4">
                          <div class="col-lg-6">
                            <input
                              class="form-control"
                              type="text"
                              id="title"
                              name="title"
                              placeholder="Title Job"
                              required
                            />
                            <div class="invalid-feedback">Please input your title job</div>
                          </div>
                        </div>
                        <div class="row mb-4">
                          <div class="col-lg-6">
                            <input
                              class="form-control"
                              type="text"
                              id="tools"
                              name="tools"
                              placeholder="Tools"
                              required
                            />
                            <div class="invalid-feedback">Please input your tools</div>
                          </div>
                        </div>
                        <div class="row mb-4">
                          <div class="col-lg-6">
                            <input
                              class="form-control start-datepicker"
                              type="text"
                              id="date_start"
                              name="date_start"
                              placeholder="Date Start"
                              required
                            />
                            <div class="invalid-feedback">Please input Date Start</div>
                          </div>
                          <div class="col-lg-6">
                            <input
                              class="form-control end-datepicker"
                              type="text"
                              id="date_end"
                              name="date_end"
                              placeholder="Date End"
                              required
                            />
                            <div class="invalid-feedback">Please input Date End</div>
                          </div>
                        </div>
                        <div class="row mb-4">
                          <div class="col">
                            <textarea class="form-control" name="description" id="description" rows="5" placeholder="Description" required></textarea>
                            <div class="invalid-feedback">Please input your description</div>
                          </div>
                        </div>
                        <button class="btn btn-primary" type="submit">
                          Tambah
                        </button>
                      </form>
                </div>
            </div>
        </div>  
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript">
        const startPicker = datepicker('.start-datepicker', {
            formatter: (input, date, instance) => {
                const value = dayjs(date)
                input.value = value.format('YYYY-MM-DD') // => '1/1/2099'
            }
        })
        const endPicker = datepicker('.end-datepicker',  {
            formatter: (input, date, instance) => {
                const value = dayjs(date)
                input.value = value.format('YYYY-MM-DD') // => '1/1/2099'
            }
        })
        ;(() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach((form) => {
          form.addEventListener(
            'submit',
            (event) => {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }

              form.classList.add('was-validated')
            },
            false
          )
        })
      })()
    </script>
</body>

</html>
<?php 
    mysqli_close($connectDb);