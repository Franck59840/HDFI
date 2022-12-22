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
  .........

Explain how to use your project once it's installed. Include examples of requests and responses if applicable.

## Contributing

If you'd like to contribute to the project, please read our contribution guide before submitting a pull request.
