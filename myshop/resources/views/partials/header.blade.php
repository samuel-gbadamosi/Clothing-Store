<header>
    <div class="container-fluid navbar-light bg-primary">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mr-auto">
                  
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('dresses.index') }}">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dresses.create') }}"> Add New Clothing </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('dresses.store') }}"> Store </a>
                  </li>
                 
              </ul>
              
            </div>
          </nav>

    </div>
    

</header>