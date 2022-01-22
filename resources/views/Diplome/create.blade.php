<html>
<head>
<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/Logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta http-equiv="refresh" content="#">
  <title>
    Gestion Cours
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project 
  <link href="../assets/demo/demo.css" rel="stylesheet" />-->
</head>
<body>
<div class="main-panel">
 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Create New</h4>
                  <p class="card-category">Diplome</p>
                </div>
                <div class="card-body">
                  <form method="post" action="{{ route('diplome.store') }}">
                  @csrf
                    <div class="row">
                      
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Coef Diplome</label>
                          <input name="coef_diplome" type="text" class="form-control" required maxlength="11">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nom Diplome</label>
                          <input name="nom" type="text" class="form-control"  required maxlength="25">
                        </div>
                      </div>
                      
                    
                    <button type="submit" class="btn btn-primary col-md-12">Submit</button>
                    <div class="clearfix"></div>
                  </form>

                </div>
              </div>
            </div>
            </body>
            </html>


