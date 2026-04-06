<body><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <title>Processing Form Data</title>
	<style>
	/* The CSS is here to keep the demo simple. 
		As always, I recommend you put your CSS in an external file. */
	body {
		font: 100%/1.3 sans-serif;
		padding: 1em 2em;
	}

	.note {
		background: #eee;
		border: 2px solid #ccc;
		margin-bottom: 1em;
		padding: .25em 1.5em;
	}

	/* Table Styling */
	table {
		background: #0d8800;
		padding: 1em;
		width: 80%;
	}

	th,
	td {
		padding: .5em 1em;
	}

	th {
		background: #14d100;
		color: #222;
		font-size: 1.25em;
		padding-left: .75em;
		text-align: left;
	}

	tr {
		background: #74e868;
	}

	td {
    	width: 40%;
	}

	code {
		font-size: 1.2375em;
	}
	</style>
</head>
<body>

<h1>Information Submitted with Form</h1>

<p><strong>This script needs to be run on a web server to work. Open this file in your text editor and read the comment that begins with "TO TEST THIS SCRIPT" for additional information.</strong></p>

<p>This is a very simple PHP script that displays each bit of information that was sent when <code>form.html</code> was submitted (by using the "Create Acount" button). The left column of the table below lists the <code>name</code> attribute of each form field as defined in <code>form.html</code>. The right column shows each field's value as sent with the submitted form.</p>

<p>In a more useful script, you might store this information in a MySQL database, or send it to your email address.</p>

<div class="note">
	<p><strong>Important Note:</strong> The sample PHP code in this file is simple by design, but as a result, <em>it doesn't include the security checks that a bulletproof script would include</em>. Use caution before including it on your own site. If you do intend to use a script like this, I recommend consulting PHP books and other resources to learn how to check submitted form values for malicious data before you write the values to the screen or to a database, or send them via email.</p>

	<p>The script also does not check each to see if the user provided information for each form field.</p>
</div>

<!-- Form Data  -->
<table>
<tr>
	<th>Field Name</th>
	<th>Value(s)</th>
</tr>

<tr><td colspan="2"><p>No data was submitted.</p></td></tr></table>
</body>
</html>
</body>
</html>