<html>

<head>
	<title>Hello/Index</title>
	<style>
		body {
			font-size: 16px;
			color: #999
		}

		h1 {
			font-size: 50px;
			text-align: right;
			color: #f6f6f6;
			margin: -20px 0px -30px 0px;
			letter-spacing: -4pt;
		}
	</style>
</head>

<body>
	<h1>Blade/Index</h1>
	<p>&#64;whileディレクティブ</p>
	<ol>
		@php
		$counter++;
		@endphp
		@while ($counter < count($data))
			<li>{{ $data[$counter] }}</li>
			@php
			$counter++;
			@endphp
		@endwhile
	</ol>
	@endif
	@endforeach
</body>

</html>