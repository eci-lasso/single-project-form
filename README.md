<h1>Registering via cUrl using PHP</h1>

<hr />

<h3><a name="using-php">Using PHP</a></h3>
<p>Once you have checked out the repo you will need to update the following in <a href="https://github.com/eci-lasso/single-project-form/blob/master/signup.php" target="_blank">signup.php</a> to test a submission</p>
<ul>
<li>clientId</li>
<li>projectId</li>
<li>apiKey</li>
</ul>
<p>After updating those fields try submitting <a href="https://github.com/eci-lasso/single-project-form/blob/master/signup.html" target="_blank">signup.html</a></p>

<p><b>My registration is not in Lasso?</b></p>
<p>If you don't see your submission in lasso try looking at the error console in your browser. More information about the request can be found by uncommenting the lines at the bottom of <a href="https://github.com/eci-lasso/single-project-form/blob/master/signup.php" target="_blank">signup.php</a> and re-trying your submission.</p>

<h3><a name="not-using-php">NOT using PHP</a></h3>
<p>Take a look at <a href="https://github.com/eci-lasso/single-project-form/blob/master/lead.json" target="_blank">lead.json</a>, it is an example of the json body you will need to submit.</p>

<p>Note that in your POST request you will need to include a custom header.</p>

<p>X-Lasso-Auth: Token={apiKey},Version=1.0</p>

<p>Once you have your json formatted submit your leads to https://api.lassocrm.com/registrants</p>

<h3><a name="response-codes">Response Codes</a></h3>
<table>
<tr>
<td>Code</td>
<td>What does that mean?</td>
</tr>
<tr>
<td>201</td>
<td>Your registrant was created in Lasso, Success</td>
</tr>
<tr>
<td>302</td>
<td>There is an issue with security, double check the X-Lasso-Auth header</td>
</tr>
</table>
