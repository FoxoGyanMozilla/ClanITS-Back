# ClanITS Backend API
This Repository contains the code for Foxogyan's official project "ClanITS" backnd files.
Please follow the rules discussed in the previous sessions to contribute.

Wiki
----

* * *

**Login Function** :  
api url : **http://\[server-ip\]/api/v1/login**  
Request format :

    {
    "user": "[username]",
    "pass": "[password]"
    } 

  
Response format :

    {
    "status": "ok",
    "msg": "Successfully logged in",
    "isMozillian": "1",
    "sessionId": "[session id]",
    "fName": "[full name]",
    "email": "[email]"
    }

* * *