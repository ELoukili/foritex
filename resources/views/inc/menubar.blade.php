<nav class="navbar navbar-inverse ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Foritex</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
            <li class="{{Request::is('addimage') ? 'active' : ''}}"><a href="/addimage">Ajouter image</a></li>
            <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="#">Contact</a></li>
            <li class="{{Request::is('messages') ? 'active' : ''}}"><a href="#">Messages</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Drop down exemple
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="#">Page 1</a></li>
              <li><a href="#">Page 2</a></li>
              <li><a href="#">Page 3</a></li>
              </ul>
            </li>
            
  
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
