# HOW TO MAKE THS WORK

-   Clone this project.

-   Go to [Spotify Quick Start](https://developer.spotify.com/documentation/web-playback-sdk/quick-start/#), Login using your Spotify Account, click on **GET YOUR ACCESS TOKEN** Button.

-   Copy **.env.example** file as **.env**.

-   Copy **ACCESS TOKEN** paste it in **.env** file infront of **SPOTIFY_TOKEN** key.

-   Serve project using `php artisan serve`

## WORKING ROUTES

**Routes are set to `Arjit Singh and His Top Album`**

> -   [Get Artist Details (Arjit Singh currently)](http://localhost:8000/artist)
> -   [Get Artist Albums (Arjit Singh currently)](http://localhost:8000/albums)
> -   [Get Album Songs (Kesariya currently)](http://localhost:8000/tracks)

## TO GENERATE TOKEN IN APP

It is as simple as any other callback Oauth.

### GUIDE

-   [Web API start guide](https://developer.spotify.com/documentation/web-api/quick-start/)

### SDKs

-   [jwilsson](https://github.com/jwilsson/spotify-web-api-php)
-   [jonjomckay](https://github.com/jonjomckay/spotify-web-api)

Enjoy :))
