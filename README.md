Registering via cUrl using PHP
Using PHP
Once you have checked out the repo you will need to update the following in signup.php to test a submission

clientId
projectId
apiKey
After updating those fields try submitting signup.html

My registration is not in Lasso?
If you don't see your submission in lasso try looking at the error console in your browser. More information about the request can be found by uncommenting the lines at the bottom of signup.php and re-trying your submission.

NOT using PHP
take a look at lead.json, it is an example of the json body you will need to submit.

note that in your POST request you will need to include a custom header

X-Lasso-Auth: Token={apiKey},Version=1.0

Once you have your json formatted submit your leads to https://api.lassocrm.com/registrants

Response Codes
Code	What does that mean?
201	Your registrant was created in Lasso, Success
302	There is an issue with security, double check the X-Lasso-Auth header
