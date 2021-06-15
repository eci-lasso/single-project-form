<h1>Registering via cUrl using PHP</h1>

<h3><a name="using-php">Using PHP</a></h3>
<p>The following fields will need to be updated in <a href="https://github.com/eci-lasso/single-project-form/blob/master/signup.php" target="_blank">signup.php</a> to test a submission:</p>
<ul>
<li><code>clientId</code></li>
<li><code>projectId</code></li>
<li><code>apiKey</code></li>
<li>Any other project-specific fields that require a text or numeric value</li>
</ul>
<p>After updating the above fields, submit <a href="https://github.com/eci-lasso/single-project-form/blob/master/signup.html" target="_blank">signup.html</a>.</p>

<p><b>Registration is not in Lasso?</b></p>
<p>If the submission did not go into Lasso, look at the error console in your browser. More information about the request can be found by uncommenting the lines at the bottom of <a href="https://github.com/eci-lasso/single-project-form/blob/master/signup.php" target="_blank">signup.php</a> (under "Troubleshooting examples") and re-trying the submission.</p>

<h3><a name="not-using-php">NOT using PHP</a></h3>
<p>An example of the JSON body for submitting to Lasso is <a href="https://github.com/eci-lasso/single-project-form/blob/master/lead.json" target="_blank">lead.json</a>.</p>

<p>Note that in your <code>POST</code> request you will need to include custom headers.</p>

<pre>Authorization: Bearer ***apikey***<br />Content-Type: application/json</pre>

<p>Once you have your json formatted submit your leads to <code>https://api.lassocrm.com/v1/registrants</code></p>

<p>An example of the payload response returned upon successful submission is <a href="https://github.com/eci-lasso/single-project-form/blob/master/lead-payload.json">lead-payload.json</a>.</p>

<h3><a name="response-codes">Response Codes</a></h3>
<table>
<tr>
<td><b>Code</b></td>
<td><b>What does that mean?</b></td>
</tr>
<tr>
<td>2xx</td>
<td>Success - the registrant was submitted to Lasso</td>
</tr>
<tr>
<td>3xx</td>
<td>Client status (redirection, caching... etc) - client must take additional action to complete the request</td>
</tr>
<tr>
<td>4xx</td>
<td>Client error - bad syntax; check data in request body or headers</td>
</tr>
<tr>
<td>5xx</td>
<td>Server error - please contact Lasso</td>
</tr>
</table>
