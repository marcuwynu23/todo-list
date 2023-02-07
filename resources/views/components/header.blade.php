  <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm border-0">
          <a class="navbar-brand m-2" href="#">
              <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flogopond.com%2Flogos%2Ff05276685dd792ea181ae2b2231dd0ef.png&f=1&nofb=1&ipt=6e938234fc75fb32cd3439654b9779a950c8ada3572f2f139ef553fdb3c498ac&ipo=images"
                  alt="" class="rounded-circle" style="width: 50px; height: 50px;">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item active">
                      <a class="nav-link" href="{{ route('todo.index') }}">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('todo.create') }}">Create</a>
                  </li>
              </ul>
          </div>
      </nav>
  </header>
