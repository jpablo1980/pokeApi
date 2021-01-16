<p align="center"><img src="https://infynno.com/images/blog/18/laravel-jetstream.jpg" width="400"><img src="https://inertiajs.com/previews/home.png" width="400"></p> 


## PokeApi App

Web app som låter user söka efter en especifik Pokemon. Appen är byggd med Laravel Jetstream, Inertia, VueJS och MySQL

- User kan söka
- Om Pokemon finns i DB returnerar kontrollern en view med Pokemon detaljer
- Om Pokemon inte finns i DB kör appen en http::get till pokeapi Api och returnerar kontrollern en view med Pokemon detaljer
- Om den inte finns alls, returneras användaren till huvud sidan
