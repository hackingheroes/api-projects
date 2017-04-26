# Football App

This is a football app starting point.

The project uses http://sportsopendata.net/api-console/ API.

`index.php` file contains code for you to start playing with the football data API

## How it works

Set some basic variables:

`$league` - can be "premier-league", "serie-a", "liga", "seria-a-brasileiro" or "eredivisie"

`$response` - gets content of a file retuned by the API URL in JSON format. URL string contains query string variables with dynamic values provided by PHP variables, concatenated with the string

`$results` - converts JSON into PHP Object

## API Documentation

http://sportsopendata.net/api-console/
