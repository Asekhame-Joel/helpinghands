<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Employers — Helping Hands Health Group</title>
  <meta name="description"
    content="We support care homes, hospitals, clinics and healthcare organisations with compliant, dependable healthcare professionals." />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            navy: { DEFAULT: '#0B1F3A', 700: '#13315c', 600: '#1c4170' },
            teal: { DEFAULT: '#0E8F8F', 600: '#0c7a7a', 50: '#e6f5f5' },
            green: { care: '#1F9D55' },
            gold: { DEFAULT: '#F5A623', 600: '#dc9013' },
            ink: '#0f172a',
            cloud: '#F7FAFC',
            line: '#e6ebf2'
          },
          fontFamily: {
            display: ['"Plus Jakarta Sans"', 'sans-serif'],
            sans: ['Inter', 'sans-serif']
          },
          boxShadow: {
            soft: '0 10px 30px -12px rgba(11,31,58,0.15)',
            card: '0 4px 24px -8px rgba(11,31,58,0.12)'
          }
        }
      }
    }
  </script>
  <style>
    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Inter', sans-serif;
      color: #0f172a;
      background: #fff;
    }

    h1,
    h2,
    h3,
    h4 {
      font-family: 'Plus Jakarta Sans', sans-serif;
      letter-spacing: -0.02em;
    }

    .gradient-hero {
      background:
        radial-gradient(1200px 600px at 80% -10%, rgba(14, 143, 143, 0.18), transparent 60%),
        radial-gradient(900px 500px at -10% 20%, rgba(11, 31, 58, 0.10), transparent 60%),
        linear-gradient(180deg, #F7FAFC 0%, #ffffff 100%);
    }

    .reveal {
      opacity: 0;
      transform: translateY(20px);
      transition: all .8s ease;
    }

    .reveal.in {
      opacity: 1;
      transform: none;
    }

    .nav-link {
      position: relative;
    }

    .nav-link::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: -6px;
      height: 2px;
      width: 0;
      background: #0E8F8F;
      transition: width .25s;
    }

    .nav-link:hover::after,
    .nav-link.active::after {
      width: 100%;
    }

    .chip {
      display: inline-flex;
      align-items: center;
      gap: .5rem;
      padding: .4rem .8rem;
      border-radius: 9999px;
      background: #e6f5f5;
      color: #0c7a7a;
      font-weight: 600;
      font-size: .78rem;
    }

    .btn-primary {
      background: #F5A623;
      color: #0B1F3A;
    }

    .btn-primary:hover {
      background: #dc9013;
    }

    .btn-navy {
      background: #0B1F3A;
      color: #fff;
    }

    .btn-navy:hover {
      background: #13315c;
    }

    .btn-outline {
      border: 1.5px solid #0B1F3A;
      color: #0B1F3A;
    }

    .btn-outline:hover {
      background: #0B1F3A;
      color: #fff;
    }

    .card-hover {
      transition: transform .3s ease, box-shadow .3s ease, border-color .3s;
    }

    .card-hover:hover {
      transform: translateY(-4px);
      box-shadow: 0 18px 40px -16px rgba(11, 31, 58, 0.22);
      border-color: #0E8F8F;
    }
  </style>
</head>

<body class="antialiased">

  <header id="site-header" class="sticky top-0 z-50 bg-white/85 backdrop-blur border-b border-line">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-18 py-3 flex items-center justify-between">
      <a href="index.php" class="flex items-center gap-3">
        <div
          class="h-10 w-10 rounded-xl bg-gradient-to-br from-navy to-teal text-white grid place-items-center font-bold shadow-soft">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
            stroke-linecap="round" stroke-linejoin="round">
            <path
              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
          </svg>
        </div>
        <div class="leading-tight">
          <div class="font-display font-extrabold text-navy text-[15px]">Helping Hands</div>
          <div class="text-[11px] tracking-[0.18em] text-teal font-semibold uppercase">Health Group</div>
        </div>
      </a>
      <nav class="hidden lg:flex items-center gap-7"><a href="index.php"
          class="nav-link text-slate-700 hover:text-navy text-sm font-semibold">Home</a>
        <a href="about.php" class="nav-link text-slate-700 hover:text-navy text-sm font-semibold">About</a>
        <a href="employers.php" class="nav-link active text-navy text-sm font-semibold">Employers</a>
        <a href="job-seekers.php" class="nav-link text-slate-700 hover:text-navy text-sm font-semibold">Job Seekers</a>
        <a href="services.php" class="nav-link text-slate-700 hover:text-navy text-sm font-semibold">Services</a>
        <a href="jobs.php" class="nav-link text-slate-700 hover:text-navy text-sm font-semibold">Jobs</a>
        <a href="training.php" class="nav-link text-slate-700 hover:text-navy text-sm font-semibold">Training</a>
        <a href="contact.php" class="nav-link text-slate-700 hover:text-navy text-sm font-semibold">Contact</a>
      </nav>
      <div class="flex items-center gap-3">
        <a href="contact.php"
          class="hidden sm:inline-flex btn-primary px-5 py-2.5 rounded-full text-sm font-bold shadow-soft transition">Get
          Started</a>
        <button id="menuBtn" class="lg:hidden p-2 rounded-md border border-line" aria-label="Menu">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#0B1F3A" stroke-width="2">
            <path d="M3 6h18M3 12h18M3 18h18" />
          </svg>
        </button>
      </div>
    </div>
    <div id="mobileNav" class="hidden lg:hidden border-t border-line bg-white">
      <div class="px-4 py-4 space-y-2"><a href="index.php" class="block py-2 text-slate-700 font-semibold">Home</a><a
          href="about.php" class="block py-2 text-slate-700 font-semibold">About</a><a href="employers.php"
          class="block py-2 text-slate-700 font-semibold">Employers</a><a href="job-seekers.php"
          class="block py-2 text-slate-700 font-semibold">Job Seekers</a><a href="services.php"
          class="block py-2 text-slate-700 font-semibold">Services</a><a href="jobs.php"
          class="block py-2 text-slate-700 font-semibold">Jobs</a><a href="training.php"
          class="block py-2 text-slate-700 font-semibold">Training</a><a href="contact.php"
          class="block py-2 text-slate-700 font-semibold">Contact</a>
        <a href="contact.php" class="block mt-2 btn-primary text-center px-5 py-2.5 rounded-full font-bold">Get
          Started</a>
      </div>
    </div>
  </header>

  <section class="gradient-hero py-20">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center reveal">
      <span class="chip">Employers</span>
      <h1 class="mt-5 text-4xl md:text-6xl font-extrabold text-navy">Reliable Healthcare Staffing When You Need It Most
      </h1>
      <p class="mt-5 text-lg text-slate-600">We support care homes, hospitals, clinics and healthcare organisations with
        compliant, dependable healthcare professionals.</p>
    </div>
  </section>
  <section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto text-center mb-14 reveal">
        <span class="chip">Employers</span>
        <h2 class="mt-4 text-3xl md:text-5xl font-extrabold text-navy">Reliable Healthcare Staffing When You Need It
          Most</h2>
        <p class="mt-4 text-slate-600 text-lg leading-relaxed">We support care homes, hospitals, clinics and healthcare
          organisations with compliant, dependable healthcare professionals.</p>
      </div>
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="card-hover bg-white border border-line rounded-2xl p-7 reveal">
          <div class="h-12 w-12 rounded-xl bg-teal-50 text-teal grid place-items-center mb-5">✓</div>
          <h3 class="text-lg font-bold text-navy mb-2">Temporary Staffing</h3>
          <p class="text-slate-600 text-sm leading-relaxed">Short-term and urgent staffing cover for busy healthcare
            environments.</p>
        </div>
        <div class="card-hover bg-white border border-line rounded-2xl p-7 reveal">
          <div class="h-12 w-12 rounded-xl bg-teal-50 text-teal grid place-items-center mb-5">✓</div>
          <h3 class="text-lg font-bold text-navy mb-2">Permanent Recruitment</h3>
          <p class="text-slate-600 text-sm leading-relaxed">Find long-term healthcare staff who match your culture and
            care standards.</p>
        </div>
        <div class="card-hover bg-white border border-line rounded-2xl p-7 reveal">
          <div class="h-12 w-12 rounded-xl bg-teal-50 text-teal grid place-items-center mb-5">✓</div>
          <h3 class="text-lg font-bold text-navy mb-2">Compliance Checks</h3>
          <p class="text-slate-600 text-sm leading-relaxed">DBS, right-to-work, references and role suitability checks.
          </p>
        </div>
        <div class="card-hover bg-white border border-line rounded-2xl p-7 reveal">
          <div class="h-12 w-12 rounded-xl bg-teal-50 text-teal grid place-items-center mb-5">✓</div>
          <h3 class="text-lg font-bold text-navy mb-2">Fast Response</h3>
          <p class="text-slate-600 text-sm leading-relaxed">Support for urgent staffing gaps and planned recruitment
            needs.</p>
        </div>
        <div class="card-hover bg-white border border-line rounded-2xl p-7 reveal">
          <div class="h-12 w-12 rounded-xl bg-teal-50 text-teal grid place-items-center mb-5">✓</div>
          <h3 class="text-lg font-bold text-navy mb-2">Vetted Candidates</h3>
          <p class="text-slate-600 text-sm leading-relaxed">Professionals screened for reliability, skill and
            compassion.</p>
        </div>
        <div class="card-hover bg-white border border-line rounded-2xl p-7 reveal">
          <div class="h-12 w-12 rounded-xl bg-teal-50 text-teal grid place-items-center mb-5">✓</div>
          <h3 class="text-lg font-bold text-navy mb-2">Ongoing Support</h3>
          <p class="text-slate-600 text-sm leading-relaxed">Communication before, during and after placement.</p>
        </div>
      </div>
      <div class="mt-12 text-center">
        <a href="contact.php" class="btn-primary px-7 py-3.5 rounded-full font-bold text-sm shadow-soft">Contact Us</a>
      </div>
    </div>
  </section>
  <section class="py-20 bg-cloud">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
      <div
        class="reveal relative overflow-hidden bg-gradient-to-br from-navy to-teal rounded-[2rem] p-10 md:p-14 text-center text-white shadow-soft">
        <div class="absolute -top-10 -right-10 h-60 w-60 bg-gold/30 rounded-full blur-3xl"></div>
        <h2 class="text-3xl md:text-5xl font-extrabold leading-tight">Ready to Hire Trusted Healthcare Staff or Start
          Your Healthcare Career?</h2>
        <p class="mt-5 text-slate-200 max-w-2xl mx-auto">Whether you're a healthcare provider or a care professional —
          we're here to help you take the next step.</p>
        <div class="mt-8 flex flex-wrap justify-center gap-3">
          <a href="contact.php" class="btn-primary px-7 py-3.5 rounded-full font-bold text-sm">Contact Us</a>
          <a href="jobs.php" class="bg-white text-navy px-7 py-3.5 rounded-full font-bold text-sm hover:bg-cloud">Browse
            Jobs</a>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-navy text-slate-300 mt-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 grid md:grid-cols-4 gap-10">
      <div>
        <div class="flex items-center gap-3 mb-4">
          <div
            class="h-10 w-10 rounded-xl bg-gradient-to-br from-teal to-gold grid place-items-center text-white font-bold">
            HH</div>
          <div class="leading-tight">
            <div class="font-display font-extrabold text-white">Helping Hands</div>
            <div class="text-[11px] tracking-[0.18em] text-teal-50/80 uppercase">Health Group</div>
          </div>
        </div>
        <p class="text-sm leading-relaxed text-slate-400">Compassionate healthcare staffing and support across the UK.
          Connecting trusted providers with skilled, compliant professionals.</p>
        <div class="flex gap-3 mt-5">
          <a href="#" class="h-9 w-9 rounded-full bg-white/10 hover:bg-teal grid place-items-center transition"><svg
              width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M22 12a10 10 0 1 0-11.6 9.9v-7H8v-2.9h2.4V9.8c0-2.4 1.4-3.7 3.6-3.7 1 0 2.1.2 2.1.2v2.3h-1.2c-1.2 0-1.5.7-1.5 1.5v1.8h2.6L15.6 15h-2.2v7A10 10 0 0 0 22 12z" />
            </svg></a>
          <a href="#" class="h-9 w-9 rounded-full bg-white/10 hover:bg-teal grid place-items-center transition"><svg
              width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zM8.3 18.3H5.7V9.7h2.6v8.6zM7 8.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm11.3 9.8h-2.6v-4.6c0-1.1-.4-1.8-1.4-1.8-.8 0-1.2.5-1.4 1-.1.2-.1.4-.1.7v4.7h-2.6V9.7h2.6v1.1c.3-.5 1-1.3 2.4-1.3 1.8 0 3.1 1.1 3.1 3.6v5.2z" />
            </svg></a>
          <a href="#" class="h-9 w-9 rounded-full bg-white/10 hover:bg-teal grid place-items-center transition"><svg
              width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M23 3a10.9 10.9 0 0 1-3.14 1.53A4.48 4.48 0 0 0 12 8.5v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5 0-.28 0-.55-.08-.83A7.72 7.72 0 0 0 23 3z" />
            </svg></a>
        </div>
      </div>
      <div>
        <h4 class="text-white font-display font-bold mb-4">Quick Links</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="index.php" class="hover:text-teal">Home</a></li>
          <li><a href="about.php" class="hover:text-teal">About Us</a></li>
          <li><a href="employers.php" class="hover:text-teal">Employers</a></li>
          <li><a href="job-seekers.php" class="hover:text-teal">Job Seekers</a></li>
          <li><a href="jobs.php" class="hover:text-teal">Job Board</a></li>
        </ul>
      </div>
      <div>
        <h4 class="text-white font-display font-bold mb-4">Services</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="services.php" class="hover:text-teal">Nursing Recruitment</a></li>
          <li><a href="services.php" class="hover:text-teal">Care Assistant Staffing</a></li>
          <li><a href="services.php" class="hover:text-teal">Support Worker Staffing</a></li>
          <li><a href="services.php" class="hover:text-teal">Domiciliary Care</a></li>
          <li><a href="training.php" class="hover:text-teal">Training & Compliance</a></li>
        </ul>
      </div>
      <div>
        <h4 class="text-white font-display font-bold mb-4">Contact</h4>
        <ul class="space-y-3 text-sm text-slate-400">
          <li class="flex gap-3"><span class="text-teal">✉</span> enquiries@helpinghandshealthgroup.co.uk</li>
          <li class="flex gap-3"><span class="text-teal">☏</span> +44 (0) 20 0000 0000</li>
          <li class="flex gap-3"><span class="text-teal">⌂</span> London, United Kingdom</li>
        </ul>
      </div>
    </div>
    <div class="border-t border-white/10">
      <div
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex flex-col md:flex-row items-center justify-between gap-3">
        <p class="text-xs text-slate-500">© <?php echo date("Y"); ?> Helping Hands Health Group. All rights reserved.
        </p>
        <div class="flex gap-5 text-xs text-slate-500">
          <a href="#" class="hover:text-teal">Privacy</a><a href="#" class="hover:text-teal">Terms</a><a href="#"
            class="hover:text-teal">Cookies</a>
        </div>
      </div>
    </div>
  </footer>
  <script>
    const btn = document.getElementById('menuBtn'), m = document.getElementById('mobileNav');
    if (btn) btn.addEventListener('click', () => m.classList.toggle('hidden'));
    const io = new IntersectionObserver(es => es.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } }), { threshold: .12 });
    document.querySelectorAll('.reveal').forEach(el => io.observe(el));
  </script>
</body>

</html>