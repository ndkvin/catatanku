<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
			crossorigin="anonymous"
		/>
		<script
			src="https://kit.fontawesome.com/65e0748f1c.js"
			crossorigin="anonymous"
		></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link rel="stylesheet" href="/style/main.css" />
		<link rel="icon" type="image/x-icon" href="/images/logo.png" />
		<title>@stack('title')</title>
	</head>
	<body>
		<!-- Navbar -->
		@include('includes.navbar-dashboard')

    <!-- Content -->
    <div class="container-fluid dashboard">
      <div class="d-flex flex-row mb-3 content">
        <div class="p-2 left"></div>
        <div class="p-2 right w-100">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis accusamus non sint numquam distinctio obcaecati reiciendis esse minus maiores perferendis facilis voluptatum tempora quisquam ipsa, velit accusantium aliquid voluptatem quibusdam unde sequi? Similique laboriosam eligendi cum deleniti tempore distinctio aut, recusandae vel quod eos perferendis velit. Eligendi illum ad voluptatem. Provident hic odio nemo, cupiditate iusto molestias quas animi neque similique enim libero eum blanditiis eligendi aliquid qui nulla voluptates laborum, cum corporis nam nihil itaque? Consequatur, quas recusandae? Quo recusandae voluptatibus consequuntur quod nostrum temporibus natus, officiis similique itaque reiciendis! Sapiente fuga optio praesentium amet. Corrupti eum dignissimos dolore?</div>
      </div>
    </div>
    @yield('content')

		<!-- Footer -->
		@include('includes.footer')
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
			crossorigin="anonymous"
		></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
	</body>
</html>
