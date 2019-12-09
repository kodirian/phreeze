<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<body>
	<div class="container">
		<h1><i class="icon-cogs"></i> Oh Shit!</h1>

		<h2 onclick="$('#stacktrace').show('slow');" class="well" style="cursor: pointer;"><?php echo $this->eprint($this->message); ?></h2>

		<p>You may want to try returning to the the previous page and verifying that
			all fields have been filled out correctly.</p>

		<p>If you continue to experience this error please contact support.</p>

		<div id="stacktrace" class="well hide">
			<h5>Stack Trace:</h5>
			<?php if ($this->stacktrace) { ?>
				<p style="white-space: nowrap; overflow: auto; padding-bottom: 15px;">
					<pre><?php echo $this->eprint($this->stacktrace); ?></pre>
				</p>
			<?php } ?>
		</div>
	</div>
</body>

</html>