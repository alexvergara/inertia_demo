<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  {{-- <link href="{{ mix('/css/app.css') }}" rel="stylesheet"> --}}
  {{-- <script src="{{ mix('/js/app.js') }}" defer></script> --}}
  @vite('resources/js/app.js')
  @inertiaHead
</head>
<body>
  <section class="p-8">
    @inertia
  </section>
</body>
</html>