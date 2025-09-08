<nav class="site-nav bb" aria-label="Main navigation">
    <ul class="nav-links">
        <li><a href="{{ url('/contact') }}">Contact</a></li>
        <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
        <li><a href="{{ url('/about') }}">About</a></li>
    </ul>

    {{-- Mobile menu toggle --}}
    <button class="nav-toggle">☰</button>
</nav>

<script>
document.addEventListener("scroll", () => {
    const nav = document.querySelector(".site-nav");
    const triggerPoint = window.innerHeight * 0.5; // 50vh
    if (window.scrollY > triggerPoint) {
        nav.classList.add("scrolled");
    } else {
        nav.classList.remove("scrolled");
    }
});
</script>

<script>
  const toggle = document.querySelector(".nav-toggle");
  const links = document.querySelector(".nav-links");

  toggle.addEventListener("click", () => {
    links.classList.toggle("active");
  });
</script>
