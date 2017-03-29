import random
count = 0;
while count < 15:
    rank =random.randint(0,5)
    shots = random.randint(0,66666)
    hits = random.randint(0,shots)
    miss = shots - hits
    kill = random.randint(0,500)
    death = random.randint(0,500)
    win = random.randint(0,100)
    loss = random.randint(0,100)
#    if count % 2 == 0:
#        cl = 'fighter'
#    elif count % 3 == 0:
#        cl = 'sniper'
#    elif count % 5 == 0:
#        cl = 'medic'
#    else:
#        cl = 'support'
#    print 'insert into PlayerStats (Rank,CreateDate,PlayerID) values(%d,2017-03-28,%d);'%(rank,count)
#    print 'insert int OrgGenerates(orgID,ID) values(%d,%d);'%(count,count)
    print 'insert into TeamStats (Rank,MatchesWon,MatchesLost,TeamID) values(%d,%d,%d,%d);'%(rank,win,loss,count)
    count += 1
