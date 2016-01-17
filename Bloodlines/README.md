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
- Responsible for frontend design/development and Javascript development that is 
required for the Bloodlines game.

Justin Bareara
- Responsible for the php backend development. His focus will be in the overall construction 
and implementation of the MVC structure and the development of mini framework that will 
be utilized throughout the project. 

## Technical Specifications
Custom MVC Structure

- Modal
  There will be a modal for each page on the website. They will have the following naming convention: nameOfThePageModal
  and will be located in the associated Page Manager directory.
  
- View
  There will be a view(s) for each page as well. They will have the following naming convention: nameOfPageContent.
  The exception to this naming convention will be with the header, footer and navigation. The location for 
  the views is in the View Directory
  
- Controller
  Each page will have a controller.  A controller can be identified in the directory structure by file name 
  index.php.  Each Page Manager directory will contain a index.php controller
  
Directory Structure

ROOT 
- NameOfPageManager
	- index.php
	- nameOfPageModal.php
- View
	- nameOfPageContent.php
	- dfltHeader.php
	- dfltFooter.php
	- dfltNav.php
- Lib
	- Inside the lib directory you will find the php framework that our team will build 
	  to be utilized throughout the entire project.
- css
- js
- img
- fonts
- landingPageModal.php
- index.php
