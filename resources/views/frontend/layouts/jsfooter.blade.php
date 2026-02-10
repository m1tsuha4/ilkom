 <!-- Scroll Top -->
 <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
         class="bi bi-arrow-up-short"></i></a>

 <!-- Preloader -->
 <div id="preloader"></div>

 <!-- Vendor JS Files -->
 <script src="{{ asset('dist_frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('dist_frontend/assets/vendor/php-email-form/validate.js') }}"></script>
 <script src="{{ asset('dist_frontend/assets/vendor/aos/aos.js') }}"></script>
 <script src="{{ asset('dist_frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
 <script src="{{ asset('dist_frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

 <!-- Main JS File -->
 <script src="{{ asset('dist_frontend/assets/js/main.js') }}"></script>

 <script>
     var VisitorAPI = function (t, e, a) {
         var s = new XMLHttpRequest();
         s.onreadystatechange = function () {
             var t;
             if (s.readyState === XMLHttpRequest.DONE) {
                 t = JSON.parse(s.responseText);
                 if (t.status === 200) {
                     e(t.data);
                 } else {
                     a(t.status, t.result);
                 }
             }
         };
         s.open("GET", "https://api.visitorapi.com/api/?pid=" + t);
         s.send(null);
     };

     (function () {
         if (sessionStorage.getItem("visitorapi_tracked") === "1") {
             return;
         }

         VisitorAPI(
             "{{ env('VISITORAPI_PID') }}",
             function (data) {
                 var csrfToken = document.querySelector('meta[name="csrf-token"]');
                 var tokenValue = csrfToken ? csrfToken.getAttribute('content') : '';

                fetch("/visitors/track", {
                     method: "POST",
                     headers: {
                         "Content-Type": "application/json",
                         "X-CSRF-TOKEN": tokenValue,
                         "X-Requested-With": "XMLHttpRequest",
                     },
                     body: JSON.stringify({
                         ipAddress: data.ipAddress || null,
                         countryName: data.countryName || null,
                         countryCode: data.countryCode || null,
                         city: data.city || null,
                     }),
                 }).then(function () {
                     sessionStorage.setItem("visitorapi_tracked", "1");
                 });
             },
             function (errorCode, errorMessage) {
                 console.log(errorCode, errorMessage);
             }
         );
     })();
 </script>

 <script>
     let table = new DataTable('#akademik');
 </script>
