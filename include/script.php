<script src="assets/js/jquery.min.js"></script>

<!-- popper js -->
<script src="assets/js/popper.min.js"></script>

<!-- bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- scroll -->
<script src="assets/js/jquery.scrollbar.min.js"></script>

<!-- jquery -->
<script src="assets/js/core.min.js"></script>

<!-- Search -->
<script src="assets/js/search.js"></script>

<!-- custom scripts -->
<script src="assets/js/main.js"></script>

<!-- form plugins js -->
<script src="assets/js/plugins.js"></script>

<!-- form scripts js -->
<script src="assets/js/scripts.js"></script>

<!-- all js include end -->

<script>
document.querySelectorAll('.coaching-header').forEach(header => {
  header.addEventListener('click', function () {
    const currentContent = this.nextElementSibling;

    document.querySelectorAll('.coaching-content').forEach(content => {
      if (content !== currentContent) {
        content.classList.remove('open');
        content.previousElementSibling.classList.remove('active');
        content.previousElementSibling.querySelector('.coaching-icon').textContent = '+';
      }
    });

    currentContent.classList.toggle('open');
    this.classList.toggle('active');

    const icon = this.querySelector('.coaching-icon');
    icon.textContent = currentContent.classList.contains('open') ? '−' : '+';
  });
});
</script>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const progressBar = document.querySelector(".progress-bar");
    const progressText = document.querySelector(".progress-text");

    let progress = 0;
    const radius = 50;
    const circumference = 2 * Math.PI * radius;

    const interval = setInterval(() => {
      progress++;

      const offset = circumference - (progress / 100) * circumference;
      progressBar.style.strokeDashoffset = offset;

      progressText.textContent = progress + "%";

      if (progress >= 100) {
        clearInterval(interval);

        // Hide preloader smoothly
        document.getElementById("preloader").style.opacity = "0";
        setTimeout(() => {
          document.getElementById("preloader").style.display = "none";
        }, 500);
      }
    }, 20); // speed control
  });
</script>


</body>

</html>