<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="css/styles.css" rel="stylesheet" type="text/css">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Gradeo | Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-light" href="#">
    <i class="fas fa-bars"></i>
  </a>

  @include('sidebar')

  {{-- main body content should start here  --}}
  <main class="page-content">
    <div class="container-fluid">

      {{-- lets create a row with the preview and save --}}
      <div class="row">
        <div class="col-md-6 mb-3">
                <h5><b>CREATE NEW</b></h5>
          
        </div>
        <div class="col-md-6 mb-3">
          {{-- inline code for the two buttons --}}

          <div class="row">
            <div class="col-md-6 mb-3">
              <button type="button" class="btn btn-outline-info">Preview</button>
            </div>
            <div class="col-md-6 mb-3">
              <button type="button" class="btn btn-outline-info">Save</button>
            </div>
        </div>

        </div>
    </div>
      <hr>

      <div class="row">
        <div class="col-md-3 mb-3">
          <button type="button" class="btn btn-info" style="border-radius: 20px; width:150px;">Create</button> 
        </div>
        <div class="col-md-3 mb-3">
          <button type="button" class="btn btn-outline-info" style="border-radius: 20px; width:150px;">Configure</button>  
        </div>
        <div class="col-md-3 mb-3">
          <button type="button" class="btn btn-outline-info" style="border-radius: 20px; width:150px;">Publish</button> 
        </div>
        <div class="col-md-3 mb-3">
          <button type="button" class="btn btn-outline-info" style="border-radius: 20px; width:150px;">Analyze</button> 
        </div>
    </div>

    {{-- content after the buttons --}}
    <div class="card" style="width: 100%;">
      <div class="card-body">
        <h5 class="card-title">Page 1</h5>
        <br>

        {{-- two centered cards --}}
        <center>

          <div class="row">
            <div class="col-md-6 mb-3">

              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Create New</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">Add new questions</h6>
                </div>
              </div>

            </div>
            <div class="col-md-6 mb-3">

              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="text-gray">Create New</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">Enter test mode</h6>
                </div>
              </div>

            </div>
        </div>


        </center>

      </div>
    </div>

    
    </div>
  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
        <script src="js/styles.js"></script>
</body>

</html>