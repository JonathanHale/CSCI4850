To run the php files just place them in your www directory and connect to the database that was created with the setup script from the github repository.

Explain Triggers:
The first trigger was created to make sure the number of teams an organization has is incremented when an team is created for that org.
The second trigger was created to delete from the created table when a character is deleted. The created table is a table showing which player created which characters.
If a character is deleted it should not show up in the created table.
