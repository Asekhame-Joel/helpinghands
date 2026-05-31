<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Training &amp; Compliance — Helping Hands Health Group</title>
  <meta name="description"
    content="DBS checks, right-to-work, mandatory healthcare training, safeguarding and continuous professional development." />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = { theme: { extend: { fontFamily: { sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'], display: ['Plus Jakarta Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'] }, colors: { background: 'var(--background)', foreground: 'var(--foreground)', card: 'var(--card)', border: 'var(--border)', input: 'var(--input)', ring: 'var(--ring)', primary: { DEFAULT: 'var(--primary)', foreground: 'var(--primary-foreground)' }, secondary: { DEFAULT: 'var(--secondary)', foreground: 'var(--secondary-foreground)' }, muted: { DEFAULT: 'var(--muted)', foreground: 'var(--muted-foreground)' }, accent: { DEFAULT: 'var(--accent)', foreground: 'var(--accent-foreground)' }, 'brand-navy': 'var(--brand-navy)', 'brand-teal': 'var(--brand-teal)', 'brand-green': 'var(--brand-green)', 'brand-gold': { DEFAULT: 'var(--brand-gold)', foreground: 'var(--brand-gold-foreground)' }, 'brand-sky': 'var(--brand-sky)' }, boxShadow: { card: 'var(--shadow-card)', soft: 'var(--shadow-soft)' }, backgroundImage: { 'gradient-hero': 'var(--gradient-hero)', 'gradient-soft': 'var(--gradient-soft)' }, borderRadius: { '2xl': 'calc(var(--radius) + 8px)', '3xl': 'calc(var(--radius) + 12px)' } } } };
  </script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap');

    :root {
      --radius: 1rem;
      --background: #ffffff;
      --foreground: #1e293b;
      --card: #ffffff;
      --primary: #0B1F3A;
      --primary-foreground: #ffffff;
      --secondary: #eef6fb;
      --secondary-foreground: #0B1F3A;
      --muted: #f8fafc;
      --muted-foreground: #64748b;
      --accent: #0E8F8F;
      --accent-foreground: #ffffff;
      --brand-navy: #0B1F3A;
      --brand-teal: #0E8F8F;
      --brand-green: #1F9D55;
      --brand-gold: #F5A623;
      --brand-gold-foreground: #0B1F3A;
      --brand-sky: #edf8fb;
      --border: #e2e8f0;
      --input: #e2e8f0;
      --ring: #0E8F8F;
      --gradient-hero: linear-gradient(135deg, #0B1F3A 0%, #123765 55%, #0E8F8F 100%);
      --gradient-soft: linear-gradient(180deg, #ffffff 0%, #edf8fb 100%);
      --shadow-card: 0 12px 40px -16px rgba(11, 31, 58, .24);
      --shadow-soft: 0 6px 24px -10px rgba(11, 31, 58, .16)
    }

    * {
      border-color: var(--border)
    }

    body {
      background: var(--background);
      color: var(--foreground);
      font-family: Inter, ui-sans-serif, system-ui, sans-serif;
      -webkit-font-smoothing: antialiased
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Plus Jakarta Sans', Inter, ui-sans-serif, system-ui, sans-serif;
      letter-spacing: -.02em;
      color: var(--primary)
    }

    .animate-fade-up {
      animation: fade-up .7s ease-out both
    }

    .animate-fade-in {
      animation: fade-in .6s ease-out both
    }

    @keyframes fade-up {
      from {
        opacity: 0;
        transform: translateY(20px)
      }

      to {
        opacity: 1;
        transform: translateY(0)
      }
    }

    @keyframes fade-in {
      from {
        opacity: 0
      }

      to {
        opacity: 1
      }
    }
  </style>
</head>

<body>
  <header id="site-header"
    class="sticky top-0 z-50 w-full transition-all duration-300 bg-background/85 backdrop-blur-lg border-b border-border shadow-soft">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-20 items-center justify-between py-3">
        <a href="index.php" class="flex items-center gap-2.5 group">
          <span
            class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary transition-transform group-hover:scale-105 shadow-soft"><svg
              class="h-5 w-5 text-primary-foreground" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path
                d="M19 14c1.5-1.5 3-3.4 3-5.6A5.4 5.4 0 0 0 12.6 4L12 4.6 11.4 4A5.4 5.4 0 0 0 2 8.4C2 13 7.5 16.8 12 21c1.1-1 2.3-2 3.4-3" />
              <path d="M3 13h4l2-5 4 10 2-5h6" />
            </svg></span>
          <span class="flex flex-col leading-none"><span class="font-display font-bold text-base text-primary">Helping
              Hands</span><span class="text-[11px] font-medium tracking-wider uppercase text-muted-foreground">Health
              Group</span></span>
        </a>
        <nav class="hidden lg:flex items-center gap-1"><a href="index.html"
            class="rounded-full px-3.5 py-2 text-sm font-medium transition-colors hover:text-primary hover:bg-secondary text-muted-foreground">Home</a><a
            href="about.html"
            class="rounded-full px-3.5 py-2 text-sm font-medium transition-colors hover:text-primary hover:bg-secondary text-muted-foreground">About</a><a
            href="employers.html"
            class="rounded-full px-3.5 py-2 text-sm font-medium transition-colors hover:text-primary hover:bg-secondary text-muted-foreground">Employers</a><a
            href="job-seekers.html"
            class="rounded-full px-3.5 py-2 text-sm font-medium transition-colors hover:text-primary hover:bg-secondary text-muted-foreground">Job
            Seekers</a><a href="services.html"
            class="rounded-full px-3.5 py-2 text-sm font-medium transition-colors hover:text-primary hover:bg-secondary text-muted-foreground">Services</a><a
            href="jobs.html"
            class="rounded-full px-3.5 py-2 text-sm font-medium transition-colors hover:text-primary hover:bg-secondary text-muted-foreground">Jobs</a><a
            href="training.html"
            class="rounded-full px-3.5 py-2 text-sm font-medium transition-colors hover:text-primary hover:bg-secondary text-primary bg-secondary">Training</a><a
            href="contact.html"
            class="rounded-full px-3.5 py-2 text-sm font-medium transition-colors hover:text-primary hover:bg-secondary text-muted-foreground">Contact</a>
        </nav>
        <div class="flex items-center gap-2">
          <a href="contact.php"
            class="hidden sm:inline-flex items-center gap-2 rounded-full bg-brand-gold px-5 py-2.5 text-sm font-semibold text-brand-gold-foreground transition-all hover:brightness-95 hover:shadow-soft hover:-translate-y-0.5">Get
            Started <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M5 12h14" />
              <path d="m12 5 7 7-7 7" />
            </svg></a>
          <button id="menu-toggle"
            class="lg:hidden inline-flex h-10 w-10 items-center justify-center rounded-full border border-border"
            aria-label="Menu"><svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M4 6h16M4 12h16M4 18h16" />
            </svg></button>
        </div>
      </div>
      <div id="mobile-menu" class="lg:hidden hidden pb-4 animate-fade-in">
        <div class="grid gap-1 rounded-2xl border border-border bg-card p-3 shadow-card"><a href="index.html"
            class="rounded-xl px-4 py-3 text-sm font-medium hover:bg-secondary hover:text-primary text-muted-foreground">Home</a><a
            href="about.html"
            class="rounded-xl px-4 py-3 text-sm font-medium hover:bg-secondary hover:text-primary text-muted-foreground">About</a><a
            href="employers.html"
            class="rounded-xl px-4 py-3 text-sm font-medium hover:bg-secondary hover:text-primary text-muted-foreground">Employers</a><a
            href="job-seekers.html"
            class="rounded-xl px-4 py-3 text-sm font-medium hover:bg-secondary hover:text-primary text-muted-foreground">Job
            Seekers</a><a href="services.html"
            class="rounded-xl px-4 py-3 text-sm font-medium hover:bg-secondary hover:text-primary text-muted-foreground">Services</a><a
            href="jobs.html"
            class="rounded-xl px-4 py-3 text-sm font-medium hover:bg-secondary hover:text-primary text-muted-foreground">Jobs</a><a
            href="training.html"
            class="rounded-xl px-4 py-3 text-sm font-medium hover:bg-secondary hover:text-primary text-primary bg-secondary">Training</a><a
            href="contact.html"
            class="rounded-xl px-4 py-3 text-sm font-medium hover:bg-secondary hover:text-primary text-muted-foreground">Contact</a>
          <a href="contact.php"
            class="mt-1 inline-flex items-center justify-center gap-2 rounded-xl bg-brand-gold px-4 py-3 text-sm font-semibold text-brand-gold-foreground">Get
            Started <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M5 12h14" />
              <path d="m12 5 7 7-7 7" />
            </svg></a>
        </div>
      </div>
    </div>
  </header>
  <main>
    <section class="relative overflow-hidden bg-gradient-hero text-white">
      <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_30%_20%,white,transparent_40%)]"></div>
      <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-20 md:py-28">
        <div class="grid gap-10 lg:grid-cols-2 lg:items-center">
          <div class="space-y-5 animate-fade-up">
            <nav class="flex items-center gap-1.5 text-sm text-white/70"><a href="index.html"
                class="hover:text-white">Home</a><svg class="h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" aria-hidden="true">
                <path d="m9 18 6-6-6-6" />
              </svg><span class="text-white">Training &amp; Compliance</span></nav>
            <span
              class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/5 px-3.5 py-1 text-xs font-semibold uppercase tracking-wider text-white/80"><span
                class="h-1.5 w-1.5 rounded-full bg-brand-teal"></span>Training &amp; Compliance</span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold !text-white leading-[1.05]">Compliance-first,
              training-led recruitment.</h1>
            <p class="text-lg text-white/80 max-w-xl leading-relaxed">Every candidate is fully vetted, fully trained and
              fully supported — so you can focus on delivering exceptional care.</p>
          </div>
          <div class="relative animate-fade-up [animation-delay:120ms]">
            <div class="absolute -inset-4 rounded-3xl bg-brand-teal/20 blur-2xl"></div><img src="assets/training.jpg"
              alt="" loading="lazy" class="relative rounded-3xl shadow-card object-cover w-full aspect-[4/3]" />
          </div>
        </div>
      </div>
    </section>
    <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-20 md:py-28">
      <div class="text-center mx-auto max-w-3xl space-y-4"><span
          class="inline-flex items-center gap-2 rounded-full border px-3.5 py-1 text-xs font-semibold uppercase tracking-wider border-brand-teal/20 text-brand-teal bg-brand-teal/5"><span
            class="h-1.5 w-1.5 rounded-full bg-brand-teal"></span>Our standards</span>
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold ">Rigorous checks. Comprehensive training.</h2>
      </div>
      <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
        <div
          class=" rounded-3xl border border-border bg-card p-7 hover:shadow-card hover:-translate-y-1 transition-all">
          <span
            class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-green/10 text-brand-green"><svg
              class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10" />
              <path d="m9 12 2 2 4-5" />
            </svg></span>
          <h3 class="mt-5 text-lg font-bold">Enhanced DBS Checks</h3>
          <p class="mt-2 text-sm text-muted-foreground leading-relaxed">Every candidate completes an enhanced Disclosure
            &amp; Barring Service check before placement.</p>
        </div>
        <div
          class=" rounded-3xl border border-border bg-card p-7 hover:shadow-card hover:-translate-y-1 transition-all">
          <span
            class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-green/10 text-brand-green"><svg
              class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
              <circle cx="9" cy="7" r="4" />
              <path d="m16 11 2 2 4-4" />
            </svg></span>
          <h3 class="mt-5 text-lg font-bold">Right to Work Checks</h3>
          <p class="mt-2 text-sm text-muted-foreground leading-relaxed">We verify right-to-work documentation in line
            with UK Home Office guidance.</p>
        </div>
        <div
          class=" rounded-3xl border border-border bg-card p-7 hover:shadow-card hover:-translate-y-1 transition-all">
          <span
            class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-green/10 text-brand-green"><svg
              class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8Z" />
              <path d="M14 2v6h6" />
              <path d="m9 15 2 2 4-5" />
            </svg></span>
          <h3 class="mt-5 text-lg font-bold">Reference Checks</h3>
          <p class="mt-2 text-sm text-muted-foreground leading-relaxed">Minimum of two professional references with
            employment-history verification.</p>
        </div>
        <div
          class=" rounded-3xl border border-border bg-card p-7 hover:shadow-card hover:-translate-y-1 transition-all">
          <span
            class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-green/10 text-brand-green"><svg
              class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M22 10 12 5 2 10l10 5 10-5Z" />
              <path d="M6 12v5c3 2 9 2 12 0v-5" />
              <path d="M22 10v6" />
            </svg></span>
          <h3 class="mt-5 text-lg font-bold">Mandatory Healthcare Training</h3>
          <p class="mt-2 text-sm text-muted-foreground leading-relaxed">Care Certificate, manual handling, infection
            control, first aid and more.</p>
        </div>
        <div
          class=" rounded-3xl border border-border bg-card p-7 hover:shadow-card hover:-translate-y-1 transition-all">
          <span
            class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-green/10 text-brand-green"><svg
              class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <circle cx="12" cy="12" r="10" />
              <path d="M12 8v4" />
              <path d="M12 16h.01" />
            </svg></span>
          <h3 class="mt-5 text-lg font-bold">Safeguarding Awareness</h3>
          <p class="mt-2 text-sm text-muted-foreground leading-relaxed">Adult and child safeguarding training updated
            annually for every active candidate.</p>
        </div>
        <div
          class=" rounded-3xl border border-border bg-card p-7 hover:shadow-card hover:-translate-y-1 transition-all">
          <span
            class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-green/10 text-brand-green"><svg
              class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="m3 17 6-6 4 4 8-8" />
              <path d="M14 7h7v7" />
            </svg></span>
          <h3 class="mt-5 text-lg font-bold">Ongoing Professional Development</h3>
          <p class="mt-2 text-sm text-muted-foreground leading-relaxed">Free CPD modules, specialism upskilling and
            clinical refresher courses.</p>
        </div>
        <div
          class=" rounded-3xl border border-border bg-card p-7 hover:shadow-card hover:-translate-y-1 transition-all">
          <span
            class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-green/10 text-brand-green"><svg
              class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M3 7a2 2 0 0 1 2-2h5l2 2h7a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Z" />
              <path d="m9 14 2 2 4-5" />
            </svg></span>
          <h3 class="mt-5 text-lg font-bold">Compliance Documentation</h3>
          <p class="mt-2 text-sm text-muted-foreground leading-relaxed">Full audit-ready compliance packs available on
            request for every placement.</p>
        </div>
      </div>
    </section>
    <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 md:py-24">
      <div class="relative overflow-hidden rounded-3xl bg-gradient-hero p-10 md:p-16 text-white shadow-card">
        <div class="absolute -right-20 -top-20 h-72 w-72 rounded-full bg-brand-teal/30 blur-3xl"></div>
        <div class="absolute -left-10 -bottom-10 h-60 w-60 rounded-full bg-brand-gold/20 blur-3xl"></div>
        <div class="relative grid gap-8 lg:grid-cols-[1.4fr_1fr] lg:items-center">
          <div class="space-y-4">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold !text-white max-w-2xl leading-tight">Ready to hire
              trusted healthcare staff or start your healthcare career?</h2>
            <p class="text-white/75 max-w-xl">Whether you need dependable staff for tomorrow's shift or you're looking
              for your next rewarding role — our team is ready to help.</p>
          </div>
          <div class="flex flex-col sm:flex-row lg:flex-col gap-3"><a href="contact.html"
              class="inline-flex items-center justify-center gap-2 rounded-full bg-brand-gold px-6 py-3.5 font-semibold text-brand-gold-foreground hover:brightness-95 transition-all">Contact
              Us <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                aria-hidden="true">
                <path d="M5 12h14" />
                <path d="m12 5 7 7-7 7" />
              </svg></a><a href="jobs.html"
              class="inline-flex items-center justify-center gap-2 rounded-full bg-white/10 border border-white/20 px-6 py-3.5 font-semibold text-white hover:bg-white/15 transition-all"><svg
                class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M10 6V5a2 2 0 0 1 2-2h0a2 2 0 0 1 2 2v1" />
                <rect x="3" y="6" width="18" height="14" rx="2" />
                <path d="M3 12h18" />
              </svg> Browse Jobs</a></div>
        </div>
      </div>
    </section>
  </main>
  <footer class="relative mt-24 bg-primary text-primary-foreground">
    <div class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-brand-teal to-transparent"></div>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
      <div class="grid gap-12 lg:grid-cols-12">
        <div class="lg:col-span-4 space-y-5"><a href="index.html" class="flex items-center gap-2.5 group">
            <span
              class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/10 transition-transform group-hover:scale-105 shadow-soft"><svg
                class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                aria-hidden="true">
                <path
                  d="M19 14c1.5-1.5 3-3.4 3-5.6A5.4 5.4 0 0 0 12.6 4L12 4.6 11.4 4A5.4 5.4 0 0 0 2 8.4C2 13 7.5 16.8 12 21c1.1-1 2.3-2 3.4-3" />
                <path d="M3 13h4l2-5 4 10 2-5h6" />
              </svg></span>
            <span class="flex flex-col leading-none"><span class="font-display font-bold text-base text-white">Helping
                Hands</span><span class="text-[11px] font-medium tracking-wider uppercase text-white/70">Health
                Group</span></span>
          </a>
          <p class="text-sm text-white/70 leading-relaxed max-w-sm">Helping Hands Health Group connects compassionate
            healthcare professionals with trusted care providers across the United Kingdom — built on trust, compliance
            and human connection.</p>
          <div class="flex gap-3 pt-1"><a href="#"
              class="flex h-10 w-10 items-center justify-center rounded-full bg-white/10 hover:bg-brand-teal transition-colors"
              aria-label="Social link"><svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                aria-hidden="true">
                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3Z" />
              </svg></a><a href="#"
              class="flex h-10 w-10 items-center justify-center rounded-full bg-white/10 hover:bg-brand-teal transition-colors"
              aria-label="Social link"><svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                aria-hidden="true">
                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-4 0v7h-4v-7a6 6 0 0 1 6-6Z" />
                <rect x="2" y="9" width="4" height="12" />
                <circle cx="4" cy="4" r="2" />
              </svg></a><a href="#"
              class="flex h-10 w-10 items-center justify-center rounded-full bg-white/10 hover:bg-brand-teal transition-colors"
              aria-label="Social link"><svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                aria-hidden="true">
                <path
                  d="M22 4.5c-.8.4-1.6.6-2.5.8a4.4 4.4 0 0 0-7.5 4v1A10.5 10.5 0 0 1 3 5s-4 9 5 13a11.6 11.6 0 0 1-7 2c9 5 20 0 20-11.5v-.5c.7-.5 1.3-1.1 2-1.8Z" />
              </svg></a><a href="#"
              class="flex h-10 w-10 items-center justify-center rounded-full bg-white/10 hover:bg-brand-teal transition-colors"
              aria-label="Social link"><svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                aria-hidden="true">
                <rect x="2" y="2" width="20" height="20" rx="5" />
                <circle cx="12" cy="12" r="4" />
                <path d="M17.5 6.5h.01" />
              </svg></a></div>
        </div>
        <div class="lg:col-span-2">
          <h4 class="text-white font-display font-semibold text-sm mb-4">Company</h4>
          <ul class="space-y-2.5 text-sm text-white/70">
            <li><a href="about.html" class="hover:text-white">About Us</a></li>
            <li><a href="services.html" class="hover:text-white">Services</a></li>
            <li><a href="training.html" class="hover:text-white">Training</a></li>
            <li><a href="contact.html" class="hover:text-white">Contact</a></li>
          </ul>
        </div>
        <div class="lg:col-span-3">
          <h4 class="text-white font-display font-semibold text-sm mb-4">Services</h4>
          <ul class="space-y-2.5 text-sm text-white/70">
            <li><a href="services.html" class="hover:text-white">Healthcare Staffing</a></li>
            <li><a href="services.html" class="hover:text-white">Nursing Recruitment</a></li>
            <li><a href="services.html" class="hover:text-white">Care Assistant Recruitment</a></li>
            <li><a href="services.html" class="hover:text-white">Domiciliary Care</a></li>
            <li><a href="training.html" class="hover:text-white">Compliance & Training</a></li>
          </ul>
        </div>
        <div class="lg:col-span-3">
          <h4 class="text-white font-display font-semibold text-sm mb-4">Get in touch</h4>
          <ul class="space-y-3 text-sm text-white/70">
            <li class="flex items-start gap-3"><svg class="h-4 w-4 mt-0.5 text-brand-teal"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <rect x="3" y="5" width="18" height="14" rx="2" />
                <path d="m3 7 9 6 9-6" />
              </svg><span>enquiries@helpinghandshealthgroup.co.uk</span></li>
            <li class="flex items-start gap-3"><svg class="h-4 w-4 mt-0.5 text-brand-teal"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path
                  d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.7.6 2.5a2 2 0 0 1-.5 2.1L8 9.5a16 16 0 0 0 6.5 6.5l1.2-1.2a2 2 0 0 1 2.1-.5c.8.3 1.6.5 2.5.6A2 2 0 0 1 22 16.9Z" />
              </svg><span>+44 (0) 20 1234 5678</span></li>
            <li class="flex items-start gap-3"><svg class="h-4 w-4 mt-0.5 text-brand-teal"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M20 10c0 4.4-8 12-8 12S4 14.4 4 10a8 8 0 1 1 16 0Z" />
                <circle cx="12" cy="10" r="3" />
              </svg><span>1 Healthcare Way, London, EC1A 1AA</span></li>
          </ul>
        </div>
      </div>
      <div
        class="mt-12 border-t border-white/10 pt-6 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-white/50">
        <p>© 2026 Helping Hands Health Group. All rights reserved.</p>
        <p>helpinghandshealthgroup.co.uk · Registered in England & Wales</p>
      </div>
    </div>
  </footer>
  <script>
    const menuButton = document.getElementById('menu-toggle'); const menu = document.getElementById('mobile-menu'); if (menuButton && menu) { menuButton.addEventListener('click', () => menu.classList.toggle('hidden')); }
    const empBtn = document.getElementById('tab-employer'), seekerBtn = document.getElementById('tab-seeker'), orgLabel = document.getElementById('org-label'), orgInput = document.getElementById('org-input');
    function setTab(which) { if (!empBtn || !seekerBtn) return; const active = 'bg-primary text-primary-foreground shadow-soft', inactive = 'text-muted-foreground'; if (which === 'employer') { empBtn.className = 'px-5 py-2 rounded-full text-sm font-semibold transition-all ' + active; seekerBtn.className = 'px-5 py-2 rounded-full text-sm font-semibold transition-all ' + inactive; if (orgLabel) orgLabel.textContent = 'Organisation'; if (orgInput) orgInput.placeholder = 'Care home or hospital'; } else { seekerBtn.className = 'px-5 py-2 rounded-full text-sm font-semibold transition-all ' + active; empBtn.className = 'px-5 py-2 rounded-full text-sm font-semibold transition-all ' + inactive; if (orgLabel) orgLabel.textContent = 'Role of interest'; if (orgInput) orgInput.placeholder = 'e.g. Healthcare Assistant'; } }
    if (empBtn) empBtn.addEventListener('click', () => setTab('employer')); if (seekerBtn) seekerBtn.addEventListener('click', () => setTab('seeker'));
  </script>
</body>

</html>