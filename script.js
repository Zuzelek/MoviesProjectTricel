

let movies = [];
let currentIndex = 0;

    //Fetching movies from the API
    fetch('getMovies.php')
      .then(response => response.json())
      .then(data => {
        movies = data;
        displayMovie();
      })

    //Function to display current movie  
    function displayMovie(){
      if(movies.length === 0) return;

      const movie = movies[currentIndex];
      document.getElementById('title').textContent = movie.title;
      document.getElementById('plot').textContent = movie.plot;
      document.getElementById('director').textContent = movie.director;
      document.getElementById('actors').textContent = movie.actors;
      document.getElementById('year').textContent = movie.year;
    }

    function goToNextMovie(){
      currentIndex = (currentIndex + 1) % movies.length;
      displayMovie();

    }