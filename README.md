<h1>Registering via cURL using PHP</h1>

<h3><a name="using-php">Using PHP</a></h3>
<p>Update the following fields in <a href="https://github.com/eci-lasso/single-project-form/blob/master/signup.php" target="_blank">signup.php</a> to test a submission:</p>
<ul>
<li><code>clientId</code></li>
<li><code>projectId</code></li>
<li><code>apiKey</code> (This is the <b>LassoUID</b> from Lasso)</li>
<li>Any other project-specific fields (e.g., <code>setRating</code>, <code>setSourceType</code>... etc.)</li>
</ul>
<p> Update the URL for <code>window.location</code> and the website tracking code in <a href="https://github.com/eci-lasso/single-project-form/blob/master/signup.html" target="_blank">signup.html</a> and submit.</p>

<p><b>Registrant is not in Lasso?</b></p>
<p>If the submission did not go into Lasso, look at the error console in your browser. More information about the request can be found by uncommenting the lines at the bottom of <a href="https://github.com/eci-lasso/single-project-form/blob/master/signup.php" target="_blank">signup.php</a> (under <i>Troubleshooting examples</i>) and re-trying the submission.</p>

<h3><a name="not-using-php">NOT using PHP</a></h3>
<p>An example of the JSON body for submitting to Lasso is <a href="https://github.com/eci-lasso/single-project-form/blob/master/lead.json" target="_blank">lead.json</a>.</p>

<p>The <code>POST</code> request will need to include custom headers.</p>

<pre>Authorization: Bearer ***apikey***<br />Content-Type: application/json</pre>

<p>Once the JSON is formatted, submit leads to <code>https://api.lassocrm.com/v1/registrants</code></p>

<p>The full API reference is available at <a href="https://platform.lassocrm.com/#/api" target="_blank">platform.lassocrm.com/#/api</a>.</p>

<h3><a name="response-codes">Response Codes</a></h3>
<table>
<tr>
<td><b>Code</b></td>
<td><b>What does it mean?</b></td>
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
