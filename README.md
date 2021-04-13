<p align="center">
    <h1 align="center">Yii 2 Basic Project For FizzBuzz Game</h1>
    <br>
</p>
<h2>Installation</h2>
<p>1. git clone git@github.com:guojuan999/basic.git</a>
<p>2. cd basic</p>
<p>3> composer install</p>
<p>3. run command: docker-compose up -d</p>
<p>4. You can use your browser to access the installed Yii application with the following URL:<br/>
http://localhost/ or http://127.0.0.1</p>

<h2>Change logs</h2>
<p>I have update or add some files as below:</p>
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
<p>I only wrote one unit test and I should write more for functional test as well.</p>
<p>How to run unit test</p>
<p>docker exec -it app /bin/sh</p>
<p>cd /var/www</p>
<p>php vendor/bin/codecept run unit</p>

<p>I did not add authentication in this application since I did not use database. I would use Yii's build-in AuthClient which supports for new visitors to register and and sign in to your application using Google/Twitter/Facebook etc account, we just need add some tables in database to store authorization data. </p 
