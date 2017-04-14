create trigger updateorg after insert on Team
for each row update organization set NumOfTeams = NumOfTeams + 1 where ID = new.OrgID;

create trigger updatecreated before delete on characters
for each row delete from created where characterID = characters.ID;
