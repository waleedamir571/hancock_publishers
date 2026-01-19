<!-- ========== GOOGLE TAG (GA4 + ADS) – lazy loaded ========== -->

<script>
  // global dataLayer + gtag function
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }

  // GA/Ads ko thoda delay se load karenge taaki paint pe pressure kam ho
  window.addEventListener('load', function () {
    // 1 second baad gtag.js load karo
    setTimeout(function () {
      var s = document.createElement('script');
      s.src = 'https://www.googletagmanager.com/gtag/js?id=G-E5G292S65Z';
      s.async = true;
      document.body.appendChild(s);

      // script append hone ke turant baad config queue ho jati hai
      gtag('js', new Date());

      // GA4 property
      gtag('config', 'G-E5G292S65Z');

      // Google Ads conversion / remarketing ID
      gtag('config', 'AW-17372821356');

    }, 1000); // 1000ms = 1s after load
  });
</script>
