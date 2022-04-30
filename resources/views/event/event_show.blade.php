<html>
<head>
<style>
h1 {
    /* text-align: center; */
    position: absolute; 
    left: 500px;
    top: 100px;
}
p {text-align: center;}
div {text-align: center;}
</style>

<title>Event</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js" integrity="sha512-7HDUKBIUa1tykYCUINFix0eJNScy99DDTEVb+Hy6V82NtrnOaMYK0nf2HA2NFRXLv9CL5BnlXdu9rFvK9cms6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.dark.min.css" integrity="sha512-Gy+yvtBHDW93aK2n4O51QRF6yyrh2yUde6P3wJ6IcEgJE81bxkMUlihbG69o4f6m7Adpw0vFL2Al3CHccJSEjQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.dark.rtl.min.css" integrity="sha512-FmJQcLBxaHazljG1p3uyZXXSmVGfyr9Kg8elSywzx3DgkjUFvtops5tULnDtTplVZCej88OiaUZDG2ud5UCarA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" integrity="sha512-w3vRwDiJb/TmM/ka3wh+jiZRUyFhm+iQA2G8FG90Soe6AbTnheHqrHUx4p/8vodlkIaxxx/EVjdgfLqvGoUdMw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.rtl.min.css" integrity="sha512-fVjAxuEkOUvrG6XHxRW9x2CcTN0Gyzasvmxe+WCS53g+nHgwzWOOwLZG3iy0+P8+oAJQxCfNUh2FtMvjmqUQwg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css"
    rel="stylesheet"
    />
</head>

<body>
  <div center class="container">
    <table class="table bg-white">
      <tr>
        <td>
          <div class="d-flex align-items-center">
            <div class="ms-3">
              <p class="fw-bold mb-1">Name</p>
            </div>
          </div>
        </td>
        <td>
          <p class="fw-normal mb-1">irfan</p>
        </td>
      </tr>

      <tr>
        <td>
          <div class="d-flex align-items-center">
            <div class="ms-3">
              <p class="fw-bold mb-1">Slug</p>
            </div>
          </div>
        </td>
        <td>
          <p class="fw-normal mb-1">What is lorem ipsum</p>
        </td>
      </tr>
    </table>
</div>

  </body>
