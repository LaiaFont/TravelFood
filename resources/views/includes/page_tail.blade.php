    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/
        @if (App::environment() != 'production')
            <script src="{{ asset('js/main.js') }}"></script>
            <script src="{{ asset('js/app.js') }}"></script>
        @else
            <script src="{{ asset('js/main.min.js') }}"></script>
            <script src="{{ asset('js/app.min.js') }}"></script>
        @endif
  </body>
</html>