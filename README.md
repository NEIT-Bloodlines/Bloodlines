# Bloodlines (In Development)

Bloodlines is a browser based multiplayer game that was insiperd by the board game called Risk and the classic 
PC game Warlords. Our team has taken the best parts from both of these games and incorporated them into a modern
web based platform to create a game called Bloodlines.

## Features
Bloodlines Website 
- Central access point for the Bloodlines game
- User signup
- User login 
- Admin portal 
- Directions for the game 
- Summary of what the game is
- Screenshots of the game itself 
- General chat room for all players that are signed in

### Bloodlines Game
- Game setup screen 
- Game lobby 
- Lobby chat room 
- In game chatroom 
- In game turn lobby
- Active turn screen

## Tech Stack
- PHP MVC pattern
- mySQL
- Jquery 
- Twitter Bootstrap framework
- HTML5 canvas for interaction with the game board.
- Ajax will be used for asynchronous calls to the database

## Team
> As a team we will all actively assist in all areas of the project. 
> However, we see value and importance in assigning roles in which each 
> of us will be individually responsible for its success and or failure. 
> As a group we have identified each of our strengths/experience in particular 
> technologies and has assigned roles accordingly.

Nick Patel
- Responsible for Database design/development and data management including 
php models, data queuers, and validation. 

David Landi
- Responsible for frontend design/development, Javascript development, and the construction of a basic MVC framework.

Justin Bareara
- Responsible for the php backend development. His focus will be in the overall construction 
and implementation of the MVC structure and the development of mini framework that will 
be utilized throughout the project. 

## MVC Framework
The Bloodlines project will be utilizing the MVC pattern in order to efficiently relate the user interface to the underlying data models. Although PHP already has many proven MVC frameworks, we have decided that it would be best to develope a custom MVC framework that is much more light weight and customized to our project requirments. 

- Factory.php
	- $factory = new Factory will create an instance of the Factory class on the root index.php file. On instance creation the 
	   factory object will cache the data contained in the URL that will be used to build a new controller object. 
           $controller = $factory->buildController() will execute the buildController method of the Factory class. This method will
           will first filter the stored URL data by passing it into a asscoiative array that contains methods for validation and
           mapping purposes. If valid, the requested contorller object will be built.
- MasterController.php
	- An abstract base class in which all controller classes inherit from.
- MasterModel.php
	- An abstract base class in which all model classes inherit from.
- View.php
	- A class that is use to establish the path to a view. It also offers a method to display that view.
- ViewModel.php
	- A class that provides functionality to a model object for returning data that a controller will send to a view. 

  
Directory Structure

ROOT 
- api (Location for all of the php classes needed for the project indluding the MVC framework)
	- Factory.php
	- MasterController.php
	- MasterModel.php
	- View.php
	- ViewModel.php
- controllers
	- admin.php
	- game.php
	- home.php
	- authentication.php
	- reporting.php
- models
	- admin.php
	- game.php
	- home.php
	- authentication.php
	- reporting.php 
- public
	- css
		- .css files
	- font
		- .eot files
	- img
		- .jpg files
	- js
		- .js files
- views
	- Admin
		- index.php
	- Game
		- index.php
	- Home
		- index.php
	- Authentication
		- index.php
		- newmember.php
	- PlayerRankings
		- index.php
	- masterpage.php
- .htaccess
- index.php
