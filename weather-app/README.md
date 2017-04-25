# Weather App

This is a weather app starting point.

The project uses http://openweathermap.org/ API.

`index.php` file contains code for you to start playing with the weather data API

## How it works

Set some basic variables:

`$country_code` - i.e.: "PL" or "PT" or "UK" etc

`$city` - i.e.: "london" or "kalisz"

`$request_type` - "weather" or "forecast"

* "weather" - returns actual weather for given city
* "forecast" - returns 5 day forecast for given city

`$json` - gets content of a file retuned by the API URL in JSON format. URL string contains query string variables with dynamic values provided by PHP variables, concatenated with the string

`$weather_data` - converts JSON into PHP Array

## API Documentation

http://openweathermap.org/api
