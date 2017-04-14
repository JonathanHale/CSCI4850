To run the php files just place them in your www directory and connect to the database that was created with the setup script from the github repository.

The search.php file will search the player table for the player with the ID given by user input. If the player with that ID has a team associated with it,
the team name will be displayed along with the ID, Email, and Team ID associated with the player.

The create.php will create a new entry in the player table based on user input.

The update.php will update the character name of the character with the ID given by user input.

The delete.php will delete the character with the ID given by user input.

Explain Triggers:
The first trigger was created to make sure the number of teams an organization has is incremented when an team is created for that org.
The second trigger was created to delete from the created table when a character is deleted. The created table is a table showing which player created which characters.
If a character is deleted it should not show up in the created table.
