<p align="center">
    <h1 align="center">Yii 2 Basic Project For FizzBuzz Game</h1>
    <br>
</p>
<h2>Installation</h2>
<p>1. git clone git@github.com:guojuan999/basic.git</a>
<p>2. cd basic</p>
<p>3. composer install</p>
<p>4. docker-compose up -d</p>
<p>5. You can use your browser to access the installed Yii application with the following URL:<br/>
http://localhost/ or http://127.0.0.1</p>

<h2>Change logs</h2>
<p>I have updated or added some files below:</p>
<p>
    assets/AppAsset.php<br/>
    controllers/FizzBuzzController.php<br/>
    models/GameForm.php<br/>
    nginx/<br/>
    php/Dockerfile<br/>
    test/unit/models/GameFormTest.php
    views/fizz-buzz/<br/>
    web/css/fizzubzz.css<br/>
</p>

<h2>Unit Test</h2>
<p>I only wrote one unit test and I should write more for functional tests as well.</p>
<p>How to run unit test</p>
<p>docker exec -it app /bin/sh</p>
<p>cd /var/www</p>
<p>php vendor/bin/codecept run unit</p>

<p>I did not add authentication in this application since I did not use the database. I would use Yii's build-in AuthClient which supports new visitors to register and sign in to our application using Google/Twitter/Facebook and etc... We just need to add some tables in the database to store authorization data. </p>
<p>I also should add pagination in case if the input number is too big.</p>
