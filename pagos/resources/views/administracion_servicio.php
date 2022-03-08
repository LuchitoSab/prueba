
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <title>Movie-List</title>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Favorite</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container mt-5">
    <!-- Inline Form -->
    <div class="row">
      <form class="form-inline" id="search-form">
        <label class="sr-only" for="inlineFormInputName2">Search Keyword</label>
        <input type="text" class="form-control mb-2 mr-sm-2" id="search-input" placeholder="Keyword...">
        <button type="submit" class="btn btn-primary mb-2" id="search-submit">Submit</button>
      </form>
      <div class="col d-flex justify-content-end" id="fontawesome-icon">
        <i class="fa fa-bars fa-2x fa-fw" id="icon-list" aria-hidden="true" data-mode="list"></i>
        <i class="fa fa-th fa-2x fa-fw" id="icon-grid" aria-hidden="true" data-mode="grid"></i>
      </div>
    </div>
    
    <!-- data-panel -->
    <div class="container" id="data-panel">
    <div class="row">
    	<div class="col-sm-3">
    		<div class="mb-2">
    			<div class="card">
    				<img src="escenario.png" class="card-img-top" alt="movie-poster">
    				<div class="card-body">
    					<h5 class="card-title">La purga</h5>
    				</div>
    				<div class="card-footer">
    					<button class="btn btn-primary btn-show-movie" data-toggle="#modal" data-target="#movie-modal" data-id="1">More</button>
    					<button class="btn btn-info btn-add-to-favorite" data-id="1">+</button>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="col-4 list-button"></div>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="movie-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="movie-modal-title">Movie title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
  

          <!-- ACA EMPIEZA OTRA COSA -->

          <div class="modal-body">
            <div class="row">
              <div class="col-sm-8" id="movie-modal-image"><img src="https://github.com/ALPHACamp/movie-list-api/blob/master/public/posters/c9XxwwhPHdaImA2f1WEfEsbhaFB.jpg?raw=true" alt="poster-image"></div>
              <div class="col-sm-4">
                <p id="movie-modal-release"><em>Hello everybody!</em></p>
                <p id="movie-modal-description">I am J-O-E-Y!!!!!!</p>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Pagina -->
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center" id="pagination"></ul>
  </nav>


  <!-- Boostrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/40eab23a62.js" crossorigin="anonymous"></script>
</head>
<body>
  <!-- axios, index.js -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <!-- jQuery, Popper, Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="javascript.js"></script>
</body>
</html>

