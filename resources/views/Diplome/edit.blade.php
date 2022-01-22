<html>
<head>
  <meta charset="utf-8" >
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css" rel="stylesheet">
 
 
</head>

<body>
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-15 pt-5">
              <div class="card bg-secondary bg-gradient">
                <div class="card-header card-header-primary bg-warning bg-gradient">
                  <h4 class="card-title">Update</h4>
                  <p class="card-category">Diplome</p>
                </div>
                <div class="card-body">
                  <form method="post" action="{{ route('diplome.update',$diplomes->id) }}">
                  @csrf
                  @method('PUT')
                 
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Coef Diplome</label>
                          <input name="coef_diplome" type="text" value="{{ $diplomes->coef_diplome }}" class="form-control" required >
                        </div>
                      </div>
                    
              
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nom Diplome</label>
                          <input name="nom" type="text" value="{{ $diplomes->nom }}" class="form-control"  required maxlength="50">
                        </div>
                      </div>
                    
                    <div class="container my-5 col-sm-2">
                    <button type="submit" class="btn btn-primary active">Modifier</button>                    </div>
                    <div class="clearfix"></div>
                  </form>

                </div>
              </div>
            </div>

 
</body>
</html>


