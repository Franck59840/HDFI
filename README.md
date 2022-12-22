# HDFI

A site listing movies and series

## Prerequisites

- PHP 7.4 or higher
- [Symfony 6](https://symfony.com/download)
- [Composer](https://getcomposer.org/)
- [TMDB API](https://www.themoviedb.org/documentation/api) (requires an API key)

## Installation

1. Clone this repository to your local machine using the command `git clone https://github.com/your-username/repository-name.git`
2. Install dependencies using the command `composer install`
3. Create a `.env` file from `.env.dist` and fill in your TMDB API key values
4. Run the development server using the command `symfony serve`

## Usage

To use the TMDB API, you'll first need to send a GET request to the following URL:
  https://api.themoviedb.org/3/movie/{movie_id}?api_key={your_api_key}

Where `{movie_id}` is the ID of the movie you want to retrieve and `{your_api_key}` is your personal API key.

Here's an example of the response you might receive:
```json
{
  "adult": false,
  "backdrop_path": "/phxiKFDvPeQj4AbkvJLmuZEieDU.jpg",
  "belongs_to_collection": {
    "id": 10,
    "name": "Star Wars Collection",
    "poster_path": "/iTQHKziZy9pAAY4hHEDCGPaOvFC.jpg",
    "backdrop_path": "/d8duYyyC9J5T825Hg7grmaabfxQ.jpg"
  },
  "budget": 11000000,
  "genres": [
    {
      "id": 12,
      "name": "Adventure"
    },
    {
      "id": 878,
      "name": "Science Fiction"
    }
  ],
  "homepage": "http://www.starwars.com/films/star-wars-episode-iv-a-new-hope",
  "id": 11,
  "imdb_id": "tt0076759",
  "original_language": "en",
  "original_title": "Star Wars",
  "overview": "Princess Leia is captured and held hostage by the evil Imperial forces in their effort to take over the galactic Empire. Venturesome Luke Skywalker and dashing captain Han Solo team together with the loveable robot duo R2-D2 and C-3PO to rescue the beautiful princess and restore peace and justice in the Empire.",
  "popularity": 34.208,
  "poster_path": "/btTdmkgIvOi0FFip1sPuZI2oQG6.jpg",
  "production_companies": [
    {
      "name": "Lucasfilm",
      "id": 1
    },
    {
      "name": "20th Century Fox",
      "id": 25
    }
  ],
  "production_countries": [
    {
      "iso_3166_1": "US",
      "name": "United States of America"
    }
  ],
  "release_date": "1977-05-25",
  "revenue": 775398007,
  "runtime": 121,
  "spoken_languages": [
    {
      "iso_639_1": "en",
      "name": "English"
    }
  ],
  "status": "Released",
  "tagline": "A long time ago in a galaxy far, far away...",
  "title": "Star Wars",
  "video": false,
  "vote_average": 8.1,
  "vote_count": 10327
}

 ```

## Contributing

If you'd like to contribute to the project, please read our contribution guide before submitting a pull request.
