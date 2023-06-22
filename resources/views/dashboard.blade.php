<x-app-layout>
    {{-- <x-slot name="header">
        <p class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </p>
    </x-slot> --}}
{{-- 
    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-secondary dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}

    <div class="bg-primary pt-lg-5 text-white text-center rounded-2" >
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5 img-fluid " src="assets/img/banner1.png" style="width:1200px" alt="..." />
        </div>
    </div>
    <div class="container mx-auto">

    <h2 class="font-semibold mb-2">Trending</h2>
        <p class="font-italic text-muted mb-4">Explore top seller games this week!</p>
      
        <div class="row pb-2 mb-4">
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card rounded shadow-sm border-0">
              <div class="card-body p-4 bg-info"><img src="assets/img/product1.png" alt="" class="img-fluid d-block mx-auto mb-3">
                <h5> <a href="#" class="text-dark font-semibold">A Space for the Unbound</a></h5>
                <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
                </ul>
              </div>
            </div>
          </div>
      
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card rounded shadow-sm border-0">
              <div class="card-body p-4"><img src="assets/img/product2.png" alt="" class="img-fluid d-block mx-auto mb-3">
                <h5> <a href="#" class="text-dark">Coffee Talk</a></h5>
                <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
                </ul>
              </div>
            </div>
          </div>
      
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card rounded shadow-sm border-0">
              <div class="card-body p-4"><img src="assets/img/product3.png" alt="" class="img-fluid d-block mx-auto mb-3">
                <h5> <a href="#" class="text-dark">Coral Island</a></h5>
                <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                </ul>
              </div>
            </div>
          </div>
      
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card rounded shadow-sm border-0">
              <div class="card-body p-4"><img src="assets/img/product4.png" alt="" class="img-fluid d-block mx-auto mb-3">
                <h5> <a href="#" class="text-dark">Troublemaker</a></h5>
                <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      
      
       
        <h2 class="font-weight-bold mb-2">Sale</h2>
        <p class="font-italic text-muted mb-4">Buy Discounted Games!</p>
      
        <div class="row pb-5 mb-4">
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card rounded shadow-sm border-0">
              <div class="card-body p-4"><img src="assets/img/product1.png" alt="" class="img-fluid d-block mx-auto mb-3">
                <h5> <a href="#" class="text-dark">A Space for the Unbound</a></h5>
                <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
                </ul>
              </div>
            </div>
          </div>
      
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card rounded shadow-sm border-0">
              <div class="card-body p-4"><img src="assets/img/product2.png" alt="" class="img-fluid d-block mx-auto mb-3">
                <h5> <a href="#" class="text-dark">Coffee Talk</a></h5>
                <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
                </ul>
              </div>
            </div>
          </div>
      
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card rounded shadow-sm border-0">
              <div class="card-body p-4"><img src="assets/img/product3.png" alt="" class="img-fluid d-block mx-auto mb-3">
                <h5> <a href="#" class="text-dark">Coral Island</a></h5>
                <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                </ul>
              </div>
            </div>
          </div>
      
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card rounded shadow-sm border-0">
              <div class="card-body p-4"><img src="assets/img/product4.png" alt="" class="img-fluid d-block mx-auto mb-3">
                <h5> <a href="#" class="text-dark">Troublemaker</a></h5>
                <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

</x-app-layout>
