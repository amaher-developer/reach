## Reach Task

##Backend
###Simple Ads API
Create a simple Ads management API that shows ads and related tags/categories. It will be a part of a module handling the Advertiser
functionalities towards these ads. Since advertiser will be assigned with an ad to start and should include the following:
###Ads Attributes:
type(free/paid), title, description, category, tags, advertiser, start_date.<br/>
-Each Ad is created under one category and has many related tags<br/>
-One category can have many ads and each Ad is related to one category.<br/>
-schedule a daily email at 08:00 PM that will be sent to advertisers who have ads the next day as a remainder.<br/>
Endpoints should contains: -Tags (CRUD)<br/>
-Categories (CRUD)<br/>
-Ads filters (by tag, by category) -Showing Advertiser Ads<br/><br/>
####Notes:
-Use any recent version of laravel framework.<br/>
-It will not be necessary to do any Authentication, you can just seed the database with some advertiser to be linked with Ads.<br/>
-You should implement this project in clean code and always take care of scalability.<br/>
-Create a public github repository and push your project to it.<br/>

## Laravel 8 PHP Framework


## Tutorial

##### 1. install composer of project composer install
##### 2. run seeder of project php artisan db:seed
##### 3. using postman document to guid you to apis: <br/>
https://documenter.getpostman.com/view/8316268/UVJkBtCj

## Coding

##### 1. Find core logic in "app/Modules/Ad" folder.<br/>

## Postman Result ScreenShot

<p align="center">
<img src="./public/img/postman_api.JPG" style="height: 300px;" >
</p>

## Admin Panel Result ScreenShot

<p align="center">
<img src="./public/img/dashboard_admin.JPG" style="height: 300px;" >
</p>

<p align="center">
<img src="./public/img/ad_admin.JPG" style="height: 300px;" >
</p>

## Tools

#### Programming Language: PHP 7.2
#### Framework: Laravel 8.0
