<h1 align="center">Travel Package Booking Web Application</h1>

<h1 align="center"> With Laravel </h1>

## The user can  
- View details about travel agency ,
 Blog Post ,
 Travel Packages ,
- Book Travel package ( entering relavet Information ) <br>
- View Current status about Booking
>  payment -> pending, Conform or Reject <br>
>  booking -> pending, Conform or Reject 
<br>

- View the invoice and pay for the relevant booking
- contact travel agency using Contact Form ( any one can contact travel agency without login )
  
<br><br>

## The Admin can
- View all summary of the web application <br>
   >  Users -> Active Users and Not active Users  <br>
   >  Resavation -> All Resavation, Conform Resavation, Reject Resavation, To Check Payment  <br>
   >  Blog Post -> All Blog Post  <br>
   >  Travel Packages -> All Travel Packges, Adventure Tour, Beach Holiday Tour, Cultural Tour, Business Trip Tour 

- Manage Users <br>
   >  See User Details -> No. Of Reservations, Date of Joining etc.  <br>
   >  Contact or Remove User Account 
    
- User's Massages <br>
  >  ( View )
  > ( Delete )
  >  ( Show Massage Send Date and Time ) 
  >  ( Send Email To User )

- Trvel Package For CRUD Operations
  > ( create )
  > ( Delete )
  > ( View )
  > ( Update )

  - Blog Post For CRUD Operations
    > ( create )
    > ( Delete )
    > ( View )
    > ( Update )

<br><br>

<h1 align="center">How Use This Web Application In Another Computer</h1>

## Install Dependencies:

For PHP dependencies
`composer install`

For Node.js dependencies
`npm install`


## Copy the .env.example File:
Copy the .env.example file to create a new .env file.

## Generate the Application Key:
`php artisan key:generate`

## Configure the Environment:
Open the .env file and configure your database

`DB_CONNECTION=mysql` <br>
`DB_HOST=127.0.0.1` <br>
`DB_PORT=3306` <br>
`DB_DATABASE=travel_agency_db` <br>
`DB_USERNAME=root` <br>
`DB_PASSWORD=` <br><br>
`APP_NAME=SriLankaTours` <br>

## Run Database Migrations:
> [!WARNING]
> Run Database Migrations is not recomandaed for this
`php artisan migrate `

> [!NOTE]
> Becouse if your are  Run Database Migrations website has not any data. > ( Blogs, Travel Packages) <br>
> #But you can Add this data using admin panel

> [!TIP]
> ### Recomanded
> In this files has " `Database SQL` " folder and this folder has database file(sql)
> Name " `travel_agency_db` " use this sql file for database

<br><br>

<h1 align="center"> Deploy Web Application </h1>
    
## Run the Vite Development Server:
`npm run dev`

## Start Laravel Development Server:
`php artisan serve`

## Access Your Application:
Open your browser and navigate to http://127.0.0.1:8000 to verify that your application is working correctly.

<br><br>

<h1 align="center"> For Login </h1>
    
## Admin
- Email Address: dilankanishka032@gmail.com <br>
- Password: 032

## User
- Email Address: kanishka@gmail.com <br>
- Password: 12345678



