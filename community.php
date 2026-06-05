<?php include 'include/head.php'; ?>
<?php include 'include/header.php'; ?>



<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />

<style>
  /* ── Design Tokens ─────────────────────────────────────────────── */
  :root {
    --primary: #117d9e;
    --primary-light: #117d9e;
    --primary-muted: rgba(90, 122, 74, .12);
    --accent: #c8a96e;
    --bg: #faf9f6;
    --bg-alt: #f3efe8;
    --fg: #1e1e1b;
    --muted: #6b6860;
    --card-bg: #ffffff;
    --radius: 1rem;
    --font-display: 'Cormorant Garamond', serif;
    --font-body: 'DM Sans', sans-serif;
    --transition: .4s cubic-bezier(.25, .8, .25, 1);
  }

  nav.navbar.navbar-expand-lg.navbar-light.p-0.current {
    box-shadow: none !important;
  }

  a {
    text-decoration: none !important;
  }

  .bg-secondary {
    background-color: #117d9e !important;
  }

  /* ── Base ──────────────────────────────────────────────────────── */
  /* *, *::before, *::after { box-sizing: border-box; }
    html { scroll-behavior: smooth; }

    body {
      font-family: var(--font-body);
      background: var(--bg);
      color: var(--fg);
      overflow-x: hidden;
    } */

  h1,
  h2,
  h3,
  h4 {
    font-family: var(--font-display);
  }

  img {
    display: block;
  }

  /* ── Section helpers ───────────────────────────────────────────── */
  .section-padding {
    padding: 5rem 0;
  }

  .section-alt-bg {
    background: var(--bg-alt);
  }

  .heading-accent {
    font-family: var(--font-body);
    font-size: .78rem;
    font-weight: 600;
    letter-spacing: .18em;
    text-transform: uppercase;
    color: var(--accent);
    margin-bottom: .5rem;
  }

  .heading-main {
    font-size: clamp(2rem, 4vw, 2.8rem);
    font-weight: 700;
    color: var(--fg);
    line-height: 1.2;
    margin-bottom: 1.25rem;
  }

  .heading-main span.accent {
    color: var(--primary);
  }

  /* ── Image helpers ─────────────────────────────────────────────── */
  .img-rounded {
    border-radius: var(--radius);
    overflow: hidden;
  }

  .img-rounded img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .card-hover {
    transition: transform var(--transition), box-shadow var(--transition);
    will-change: transform;
  }

  .card-hover:hover {
    transform: translateY(-6px);
    box-shadow: 0 24px 56px rgba(0, 0, 0, .10);
  }

  /* ── Animate on scroll ─────────────────────────────────────────── */
  .animate-section {
    opacity: 0;
    transform: translateY(36px);
    transition: opacity .7s ease, transform .7s ease;
  }

  .animate-section.visible {
    opacity: 1;
    transform: none;
  }

  /* ── Navbar ────────────────────────────────────────────────────── */
  /* .navbar {
      background: rgba(250,249,246,.92);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid rgba(90,122,74,.12);
      padding: .85rem 0;
    }
    .navbar-brand {
      font-family: var(--font-display);
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--primary) !important;
      letter-spacing: .03em;
    }
    .nav-link {
      font-size: .88rem;
      font-weight: 500;
      color: var(--fg) !important;
      transition: color .2s;
      padding: .4rem .8rem !important;
    }
    .nav-link:hover { color: var(--primary) !important; }
    .navbar-toggler { border-color: var(--primary); }
    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='%235a7a4a' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    } */

  /* ── Hero ──────────────────────────────────────────────────────── */
  #hero {
    position: relative;
    min-height: 70vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
  }

  #hero .hero-bg {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(30, 30, 27, .72) 0%, rgb(74 79 122 / 48%) 100%), url(assets/images/hero-comm.jpeg) center / cover no-repeat;
    transform: scale(1.05);
    transition: transform 8s ease;
  }

  #hero:hover .hero-bg {
    transform: scale(1);
  }

  #hero .hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    padding: 2rem 1rem;
    animation: heroFadeUp .9s ease forwards;
  }

  @keyframes heroFadeUp {
    from {
      opacity: 0;
      transform: translateY(40px);
    }

    to {
      opacity: 1;
      transform: none;
    }
  }

  #hero h1 {
    font-size: clamp(2.4rem, 6vw, 4.2rem);
    font-weight: 700;
    color: #fff;
    line-height: 1.15;
    margin-bottom: 1.25rem;
  }

  #hero h1 span {
    color: #117d9e;
  }

  #hero p {
    font-size: clamp(1rem, 2vw, 1.2rem);
    color: rgba(255, 255, 255, .88);
    max-width: 620px;
    margin: 0 auto 2rem;
    line-height: 1.7;
    animation: heroFadeUp .9s .2s ease both;
  }

  .btn-hero {
    background: var(--primary);
    color: #fff;
    padding: .8rem 2.2rem;
    border-radius: 50px;
    font-weight: 600;
    font-size: .92rem;
    letter-spacing: .04em;
    text-decoration: none;
    display: inline-block;
    transition: background var(--transition), transform .2s;
    animation: heroFadeUp .9s .35s ease both;
    border: none;
  }

  .btn-hero:hover {
    background: var(--primary-light);
    transform: scale(1.04);
    color: #fff;
  }

  /* ── Scroll pill ─────────────────────────────────────────────── */
  .scroll-pill {
    position: absolute;
    bottom: 2rem;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: .3rem;
    color: rgba(255, 255, 255, .7);
    font-size: .75rem;
    letter-spacing: .1em;
    text-transform: uppercase;
  }

  .scroll-pill .line {
    width: 1px;
    height: 40px;
    background: linear-gradient(to bottom, rgba(255, 255, 255, .6), transparent);
    animation: scrollLine 1.6s ease-in-out infinite;
  }

  @keyframes scrollLine {

    0%,
    100% {
      transform: scaleY(0);
      transform-origin: top;
    }

    50% {
      transform: scaleY(1);
      transform-origin: top;
    }
  }

  /* ── Featured Blog ─────────────────────────────────────────────── */
  .blog-card {
    background: var(--bg-alt);
    border-radius: var(--radius);
    border: 1px solid rgba(90, 122, 74, .15);
    padding: 1.5rem;
  }

  .blog-card a {
    color: var(--primary);
    text-decoration: none;
    font-weight: 600;
  }

  .blog-card a:hover {
    text-decoration: underline;
  }

  /* ── Tag pills ─────────────────────────────────────────────────── */
  .tag-pill {
    display: inline-block;
    background: var(--primary-muted);
    color: var(--primary);
    font-size: .82rem;
    font-weight: 600;
    padding: .35rem 1.1rem;
    border-radius: 50px;
  }

  /* ── Bullet list ───────────────────────────────────────────────── */
  .bullet-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .bullet-list li {
    display: flex;
    gap: .85rem;
    color: var(--muted);
    line-height: 1.7;
    margin-bottom: .9rem;
  }

  .bullet-list li::before {
    content: '';
    flex-shrink: 0;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--primary);
    margin-top: .55rem;
  }

  /* ── Recipe card ───────────────────────────────────────────────── */
  .recipe-card {
    background: var(--card-bg);
    border-radius: var(--radius);
    border: 1px solid rgba(0, 0, 0, .07);
    overflow: hidden;
    box-shadow: 0 4px 24px rgba(0, 0, 0, .06);
  }

  .recipe-card img {
    width: 100%;
    height: 320px;
    object-fit: cover;
  }

  @media (min-width: 768px) {
    .recipe-card img {
      height: 100%;
      min-height: 340px;
    }
  }

  .recipe-ingredient {
    display: flex;
    gap: .6rem;
    font-size: .88rem;
    color: var(--muted);
    line-height: 1.6;
    margin-bottom: .5rem;
  }

  .recipe-ingredient::before {
    content: '•';
    color: var(--primary);
    font-size: 1.1rem;
    line-height: 1;
    margin-top: .1rem;
  }

  /* ── Gallery ───────────────────────────────────────────────────── */
  .gallery-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
  }

  @media (min-width: 768px) {
    .gallery-grid {
      grid-template-columns: repeat(3, 1fr);
    }
  }

  .gallery-item {
    aspect-ratio: 1;
    border-radius: var(--radius);
    overflow: hidden;
    cursor: pointer;
  }

  .gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform .5s ease;
  }

  .gallery-item:hover img {
    transform: scale(1.07);
  }

  /* ── Footer ────────────────────────────────────────────────────── */
  footer {
    background: var(--fg);
    color: rgba(255, 255, 255, .7);
    padding: 3.5rem 0 2rem;
  }

  footer h5 {
    font-family: var(--font-display);
    color: #fff;
    font-size: 1.2rem;
    margin-bottom: 1rem;
  }

  footer a {
    color: var(--accent);
    text-decoration: none;
  }

  footer a:hover {
    color: #fff;
  }

  .footer-brand {
    font-family: var(--font-display);
    font-size: 1.6rem;
    font-weight: 700;
    color: #fff;
  }

  .footer-divider {
    border-color: rgba(255, 255, 255, .1);
    margin: 2rem 0 1.2rem;
  }

  .footer-bottom {
    font-size: .82rem;
    color: rgba(255, 255, 255, .4);
  }

  /* ── Misc tweaks ───────────────────────────────────────────────── */
  .text-muted-custom {
    color: var(--muted);
    line-height: 1.8;
  }

  .divider-leaf {
    width: 48px;
    height: 3px;
    background: var(--primary);
    border-radius: 2px;
    margin: .75rem 0 1.5rem;
  }
</style>


<!-- ╔══════════════════════════════════╗
     ║           NAVBAR                 ║
     ╚══════════════════════════════════╝ -->



<!-- ╔══════════════════════════════════╗
     ║             HERO                 ║
     ╚══════════════════════════════════╝ -->
<section id="hero">
  <div class="hero-bg"></div>
  <div class="hero-content">
    <h1>Welcome to Our<br><span>GF Community</span></h1>
    <p>Join a vibrant community of people living their best gluten-free lives. Share recipes, find support, and discover new ways to enhance your health and happiness.</p>
    <a href="#about" class="btn-hero">Explore the Community</a>
  </div>
  <div class="scroll-pill">
    <span>Scroll</span>
    <div class="line"></div>
  </div>
</section>


<!-- ╔══════════════════════════════════╗
     ║         FEATURED BLOG            ║
     ╚══════════════════════════════════╝ -->
<section id="about" class="section-padding">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-md-6 animate-section">
        <p class="heading-accent">Stay Connected</p>
        <h2 class="heading-main">Featured Blog</h2>
        <div class="divider-leaf"></div>
        <p class="text-muted-custom mb-4">
          Explore our regularly updated blog filled with recipes, expert advice, community Q&A,
          and stories from people just like you who are thriving on a gluten-free lifestyle.
        </p>
        <div class="blog-card">
          <p class="fw-500 mb-2" style="font-weight:500;">Submit your name and email to</p>
          <a href="mailto:andrea@gflifestylecoach.com">andrea@gflifestylecoach.com</a>
          <p class="text-muted-custom mt-2 mb-0">to access blogs, recipes, Q&A, and more.</p>
        </div>
      </div>
      <div class="col-md-6 animate-section" style="transition-delay:.15s">
        <div class="img-rounded card-hover">
          <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?w=900&q=80"
            alt="Gluten-free baking" style="height:380px;object-fit:cover;width:100%;" />
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ╔══════════════════════════════════╗
     ║        COMMUNITY NEWS            ║
     ╚══════════════════════════════════╝ -->
<section id="news" class="section-padding section-alt-bg">
  <div class="container">
    <div class="row align-items-center g-5 flex-md-row-reverse">
      <div class="col-md-6 animate-section">
        <p class="heading-accent">What's Happening</p>
        <h2 class="heading-main">Community News</h2>
        <div class="divider-leaf"></div>
        <p class="text-muted-custom mb-3">
          Our gluten-free lifestyle community is a supportive space for those with celiac disease
          and gluten intolerance. Together, we celebrate the health improvements that come from
          living gluten-free and share the latest news, events, and recipes.
        </p>
        <p class="text-muted-custom mb-4">
          We gather information from gluten-free organisations, media outlets, internet resources,
          and community contributions to keep you informed and inspired.
        </p>
        <div class="d-flex flex-wrap gap-2">
          <span class="tag-pill">GF Expositions</span>
          <span class="tag-pill">Webinars</span>
          <span class="tag-pill">Online Talks</span>
          <span class="tag-pill">Cooking Demos</span>
        </div>
      </div>
      <div class="col-md-6 animate-section" style="transition-delay:.15s">
        <div class="img-rounded card-hover">
          <img src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?w=900&q=80"
            alt="Community summit" style="height:480px;object-fit:cover;width:100%;" />
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ╔══════════════════════════════════╗
     ║        CULINARY TIPS             ║
     ╚══════════════════════════════════╝ -->
<section class="section-padding">
  <div class="container">
    <div class="text-center mb-5 animate-section">
      <p class="heading-accent">Learn &amp; Grow</p>
      <h2 class="heading-main">Culinary Tips to Enhance Your <span class="accent">GF Life</span></h2>
      <p class="text-muted-custom mx-auto" style="max-width:560px;">
        From the kitchen to travel and self-care, we share practical tips to help you navigate
        every aspect of gluten-free living with confidence and joy.
      </p>
    </div>
    <div class="animate-section" style="transition-delay:.15s;">
      <div class="img-rounded card-hover" style="max-width:860px;margin:0 auto;">
        <img src="https://images.unsplash.com/photo-1464226184884-fa280b87c399?w=1200&q=80"
          alt="Culinary tips" style="width:100%;height:360px;object-fit:cover;" />
      </div>
    </div>
  </div>
</section>


<!-- ╔══════════════════════════════════╗
     ║     IN THE KITCHEN               ║
     ╚══════════════════════════════════╝ -->
<section id="kitchen" class="section-padding section-alt-bg">
  <div class="container">
    <div class="text-center mb-5 animate-section">
      <p class="heading-accent">In The Kitchen</p>
      <h2 class="heading-main">Cooking, Baking &amp; The Kitchen</h2>
      <div class="divider-leaf mx-auto"></div>
    </div>
    <div class="row align-items-center g-5">
      <div class="col-md-6 animate-section">
        <h3 class="mb-4" style="font-family:var(--font-display);font-size:1.7rem;">Organisation &amp; Safety</h3>
        <ul class="bullet-list">
          <li>Separate gluten and gluten-free foods clearly in your pantry and refrigerator.</li>
          <li>Label all GF items to avoid confusion, especially in shared households.</li>
          <li>Prevent cross-contamination by using dedicated cutting boards, toasters, and utensils.</li>
          <li>Establish kitchen rules when sharing space — clear communication keeps everyone safe.</li>
        </ul>
      </div>
      <div class="col-md-6 animate-section" style="transition-delay:.15s">
        <div class="img-rounded card-hover">
          <img src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=900&q=80"
            alt="Community garden" style="width:100%;height:380px;object-fit:cover;" />
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ╔══════════════════════════════════╗
     ║         FOOD KITS                ║
     ╚══════════════════════════════════╝ -->
<section class="section-padding">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-md-5 animate-section">
        <div class="img-rounded card-hover">
          <img src="https://images.unsplash.com/photo-1547592180-85f173990554?w=700&q=80"
            alt="Food kits to go" style="width:100%;height:360px;object-fit:cover;" />
        </div>
      </div>
      <div class="col-md-7 animate-section" style="transition-delay:.15s">
        <p class="heading-accent">On The Go</p>
        <h2 class="heading-main">Food Kits To Go</h2>
        <div class="divider-leaf"></div>
        <p class="text-muted-custom mb-3">
          Preparing meals and snacks ahead of time is key to staying gluten-free when you're at
          work, traveling, or simply on the move. A well-packed food kit keeps you nourished and
          avoids the temptation of unhealthy snacks or accidental gluten exposure.
        </p>
        <p class="text-muted-custom">
          Think sandwiches on GF bread, cheese and GF crackers, fresh salads, seasonal fruit,
          and your favourite gluten-free treats — all ready to grab and go.
        </p>
      </div>
    </div>
  </div>
</section>


<!-- ╔══════════════════════════════════╗
     ║           RECIPES                ║
     ╚══════════════════════════════════╝ -->
<section id="recipes" class="section-padding section-alt-bg">
  <div class="container">
    <div class="text-center mb-5 animate-section">
      <p class="heading-accent">Try Something New</p>
      <h2 class="heading-main">Recipes for Your Busy Lifestyle</h2>
      <div class="divider-leaf mx-auto"></div>
    </div>
    <div class="animate-section" style="transition-delay:.12s; max-width:860px; margin:0 auto;">
      <div class="recipe-card card-hover">
        <div class="row g-0">
          <div class="col-md-5">
            <img src="https://images.unsplash.com/photo-1525351484163-7529414344d8?w=700&q=80"
              alt="Corn and Cheese Frittata" />
          </div>
          <div class="col-md-7">
            <div class="p-4 p-md-5">
              <h3 class="mb-3" style="font-family:var(--font-display);font-size:1.7rem;">
                Quick GF Corn &amp; Cheese Frittata
              </h3>
              <div class="recipe-ingredient">6 large eggs, beaten</div>
              <div class="recipe-ingredient">1 cup fresh or frozen corn kernels</div>
              <div class="recipe-ingredient">½ cup shredded cheddar cheese</div>
              <div class="recipe-ingredient">2 tbsp butter or olive oil</div>
              <div class="recipe-ingredient">Salt, pepper &amp; herbs to taste</div>
              <hr style="border-color:rgba(0,0,0,.08);margin:1.25rem 0;" />
              <p class="text-muted-custom mb-0" style="font-size:.9rem;">
                <strong style="color:var(--fg);">Directions:</strong> Sauté corn in butter, pour
                in beaten eggs, top with cheese. Cook on medium until set, then broil 2–3 minutes
                until golden. Garnish with pecans and serve with fresh veggies.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ╔══════════════════════════════════╗
     ║           GALLERY                ║
     ╚══════════════════════════════════╝ -->
<section id="gallery" class="section-padding">
  <div class="container">
    <div class="text-center mb-5 animate-section">
      <p class="heading-accent">Our Community</p>
      <h2 class="heading-main">Life, Food &amp; Connection</h2>
      <div class="divider-leaf mx-auto"></div>
    </div>
    <div class="gallery-grid animate-section" style="transition-delay:.1s">
      <div class="gallery-item card-hover">
        <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=600&q=80" alt="Cooking class" loading="lazy" />
      </div>
      <div class="gallery-item card-hover">
        <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?w=600&q=80" alt="GF baking" loading="lazy" />
      </div>
      <div class="gallery-item card-hover">
        <img src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?w=600&q=80" alt="Community summit" loading="lazy" />
      </div>
      <div class="gallery-item card-hover">
        <img src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=600&q=80" alt="Community garden" loading="lazy" />
      </div>
      <div class="gallery-item card-hover">
        <img src="https://images.unsplash.com/photo-1525351484163-7529414344d8?w=600&q=80" alt="GF recipe" loading="lazy" />
      </div>
      <div class="gallery-item card-hover">
        <img src="https://images.unsplash.com/photo-1464226184884-fa280b87c399?w=600&q=80" alt="Culinary tips" loading="lazy" />
      </div>
    </div>
  </div>
</section>


<!-- ╔══════════════════════════════════╗
     ║             FOOTER               ║
     ╚══════════════════════════════════╝ -->
<!-- <footer>
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="footer-brand mb-2">🌿 GF Community</div>
        <p style="font-size:.9rem;line-height:1.7;">
          A supportive space for people living gluten-free lives — celebrating health, food, and
          community.
        </p>
      </div>
      <div class="col-md-2 col-6">
        <h5>Navigate</h5>
        <ul class="list-unstyled" style="font-size:.88rem;line-height:2.1;">
          <li><a href="#about">Blog</a></li>
          <li><a href="#news">Community</a></li>
          <li><a href="#kitchen">Kitchen Tips</a></li>
          <li><a href="#recipes">Recipes</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-6">
        <h5>Connect</h5>
        <ul class="list-unstyled" style="font-size:.88rem;line-height:2.1;">
          <li><a href="mailto:andrea@gflifestylecoach.com">Email Andrea</a></li>
          <li><a href="#">Newsletter</a></li>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">Facebook</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>Stay Updated</h5>
        <p style="font-size:.88rem;margin-bottom:.8rem;">
          Get weekly GF tips and recipes in your inbox.
        </p>
        <div class="input-group">
          <input type="email" class="form-control" placeholder="your@email.com"
                 style="background:#2a2a27;border-color:rgba(255,255,255,.15);color:#fff;font-size:.85rem;" />
          <button class="btn" style="background:var(--primary);color:#fff;font-size:.85rem;">
            <i class="bi bi-arrow-right"></i>
          </button>
        </div>
      </div>
    </div>
    <hr class="footer-divider" />
    <p class="footer-bottom text-center mb-0">
      © 2025 GF Lifestyle Community. Made with 💚 for the gluten-free community.
    </p>
  </div>
</footer> -->


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // Intersection Observer — animate sections on scroll
  const animEls = document.querySelectorAll('.animate-section');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        observer.unobserve(e.target);
      }
    });
  }, {
    threshold: 0.12
  });
  animEls.forEach(el => observer.observe(el));

  // Navbar scroll shadow
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    navbar.style.boxShadow = window.scrollY > 20 ?
      '0 2px 20px rgba(0,0,0,.08)' : 'none';
  });
</script>
<?php include 'include/footer.php'; ?>
<?php include 'include/script.php'; ?>