<section class="col">
            <form action="route('enseignant.index)" method="post">
                 @csrf
                 <div class="bg-warning" style="position:relative;left:25px;">
                 <div class="container">
                   <div class="row d-flex justify-content-center">
                     <div class="col-md-10 mt-5 pt-5">
                       <div class="row z-depth-3">
                       <div class="col-sm-4 bg-info rounded-left">
                       <div class="card-block text-center text-white">
                         <i class="fas fa-user-tie fa-7x mt-5 "></i>
                         <h2 class="font-weight-blod mt-4">Details</h2>
                         <p>Enseignant</p>
                         <i class="far fa-edit fa-2x mb-4"></i>
                       </div>
                       </div>
                       <div class="col-sm-8 bg-white rounded-right">
                         <h3 class="mt-3 text-center text-danger"><i class="fa fa-database"></i>Informations</h3>
                         <hr class="badge-primary mt-0 w-25">
                         <div class="row">
                        
                          <h5><i class="text-success">CNE: </i>{{ $enseignant->code }}</h5>
                          <h5><i class="text-success">First_Name:</i> {{ $enseignant->grade }}</h5>
                          <h5><i class="text-success">Second_Name:</i> {{ $enseignant->mail }}</h5>
                          <h5><i class="text-success">Age:</i> {{ $enseignant->nom }}</h5>
                          <h5><i class="text-success">Age:</i> {{ $enseignant->prenom }}</h5>
                       
                      
                         </div>
                         <h4 class="mt-3 text-center text-danger "><i class="fa fa-briefcase"></i>Speciality</h4>
                         <hr class="bg-info mt-0 w-25">
                         <div class="row">
                           <h3 class="text-center">  {{ $enseignant->N_bureau }}</h3>
                         </div>
                         <div class="row">
                           <h3 class="text-center">  {{ $enseignant->tel }}</h3>
                         </div>
                       </div>
                       </div>
                     </div>
                   </div>
                 </div>
                </div>

            </form>