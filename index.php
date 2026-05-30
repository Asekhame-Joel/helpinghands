<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Home — Helping Hands Health Group</title>
<meta name="description" content="Compassionate UK healthcare staffing and care support — Helping Hands Health Group."/>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<script>
tailwind.config = {
  theme: {
    extend: {
      colors: {
        navy: { DEFAULT:'#0B1F3A', 700:'#13315c', 600:'#1c4170' },
        teal: { DEFAULT:'#0E8F8F', 600:'#0c7a7a', 50:'#e6f5f5' },
        green: { care:'#1F9D55' },
        gold: { DEFAULT:'#F5A623', 600:'#dc9013' },
        ink: '#0f172a',
        cloud: '#F7FAFC',
        line: '#e6ebf2'
      },
      fontFamily: {
        display: ['"Plus Jakarta Sans"','sans-serif'],
        sans: ['Inter','sans-serif']
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
  html { scroll-behavior:smooth; }
  body { font-family:'Inter',sans-serif; color:#0f172a; background:#fff; }
  h1,h2,h3,h4 { font-family:'Plus Jakarta Sans',sans-serif; letter-spacing:-0.02em; }
  .gradient-hero {
    background:
      radial-gradient(1200px 600px at 80% -10%, rgba(14,143,143,0.18), transparent 60%),
      radial-gradient(900px 500px at -10% 20%, rgba(11,31,58,0.10), transparent 60%),
      linear-gradient(180deg,#F7FAFC 0%, #ffffff 100%);
  }
  .reveal { opacity:0; transform:translateY(20px); transition:all .8s ease; }
  .reveal.in { opacity:1; transform:none; }
  .nav-link { position:relative; }
  .nav-link::after { content:''; position:absolute; left:0; bottom:-6px; height:2px; width:0; background:#0E8F8F; transition:width .25s; }
  .nav-link:hover::after, .nav-link.active::after { width:100%; }
  .chip { display:inline-flex; align-items:center; gap:.5rem; padding:.4rem .8rem; border-radius:9999px; background:#e6f5f5; color:#0c7a7a; font-weight:600; font-size:.78rem; }
  .btn-primary { background:#F5A623; color:#0B1F3A; }
  .btn-primary:hover { background:#dc9013; }
  .btn-navy { background:#0B1F3A; color:#fff; }
  .btn-navy:hover { background:#13315c; }
  .btn-outline { border:1.5px solid #0B1F3A; color:#0B1F3A; }
  .btn-outline:hover { background:#0B1F3A; color:#fff; }
  .card-hover { transition: transform .3s ease, box-shadow .3s ease, border-color .3s; }
  .card-hover:hover { transform: translateY(-4px); box-shadow:0 18px 40px -16px rgba(11,31,58,0.22); border-color:#0E8F8F; }
</style>
</head>
<body class="antialiased">

<header id="site-header" class="sticky top-0 z-50 bg-white/85 backdrop-blur border-b border-line">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-18 py-3 flex items-center justify-between">
    <a href="index.php" class="flex items-center gap-3">
      <div class="h-10 w-10 rounded-xl bg-gradient-to-br from-navy to-teal text-white grid place-items-center font-bold shadow-soft">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
      </div>
      <div class="leading-tight">
        <div class="font-display font-extrabold text-navy text-[15px]">Helping Hands</div>
        <div class="text-[11px] tracking-[0.18em] text-teal font-semibold uppercase">Health Group</div>
      </div>
    </a>
    <nav class="hidden lg:flex items-center gap-7"><a href="index.php" class="nav-link active text-navy text-sm font-semibold">Home</a>
<a href="about.php" class="nav-link text-slate-700 hover:text-navy text-sm font-semibold">About</a>
<a href="employers.php" class="nav-link text-slate-700 hover:text-navy text-sm font-semibold">Employers</a>
<a href="job-seekers.php" class="nav-link text-slate-700 hover:text-navy text-sm font-semibold">Job Seekers</a>
<a href="services.php" class="nav-link text-slate-700 hover:text-navy text-sm font-semibold">Services</a>
<a href="jobs.php" class="nav-link text-slate-700 hover:text-navy text-sm font-semibold">Jobs</a>
<a href="training.php" class="nav-link text-slate-700 hover:text-navy text-sm font-semibold">Training</a>
<a href="contact.php" class="nav-link text-slate-700 hover:text-navy text-sm font-semibold">Contact</a>
</nav>
    <div class="flex items-center gap-3">
      <a href="contact.php" class="hidden sm:inline-flex btn-primary px-5 py-2.5 rounded-full text-sm font-bold shadow-soft transition">Get Started</a>
      <button id="menuBtn" class="lg:hidden p-2 rounded-md border border-line" aria-label="Menu">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#0B1F3A" stroke-width="2"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
      </button>
    </div>
  </div>
  <div id="mobileNav" class="hidden lg:hidden border-t border-line bg-white">
    <div class="px-4 py-4 space-y-2"><a href="index.php" class="block py-2 text-slate-700 font-semibold">Home</a><a href="about.php" class="block py-2 text-slate-700 font-semibold">About</a><a href="employers.php" class="block py-2 text-slate-700 font-semibold">Employers</a><a href="job-seekers.php" class="block py-2 text-slate-700 font-semibold">Job Seekers</a><a href="services.php" class="block py-2 text-slate-700 font-semibold">Services</a><a href="jobs.php" class="block py-2 text-slate-700 font-semibold">Jobs</a><a href="training.php" class="block py-2 text-slate-700 font-semibold">Training</a><a href="contact.php" class="block py-2 text-slate-700 font-semibold">Contact</a>
      <a href="contact.php" class="block mt-2 btn-primary text-center px-5 py-2.5 rounded-full font-bold">Get Started</a>
    </div>
  </div>
</header>

<section class="gradient-hero relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-20 lg:pt-24 lg:pb-28 grid lg:grid-cols-12 gap-12 items-center">
    <div class="lg:col-span-7 reveal">
      <span class="chip">★ Trusted UK Healthcare Recruitment</span>
      <h1 class="mt-5 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-navy leading-[1.05]">
        Compassionate Healthcare <span class="text-teal">Staffing</span> and Support Across the UK
      </h1>
      <p class="mt-6 text-lg text-slate-600 leading-relaxed max-w-2xl">
        Helping Hands Health Group connects trusted healthcare providers with skilled, compassionate, and compliant care professionals — when and where they're needed most.
      </p>
      <div class="mt-8 flex flex-wrap gap-3">
        <a href="employers.php" class="btn-navy px-6 py-3.5 rounded-full font-bold text-sm shadow-soft">Hire Healthcare Staff</a>
        <a href="jobs.php" class="btn-primary px-6 py-3.5 rounded-full font-bold text-sm shadow-soft">Find Healthcare Jobs</a>
      </div>
      <div class="mt-10 grid sm:grid-cols-2 gap-3 max-w-xl">
        <div class="flex items-center gap-2 text-sm text-slate-700"><span class="h-6 w-6 rounded-full bg-teal-50 text-teal grid place-items-center"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>UK Healthcare Recruitment</div><div class="flex items-center gap-2 text-sm text-slate-700"><span class="h-6 w-6 rounded-full bg-teal-50 text-teal grid place-items-center"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>Vetted Care Professionals</div><div class="flex items-center gap-2 text-sm text-slate-700"><span class="h-6 w-6 rounded-full bg-teal-50 text-teal grid place-items-center"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>Temporary & Permanent Staffing</div><div class="flex items-center gap-2 text-sm text-slate-700"><span class="h-6 w-6 rounded-full bg-teal-50 text-teal grid place-items-center"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>Compliance-Focused Process</div>
      </div>
    </div>
    <div class="lg:col-span-5 reveal">
      <div class="relative">
        <div class="absolute -inset-4 bg-gradient-to-br from-teal/20 to-gold/20 rounded-[2.5rem] blur-2xl"></div>
        <div class="relative rounded-[2rem] overflow-hidden shadow-soft border-8 border-white">
          <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=900&q=80" alt="Healthcare team" class="w-full h-[520px] object-cover"/>
        </div>
        <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl p-4 shadow-card flex items-center gap-3 max-w-xs">
          <div class="h-10 w-10 rounded-full bg-emerald-50 text-green-care grid place-items-center"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
          <div>
            <div class="text-xs text-slate-500">DBS & Right-to-Work</div>
            <div class="font-bold text-navy text-sm">100% Compliance Checked</div>
          </div>
        </div>
        <div class="absolute -top-4 -right-4 bg-navy text-white rounded-2xl p-4 shadow-card max-w-[200px]">
          <div class="text-3xl font-extrabold text-gold">24/7</div>
          <div class="text-xs text-slate-300">Emergency staffing across the UK</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

    <div class="card-hover bg-cloud border border-line rounded-2xl p-6 reveal">
      <div class="text-4xl font-extrabold text-navy">24/7</div>
      <div class="mt-2 text-sm font-semibold text-teal uppercase tracking-wider">Staffing Support</div>
      <p class="mt-2 text-sm text-slate-600">Round-the-clock cover for hospitals, care homes and clinics.</p>
    </div>

    <div class="card-hover bg-cloud border border-line rounded-2xl p-6 reveal">
      <div class="text-4xl font-extrabold text-navy">2,500+</div>
      <div class="mt-2 text-sm font-semibold text-teal uppercase tracking-wider">Qualified Professionals</div>
      <p class="mt-2 text-sm text-slate-600">Vetted nurses, carers and support workers ready to work.</p>
    </div>

    <div class="card-hover bg-cloud border border-line rounded-2xl p-6 reveal">
      <div class="text-4xl font-extrabold text-navy">48hr</div>
      <div class="mt-2 text-sm font-semibold text-teal uppercase tracking-wider">Fast Placement</div>
      <p class="mt-2 text-sm text-slate-600">Typical placement turnaround for urgent staffing requests.</p>
    </div>

    <div class="card-hover bg-cloud border border-line rounded-2xl p-6 reveal">
      <div class="text-4xl font-extrabold text-navy">UK-wide</div>
      <div class="mt-2 text-sm font-semibold text-teal uppercase tracking-wider">Coverage</div>
      <p class="mt-2 text-sm text-slate-600">Serving healthcare providers across England, Scotland, Wales & NI.</p>
    </div>

  </div>
</section>

<section class="py-20 bg-cloud">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-12 items-center">
    <div class="reveal">
      <div class="relative rounded-3xl overflow-hidden shadow-soft">
        <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=900&q=80" alt="Care" class="w-full h-[480px] object-cover"/>
      </div>
    </div>
    <div class="reveal">
      <span class="chip">About Helping Hands</span>
      <h2 class="mt-4 text-3xl md:text-4xl font-extrabold text-navy leading-tight">Healthcare Support Built on Trust, Compassion, and Reliability</h2>
      <p class="mt-5 text-slate-600 leading-relaxed">Helping Hands Health Group is dedicated to supporting healthcare organisations with dependable staffing solutions while helping healthcare professionals find rewarding opportunities across the UK.</p>
      <div class="mt-6 grid grid-cols-2 gap-4">
<div class="flex items-start gap-3"><span class="h-9 w-9 rounded-lg bg-teal-50 text-teal grid place-items-center"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span><div><div class="font-bold text-navy text-sm">Compassion-First</div><div class="text-xs text-slate-500">People at the centre of every placement</div></div></div><div class="flex items-start gap-3"><span class="h-9 w-9 rounded-lg bg-teal-50 text-teal grid place-items-center"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span><div><div class="font-bold text-navy text-sm">Fully Compliant</div><div class="text-xs text-slate-500">DBS, RTW & references checked</div></div></div><div class="flex items-start gap-3"><span class="h-9 w-9 rounded-lg bg-teal-50 text-teal grid place-items-center"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></span><div><div class="font-bold text-navy text-sm">Trusted Network</div><div class="text-xs text-slate-500">Healthcare professionals UK-wide</div></div></div><div class="flex items-start gap-3"><span class="h-9 w-9 rounded-lg bg-teal-50 text-teal grid place-items-center"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15 8.5 22 9.3 17 14.1 18.2 21 12 17.8 5.8 21 7 14.1 2 9.3 9 8.5 12 2"/></svg></span><div><div class="font-bold text-navy text-sm">Excellence</div><div class="text-xs text-slate-500">Quality you can rely on</div></div></div>
      </div>
      <a href="about.php" class="inline-flex items-center gap-2 mt-8 btn-navy px-6 py-3 rounded-full font-bold text-sm">Learn More About Us →</a>
    </div>
  </div>
</section>

<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="max-w-3xl mx-auto text-center mb-14 reveal">
      <span class="chip">Our Services</span>
      <h2 class="mt-4 text-3xl md:text-5xl font-extrabold text-navy">Comprehensive Healthcare Staffing Solutions</h2>
      <p class="mt-4 text-slate-600 text-lg leading-relaxed">From temporary cover to permanent placements — we provide trusted talent for every healthcare setting.</p>
    </div>
    
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
      
    <div class="card-hover bg-white border border-line rounded-2xl p-7 reveal">
      <div class="h-12 w-12 rounded-xl bg-teal-50 text-teal grid place-items-center mb-5"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
      <h3 class="text-lg font-bold text-navy mb-2">Healthcare Staffing</h3>
      <p class="text-slate-600 text-sm leading-relaxed">End-to-end staffing partnership for care providers across the UK.</p>
    </div>
    
      
    <div class="card-hover bg-white border border-line rounded-2xl p-7 reveal">
      <div class="h-12 w-12 rounded-xl bg-navy/5 text-navy grid place-items-center mb-5"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></div>
      <h3 class="text-lg font-bold text-navy mb-2">Nursing Recruitment</h3>
      <p class="text-slate-600 text-sm leading-relaxed">Qualified registered nurses for hospitals, clinics, and care settings.</p>
    </div>
    
      
    <div class="card-hover bg-white border border-line rounded-2xl p-7 reveal">
      <div class="h-12 w-12 rounded-xl bg-amber-50 text-gold grid place-items-center mb-5"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
      <h3 class="text-lg font-bold text-navy mb-2">Care Assistant Recruitment</h3>
      <p class="text-slate-600 text-sm leading-relaxed">Reliable, trained care assistants for day-to-day care delivery.</p>
    </div>
    
      
    <div class="card-hover bg-white border border-line rounded-2xl p-7 reveal">
      <div class="h-12 w-12 rounded-xl bg-emerald-50 text-green-care grid place-items-center mb-5"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
      <h3 class="text-lg font-bold text-navy mb-2">Support Worker Recruitment</h3>
      <p class="text-slate-600 text-sm leading-relaxed">Compassionate support workers for community and residential services.</p>
    </div>
    
      
    <div class="card-hover bg-white border border-line rounded-2xl p-7 reveal">
      <div class="h-12 w-12 rounded-xl bg-teal-50 text-teal grid place-items-center mb-5"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
      <h3 class="text-lg font-bold text-navy mb-2">Temporary Staffing</h3>
      <p class="text-slate-600 text-sm leading-relaxed">Flexible cover for absences, peak demand and emergencies.</p>
    </div>
    
      
    <div class="card-hover bg-white border border-line rounded-2xl p-7 reveal">
      <div class="h-12 w-12 rounded-xl bg-navy/5 text-navy grid place-items-center mb-5"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg></div>
      <h3 class="text-lg font-bold text-navy mb-2">Permanent Recruitment</h3>
      <p class="text-slate-600 text-sm leading-relaxed">Long-term placements aligned with your culture and clinical needs.</p>
    </div>
    
      
    <div class="card-hover bg-white border border-line rounded-2xl p-7 reveal">
      <div class="h-12 w-12 rounded-xl bg-amber-50 text-gold grid place-items-center mb-5"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
      <h3 class="text-lg font-bold text-navy mb-2">Domiciliary Care Support</h3>
      <p class="text-slate-600 text-sm leading-relaxed">Trusted home-care professionals supporting independence and dignity.</p>
    </div>
    
      
    <div class="card-hover bg-white border border-line rounded-2xl p-7 reveal">
      <div class="h-12 w-12 rounded-xl bg-emerald-50 text-green-care grid place-items-center mb-5"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg></div>
      <h3 class="text-lg font-bold text-navy mb-2">Training & Compliance</h3>
      <p class="text-slate-600 text-sm leading-relaxed">Mandatory training, safeguarding and ongoing CPD support.</p>
    </div>
    
    </div>
  </div>
</section>

<section class="py-20 bg-cloud">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-8">
    <div class="bg-white rounded-3xl p-8 lg:p-10 shadow-card reveal border border-line">
      <span class="chip">For Employers</span>
      <h3 class="mt-4 text-2xl md:text-3xl font-extrabold text-navy">Reliable Healthcare Staff When You Need Them Most</h3>
      <p class="mt-3 text-slate-600">We help care homes, hospitals, clinics and healthcare organisations fill staffing gaps with carefully screened professionals.</p>
      <ul class="mt-6 space-y-3"><li class="flex items-start gap-3"><span class="text-teal mt-1">✓</span><span class="text-slate-700 text-sm"><b class="text-navy">Fast response.</b> Urgent shifts covered around the clock.</span></li><li class="flex items-start gap-3"><span class="text-teal mt-1">✓</span><span class="text-slate-700 text-sm"><b class="text-navy">Vetted candidates.</b> Pre-screened, qualified and references verified.</span></li><li class="flex items-start gap-3"><span class="text-teal mt-1">✓</span><span class="text-slate-700 text-sm"><b class="text-navy">DBS & RTW checks.</b> Full compliance documentation provided.</span></li><li class="flex items-start gap-3"><span class="text-teal mt-1">✓</span><span class="text-slate-700 text-sm"><b class="text-navy">Flexible staffing.</b> Temporary, contract and permanent solutions.</span></li><li class="flex items-start gap-3"><span class="text-teal mt-1">✓</span><span class="text-slate-700 text-sm"><b class="text-navy">Sector expertise.</b> Care homes, hospitals, clinics & community.</span></li></ul>
      <a href="employers.php" class="inline-flex mt-7 btn-navy px-6 py-3 rounded-full font-bold text-sm">Request Staff →</a>
    </div>
    <div class="bg-navy text-white rounded-3xl p-8 lg:p-10 shadow-card reveal relative overflow-hidden">
      <div class="absolute top-0 right-0 h-40 w-40 bg-gold/20 rounded-full blur-3xl"></div>
      <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-teal-50 text-xs font-bold">For Job Seekers</span>
      <h3 class="mt-4 text-2xl md:text-3xl font-extrabold">Find Meaningful Healthcare Work That Fits Your Life</h3>
      <p class="mt-3 text-slate-300">Discover flexible shifts, full-time roles, part-time roles, and long-term career opportunities across the UK.</p>
      <ul class="mt-6 space-y-3"><li class="flex items-start gap-3"><span class="text-gold mt-1">★</span><span class="text-slate-200 text-sm"><b class="text-white">Flexible shifts.</b> Choose hours that fit your lifestyle.</span></li><li class="flex items-start gap-3"><span class="text-gold mt-1">★</span><span class="text-slate-200 text-sm"><b class="text-white">Career guidance.</b> Personalised support from our consultants.</span></li><li class="flex items-start gap-3"><span class="text-gold mt-1">★</span><span class="text-slate-200 text-sm"><b class="text-white">Training support.</b> Access to mandatory and specialist training.</span></li><li class="flex items-start gap-3"><span class="text-gold mt-1">★</span><span class="text-slate-200 text-sm"><b class="text-white">Fair opportunities.</b> Equal access for all qualified professionals.</span></li><li class="flex items-start gap-3"><span class="text-gold mt-1">★</span><span class="text-slate-200 text-sm"><b class="text-white">Supportive team.</b> Real people who care about your career.</span></li></ul>
      <a href="jobs.php" class="inline-flex mt-7 btn-primary px-6 py-3 rounded-full font-bold text-sm">View Jobs →</a>
    </div>
  </div>
</section>

<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="max-w-3xl mx-auto text-center mb-14 reveal">
      <span class="chip">Our Process</span>
      <h2 class="mt-4 text-3xl md:text-5xl font-extrabold text-navy">A Simple, Trusted Recruitment Journey</h2>
      <p class="mt-4 text-slate-600 text-lg leading-relaxed">Four clear steps from first contact to placement and ongoing support.</p>
    </div>
    
    <div class="grid md:grid-cols-4 gap-6">

      <div class="reveal relative bg-cloud border border-line rounded-2xl p-6 card-hover">
        <div class="absolute -top-4 left-6 h-10 w-10 rounded-xl btn-primary grid place-items-center font-extrabold text-navy">1</div>
        <h4 class="mt-4 font-bold text-navy">Enquiry or Application</h4>
        <p class="mt-2 text-sm text-slate-600">Reach out — whether you're hiring or seeking a role.</p>
      </div>

      <div class="reveal relative bg-cloud border border-line rounded-2xl p-6 card-hover">
        <div class="absolute -top-4 left-6 h-10 w-10 rounded-xl btn-primary grid place-items-center font-extrabold text-navy">2</div>
        <h4 class="mt-4 font-bold text-navy">Screening & Compliance</h4>
        <p class="mt-2 text-sm text-slate-600">Thorough checks: DBS, RTW, references, qualifications.</p>
      </div>

      <div class="reveal relative bg-cloud border border-line rounded-2xl p-6 card-hover">
        <div class="absolute -top-4 left-6 h-10 w-10 rounded-xl btn-primary grid place-items-center font-extrabold text-navy">3</div>
        <h4 class="mt-4 font-bold text-navy">Matching</h4>
        <p class="mt-2 text-sm text-slate-600">Pairing the right people with the right roles.</p>
      </div>

      <div class="reveal relative bg-cloud border border-line rounded-2xl p-6 card-hover">
        <div class="absolute -top-4 left-6 h-10 w-10 rounded-xl btn-primary grid place-items-center font-extrabold text-navy">4</div>
        <h4 class="mt-4 font-bold text-navy">Placement & Support</h4>
        <p class="mt-2 text-sm text-slate-600">Ongoing care for both employer and professional.</p>
      </div>

    </div>
  </div>
</section>

<section class="py-24 bg-cloud">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="max-w-3xl mx-auto text-center mb-14 reveal">
      <span class="chip">Featured Roles</span>
      <h2 class="mt-4 text-3xl md:text-5xl font-extrabold text-navy">Healthcare Job Categories We Cover</h2>
      <p class="mt-4 text-slate-600 text-lg leading-relaxed">Explore the most in-demand roles we place every week.</p>
    </div>
    
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">

      <a href="jobs.php" class="group card-hover bg-white rounded-2xl p-6 border border-line reveal block">
        <div class="h-11 w-11 rounded-xl bg-teal-50 text-teal grid place-items-center mb-4 group-hover:bg-teal group-hover:text-white transition"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></div>
        <div class="font-bold text-navy">Registered Nurses</div>
        <div class="text-xs text-slate-500 mt-1">48 open roles</div>
      </a>

      <a href="jobs.php" class="group card-hover bg-white rounded-2xl p-6 border border-line reveal block">
        <div class="h-11 w-11 rounded-xl bg-teal-50 text-teal grid place-items-center mb-4 group-hover:bg-teal group-hover:text-white transition"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <div class="font-bold text-navy">Healthcare Assistants</div>
        <div class="text-xs text-slate-500 mt-1">112 open roles</div>
      </a>

      <a href="jobs.php" class="group card-hover bg-white rounded-2xl p-6 border border-line reveal block">
        <div class="h-11 w-11 rounded-xl bg-teal-50 text-teal grid place-items-center mb-4 group-hover:bg-teal group-hover:text-white transition"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div class="font-bold text-navy">Support Workers</div>
        <div class="text-xs text-slate-500 mt-1">76 open roles</div>
      </a>

      <a href="jobs.php" class="group card-hover bg-white rounded-2xl p-6 border border-line reveal block">
        <div class="h-11 w-11 rounded-xl bg-teal-50 text-teal grid place-items-center mb-4 group-hover:bg-teal group-hover:text-white transition"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <div class="font-bold text-navy">Live-in Carers</div>
        <div class="text-xs text-slate-500 mt-1">34 open roles</div>
      </a>

      <a href="jobs.php" class="group card-hover bg-white rounded-2xl p-6 border border-line reveal block">
        <div class="h-11 w-11 rounded-xl bg-teal-50 text-teal grid place-items-center mb-4 group-hover:bg-teal group-hover:text-white transition"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></div>
        <div class="font-bold text-navy">Care Assistants</div>
        <div class="text-xs text-slate-500 mt-1">89 open roles</div>
      </a>

      <a href="jobs.php" class="group card-hover bg-white rounded-2xl p-6 border border-line reveal block">
        <div class="h-11 w-11 rounded-xl bg-teal-50 text-teal grid place-items-center mb-4 group-hover:bg-teal group-hover:text-white transition"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <div class="font-bold text-navy">Domiciliary Care Workers</div>
        <div class="text-xs text-slate-500 mt-1">52 open roles</div>
      </a>

      <a href="jobs.php" class="group card-hover bg-white rounded-2xl p-6 border border-line reveal block">
        <div class="h-11 w-11 rounded-xl bg-teal-50 text-teal grid place-items-center mb-4 group-hover:bg-teal group-hover:text-white transition"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg></div>
        <div class="font-bold text-navy">Care Home Staff</div>
        <div class="text-xs text-slate-500 mt-1">65 open roles</div>
      </a>

      <a href="jobs.php" class="group card-hover bg-white rounded-2xl p-6 border border-line reveal block">
        <div class="h-11 w-11 rounded-xl bg-teal-50 text-teal grid place-items-center mb-4 group-hover:bg-teal group-hover:text-white transition"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15 8.5 22 9.3 17 14.1 18.2 21 12 17.8 5.8 21 7 14.1 2 9.3 9 8.5 12 2"/></svg></div>
        <div class="font-bold text-navy">Specialist Nurses</div>
        <div class="text-xs text-slate-500 mt-1">21 open roles</div>
      </a>

    </div>
  </div>
</section>

<section class="py-24 bg-navy text-white relative overflow-hidden">
  <div class="absolute top-20 right-0 h-72 w-72 bg-teal/20 rounded-full blur-3xl"></div>
  <div class="absolute bottom-0 left-0 h-72 w-72 bg-gold/10 rounded-full blur-3xl"></div>
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto text-center mb-14 reveal">
      <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-teal-50 text-xs font-bold">Why Choose Us</span>
      <h2 class="mt-4 text-3xl md:text-5xl font-extrabold">Healthcare Recruitment Done The Right Way</h2>
      <p class="mt-4 text-slate-300 text-lg">Six promises we keep to every client and candidate we serve.</p>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

      <div class="reveal bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-7 hover:bg-white/10 transition">
        <div class="h-12 w-12 rounded-xl bg-gold/20 text-gold grid place-items-center mb-4"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></div>
        <h4 class="font-bold text-white">Compassionate Approach</h4>
        <p class="mt-2 text-sm text-slate-300">People come first — always.</p>
      </div>

      <div class="reveal bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-7 hover:bg-white/10 transition">
        <div class="h-12 w-12 rounded-xl bg-gold/20 text-gold grid place-items-center mb-4"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <h4 class="font-bold text-white">Trusted Healthcare Network</h4>
        <p class="mt-2 text-sm text-slate-300">A community of verified professionals.</p>
      </div>

      <div class="reveal bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-7 hover:bg-white/10 transition">
        <div class="h-12 w-12 rounded-xl bg-gold/20 text-gold grid place-items-center mb-4"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <h4 class="font-bold text-white">Compliance-First Recruitment</h4>
        <p class="mt-2 text-sm text-slate-300">No shortcuts on safety or standards.</p>
      </div>

      <div class="reveal bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-7 hover:bg-white/10 transition">
        <div class="h-12 w-12 rounded-xl bg-gold/20 text-gold grid place-items-center mb-4"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
        <h4 class="font-bold text-white">Fast & Reliable Staffing</h4>
        <p class="mt-2 text-sm text-slate-300">Cover when you need it, where you need it.</p>
      </div>

      <div class="reveal bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-7 hover:bg-white/10 transition">
        <div class="h-12 w-12 rounded-xl bg-gold/20 text-gold grid place-items-center mb-4"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15 8.5 22 9.3 17 14.1 18.2 21 12 17.8 5.8 21 7 14.1 2 9.3 9 8.5 12 2"/></svg></div>
        <h4 class="font-bold text-white">Professional Support</h4>
        <p class="mt-2 text-sm text-slate-300">Expert consultants by your side.</p>
      </div>

      <div class="reveal bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-7 hover:bg-white/10 transition">
        <div class="h-12 w-12 rounded-xl bg-gold/20 text-gold grid place-items-center mb-4"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg></div>
        <h4 class="font-bold text-white">People-First Service</h4>
        <p class="mt-2 text-sm text-slate-300">Care that goes beyond placements.</p>
      </div>

    </div>
  </div>
</section>

<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="max-w-3xl mx-auto text-center mb-14 reveal">
      <span class="chip">Testimonials</span>
      <h2 class="mt-4 text-3xl md:text-5xl font-extrabold text-navy">What Our Partners Say</h2>
      <p class="mt-4 text-slate-600 text-lg leading-relaxed">Real words from healthcare leaders and professionals we've supported.</p>
    </div>
    
    <div class="grid md:grid-cols-3 gap-6">

      <div class="reveal card-hover bg-cloud rounded-2xl p-7 border border-line">
        <div class="flex gap-1 text-gold mb-4">★★★★★</div>
        <p class="text-slate-700 leading-relaxed italic">"Helping Hands have transformed how we manage staffing. Their team is responsive, reliable and the carers they send are always professional."</p>
        <div class="mt-6 flex items-center gap-3 pt-5 border-t border-line">
          <div class="h-11 w-11 rounded-full bg-gradient-to-br from-teal to-navy text-white grid place-items-center font-bold">S</div>
          <div>
            <div class="font-bold text-navy text-sm">Sarah Mitchell</div>
            <div class="text-xs text-slate-500">Care Home Manager, Manchester</div>
          </div>
        </div>
      </div>

      <div class="reveal card-hover bg-cloud rounded-2xl p-7 border border-line">
        <div class="flex gap-1 text-gold mb-4">★★★★★</div>
        <p class="text-slate-700 leading-relaxed italic">"I've found stable, flexible work that fits around my family. The consultants genuinely listen and support my career goals."</p>
        <div class="mt-6 flex items-center gap-3 pt-5 border-t border-line">
          <div class="h-11 w-11 rounded-full bg-gradient-to-br from-teal to-navy text-white grid place-items-center font-bold">D</div>
          <div>
            <div class="font-bold text-navy text-sm">David O'Connor</div>
            <div class="text-xs text-slate-500">Healthcare Assistant, Birmingham</div>
          </div>
        </div>
      </div>

      <div class="reveal card-hover bg-cloud rounded-2xl p-7 border border-line">
        <div class="flex gap-1 text-gold mb-4">★★★★★</div>
        <p class="text-slate-700 leading-relaxed italic">"Compliance is faultless, communication is excellent, and the calibre of nursing staff is exactly what our trust needs."</p>
        <div class="mt-6 flex items-center gap-3 pt-5 border-t border-line">
          <div class="h-11 w-11 rounded-full bg-gradient-to-br from-teal to-navy text-white grid place-items-center font-bold">A</div>
          <div>
            <div class="font-bold text-navy text-sm">Aisha Patel</div>
            <div class="text-xs text-slate-500">Registered Nurse / Lead, London</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="py-20 bg-cloud">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="reveal relative overflow-hidden bg-gradient-to-br from-navy to-teal rounded-[2rem] p-10 md:p-14 text-center text-white shadow-soft">
      <div class="absolute -top-10 -right-10 h-60 w-60 bg-gold/30 rounded-full blur-3xl"></div>
      <h2 class="text-3xl md:text-5xl font-extrabold leading-tight">Ready to Hire Trusted Healthcare Staff or Start Your Healthcare Career?</h2>
      <p class="mt-5 text-slate-200 max-w-2xl mx-auto">Whether you're a healthcare provider or a care professional — we're here to help you take the next step.</p>
      <div class="mt-8 flex flex-wrap justify-center gap-3">
        <a href="contact.php" class="btn-primary px-7 py-3.5 rounded-full font-bold text-sm">Contact Us</a>
        <a href="jobs.php" class="bg-white text-navy px-7 py-3.5 rounded-full font-bold text-sm hover:bg-cloud">Browse Jobs</a>
      </div>
    </div>
  </div>
</section>

<footer class="bg-navy text-slate-300 mt-24">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 grid md:grid-cols-4 gap-10">
    <div>
      <div class="flex items-center gap-3 mb-4">
        <div class="h-10 w-10 rounded-xl bg-gradient-to-br from-teal to-gold grid place-items-center text-white font-bold">HH</div>
        <div class="leading-tight">
          <div class="font-display font-extrabold text-white">Helping Hands</div>
          <div class="text-[11px] tracking-[0.18em] text-teal-50/80 uppercase">Health Group</div>
        </div>
      </div>
      <p class="text-sm leading-relaxed text-slate-400">Compassionate healthcare staffing and support across the UK. Connecting trusted providers with skilled, compliant professionals.</p>
      <div class="flex gap-3 mt-5">
        <a href="#" class="h-9 w-9 rounded-full bg-white/10 hover:bg-teal grid place-items-center transition"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M22 12a10 10 0 1 0-11.6 9.9v-7H8v-2.9h2.4V9.8c0-2.4 1.4-3.7 3.6-3.7 1 0 2.1.2 2.1.2v2.3h-1.2c-1.2 0-1.5.7-1.5 1.5v1.8h2.6L15.6 15h-2.2v7A10 10 0 0 0 22 12z"/></svg></a>
        <a href="#" class="h-9 w-9 rounded-full bg-white/10 hover:bg-teal grid place-items-center transition"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zM8.3 18.3H5.7V9.7h2.6v8.6zM7 8.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm11.3 9.8h-2.6v-4.6c0-1.1-.4-1.8-1.4-1.8-.8 0-1.2.5-1.4 1-.1.2-.1.4-.1.7v4.7h-2.6V9.7h2.6v1.1c.3-.5 1-1.3 2.4-1.3 1.8 0 3.1 1.1 3.1 3.6v5.2z"/></svg></a>
        <a href="#" class="h-9 w-9 rounded-full bg-white/10 hover:bg-teal grid place-items-center transition"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53A4.48 4.48 0 0 0 12 8.5v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5 0-.28 0-.55-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg></a>
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
        <li class="flex gap-3"><span class="text-teal">✉</span> hello@helpinghandshealthgroup.co.uk</li>
        <li class="flex gap-3"><span class="text-teal">☏</span> +44 (0) 20 0000 0000</li>
        <li class="flex gap-3"><span class="text-teal">⌂</span> London, United Kingdom</li>
      </ul>
    </div>
  </div>
  <div class="border-t border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex flex-col md:flex-row items-center justify-between gap-3">
      <p class="text-xs text-slate-500">© <?php echo date("Y"); ?> Helping Hands Health Group. All rights reserved.</p>
      <div class="flex gap-5 text-xs text-slate-500">
        <a href="#" class="hover:text-teal">Privacy</a><a href="#" class="hover:text-teal">Terms</a><a href="#" class="hover:text-teal">Cookies</a>
      </div>
    </div>
  </div>
</footer>
<script>
  const btn=document.getElementById('menuBtn'), m=document.getElementById('mobileNav');
  if(btn) btn.addEventListener('click',()=>m.classList.toggle('hidden'));
  const io=new IntersectionObserver(es=>es.forEach(e=>{if(e.isIntersecting){e.target.classList.add('in');io.unobserve(e.target);}}),{threshold:.12});
  document.querySelectorAll('.reveal').forEach(el=>io.observe(el));
</script>
</body></html>
