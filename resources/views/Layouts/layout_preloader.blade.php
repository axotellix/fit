
<!-- =[ PRELOADER ]= -->
<div id = "preloader"></div>
  <script>
      let preloader = document.getElementById('preloader');

      window.addEventListener('load', () => {
          setTimeout(() => {
            preloader.classList.add('hidden');
            document.body.className = 'loaded';
          }, 1000);
      });
  </script>