# Music App

This is a music app starting point.

The project uses https://www.last.fm/ API.

`index.php` file contains code for you to start playing with the music data API

## How it works

Set some basic variables:

`$method` - API method, i.e.: "Artist.getInfo" or "Album.getInfo" or "Artist.getTopAlbums" etc

`$query_param` - query parameter i.e.: "artist" or "album"

`$query_value` - value of the query - i.e.: "Metallica" or "Lady Gaga"

`$json` - gets content of a file retuned by the API URL in JSON format. URL string contains query string variables with dynamic values provided by PHP variables, concatenated with the string

`$music_data` - converts JSON into PHP Array

## API Documentation

https://www.last.fm/api
