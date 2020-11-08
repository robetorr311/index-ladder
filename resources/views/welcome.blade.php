<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>.:: Index Ladder ::.</title>
        <link rel="icon" type="image/ico" href="{{ asset('images/favicon.ico') }}" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
        <script>
        // rename myToken as you like
        window.myToken =  <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
        </script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/one-page-wonder.css') }}" rel="stylesheet">
    </head>
    <body>
    <div id="app">
      @include('partials.flash_messages')
      <header-component welcome-endpoint="{{ $welcomeEndpoint }}"></header-component>
      <message-component></message-component>
      <section>
        <slide-component></slide-component> 
      </section>
      <section>
        <products-component products-values=" {{ $ProductsValues }} "></products-component>
      </section> 
      <section>
        <skills-component skills-values=" {{ $SkillValues }} " ></skills-component>
      </section> 
      <section>
        <services-component services-values=" {{ $ServiceValues }} " ></services-component>
      </section>     
      <footer-component></footer-component> 
   </div>
  </body>
</html>
