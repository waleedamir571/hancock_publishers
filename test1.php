<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website with Bottom Reviews Slider</title>

  <style>
    /* --- Page look example --- */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #f4f7fa;
      min-height: 200vh; /* just for scrolling demo */
    }

    header {
      text-align: center;
      padding: 60px 20px;
      background: #0073e6;
      color: #fff;
    }

    section.content {
      padding: 40px 20px;
      text-align: center;
    }

    /* --- Bottom Review Box --- */
    .bottom-reviews {
      position: fixed;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      width: 90%;
      max-width: 600px;
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
      overflow: hidden;
      padding: 20px 24px 24px;
      z-index: 1000;
      transition: all 0.4s ease, opacity 0.4s ease;
      opacity: 1;
    }

    /* fade out when hidden */
    .bottom-reviews.hide {
      opacity: 0;
      transform: translateX(-50%) translateY(20px);
      pointer-events: none;
    }

    .bottom-reviews .review-card {
      display: none;
      animation: fadeSlide 0.6s ease forwards;
    }

    .bottom-reviews .review-card.active {
      display: block;
    }

    @keyframes fadeSlide {
      from {
        opacity: 0;
        transform: translateY(8px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .review-text {
      margin: 0 0 10px;
      font-size: 15px;
      color: #333;
      line-height: 1.5;
    }

    .review-author {
      margin: 0;
      font-weight: 600;
      color: #0073e6;
      font-size: 14px;
    }

    /* --- Close button (X) --- */
    .close-btn {
      position: absolute;
      top: 6px;
      right: 10px;
      font-size: 18px;
      font-weight: bold;
      color: #999;
      cursor: pointer;
      transition: color 0.2s ease;
      line-height: 1;
    }

    .close-btn:hover {
      color: #333;
    }

    @media (max-width: 480px) {
      .bottom-reviews {
        width: 95%;
        font-size: 14px;
        bottom: 10px;
      }
      .close-btn {
        top: 4px;
        right: 8px;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>Welcome to Hancock Publishers</h1>
    <p>Professional publishing and editing services</p>
  </header>

  <section class="content">
    <h2>Main Content Section</h2>
    <p>Scroll down to see the floating review section at the bottom.</p>
  </section>

  <!-- ==== Floating Bottom Reviews ==== -->
  <div class="bottom-reviews" id="bottomReviews">
    <span class="close-btn" id="closeBtn">&times;</span>

    <div class="review-card active">
      <p class="review-text">Working with Hancock Publishers was a transformative experience. Their team's expertise in publishing is evident in every step.</p>
      <h5 class="review-author">— Daniel Rhodes</h5>
    </div>
    <div class="review-card">
      <p class="review-text">Hancock Publishers consistently delivers outstanding results. Their editorial team is thorough and insightful.</p>
      <h5 class="review-author">— Olivia Martinez</h5>
    </div>
    <div class="review-card">
      <p class="review-text">The professionalism and dedication of Hancock Publishers are unmatched. The final publication exceeded expectations.</p>
      <h5 class="review-author">— Richard Collins</h5>
    </div>
    <div class="review-card">
      <p class="review-text">They understood our vision and turned it into reality. The finished product stands out beautifully.</p>
      <h5 class="review-author">— Jessica Freeman</h5>
    </div>
    <div class="review-card">
      <p class="review-text">Hancock Publishers’ commitment to quality and client satisfaction is commendable. Responsive and professional team.</p>
      <h5 class="review-author">— Samuel Ellis</h5>
    </div>
  </div>

  <script>
    (function() {
      const cards = document.querySelectorAll('.bottom-reviews .review-card');
      const reviewBox = document.getElementById('bottomReviews');
      const closeBtn = document.getElementById('closeBtn');
      let index = 0;
      let interval;

      function startSlider() {
        interval = setInterval(() => {
          cards[index].classList.remove('active');
          index = (index + 1) % cards.length;
          cards[index].classList.add('active');
        }, 4000);
      }

      // start automatic review rotation
      startSlider();

      // Close button hides the review box
      closeBtn.addEventListener('click', () => {
        reviewBox.classList.add('hide');
        clearInterval(interval);
      });
    })();
  </script>

</body>
</html>
